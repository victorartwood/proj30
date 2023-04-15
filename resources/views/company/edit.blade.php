@extends('layouts.app')

@section('title', 'Edit Company')

@section('content')
    <div class="container p-5">
        <div class="row">
            <div class="col-lg-5 p-5 shadow bg-light">

                <h3 class="display-6">Edit company record</h3>
                <p class="text-muted pb-3">Fill in the fields bellow to create a new company record.</p>

                <form action="{{ route('company.update', [$company]) }}" method="post">
                    @method('PATCH')
                    @csrf

                    @include('company.form')

                    <div class="d-grid gap-2 pb-3">
                        <button type="submit" name="submit" id="submit" class="btn btn-primary">Update Company</button>
                    </div>

                </form>
                <form action="{{ route('company.destroy', [$company]) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <div class="d-grid gap-2">
                        <button type="submit" name="submit" id="submit" class="btn btn-danger">Delete Company</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-7"></div>
        </div>
    </div>
@endsection
