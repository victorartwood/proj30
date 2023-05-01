@extends('layouts.app')

@section('title', 'Paymnet Dashboard')

@section('content')
    @php
        $num = $payments->currentPage() * $payments->perPage() - $payments->perPage() + 1;
    @endphp

    <div class="container-fluid p-5">
        <div class="row">
            <div class="col-lg-12 table-responsive shadow p-5 bg-light">
                <h1 class="display-6">Payments Dashboard</h1>
                <p class="text-muted">Here is a list of all payments done by customers in the past one month.</p>

                {{ $payments->links() }}
                <table class="table table-striped table-hover table-sm align-middle">
                    <thead class="table-light">
                        <caption>Payments table</caption>
                        <tr>
                            <th>##</th>
                            <th>Customer</th>
                            <th>Service</th>
                            <th>Company</th>
                            <th>Amount</th>
                            <th>From</th>
                            <th>To</th>
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
                        @foreach ($payments as $payment)
                            <tr>
                                <td scope="row">

                                    <button type="button" class="btn btn-link p-0" id="liveToastBtn">
                                        <i class="fa-light fw-normal fa-grip-vertical text-secondary"
                                            data-bs-toggle="tooltip" data-bs-placement="right" title="Grip"> </i>
                                    </button>
                                    {{ $num++ }}
                                </td>
                                <td>{{ $payment->customer->name }}</td>
                                <td>{{ Str::limit($payment->service->name, 20) }}</td>
                                <td>{{ Str::limit($payment->service->company->name, 20) }}</td>
                                <td>Ksh. {{ $payment->amount }}.00</td>
                                <td>{{ $payment->from }}</td>
                                <td>{{ $payment->to }}</td>
                                <td>{{ $payment->active }}</td>
                                <td>

                                    <form action="{{ route('payment.destroy', [$payment]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('payment.show', [$payment]) }}" class="btn btn-link p-0 pe-0">
                                            <span class="fa-light fw-normal fa-eye fa-flash text-primary"
                                                data-bs-toggle="tooltip" data-bs-placement="right"
                                                title="View payment"></span>
                                        </a>
                                        <a href="{{ route('payment.edit', [$payment]) }}" class="btn btn-link p-0 pe-3">
                                            <span class="fa-light fw-normal fa-pen-to-square text-success"
                                                data-bs-toggle="tooltip" data-bs-placement="right" title="Edit company">
                                            </span>
                                        </a>
                                        <button type="submit" class="btn btn-link p-0" disabled>
                                            <span class="fa-light fw-normal fa-trash-xmark text-danger"
                                                data-bs-toggle="tooltip" data-bs-placement="right" title="Delete payment">
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
                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
                {{ $payments->links() }}

            </div>
        </div>
    </div>
@endsection
