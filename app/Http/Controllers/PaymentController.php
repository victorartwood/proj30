<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Customer;
use App\Models\Company;
use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = Payment::with('customer')->paginate(15);
        return view('payment.index', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $payment = new Payment();
        $customers = Customer::all();
        $companies = Company::all();
        return view('payment.create', compact('payment', 'customers', 'companies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(StorePaymentRequest $request)
    public function store()
    {
        $payment = Payment::create($this->requestValidate());
        return redirect(route('payment.show', [$payment]));
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        return view('payment.show', compact('payment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        $customers = Customer::all();
        return view('payment.edit', compact('payment', 'customers'));
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(UpdatePaymentRequest $request, Payment $payment)
    public function update(Payment $payment)
    {
        $payment->update($this->requestValidate());
        return redirect(route('payment.show', [$payment]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        $payment->delete();
        redirect(route('payment.index'));
    }

    public function requestValidate()
    {
        return request()->validate([
            'name' => 'required|min:3',
            'customer_id' => 'required|min:1',
            'company_id' => 'required|min:1',
            'service_id' => 'required|min:1',
            'from' => 'required|date',
            'to' => 'required|date',
            'amount' => 'required|min:1',
            'active' => 'required|min:1',
        ]);
    }
}
