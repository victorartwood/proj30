@extends('layouts.app')

@section('title', 'Payment detail')

@section('content')
    <div class="container p-5">
        <div class="row">

            <div class="col-lg-5">

                <div class="card shadow rounded">
                    <div class="card-header">
                        <span class="fa-thin fa-money-check-dollar"></span> Payment information
                    </div>
                    <div class="card-body">
                        <h4 class="card-title display-6"><span class="fa-thin fa-money-check-dollar"></span>
                            {{ $payment->service->name }}</h4>
                        <span class="badge rounded-pill text-bg-primary">{{ $payment->active }}</span>
                        <h5 class="card-text">Reachout to the provider</h5>
                        <p class="text-muted">
                            Tel No.: {{ $payment->service->company->phone }} <br>
                            E-mail address: {{ $payment->service->company->email }} <br>
                            Pysical address: {{ $payment->service->company->address }}
                        </p>
                        <h6 class="card-text">About the provider</h6>
                        <p class="card-text">{{ $payment->service->company->description }}</p>
                    </div>
                    <div class="card-footer text-muted">
                        Currently with {{ count($payment->service->company->customer) }} members.
                    </div>
                </div>

            </div>
            <div class="col-lg-7">

            </div>

        </div>
    </div>
@endsection
