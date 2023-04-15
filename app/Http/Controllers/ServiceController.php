<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Company;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::with('company')->paginate(15);
        return view('service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $service = new Service();
        $companies = Company::all();
        return view('service.create', compact('service', 'companies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(StoreServiceRequest $request)
    public function store()
    {
        $service = Service::create($this->requestValidate());
        return redirect(route('service.show', [$service]));
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view('service.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {

        $companies = Company::all();
        return view('service.edit', compact('service', 'companies'));
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(UpdateServiceRequest $request, Service $service)
    public function update(Service $service)
    {
        $service->update($this->requestValidate());
        return redirect(route('service.show', [$service]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect(route('service.index'));
    }

    public function requestValidate()
    {
        return request()->validate([
            'name' => 'required|min:3',
            'price' => 'required|min:1',
            'company_id' => 'required|min:1',
            'active' => 'required|min:1'
        ]);
    }
}
