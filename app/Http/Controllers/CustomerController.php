<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Company;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::with('company')->paginate(15);
        $activeCustomers = Customer::active();
        $inactiveCustomers = Customer::inactive();
        $pendingCustomers = Customer::pending();
        return view('customer.index', compact('customers', 'activeCustomers', 'inactiveCustomers', 'pendingCustomers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customer = new Customer();
        $companies = Company::all();
        return view('customer.create', compact('customer', 'companies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(StoreCustomerRequest $request)
    public function store()
    {
        $customer = Customer::create($this->requestValidate());
        // Display the created customer record
        return redirect('customer.show', compact('customer'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }

    public function requestValidate()
    {
        return request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|min:10',
            'active' => 'required|min:1',
            'company_id' => 'required|min:1'
        ]);
    }
}
