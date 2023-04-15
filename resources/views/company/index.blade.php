@extends('layouts.app')

@section('title', 'Company dashboard')

@section('content')
    <div class="content p-5">
        <div class="row">
            <div class="col-lg-12 p-5 table-responsive shadow bg-light">

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
                                class="fa-thin fa-list pe-2">
                            </i>
                            Compact</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary px-3 "><i
                                class="fa-thin fa-list-timeline pe-2">
                            </i>
                            Loose</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary px-3"><span
                                class="fa-thin fa-grid pe-2">
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
                            <th>
                                <button type="button" class="btn btn-link p-0" id="liveToastBtn">
                                    <span class="fa-light fw-normal fa-solid fa-users text-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="right" title="Members"> </span>
                                </button>
                            </th>
                            <th>
                                <button type="button" class="btn btn-link p-0" id="liveToastBtn">
                                    {{-- <i class="fa-solid fa-screwdriver-wrench"></i> --}}
                                    <span class="fa-solid fa-screwdriver-wrench text-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="right" title="Tools"> </span>
                                </button>
                            </th>
                            <th data-bs-toggle="tooltip" data-bs-placement="right" title="Comming soon">
                                <button type="button" class="btn btn-outline-light p-0 px-2 text-secondary"
                                    id="liveToastBtn">
                                    {{-- <i class="fa-solid fa-screwdriver-wrench"></i> --}}
                                    <span class="fa-solid fa-clock-rotate-left pe-2"> </span>
                                    Comming soon
                                </button>
                            </th>

                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($companies as $company)
                            <tr>
                                <td scope="row">

                                    <button type="button" class="btn btn-link p-0" id="liveToastBtn">
                                        <i class="fa-light fw-normal fa-grip-vertical text-secondary"
                                            data-bs-toggle="tooltip" data-bs-placement="right" title="Grip"> </i>
                                    </button>
                                    {{ $i++ }}
                                </td>
                                <td>

                                    <button type="button" class="btn btn-link p-0" id="liveToastBtn">
                                        <i class="fa-light fw-normal fa-note text-success pe-2" data-bs-toggle="tooltip"
                                            data-bs-placement="right" title="Description: {{ $company->description }}"> </i>
                                    </button>

                                    {{ $company->name }}
                                </td>
                                <td>{{ $company->phone }}</td>
                                <td>{{ $company->address }}</td>
                                <td>{{ $company->email }}</td>
                                <td>{{ $company->active }}</td>
                                <td>##</td>
                                <td>{{ count($company->customer) }}</td>
                                <td>

                                    <form action="{{ route('company.destroy', [$company]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('company.show', [$company]) }}" class="btn btn-link p-0 pe-0">
                                            <span class="fa-light fw-normal fa-eye fa-flash text-primary"
                                                data-bs-toggle="tooltip" data-bs-placement="right"
                                                title="View company"></span>
                                        </a>
                                        <a href="{{ route('company.edit', [$company]) }}" class="btn btn-link p-0 pe-3">
                                            <span class="fa-light fw-normal fa-pen-to-square text-success"
                                                data-bs-toggle="tooltip" data-bs-placement="right" title="Edit company">
                                            </span>
                                        </a>
                                        <button type="submit" class="btn btn-link p-0" disabled>
                                            <span class="fa-light fw-normal fa-trash-xmark text-danger"
                                                data-bs-toggle="tooltip" data-bs-placement="right" title="Delete Company">
                                            </span>
                                        </button>
                                    </form>

                                </td>
                                <td>

                                    <button type="button" class="btn btn-link p-0 p-0" id="liveToastBtn">
                                        <i class="fa-light fw-normal fa-thumbtack text-secondary" data-bs-toggle="tooltip"
                                            data-bs-placement="right" title="comming soon"> </i>
                                    </button>
                                    <a href="#" class="btn btn-link p-0 p-0">
                                        <i class="fa-light fw-normal  fa-image text-secondary" data-bs-toggle="tooltip"
                                            data-bs-placement="right" title="comming soon"> </i>
                                    </a>
                                    <a href="#" class="btn btn-link p-0 p-0">
                                        <i class="fa-light fw-normal fa-bookmark text-secondary" data-bs-toggle="tooltip"
                                            data-bs-placement="right" title="comming soon"> </i>
                                    </a>
                                    <a href="#" class="btn btn-link p-0 p-0">
                                        <i class="fa-light fw-normal fa-star fa-spin text-secondary"
                                            style="--fa-animation-duration: 15s;" data-bs-toggle="tooltip"
                                            data-bs-placement="right" title="comming soon"> </i>
                                    </a>
                                    <a href="#" class="btn btn-link p-0 p-0">
                                        <i class="fa-light fw-normal fa-flag text-secondary" data-bs-toggle="tooltip"
                                            data-bs-placement="right" title="comming soon"> </i>
                                    </a>
                                    <a href="#" class="btn btn-link p-0 p-0">
                                        <i class="fa-light fw-normal fa-trash-xmark text-secondary"
                                            data-bs-toggle="tooltip" data-bs-placement="right" title="comming soon"> </i>
                                    </a>
                                    <a href="#" class="btn btn-link p-0 p-0">
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
