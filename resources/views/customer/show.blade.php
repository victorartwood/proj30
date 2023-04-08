@extends('layouts.app')

@section('title', 'Customers detail')

@section('content')
    <div class="container p-5">
        <div class="row">

            <div class="col-lg-4">
                <div class="card shadow-lg">
                    <div class="card-header">
                        {{ $customer->name }}\'s Info
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Text</p>
                    </div>
                    <div class="card-footer text-muted">
                        Footer
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
