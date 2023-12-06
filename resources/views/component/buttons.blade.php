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
                            <li class="breadcrumb-item active" aria-current="page">Buttons</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary">Settings</button>
                        <button type="button" class="btn btn-primary bg-split-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
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
            <div class="row">
                <div class="col-12 col-lg-6 col-xl-6">
                    <div class="card radius-15">
                        <div class="card-body">
                            <div class="card-title">
                                <h4 class="mb-0">Basic Examples</h4>
                            </div>
                            <hr/>
                            <button type="button" class="btn btn-primary m-1 px-5">Primary</button>
                            <button type="button" class="btn btn-secondary m-1 px-5">Secondary</button>
                            <button type="button" class="btn btn-success m-1 px-5">Success</button>
                            <button type="button" class="btn btn-danger m-1 px-5">Danger</button>
                            <button type="button" class="btn btn-warning m-1 px-5">Warning</button>
                            <button type="button" class="btn btn-info m-1 px-5">Info</button>
                            <button type="button" class="btn btn-light m-1 px-5">Light</button>
                            <button type="button" class="btn btn-dark m-1 px-5">Dark</button>
                            <hr/>
                            <button type="button" class="btn btn-outline-primary m-1 px-5">Primary</button>
                            <button type="button" class="btn btn-outline-secondary m-1 px-5">Secondary</button>
                            <button type="button" class="btn btn-outline-success m-1 px-5">Success</button>
                            <button type="button" class="btn btn-outline-danger m-1 px-5">Danger</button>
                            <button type="button" class="btn btn-outline-warning m-1 px-5">Warning</button>
                            <button type="button" class="btn btn-outline-info m-1 px-5">Info</button>
                            <button type="button" class="btn btn-outline-dark m-1 px-5">Dark</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-6">
                    <div class="card radius-15">
                        <div class="card-body">
                            <div class="card-title">
                                <h4 class="mb-0">Round Buttons</h4>
                            </div>
                            <hr/>
                            <button type="button" class="btn btn-primary m-1 px-5 radius-30">Primary</button>
                            <button type="button" class="btn btn-secondary m-1 px-5 radius-30">Secondary</button>
                            <button type="button" class="btn btn-success m-1 px-5 radius-30">Success</button>
                            <button type="button" class="btn btn-danger m-1 px-5 radius-30">Danger</button>
                            <button type="button" class="btn btn-warning m-1 px-5 radius-30">Warning</button>
                            <button type="button" class="btn btn-info m-1 px-5 radius-30">Info</button>
                            <button type="button" class="btn btn-light m-1 px-5 radius-30">Light</button>
                            <button type="button" class="btn btn-dark m-1 px-5 radius-30">Dark</button>
                            <hr/>
                            <button type="button" class="btn btn-outline-primary m-1 px-5 radius-30">Primary</button>
                            <button type="button" class="btn btn-outline-secondary m-1 px-5 radius-30">Secondary</button>
                            <button type="button" class="btn btn-outline-success m-1 px-5 radius-30">Success</button>
                            <button type="button" class="btn btn-outline-danger m-1 px-5 radius-30">Danger</button>
                            <button type="button" class="btn btn-outline-warning m-1 px-5 radius-30">Warning</button>
                            <button type="button" class="btn btn-outline-info m-1 px-5 radius-30">Info</button>
                            <button type="button" class="btn btn-outline-dark m-1 px-5 radius-30">Dark</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
            <div class="row">
                <div class="col-12 col-lg-6 col-xl-6">
                    <div class="card radius-15">
                        <div class="card-body">
                            <div class="card-title">
                                <h4 class="mb-0">Light Buttons</h4>
                            </div>
                            <hr/>
                            <button type="button" class="btn btn-light-primary m-1 px-5">Primary</button>
                            <button type="button" class="btn btn-light-secondary m-1 px-5">Secondary</button>
                            <button type="button" class="btn btn-light-success m-1 px-5">Success</button>
                            <button type="button" class="btn btn-light-danger m-1 px-5">Danger</button>
                            <button type="button" class="btn btn-light-warning m-1 px-5">Warning</button>
                            <button type="button" class="btn btn-light-info m-1 px-5">Info</button>
                            <button type="button" class="btn btn-light-dark m-1 px-5">Dark</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-6">
                    <div class="card radius-15">
                        <div class="card-body">
                            <div class="card-title">
                                <h4 class="mb-0">Light Round Buttons</h4>
                            </div>
                            <hr/>
                            <button type="button" class="btn btn-light-primary m-1 px-5 radius-30">Primary</button>
                            <button type="button" class="btn btn-light-secondary m-1 px-5 radius-30">Secondary</button>
                            <button type="button" class="btn btn-light-success m-1 px-5 radius-30">Success</button>
                            <button type="button" class="btn btn-light-danger m-1 px-5 radius-30">Danger</button>
                            <button type="button" class="btn btn-light-warning m-1 px-5 radius-30">Warning</button>
                            <button type="button" class="btn btn-light-info m-1 px-5 radius-30">Info</button>
                            <button type="button" class="btn btn-light-dark m-1 px-5 radius-30">Dark</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
            <div class="card radius-15">
                <div class="card-body">
                    <div class="card-title">
                        <h4 class="mb-0">Button With Icons</h4>
                    </div>
                    <hr/>
                    <button type="button" class="btn btn-primary m-1 px-5"><i class='bx bx-user me-1'></i>Person</button>
                    <button type="button" class="btn btn-secondary m-1 px-5"><i class='bx bx-comment me-1'></i>Comments</button>
                    <button type="button" class="btn btn-success m-1 px-5"><i class='bx bx-home me-1'></i>Home</button>
                    <button type="button" class="btn btn-danger m-1 px-5"><i class='bx bx-bookmark me-1'></i>Bookmark</button>
                    <button type="button" class="btn btn-warning m-1 px-5"><i class='bx bx-heart-circle me-1'></i>Love</button>
                    <button type="button" class="btn btn-info m-1 px-5"><i class='bx bx-cloud-download me-1'></i>Downloads</button>
                    <button type="button" class="btn btn-dark m-1 px-5"><i class='bx bx-cloud-upload me-1'></i>Upload</button>
                    <hr/>
                    <button type="button" class="btn btn-outline-primary m-1 px-5"><i class='bx bx-user me-1'></i>Person</button>
                    <button type="button" class="btn btn-outline-secondary m-1 px-5"><i class='bx bx-comment me-1'></i>Comments</button>
                    <button type="button" class="btn btn-outline-success m-1 px-5"><i class='bx bx-home me-1'></i>Home</button>
                    <button type="button" class="btn btn-outline-danger m-1 px-5"><i class='bx bx-bookmark me-1'></i>Bookmark</button>
                    <button type="button" class="btn btn-outline-warning m-1 px-5"><i class='bx bx-heart-circle me-1'></i>Love</button>
                    <button type="button" class="btn btn-outline-info m-1 px-5"><i class='bx bx-cloud-download me-1'></i>Downloads</button>
                    <button type="button" class="btn btn-outline-dark m-1 px-5"><i class='bx bx-cloud-upload me-1'></i>Upload</button>
                    <hr/>
                    <button type="button" class="btn btn-primary m-1 radius-30 px-5"><i class='bx bx-user me-1'></i>Person</button>
                    <button type="button" class="btn btn-secondary m-1 radius-30 px-5"><i class='bx bx-comment-detail me-1'></i>Comments</button>
                    <button type="button" class="btn btn-success m-1 radius-30 px-5"><i class='bx bx-home-alt me-1'></i>Home</button>
                    <button type="button" class="btn btn-danger m-1 radius-30 px-5"><i class='bx bx-blanket me-1'></i>blanket</button>
                    <button type="button" class="btn btn-warning m-1 radius-30 px-5"><i class='bx bx-heart me-1'></i>Love</button>
                    <button type="button" class="btn btn-info m-1 radius-30 px-5"><i class='bx bx-refresh me-1'></i>Refresh</button>
                    <button type="button" class="btn btn-dark m-1 radius-30 px-5"><i class='bx bx-like me-1'></i>Like</button>
                    <hr/>
                    <button type="button" class="btn btn-outline-primary m-1 radius-30 px-5"><i class='bx bx-user me-1'></i>Person</button>
                    <button type="button" class="btn btn-outline-secondary m-1 radius-30 px-5"><i class='bx bx-comment-detail me-1'></i>Comments</button>
                    <button type="button" class="btn btn-outline-success m-1 radius-30 px-5"><i class='bx bx-home-alt me-1'></i>Home</button>
                    <button type="button" class="btn btn-outline-danger m-1 radius-30 px-5"><i class='bx bx-blanket me-1'></i>blanket</button>
                    <button type="button" class="btn btn-outline-warning m-1 radius-30 px-5"><i class='bx bx-heart me-1'></i>Love</button>
                    <button type="button" class="btn btn-outline-info m-1 radius-30 px-5"><i class='bx bx-refresh me-1'></i>Refresh</button>
                    <button type="button" class="btn btn-outline-dark m-1 radius-30 px-5"><i class='bx bx-like me-1'></i>Like</button>
                    <hr>
                    <button type="button" class="btn btn-primary m-1"><i class='bx bx-user'></i>
                    </button>
                    <button type="button" class="btn btn-secondary m-1"><i class='bx bx-comment-detail'></i>
                    </button>
                    <button type="button" class="btn btn-success m-1"><i class='bx bx-home-alt'></i>
                    </button>
                    <button type="button" class="btn btn-danger m-1"><i class='bx bx-blanket'></i>
                    </button>
                    <button type="button" class="btn btn-warning m-1"><i class='bx bx-heart'></i>
                    </button>
                    <button type="button" class="btn btn-info m-1"><i class='bx bx-refresh'></i>
                    </button>
                    <button type="button" class="btn btn-dark m-1"><i class='bx bx-like'></i>
                    </button>
                    <hr>
                    <button type="button" class="btn btn-outline-primary m-1"><i class='bx bx-user'></i>
                    </button>
                    <button type="button" class="btn btn-outline-secondary m-1"><i class='bx bx-comment-detail'></i>
                    </button>
                    <button type="button" class="btn btn-outline-success m-1"><i class='bx bx-home-alt'></i>
                    </button>
                    <button type="button" class="btn btn-outline-danger m-1"><i class='bx bx-blanket'></i>
                    </button>
                    <button type="button" class="btn btn-outline-warning m-1"><i class='bx bx-heart'></i>
                    </button>
                    <button type="button" class="btn btn-outline-info m-1"><i class='bx bx-refresh'></i>
                    </button>
                    <button type="button" class="btn btn-outline-dark m-1"><i class='bx bx-like'></i>
                    </button>
                    <hr>
                    <button type="button" class="btn btn-light-primary m-1"><i class='bx bx-user'></i>
                    </button>
                    <button type="button" class="btn btn-light-secondary m-1"><i class='bx bx-comment-detail'></i>
                    </button>
                    <button type="button" class="btn btn-light-success m-1"><i class='bx bx-home-alt'></i>
                    </button>
                    <button type="button" class="btn btn-light-danger m-1"><i class='bx bx-blanket'></i>
                    </button>
                    <button type="button" class="btn btn-light-warning m-1"><i class='bx bx-heart'></i>
                    </button>
                    <button type="button" class="btn btn-light-info m-1"><i class='bx bx-refresh'></i>
                    </button>
                    <button type="button" class="btn btn-light-dark m-1"><i class='bx bx-like'></i>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6 col-xl-6">
                    <div class="card radius-15">
                        <div class="card-body">
                            <div class="card-title">
                                <h4 class="mb-0">Size Buttons</h4>
                            </div>
                            <hr/>
                            <button type="button" class="btn btn-primary m-1 btn-lg px-5">Large Size Button</button>
                            <button type="button" class="btn btn-danger m-1 px-5">Default Size Button</button>
                            <button type="button" class="btn btn-dark btn-sm m-1 px-5">Small Size Button</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-6">
                    <div class="card radius-15">
                        <div class="card-body">
                            <div class="card-title">
                                <h4 class="mb-0">Block Buttons</h4>
                            </div>
                            <hr/>
                            <button type="button" class="btn btn-primary m-1 btn-lg btn-block px-5">Large Size Button</button>
                            <button type="button" class="btn btn-danger m-1 btn-block px-5">Default Size Button</button>
                            <button type="button" class="btn btn-dark btn-sm btn-block m-1 px-5">Small Size Button</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
            <div class="card radius-15">
                <div class="card-body">
                    <div class="card-title">
                        <h4 class="mb-0">Group Buttons</h4>
                    </div>
                    <hr/>
                    <div class="btn-group m-1" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-secondary">Left</button>
                        <button type="button" class="btn btn-secondary">Middle</button>
                        <button type="button" class="btn btn-secondary">Right</button>
                    </div>
                    <div class="btn-group m-1" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-primary">Left</button>
                        <button type="button" class="btn btn-primary">Middle</button>
                        <button type="button" class="btn btn-primary">Right</button>
                    </div>
                    <div class="btn-group m-1" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-danger">Left</button>
                        <button type="button" class="btn btn-danger">Middle</button>
                        <button type="button" class="btn btn-danger">Right</button>
                    </div>
                    <div class="btn-group m-1" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-success">Left</button>
                        <button type="button" class="btn btn-success">Middle</button>
                        <button type="button" class="btn btn-success">Right</button>
                    </div>
                    <hr/>
                    <div class="btn-group m-1" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-outline-secondary">Left</button>
                        <button type="button" class="btn btn-outline-secondary">Middle</button>
                        <button type="button" class="btn btn-outline-secondary">Right</button>
                    </div>
                    <div class="btn-group m-1" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-outline-primary">Left</button>
                        <button type="button" class="btn btn-outline-primary">Middle</button>
                        <button type="button" class="btn btn-outline-primary">Right</button>
                    </div>
                    <div class="btn-group m-1" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-outline-danger">Left</button>
                        <button type="button" class="btn btn-outline-danger">Middle</button>
                        <button type="button" class="btn btn-outline-danger">Right</button>
                    </div>
                    <div class="btn-group m-1" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-outline-success">Left</button>
                        <button type="button" class="btn btn-outline-success">Middle</button>
                        <button type="button" class="btn btn-outline-success">Right</button>
                    </div>
                    <hr>
                    <div class="btn-group m-1" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-dark"><i class="bx bx-like"></i>
                        </button>
                        <button type="button" class="btn btn-dark"><i class="bx bx-share"></i>
                        </button>
                        <button type="button" class="btn btn-dark"><i class="bx bx-comment-detail"></i>
                        </button>
                    </div>
                    <div class="btn-group m-1" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-info"><i class="bx bxs-music"></i>
                        </button>
                        <button type="button" class="btn btn-info"><i class="bx bxs-heart"></i>
                        </button>
                        <button type="button" class="btn btn-info"><i class="bx bxs-florist"></i>
                        </button>
                    </div>
                    <div class="btn-group m-1" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-warning"><i class="bx bx-left-arrow"></i>
                        </button>
                        <button type="button" class="btn btn-warning"><i class="bx bx-up-arrow"></i>
                        </button>
                        <button type="button" class="btn btn-warning"><i class="bx bx-right-arrow"></i>
                        </button>
                    </div>
                    <div class="btn-group m-1" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-primary"><i class="bx bxl-facebook-square"></i>
                        </button>
                        <button type="button" class="btn btn-primary"><i class="bx bxl-twitter"></i>
                        </button>
                        <button type="button" class="btn btn-primary"><i class="bx bxl-linkedin-square"></i>
                        </button>
                    </div>
                    <hr>
                    <div class="btn-group m-1" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-outline-dark"><i class="bx bx-like"></i>
                        </button>
                        <button type="button" class="btn btn-outline-dark"><i class="bx bx-share"></i>
                        </button>
                        <button type="button" class="btn btn-outline-dark"><i class="bx bx-comment-detail"></i>
                        </button>
                    </div>
                    <div class="btn-group m-1" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-outline-info"><i class="bx bxs-music"></i>
                        </button>
                        <button type="button" class="btn btn-outline-info"><i class="bx bxs-heart"></i>
                        </button>
                        <button type="button" class="btn btn-outline-info"><i class="bx bxs-florist"></i>
                        </button>
                    </div>
                    <div class="btn-group m-1" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-outline-warning"><i class="bx bx-left-arrow"></i>
                        </button>
                        <button type="button" class="btn btn-outline-warning"><i class="bx bx-up-arrow"></i>
                        </button>
                        <button type="button" class="btn btn-outline-warning"><i class="bx bx-right-arrow"></i>
                        </button>
                    </div>
                    <div class="btn-group m-1" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-outline-primary"><i class="bx bxl-facebook-square"></i>
                        </button>
                        <button type="button" class="btn btn-outline-primary"><i class="bx bxl-twitter"></i>
                        </button>
                        <button type="button" class="btn btn-outline-primary"><i class="bx bxl-linkedin-square"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="card radius-15">
                <div class="card-body">
                    <div class="card-title">
                        <h4 class="mb-0">Dropdown Buttons</h4>
                    </div>
                    <hr/>
                    <div class="btn-group m-1" role="group" aria-label="Button group with nested dropdown">
                        <button type="button" class="btn btn-secondary">1</button>
                        <button type="button" class="btn btn-secondary">2</button>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                            <div class="dropdown-menu">	<a class="dropdown-item" href="#">Dropdown link</a>
                                <a class="dropdown-item" href="#">Dropdown link</a>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group m-1" role="group" aria-label="Button group with nested dropdown">
                        <button type="button" class="btn btn-primary">1</button>
                        <button type="button" class="btn btn-primary">2</button>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                            <div class="dropdown-menu">	<a class="dropdown-item" href="#">Dropdown link</a>
                                <a class="dropdown-item" href="#">Dropdown link</a>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group m-1" role="group" aria-label="Button group with nested dropdown">
                        <button type="button" class="btn btn-outline-danger">1</button>
                        <button type="button" class="btn btn-outline-danger">2</button>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-outline-danger dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                            <div class="dropdown-menu">	<a class="dropdown-item" href="#">Dropdown link</a>
                                <a class="dropdown-item" href="#">Dropdown link</a>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group m-1" role="group" aria-label="Button group with nested dropdown">
                        <button type="button" class="btn btn-outline-dark">1</button>
                        <button type="button" class="btn btn-outline-dark">2</button>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-outline-dark dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                            <div class="dropdown-menu">	<a class="dropdown-item" href="#">Dropdown link</a>
                                <a class="dropdown-item" href="#">Dropdown link</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Primary</button>
                        <div class="dropdown-menu">	<a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>	<a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Success</button>
                        <div class="dropdown-menu">	<a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>	<a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Info</button>
                        <div class="dropdown-menu">	<a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>	<a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Danger</button>
                        <div class="dropdown-menu">	<a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>	<a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Warning</button>
                        <div class="dropdown-menu">	<a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>	<a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-title">
                        <h4 class="mb-0">Split Button</h4>
                    </div>
                    <hr/>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary">Primary</button>
                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">	<span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">	<a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>	<a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-secondary">Secondary</button>
                        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">	<span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">	<a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>	<a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-success">Success</button>
                        <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">	<span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">	<a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>	<a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Info</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">	<span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">	<a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>	<a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-warning">Warning</button>
                        <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">	<span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">	<a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>	<a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger">Danger</button>
                        <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">	<span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">	<a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>	<a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card radius-15">
                <div class="card-body">
                    <div class="card-title">
                        <h4 class="mb-0">Vertical variation</h4>
                    </div>
                    <hr/>
                    <div class="btn-group-vertical m-1" role="group" aria-label="Vertical button group">
                        <button type="button" class="btn btn-secondary">Button</button>
                        <button type="button" class="btn btn-secondary">Button</button>
                        <button type="button" class="btn btn-secondary">Button</button>
                        <button type="button" class="btn btn-secondary">Button</button>
                        <button type="button" class="btn btn-secondary">Button</button>
                        <button type="button" class="btn btn-secondary">Button</button>
                    </div>
                    <div class="btn-group-vertical m-1" role="group" aria-label="Vertical button group">
                        <button type="button" class="btn btn-primary">Button</button>
                        <button type="button" class="btn btn-primary">Button</button>
                        <button type="button" class="btn btn-primary">Button</button>
                        <button type="button" class="btn btn-primary">Button</button>
                        <button type="button" class="btn btn-primary">Button</button>
                        <button type="button" class="btn btn-primary">Button</button>
                    </div>
                    <div class="btn-group-vertical m-1" role="group" aria-label="Vertical button group">
                        <button type="button" class="btn btn-danger">Button</button>
                        <button type="button" class="btn btn-danger">Button</button>
                        <button type="button" class="btn btn-danger">Button</button>
                        <button type="button" class="btn btn-danger">Button</button>
                        <button type="button" class="btn btn-danger">Button</button>
                        <button type="button" class="btn btn-danger">Button</button>
                    </div>
                    <div class="btn-group-vertical m-1" role="group" aria-label="Vertical button group">
                        <button type="button" class="btn btn-outline-success">Button</button>
                        <button type="button" class="btn btn-outline-success">Button</button>
                        <button type="button" class="btn btn-outline-success">Button</button>
                        <button type="button" class="btn btn-outline-success">Button</button>
                        <button type="button" class="btn btn-outline-success">Button</button>
                        <button type="button" class="btn btn-outline-success">Button</button>
                    </div>
                    <div class="btn-group-vertical m-1" role="group" aria-label="Vertical button group">
                        <button type="button" class="btn btn-outline-warning">Button</button>
                        <button type="button" class="btn btn-outline-warning">Button</button>
                        <button type="button" class="btn btn-outline-warning">Button</button>
                        <button type="button" class="btn btn-outline-warning">Button</button>
                        <button type="button" class="btn btn-outline-warning">Button</button>
                        <button type="button" class="btn btn-outline-warning">Button</button>
                    </div>
                    <div class="btn-group-vertical m-1" role="group" aria-label="Vertical button group">
                        <button type="button" class="btn btn-info"><i class='bx bxl-facebook-square'></i>
                        </button>
                        <button type="button" class="btn btn-info"><i class='bx bxl-twitter'></i>
                        </button>
                        <button type="button" class="btn btn-info"><i class='bx bxl-linkedin-square'></i>
                        </button>
                        <button type="button" class="btn btn-info"><i class='bx bxl-youtube'></i>
                        </button>
                        <button type="button" class="btn btn-info"><i class='bx bxl-wordpress'></i>
                        </button>
                        <button type="button" class="btn btn-info"><i class='bx bxl-pinterest'></i>
                        </button>
                    </div>
                    <div class="btn-group-vertical m-1" role="group" aria-label="Vertical button group">
                        <button type="button" class="btn btn-dark"><i class='bx bx-home-smile'></i>
                        </button>
                        <button type="button" class="btn btn-dark"><i class='bx bx-coin-stack'></i>
                        </button>
                        <button type="button" class="btn btn-dark"><i class='bx bx-book-heart'></i>
                        </button>
                        <button type="button" class="btn btn-dark"><i class='bx bx-video-recording'></i>
                        </button>
                        <button type="button" class="btn btn-dark"><i class='bx bx-paper-plane'></i>
                        </button>
                        <button type="button" class="btn btn-dark"><i class='bx bx-trash-alt'></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="card radius-15">
                <div class="card-body">
                    <div class="card-title">
                        <h4 class="mb-0">Social Buttons</h4>
                    </div>
                    <hr/>
                    <button type="button" class="btn btn-facebook m-1"><i class='bx bxl-facebook-square me-1'></i>Login with facebook</button>
                    <button type="button" class="btn btn-twitter m-1"><i class='bx bxl-twitter me-1'></i>Login with twitter</button>
                    <button type="button" class="btn btn-linkedin m-1"><i class='bx bxl-linkedin-square me-1'></i>Login with linkedin</button>
                    <button type="button" class="btn btn-youtube m-1"><i class='bx bxl-youtube me-1'></i>View on youtube</button>
                    <button type="button" class="btn btn-github m-1"><i class='bx bxl-github me-1'></i>Connect with github</button>
                    <button type="button" class="btn btn-skype m-1"><i class='bx bxl-skype me-1'></i>Connect with skype</button>
                    <button type="button" class="btn btn-pinterest m-1"><i class='bx bxl-pinterest me-1'></i>Pin it 4.21</button>
                    <button type="button" class="btn btn-dribbble m-1"><i class='bx bxl-dribbble me-1'></i>Find us on dribbble</button>
                    <hr>
                    <button type="button" class="btn btn-facebook m-1"><i class='bx bxl-facebook-square'></i>
                    </button>
                    <button type="button" class="btn btn-twitter m-1"><i class='bx bxl-twitter'></i>
                    </button>
                    <button type="button" class="btn btn-linkedin m-1"><i class='bx bxl-linkedin-square'></i>
                    </button>
                    <button type="button" class="btn btn-youtube m-1"><i class='bx bxl-youtube'></i>
                    </button>
                    <button type="button" class="btn btn-github m-1"><i class='bx bxl-github'></i>
                    </button>
                    <button type="button" class="btn btn-skype m-1"><i class='bx bxl-skype'></i>
                    </button>
                    <button type="button" class="btn btn-pinterest m-1"><i class='bx bxl-pinterest'></i>
                    </button>
                    <button type="button" class="btn btn-dribbble m-1"><i class='bx bxl-dribbble'></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--end page-content-wrapper-->
</div>
<!--end page-wrapper-->
@endsection
