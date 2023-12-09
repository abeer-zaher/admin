@extends('layouts.app')
@section('content')
    <!--page-wrapper-->
    <div class="page-wrapper">
        <!--page-content-wrapper-->
        <div class="page-content-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
                    <div class="breadcrumb-title pr-3">Components</div>
                    <div class="pl-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Chips</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ml-auto">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">Settings</button>
                            <button type="button" class="btn btn-primary bg-split-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">	<span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">	<a class="dropdown-item" href="javascript:;">Action</a>
                                <a class="dropdown-item" href="javascript:;">Another action</a>
                                <a class="dropdown-item" href="javascript:;">Something else here</a>
                                <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end breadcrumb-->
                <div class="card">
                    <div class="card-header">Chips</div>
                    <div class="card-body">
                        <div class="chip">
                            <img src="assets/images/avatars/avatar-1.png" alt="Contact Person">John Doe</div>
                        <div class="chip">
                            <img src="assets/images/avatars/avatar-2.png" alt="Contact Person">Jessica Doe</div>
                        <div class="chip">
                            <img src="assets/images/avatars/avatar-3.png" alt="Contact Person">Michele Powa</div>
                        <div class="chip">
                            <img src="assets/images/avatars/avatar-4.png" alt="Contact Person">Clark Natela</div>
                        <div class="chip">
                            <img src="assets/images/avatars/avatar-5.png" alt="Contact Person">Anantu Painda <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
                        </div>
                        <div class="chip">
                            <img src="assets/images/avatars/avatar-6.png" alt="Contact Person">Tiger Xink <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
                        </div>
                        <div class="chip">
                            <img src="assets/images/avatars/avatar-7.png" alt="Contact Person">Salena Chain <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
                        </div>
                        <hr>
                        <div class="chip">John Doe <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
                        </div>
                        <div class="chip">Jessica Doe <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
                        </div>
                        <div class="chip">Michele Powa <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
                        </div>
                        <div class="chip">Clark Natela <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
                        </div>
                        <div class="chip">Anantu Painda <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
                        </div>
                        <div class="chip">Tiger Xink <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
                        </div>
                        <div class="chip">Salena Chain <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Sizing and Colors</div>
                    <div class="card-body">
                        <div class="chip chip-md">
                            <img src="assets/images/avatars/avatar-1.png" alt="Contact Person">John Doe</div>
                        <div class="chip chip-md bg-light text-dark">
                            <img src="assets/images/avatars/avatar-2.png" alt="Contact Person">Jessica Doe</div>
                        <div class="chip chip-md bg-dark text-white">
                            <img src="assets/images/avatars/avatar-3.png" alt="Contact Person">Michele Powa <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
                        </div>
                        <div class="chip chip-md bg-danger text-white">
                            <img src="assets/images/avatars/avatar-4.png" alt="Contact Person">Clark Natela <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
                        </div>
                        <hr>
                        <div class="chip chip-lg">
                            <img src="assets/images/avatars/avatar-5.png" alt="Contact Person">Anantu Painda <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
                        </div>
                        <div class="chip chip-lg bg-primary text-white">
                            <img src="assets/images/avatars/avatar-6.png" alt="Contact Person">Tiger Xink <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
                        </div>
                        <div class="chip chip-lg bg-warning text-white">
                            <img src="assets/images/avatars/avatar-7.png" alt="Contact Person">Salena Chain <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
                        </div>
                        <hr>
                        <div class="chip chip-md">John Doe <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
                        </div>
                        <div class="chip chip-md">Jessica Doe <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
                        </div>
                        <div class="chip chip-md bg-info text-white">Michele Powa <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
                        </div>
                        <div class="chip chip-md bg-success text-white">Clark Natela <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
                        </div>
                        <hr>
                        <div class="chip chip-lg">Anantu Painda <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
                        </div>
                        <div class="chip chip-lg bg-secondary text-white">Tiger Xink <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
                        </div>
                        <div class="chip chip-lg bg-dark text-white">Salena Chain <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end page-content-wrapper-->
    </div>
    <!--end page-wrapper-->
    @endsection
