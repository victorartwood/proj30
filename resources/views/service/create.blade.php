@extends('layouts.app')

@section('title', 'New service')

@section('content')

    <div class="container p-5">
        <div class="row">
            <div class="col-lg-5 p-5 shadow bg-light">
                <h1 class="display-6">Create a new service</h1>
                <p class="text-muted">Fill in the fields below ad submit to create a new service</p>

                <form action="{{ route('service.store') }}" method="post">
                    @csrf
                    @include('service.form')

                    <div class="d-grid gap-2">
                        <button type="submit  " name="submit" id="submit" class="btn btn-primary">Create Service</button>
                    </div>
                </form>

            </div>
            <div class="col-lg-7"></div>
        </div>
    </div>
@endsection
