@extends('layouts.app')

@section('title', 'Service dashboard')

@section('content')
    @php
        $num = $services->currentPage() * $services->perPage() - $services->perPage() + 1;
    @endphp
    <div class="container-fluid p-5">
        <div class="row">
            <div class="col-lg-12 table-responsive p-5 shadow bg-light">
                <h1 class="display-6">All services offered by our companies</h1>
                <p class="text-muted">Here is a detailed list of all services offered on this platform</p>

                {{ $services->links() }}
                <table class="table table-striped table-sm table-hover align-middle rounded">
                    <thead class="">
                        <caption>Services on CnC Group</caption>
                        <tr>
                            <th>##</th>
                            <th>Service name</th>
                            <th>Service offering</th>
                            <th>Price</th>
                            <th>Status</th>
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

                        {{-- Render services table data ============================= --}}
                        @foreach ($services as $service)
                            <tr>
                                <td scope="row">
                                    <button type="button" class="btn btn-link p-0" id="liveToastBtn">
                                        <i class="fa-light fw-normal fa-grip-vertical text-secondary"
                                            data-bs-toggle="tooltip" data-bs-placement="right" title="Grip"> </i>
                                    </button>
                                    {{ $num++ }}
                                </td>
                                <td>{{ $service->name }}</td>
                                <td>{{ $service->company->name }}</td>
                                <td>Ksh. {{ $service->price }}.00</td>
                                <td>{{ $service->active }}</td>
                                <td>

                                    <form action="{{ route('service.destroy', [$service]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('service.show', [$service]) }}" class="btn btn-link p-0 pe-0">
                                            <span class="fa-light fw-normal fa-eye fa-flash text-primary"
                                                data-bs-toggle="tooltip" data-bs-placement="right"
                                                title="View service"></span>
                                        </a>
                                        <a href="{{ route('service.edit', [$service]) }}" class="btn btn-link p-0 pe-3">
                                            <span class="fa-light fw-normal fa-pen-to-square text-success"
                                                data-bs-toggle="tooltip" data-bs-placement="right" title="Edit service">
                                            </span>
                                        </a>
                                        <button type="submit" class="btn btn-link p-0">
                                            <span class="fa-light fw-normal fa-trash-xmark text-danger"
                                                data-bs-toggle="tooltip" data-bs-placement="right" title="Delete service">
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
                                        <i class="fa-light fw-normal fa-trash-xmark text-secondary" data-bs-toggle="tooltip"
                                            data-bs-placement="right" title="comming soon"> </i>
                                    </a>
                                    <a href="#" class="btn btn-link p-0 p-0">
                                        <i class="fa-light fw-normal fa-envelope-circle-check text-secondary"
                                            data-bs-toggle="tooltip" data-bs-placement="right" title="comming soon"> </i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        {{-- Render services table data ============================= --}}

                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
                {{ $services->links() }}

            </div>
        </div>
    </div>
@endsection
