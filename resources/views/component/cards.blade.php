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
                            <li class="breadcrumb-item active" aria-current="page">Cards</li>
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
            <h6 class="mb-0 text-uppercase">Text Card</h6>
            <hr>
            <div class="row">
                <div class="col-12 col-lg-6 col-xl-6">
                    <div class="card radius-15">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2">Card subtitle</h6>
                            <p class="text-justify">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle.</p> <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-6">
                    <div class="card radius-15">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2">Card subtitle</h6>
                            <p class="text-justify">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle.</p> <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-xl-4">
                    <div class="card bg-primary radius-15">
                        <div class="card-body">
                            <h5 class="card-title text-white">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-white">Card subtitle</h6>
                            <p class="text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p> <a href="#" class="card-link text-white">Card link</a>
                            <a href="#" class="card-link text-white">Another link</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-xl-4">
                    <div class="card bg-danger radius-15">
                        <div class="card-body">
                            <h5 class="card-title text-white">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-white">Card subtitle</h6>
                            <p class="text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p> <a href="#" class="card-link text-white">Card link</a>
                            <a href="#" class="card-link text-white">Another link</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-xl-4">
                    <div class="card bg-success radius-15">
                        <div class="card-body">
                            <h5 class="card-title text-white">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-white">Card subtitle</h6>
                            <p class="text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p> <a href="#" class="card-link text-white">Card link</a>
                            <a href="#" class="card-link text-white">Another link</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
            <div class="row">
                <div class="col-12 col-lg-3 col-xl-3">
                    <div class="card bg-info radius-15">
                        <div class="card-body">
                            <p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-xl-3">
                    <div class="card bg-secondary radius-15">
                        <div class="card-body">
                            <p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-xl-3">
                    <div class="card bg-dark radius-15">
                        <div class="card-body">
                            <p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-xl-3">
                    <div class="card bg-warning radius-15">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
            <h6 class="mb-0 text-uppercase">Card With Top Images</h6>
            <hr>
            <div class="row">
                <div class="col-12 col-lg-4 col-xl-4">
                    <div class="card">
                        <img src="assets/images/gallery/01.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-xl-4">
                    <div class="card">
                        <img src="assets/images/gallery/02.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-xl-4">
                    <div class="card">
                        <img src="assets/images/gallery/03.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
            <h6 class="mb-0 text-uppercase">List Card</h6>
            <hr>
            <div class="row">
                <div class="col-12 col-lg-4 col-xl-4">
                    <div class="card">
                        <img src="assets/images/gallery/05.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                        <div class="card-body"> <a href="javascript:;" class="card-link">Card link</a>
                            <a href="javascript:;" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-xl-4">
                    <div class="card">
                        <img src="assets/images/gallery/06.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                        <div class="card-body"> <a href="javascript:;" class="card-link">Card link</a>
                            <a href="javascript:;" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-xl-4">
                    <div class="card">
                        <img src="assets/images/gallery/07.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                        <div class="card-body"> <a href="javascript:;" class="card-link">Card link</a>
                            <a href="javascript:;" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
            <h6 class="mb-0 text-uppercase">Profile Cards</h6>
            <hr>
            <div class="row">
                <div class="col-12 col-lg-3 col-xl-3">
                    <div class="card">
                        <img src="assets/images/gallery/39.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-0">Mark Rockwell</h5>
                            <p class="mb-0">CEO - Consultant</p>
                            <hr/>
                            <div class="profile-social mt-3">	<a href="javascript:;" class="bg-facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="javascript:;" class="bg-twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="javascript:;" class="bg-google"><i class="bx bxl-google"></i></a>
                                <a href="javascript:;" class="bg-linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-xl-3">
                    <div class="card">
                        <img src="assets/images/gallery/40.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-0">Macrita Deo</h5>
                            <p class="mb-0">UI/UX Developer</p>
                            <hr/>
                            <div class="profile-social mt-3">	<a href="javascript:;" class="bg-facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="javascript:;" class="bg-twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="javascript:;" class="bg-google"><i class="bx bxl-google"></i></a>
                                <a href="javascript:;" class="bg-linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-xl-3">
                    <div class="card">
                        <img src="assets/images/gallery/41.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-0">Clark Michel</h5>
                            <p class="mb-0">CEO - Consultant</p>
                            <hr/>
                            <div class="profile-social mt-3">	<a href="javascript:;" class="bg-facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="javascript:;" class="bg-twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="javascript:;" class="bg-google"><i class="bx bxl-google"></i></a>
                                <a href="javascript:;" class="bg-linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-xl-3">
                    <div class="card">
                        <img src="assets/images/gallery/42.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-0">Jhonathan Linta</h5>
                            <p class="mb-0">Project Manager</p>
                            <hr/>
                            <div class="profile-social mt-3">	<a href="javascript:;" class="bg-facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="javascript:;" class="bg-twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="javascript:;" class="bg-google"><i class="bx bxl-google"></i></a>
                                <a href="javascript:;" class="bg-linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
            <h6 class="mb-0 text-uppercase">Image caps</h6>
            <hr>
            <div class="row">
                <div class="col-12 col-lg-6 col-xl-6">
                    <div class="card mb-3">
                        <img src="assets/images/gallery/08.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                        <img src="assets/images/gallery/09.jpg" class="card-img-top" alt="...">
                    </div>
                </div>
            </div>
            <!--end row-->
            <h6 class="mb-0 text-uppercase">Horizontal Card</h6>
            <hr>
            <div class="row">
                <div class="col-12 col-lg-6 col-xl-6">
                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="assets/images/gallery/10.jpg" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-6">
                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <img src="assets/images/gallery/11.jpg" class="card-img" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
            <h6 class="mb-0 text-uppercase">Overlay Card</h6>
            <hr>
            <div class="row">
                <div class="col-12 col-lg-6 col-xl-6">
                    <div class="card text-white">
                        <img src="assets/images/gallery/12.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text">Last updated 3 mins ago</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-6">
                    <div class="card text-white">
                        <img src="assets/images/gallery/13.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text">Last updated 3 mins ago</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
            <h6 class="mb-0 text-uppercase">Card Group</h6>
            <hr>
            <div class="card-group">
                <div class="card">
                    <img src="assets/images/gallery/14.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/images/gallery/15.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/images/gallery/16.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>
            <h6 class="mb-0 text-uppercase">Card Deck</h6>
            <hr>
            <div class="d-flex flex-column flex-xl-row gap-4">
                <div class="card">
                    <img src="assets/images/gallery/17.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/images/gallery/18.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/images/gallery/19.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>
            <h6 class="mb-0 text-uppercase">Navbar Card</h6>
            <hr>
            <div class="card text-center">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item"> <a class="nav-link active" href="#">Active</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card text-center">
                <div class="card-header">
                    <ul class="nav nav-pills card-header-pills">
                        <li class="nav-item"> <a class="nav-link active" href="#">Active</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <h6 class="mb-0 text-uppercase">Card Actions</h6>
            <hr>
            <div class="row card-collapse">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header has-arrow">Featured</div>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> <a href="javascript:;" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mm-active">
                        <div class="card-header has-arrow">Featured</div>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> <a href="javascript:;" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row card-collapse">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header has-arrow">Featured</div>
                        <div class="card-body">
                            <h5 class="card-title">What is Lorem Ipsum?</h5>
                            <p class="card-text text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mm-active">
                        <div class="card-header has-arrow">Featured</div>
                        <div class="card-body">
                            <h5 class="card-title">Where does it come from?</h5>
                            <p class="card-text text-justify">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--end page content-->
    </div>
    <!--end page-content-wrapper-->
</div>
<!--end page-wrapper-->
@endsection
