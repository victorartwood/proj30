@extends('layouts.app')

@section('title', 'Make payment')

@section('content')
    <div class="container p-5">
        <div class="row">
            <div class="col-lg-5 p-5 shadow-lg bg-light">
                <h1 class="display-6">Make Payment</h1>
                <p class="text-muted">Use this page to record all payments made with customers</p>

                @if ($errors->first() != null)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                        <strong>Errors found</strong> Some errors were found. Fields with errors have been marked for you.
                        kindly ckeck them out
                    </div>
                @endif

                <form action="{{ route('payment.store') }}" method="post" class="needs-validation" novalidate>
                    @csrf
                    @include('payment.form')

                    <div class="d-grid gap-2">
                        <button type="submit" name="submit" id="submit" class="btn btn-primary shadow">Record this
                            payment</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-7 p-5">

            </div>
        </div>
    </div>
@endsection
