@extends('layouts.app')

@section('title', 'New Customer')

@section('content')
    <div class="container p-5">
        <div class="row">

            <div class="col-lg-5 p-5 shadow-lg">
                <h3 class="display-6">Create a new customer record</h3>
                <p class="text-muted pb-3">Fill in the fields bellow to create a new customer record.</p>

                @if ($errors->first() != null)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                        <strong>Errors found</strong> Some errors were found and need your action.
                    </div>
                @endif

                <form action="{{ route('customer.store') }}" method="post">
                    @csrf
                    @include('customer.form')
                    <div class="d-grid gap-2">
                        <button type="submit" name="submit" id="submit" class="btn btn-primary shadow">Create
                            record</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
