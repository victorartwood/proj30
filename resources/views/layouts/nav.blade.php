    <div class="container-fluid bg-dark text-light p-4 bg-opacity-75">
        <div class="row">
            <div class="col-lg-1">
            </div>
            <div class="col-lg-3">
                <h1 class="display-4">CnC Group</h1>
            </div>
            <div class="col-lg-8">
                <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                    veniam.</p>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top bg-opacity-75">
        <div class="nav navbar-nav container">
            <a class="navbar-brand" href="#">CnC Group</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" aria-current="page">Home <span
                                class="visually-hidden">(current)</span></a>
                    </li>

                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#" aria-current="page">About <span
                                class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" aria-current="page">Contact <span
                                class="visually-hidden">(current)</span></a>
                    </li> --}}

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Customer</a>
                        <div class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="{{ route('customer.create') }}"> <i
                                    class="fa-light fa-user-plus pe-2"> </i> Create Customer</a>
                            <hr class="dropdown-divider">
                            <a class="dropdown-item" href="{{ route('customer.index') }}">Active Customers</a>
                            <a class="dropdown-item" href="{{ route('customer.index') }}">Inactive Customers</a>
                            <a class="dropdown-item" href="{{ route('customer.index') }}">Pending activation</a>
                            <hr class="dropdown-divider">
                            <a class="dropdown-item" href="{{ route('customer.index') }}">View all Customers</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Company</a>
                        <div class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="{{ route('company.create') }}"> <i
                                    class="fa-thin fa-city pe-1"></i> Create Company</a>
                            <hr class="dropdown-divider">
                            <a class="dropdown-item" href="{{ route('company.index') }}">Active Companies</a>
                            <a class="dropdown-item" href="{{ route('company.index') }}">Inactive Companies</a>
                            <a class="dropdown-item" href="{{ route('company.index') }}">Pending activation</a>
                            <hr class="dropdown-divider">
                            <a class="dropdown-item" href="{{ route('company.index') }}">View all Companies</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Service</a>
                        <div class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="{{ route('service.create') }}">Create Service</a>
                            <a class="dropdown-item" href="{{ route('service.index') }}">View all Services</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Payment</a>
                        <div class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="{{ route('payment.create') }}">Record Payment</a>
                            <a class="dropdown-item" href="{{ route('payment.index') }}">View all Payments</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">More</a>
                        <div class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="{{ route('about') }}">About Us</a>
                            <a class="dropdown-item" href="{{ route('contact') }}">Contact Us</a>
                            <a class="dropdown-item" href="{{ route('faq') }}">FAQs</a>
                        </div>
                    </li>

                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Action 1</a>
                            <a class="dropdown-item" href="#">Action 2</a>
                        </div>
                    </li> --}}
                </ul>
                <form class="d-flex my-2 my-lg-0">
                    <input class="form-control me-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
