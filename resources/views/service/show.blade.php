@extends('layouts.app')

@section('title', 'service details')

@section('content')
    <div class="container-fluid">
        <div class="row p-5">
            <div class="col-lg-4">
                <div class="card shadow rounded">
                    <div class="card-header">
                        CnC Group
                    </div>
                    <div class="card-body">
                        <h4 class="card-title display-6">{{ $service->name }}</h4>
                        <span class="badge rounded-pill text-bg-primary">{{ $service->active }}</span>
                        <h5 class="card-text">Reachout to the provider</h5>
                        <p class="text-muted">
                            Name.: {{ $service->company->name }} <br>
                            Tel No.: {{ $service->company->phone }} <br>
                            E-mail address: {{ $service->company->email }} <br>
                            Pysical address: {{ $service->company->address }}
                        </p>
                        <h6 class="card-text">About the provider</h6>
                        <p class="card-text">{{ Str::limit($service->company->description, 150) }}
                            <a name="about-company" id="about-company" class="btn btn-link p-0"
                                href="{{ route('company.show', [$service->company_id]) }}" role="button">
                                discover more</a>
                        </p>
                    </div>
                    <div class="card-footer text-muted">
                        Currently with {{ count($service->company->customer) }} members.
                    </div>
                </div>
            </div>
            <div class="col-lg-8"></div>
        </div>
    </div>
@endsection
