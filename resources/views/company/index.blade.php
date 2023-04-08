@extends('layouts.app')

@section('title', 'Company dashboard')

@section('content')
    <div class="content p-5">
        <div class="row">
            <div class="col-lg-12 p-5 table-responsive shadow">

                <h4 class="display-6">Companies regitered with us</h4>
                <p class="text-muted">Here's a list of all companies registered withus</p>
                @php
                    $i = $companies->currentPage() * $companies->perPage() - $companies->perPage() + 1;
                @endphp

                <table class="table table-striped table-hover pt-3">
                    <thead class="table-light">
                        <caption>Table Name</caption>
                        <tr>
                            <th>##</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Members</th>
                            <th>Tools | Comming soon</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($companies as $company)
                            <tr>
                                <td scope="row">{{ $i++ }}</td>
                                <td>{{ $company->name }}</td>
                                <td>{{ $company->address }}</td>
                                <td>{{ $company->email }}</td>
                                <td>{{ count($company->customer) }}</td>
                                <td>

                                    <a href="{{ route('company.show', [$company]) }}" class="btn btn-link p-0">
                                        <i class="fa-light fw-normal fa-eye fa-flash text-primary"></i>
                                    </a>
                                    <span style="opacity:0;">|</span>
                                    <a href="{{ route('company.edit', [$company]) }}" class="btn btn-link p-0">
                                        <i class="fa-light fw-normal fa-pen-to-square text-success"> </i>
                                    </a>
                                    <span style="opacity:0;">|</span>
                                    <span style="opacity:0;">|</span>
                                    <span style="opacity:1;">|</span>
                                    <span style="opacity:0;">|</span>
                                    <span style="opacity:0;">|</span>
                                    <i class="fa-light fw-normal fa-thumbtack text-secondary"> </i>
                                    <span style="opacity:0;">|</span>
                                    <i class="fa-light fw-normal  fa-image text-secondary"> </i>
                                    <span style="opacity:0;">|</span>
                                    <i class="fa-light fw-normal fa-bookmark text-secondary"> </i>
                                    <span style="opacity:0;">|</span>
                                    <i class="fa-light fw-normal fa-star fa-spin text-secondary"
                                        style="--fa-animation-duration: 15s;"> </i>
                                    <span style="opacity:0;">|</span>
                                    <i class="fa-light fw-normal fa-flag text-secondary"> </i>
                                    <span style="opacity:0;">|</span>
                                    <i class="fa-light fw-normal fa-trash-xmark text-secondary"> </i>
                                    <span style="opacity:0;">|</span>
                                    <i class="fa-light fw-normal fa-envelope-circle-check text-secondary"> </i>
                                </td>
                            </tr>
                        @endforeach
                        <tr class="table-primary">
                            <td scope="row">Item</td>
                            <td>Item</td>
                            <td>Item</td>
                        </tr>
                        <tr class="table-primary">
                            <td scope="row">Item</td>
                            <td>Item</td>
                            <td>Item</td>
                        </tr>
                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>

            </div>
        </div>
    </div>
@endsection

<i class="fa-thin fa-envelope-circle-check"></i>
