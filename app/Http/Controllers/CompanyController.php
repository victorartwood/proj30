<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::with('customer')->paginate(15);
        return view('company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $company = new Company();
        return view('company.create', compact('company'));
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(StoreCompanyRequest $request)
    public function store()
    {
        $company = Company::create($this->requestValidate());
        return redirect(route('company.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        // $peers = count()
        return view('company.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        return view('company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(UpdateCompanyRequest $request, Company $company)
    public function update(Company $company)
    {
        $company->update($this->requestValidate());
        $updateSuccess = 1;
        return redirect(route('company.show', [$company]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect(route('company.index'));
    }

    public function requestValidate()
    {
        return request()->validate([
            'name' => 'required|min:5',
            'phone' => 'required|min:10',
            'email' => 'required',
            'address' => 'required|min:5',
            'description' => 'required|min:10',
            'active' => 'required|min:1'
        ]);
    }
}
