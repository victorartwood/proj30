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

                {{ $companies->links() }}

                <div class="d-flex bd-highlight mb-3">
                    {{-- <div class="p-2 bd-highlight">Flex item</div>
                    <div class="p-2 bd-highlight">Flex item</div> --}}
                    <div class="btn-group ms-auto" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-sm btn-outline-secondary px-3 active"><i
                                class="fa-thin fa-list-timeline">
                            </i>
                            List</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary px-3"><span class="fa-thin fa-grid">
                            </span>
                            Grid</button>
                    </div>
                </div>
                <table class="table table-striped table-sm table-hover pt-3">
                    <thead class="table-light">
                        <caption>Companies registered</caption>
                        <tr>
                            <th>##</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Active</th>
                            <th>Services</th>
                            <th>Members</th>
                            <th>Tools | Comming soon</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($companies as $company)
                            <tr>
                                <td scope="row">{{ $i++ }}</td>
                                <td>{{ $company->name }}</td>
                                <td>{{ $company->phone }}</td>
                                <td>{{ $company->address }}</td>
                                <td>{{ $company->email }}</td>
                                <td>{{ $company->active }}</td>
                                <td>##</td>
                                <td>{{ count($company->customer) }}</td>
                                <td>
                                    <a href="{{ route('company.edit', [$company]) }}" class="btn btn-link p-0">
                                        <span class="fa-light fw-normal fa-clone text-secondary" data-bs-toggle="tooltip"
                                            data-bs-placement="right" title="View Pop Info"> </span>
                                    </a>
                                    <span style="opacity:0;">|</span>
                                    <a href="{{ route('company.show', [$company]) }}" class="btn btn-link p-0">
                                        <span class="fa-light fw-normal fa-eye fa-flash text-primary"
                                            data-bs-toggle="tooltip" data-bs-placement="right" title="View company"></span>
                                    </a>
                                    <span style="opacity:0;">|</span>
                                    <a href="{{ route('company.edit', [$company]) }}" class="btn btn-link p-0">
                                        <span class="fa-light fw-normal fa-pen-to-square text-success"
                                            data-bs-toggle="tooltip" data-bs-placement="right" title="Edit company"> </span>
                                    </a>

                                    <span style="opacity:0;">|</span>
                                    <span style="opacity:0;">|</span>
                                    <span style="opacity:1;">|</span>
                                    <span style="opacity:0;">|</span>
                                    <span style="opacity:0;">|</span>

                                    <button type="button" class="btn btn-link p-0" id="liveToastBtn">
                                        <i class="fa-light fw-normal fa-thumbtack text-secondary" data-bs-toggle="tooltip"
                                            data-bs-placement="right" title="comming soon"> </i>
                                    </button>
                                    <span style="opacity:0;">|</span>
                                    <a href="#" class="btn btn-link p-0">
                                        <i class="fa-light fw-normal  fa-image text-secondary" data-bs-toggle="tooltip"
                                            data-bs-placement="right" title="comming soon"> </i>
                                    </a>
                                    <span style="opacity:0;">|</span>
                                    <a href="#" class="btn btn-link p-0">
                                        <i class="fa-light fw-normal fa-bookmark text-secondary" data-bs-toggle="tooltip"
                                            data-bs-placement="right" title="comming soon"> </i>
                                    </a>
                                    <span style="opacity:0;">|</span>
                                    <a href="#" class="btn btn-link p-0">
                                        <i class="fa-light fw-normal fa-star fa-spin text-secondary"
                                            style="--fa-animation-duration: 15s;" data-bs-toggle="tooltip"
                                            data-bs-placement="right" title="comming soon"> </i>
                                    </a>
                                    <span style="opacity:0;">|</span>
                                    <a href="#" class="btn btn-link p-0">
                                        <i class="fa-light fw-normal fa-flag text-secondary" data-bs-toggle="tooltip"
                                            data-bs-placement="right" title="comming soon"> </i>
                                    </a>
                                    <span style="opacity:0;">|</span>
                                    <a href="#" class="btn btn-link p-0">
                                        <i class="fa-light fw-normal fa-trash-xmark text-secondary" data-bs-toggle="tooltip"
                                            data-bs-placement="right" title="comming soon"> </i>
                                    </a>
                                    <span style="opacity:0;">|</span>
                                    <a href="#" class="btn btn-link p-0">
                                        <i class="fa-light fw-normal fa-envelope-circle-check text-secondary"
                                            data-bs-toggle="tooltip" data-bs-placement="right" title="comming soon"> </i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
                {{ $companies->links() }}


                <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>

                <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
                    <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                            <img src="..." class="rounded me-2" alt="...">
                            <strong class="me-auto">Bootstrap</strong>
                            <small>11 mins ago</small>
                            <button type="button" class="btn-close" data-bs-dismiss="toast"
                                aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                            Hello, world! This is a toast message.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
