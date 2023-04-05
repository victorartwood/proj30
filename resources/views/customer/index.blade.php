@extends('layouts.app')

@section('title', 'Customer dashboard')

@section('content')
    <div class="-fluid p-5">
        <h3 class="display-6">Customer Dashboard</h3>
        <p class="text-muted pb-5">A list of registered customers in our database</p>
        {{-- <div class="row justify-content-center align-items-center g-2 p-5">
            <div class="col">Column</div>
            <div class="col">Column</div>
            <div class="col">Column</div>
        </div> --}}


        <ul class="nav nav-pills mb-3 nav-fill" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                    type="button" role="tab" aria-controls="pills-home" aria-selected="true">All customers</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                    type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Active
                    customers</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
                    type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Inactive
                    customers</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-faq"
                    type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Pending
                    customers</button>
            </li>
        </ul>

        {{-- ===================== Customer Tab pane  --}}
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active table-responsive shadow-lg rounded p-5" id="pills-home" role="tabpanel"
                aria-labelledby="pills-home-tab">

                {{ $customers->links() }}
                <table class="table table- table-striped table-hover table-borderless align-middle mt-4">
                    <thead class="table-light">
                        <caption>All Customers table</caption>
                        <tr>
                            <th>##</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Company</th>
                            <th>Tools</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">

                        @foreach ($customers as $customer)
                            <tr
                                class="table-{{ $customer->active == 'Active' ? 'success' : ($customer->active == 'Inactive' ? 'warning' : 'danger') }}">
                                <td scope="row">##</td>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->email }}</td>
                                <td>{{ $customer->active }}</td>
                                <td>{{ $customer->company->name }}</td>
                                <td>
                                    <i class="fa-light fw-normal fa-thumbtack text-primary"> </i> <span
                                        style="opacity:0;">|</span>
                                    <i class="fa-light fw-normal  fa-image text-success"> </i> <span
                                        style="opacity:0;">|</span>
                                    <i class="fa-light fw-normal fa-eye fa-flash text-primary"> </i> <span
                                        style="opacity:0;">|</span>
                                    <i class="fa-light fw-normal fa-bookmark text-primary"> </i> <span
                                        style="opacity:0;">|</span>
                                    <i class="fa-light fw-normal fa-star fa-spin text-success"
                                        style="--fa-animation-duration: 15s;"> </i> <span style="opacity:0;">|</span>
                                    <i class="fa-light fw-normal fa-pen-to-square text-dark"> </i> <span
                                        style="opacity:0;">|</span>
                                    <i class="fa-light fw-normal fa-trash-xmark text-danger"> </i>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
                {{ $customers->links() }}

            </div>

            {{-- ===================== Customer Tab pane  --}}
            <div class="tab-pane fade table-responsive" id="pills-profile" role="tabpanel"
                aria-labelledby="pills-profile-tab">

                <p class="text-muted">Showing 15 records.</p>
                <p class="text-muted pb-4">Click the see more button after the table to view all active customers</p>
                <table class="table table-sm table-success table-striped table-hover table-borderless align-middle">
                    <thead class="table-light">
                        <caption>All Customers table</caption>
                        <tr>
                            <th>##</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Company</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">

                        @foreach ($activeCustomers as $customer)
                            <tr class="table-">
                                <td scope="row">##</td>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->email }}</td>
                                <td>{{ $customer->active }}</td>
                                <td>{{ $customer->company->name }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
                <a name="inactiveCustomers" id="inactiveCustomers" class="btn btn-success" href="#" role="button">See
                    all active customers</a>

            </div>

            {{-- ===================== Customer Tab pane  --}}
            <div class="tab-pane fade table-responsive" id="pills-contact" role="tabpanel"
                aria-labelledby="pills-contact-tab">

                <p class="text-muted">Showing 15 records.</p>
                <p class="text-muted pb-4">Click the see more button after the table to view all inactive customers</p>
                <table class="table table-sm table-danger table-striped table-hover table-borderless align-middle">
                    <thead class="table-light">
                        <caption>All Customers table</caption>
                        <tr>
                            <th>##</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Company</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">

                        @foreach ($inactiveCustomers as $customer)
                            <tr class="table-">
                                <td scope="row">##</td>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->email }}</td>
                                <td>{{ $customer->active }}</td>
                                <td>{{ $customer->company->name }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
                <a name="inactiveCustomers" id="inactiveCustomers" class="btn btn-danger" href="#"
                    role="button">See
                    all inactive customers</a>

            </div>

            {{-- ===================== Customer Tab pane  --}}
            <div class="tab-pane fade table-responsive" id="pills-faq" role="tabpanel"
                aria-labelledby="pills-contact-tab">

                <p class="text-muted">Showing 15 records.</p>
                <p class="text-muted pb-4">Click the see more button after the table to view all pending customers</p>
                <table class="table table-sm table-warning table-striped table-hover table-borderless align-middle">
                    <thead class="table-light">
                        <caption>All Customers table</caption>
                        <tr>
                            <th>##</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Company</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">

                        @foreach ($pendingCustomers as $customer)
                            <tr class="table-">
                                <td scope="row">##</td>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->email }}</td>
                                <td>{{ $customer->active }}</td>
                                <td>{{ $customer->company->name }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
                <a name="inactiveCustomers" id="inactiveCustomers" class="btn btn-warning" href="#"
                    role="button">See all pending customers</a>

            </div>
        </div>

        {{-- ======================= --}}

        {{-- <div class="table-responsive">
            {{ $customers->links() }}
            <table class="table table-sm table-striped table-hover table-borderless align-middle">
                <thead class="table-light">
                    <caption>All Customers table</caption>
                    <tr>
                        <th>##</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Company</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">

                    @foreach ($customers as $customer)
                        <tr class="table-">
                            <td scope="row">##</td>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->active }}</td>
                            <td>{{ $customer->company->name }}</td>
                        </tr>
                    @endforeach

                </tbody>
                <tfoot>

                </tfoot>
            </table>
            {{ $customers->links() }}
        </div> --}}

    </div>
@endsection
