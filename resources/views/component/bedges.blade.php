@extends('layouts.app')
@section('content')
    <!--page-wrapper-->
    <div class="page-wrapper">
        <!--page-content-wrapper-->
        <div class="page-content-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Components</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Bedges</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ms-auto">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">Settings</button>
                            <button type="button" class="btn btn-primary bg-split-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">	<a class="dropdown-item" href="javascript:;">Action</a>
                                <a class="dropdown-item" href="javascript:;">Another action</a>
                                <a class="dropdown-item" href="javascript:;">Something else here</a>
                                <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end breadcrumb-->
                <div class="card radius-15">
                    <div class="card-body">
                        <div class="card-title">
                            <h4 class="mb-0">Basic examples</h4>
                        </div>
                        <hr/>
                        <h1>Example heading <span class="badge bg-secondary">New</span></h1>
                        <h2>Example heading <span class="badge bg-secondary">New</span></h2>
                        <h3>Example heading <span class="badge bg-secondary">New</span></h3>
                        <h4>Example heading <span class="badge bg-secondary">New</span></h4>
                        <h5>Example heading <span class="badge bg-secondary">New</span></h5>
                        <h6>Example heading <span class="badge bg-secondary">New</span></h6>
                    </div>
                </div>
                <div class="card radius-15">
                    <div class="card-body">
                        <div class="card-title">
                            <h4 class="mb-0">Bedges in button</h4>
                        </div>
                        <hr/>
                        <button type="button" class="btn btn-primary">Notifications <span class="badge bg-light text-dark">4</span>
                        </button>
                        <button type="button" class="btn btn-success">Notifications <span class="badge bg-light text-dark">4</span>
                        </button>
                        <button type="button" class="btn btn-info">Notifications <span class="badge bg-light text-dark">4</span>
                        </button>
                        <button type="button" class="btn btn-danger">Notifications <span class="badge bg-light text-dark">4</span>
                        </button>
                        <button type="button" class="btn btn-light">Notifications <span class="badge bg-light text-dark">4</span>
                        </button>
                        <button type="button" class="btn btn-dark">Notifications <span class="badge bg-light text-dark">4</span>
                        </button>
                    </div>
                </div>
                <div class="card radius-15">
                    <div class="card-body">
                        <div class="card-title">
                            <h4 class="mb-0">Contextual variations</h4>
                        </div>
                        <hr/>
                        <span class="badge bg-primary">Primary</span>
                        <span class="badge bg-secondary">Secondary</span>
                        <span class="badge bg-success">Success</span>
                        <span class="badge bg-danger">Danger</span>
                        <span class="badge bg-warning">Warning</span>
                        <span class="badge bg-info">Info</span>
                        <span class="badge bg-light text-dark">Light</span>
                        <span class="badge bg-dark">Dark</span>
                    </div>
                </div>
                <div class="card radius-15">
                    <div class="card-body">
                        <div class="card-title">
                            <h4 class="mb-0">Pill badges</h4>
                        </div>
                        <hr/>
                        <span class="badge rounded-pill bg-primary">Primary</span>
                        <span class="badge rounded-pill bg-secondary">Secondary</span>
                        <span class="badge rounded-pill bg-success">Success</span>
                        <span class="badge rounded-pill bg-danger">Danger</span>
                        <span class="badge rounded-pill bg-warning">Warning</span>
                        <span class="badge rounded-pill bg-info">Info</span>
                        <span class="badge rounded-pill bg-light text-dark">Light</span>
                        <span class="badge rounded-pill bg-dark">Dark</span>
                    </div>
                </div>
                <div class="card radius-15">
                    <div class="card-body">
                        <div class="card-title">
                            <h4 class="mb-0">Links badges</h4>
                        </div>
                        <hr/>
                        <a href="javascript:;" class="badge bg-primary">Primary</a>
                        <a href="javascript:;" class="badge bg-secondary">Secondary</a>
                        <a href="javascript:;" class="badge bg-success">Success</a>
                        <a href="javascript:;" class="badge bg-danger">Danger</a>
                        <a href="javascript:;" class="badge bg-warning">Warning</a>
                        <a href="javascript:;" class="badge bg-info">Info</a>
                        <a href="javascript:;" class="badge bg-light text-dark">Light</a>
                        <a href="javascript:;" class="badge bg-dark">Dark</a>
                    </div>
                </div>
            </div>
        </div>
        <!--end page-content-wrapper-->
    </div>
    <!--end page-wrapper-->
    @endsection
