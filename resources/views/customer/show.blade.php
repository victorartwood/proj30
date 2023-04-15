@extends('layouts.app')

@section('title', 'Customers detail')

@section('content')
    <div class="container p-5">
        <div class="row">

            <div class="col-lg-4">
                <div class="card shadow-lg bg-light">
                    <div class="card-header">
                        Customer's Details
                    </div>
                    <div class="card-body">
                        <h4 class="card-title display-6"><i class="fa-thin fa-user p-0 pe-3"></i> {{ $customer->name }}</h4>
                        <p class="card-text">
                            Tel No.: {{ $customer->phone }} <br>
                            E-mail Address: {{ $customer->email }} <br>
                            Physical address: {{ $customer->address }} <br>
                        </p>
                        <p class="card-text">
                            Company name: {{ $customer->company->name }} <br>
                            Phone: {{ $customer->company->phone }} <br>
                            E-mail address: {{ $customer->company->email }} <br>
                        </p>
                    </div>
                    <div class="card-footer text-muted">
                        {{ $customer->name }} has {{ $peers }} peers in {{ $customer->company->name }} company.
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
