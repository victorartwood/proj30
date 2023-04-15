@extends('layouts.app')

@section('title', 'New company')

@section('content')
    <div class="container p-5">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col-lg-5 p-5 shadow-lg rounded-3 bg-light">
                <h3 class="display-6"><i class="fa-thin fa-city pe-1"></i> Create a new company record</h3>
                <p class="text-muted pb-3">Fill in the fields bellow to create a new company record.</p>

                @if ($errors->first() != null)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                        <strong>Errors found</strong> Some errors were found and need your action. Fields with errors have
                        been marked for you.
                    </div>
                @endif

                <form action="{{ route('company.store') }}" method="post">
                    @csrf
                    @include('company.form')

                    <div class="d-grid gap-2">
                        <button type="submit" name="submit" id="submit" class="btn btn-primary shadow">Create
                            Company</button>
                    </div>
                </form>
            </div>

            <div class="col-lg-7"></div>
        </div>
    </div>
@endsection
