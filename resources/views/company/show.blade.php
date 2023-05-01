@extends('layouts.app')

@section('title', 'Company details')

@section('content')
    <div class="container-fluid">
        <div class="row p-5">
            <div class="col-lg-4">
                <div class="card shadow rounded">
                    <div class="card-header">
                        Company information
                    </div>
                    <div class="card-body">
                        <h4 class="card-title display-6">{{ $company->name }}</h4>
                        <span class="badge rounded-pill text-bg-primary">{{ $company->active }}</span>
                        <p class="text-muted">
                            Tel No.: {{ $company->phone }} <br>
                            E-mail address: {{ $company->email }} <br>
                            Pysical address: {{ $company->address }}
                        </p>
                        <p class="card-text">{{ $company->description }}</p>
                    </div>
                    <div class="card-footer text-muted">
                        Currently with {{ count($company->customer) }} members.
                    </div>
                </div>
            </div>
            <div class="col-lg-8"></div>
        </div>
    </div>
@endsection
