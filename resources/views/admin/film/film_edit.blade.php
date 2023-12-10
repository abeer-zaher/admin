@extends('admin.layouts.dashboard')


@section('style')
    <style>
        .labels {
            font-size: 18px;
        }

        .image-upload>input {
            display: none;
        }

        .attach-doc {
            cursor: pointer;
        }
    </style>
@endsection

@section('content')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">


    </div>
    <!--end breadcrumb-->

    <!--page-wrapper-->
    <div class="page-wrapper">
        <!--page-content-wrapper-->
        <div class="page-content-wrapper">
            <div class="page-content">

                {{-- <div class="mt-2">
                    @include('admin.layouts.partials.messages')
                </div> --}}
                <form method="POST" action="{{route('admin.film.update',['id'=>$film->id])}}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="card col-12 radius-15">
                        <div class="row mt-5">
                            <div class="col-lg-6 col-xl-6">

                                {{-- Product Image --}}
                                <div class="card-group radius-15">
                                    <div class="card">
                                        <img id="image" src="{{ url('$film->photo') }}" class="d-block w-100"
                                            alt="...">
                                        <div class="card-body">
                                            <div class="image-upload">
                                                <label for="input_image">
                                                    <i class="attach-doc fa fa-cloud-upload fa-2x" aria-hidden="true"></i>
                                                </label>

                                                <input name="image" class="form-control" id="input_image" type="file"
                                                    onchange="replaceImg(this, 'photo');" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                                {{-- Film Informations --}}
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">

                                        {{-- Film Name --}}
                                        <li class="list-group-item row d-flex">
                                            <div class="col-lg-6">
                                                <label for="name" class="form-label labels"><strong>اسم التصنيف</strong>
                                                    <span class="text-danger"> *</span>
                                                </label>
                                                <input type="text" id="name" name="name" class="form-control"
                                                    value="{{$film->name}}">

                                                @if ($errors->has('name'))
                                                    <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                                                @endif
                                            </div>
                                        </li>

                                        {{-- Film Description --}}
                                        <li class="list-group-item">
                                            <div class="col-12">
                                                <label for="description" class="form-label labels"><strong>وصف التصنيف</strong>
                                                    <span class="text-danger"> *</span>
                                                </label>
                                                <textarea class="form-control" name="description" id="description" placeholder="وصف التصنيف..." rows="3">{{$film->description}}</textarea>

                                                @if ($errors->has('description'))
                                                    <span
                                                        class="text-danger text-left">{{ $errors->first('description') }}</span>
                                                @endif
                                            </div>
                                        </li>

                                        {{-- Film Dateshow --}}
                                        <li class="list-group-item row d-flex">
                                            <div class="col-lg-6">
                                                <label for="dateshow" class="form-label labels"><strong>Date show</strong>
                                                    <span class="text-danger"> *</span>
                                                </label>
                                                <input type="text" id="dateshow" name="dateshow" class="form-control"
                                                    value="{{$film->dateshow}}">

                                                @if ($errors->has('dateshow'))
                                                    <span class="text-danger text-left">{{ $errors->first('dateshow') }}</span>
                                                @endif
                                            </div>
                                        </li>

                                        {{-- Film director --}}
                                        <li class="list-group-item row d-flex">
                                            <div class="col-lg-6">
                                                <label for="director" class="form-label labels"><strong>Director</strong>
                                                    <span class="text-danger"> *</span>
                                                </label>
                                                <input type="text" id="director" name="director" class="form-control"
                                                    value="{{$film->director}}">

                                                @if ($errors->has('director'))
                                                    <span class="text-danger text-left">{{ $errors->first('director') }}</span>
                                                @endif
                                            </div>
                                        </li>

                                        {{-- Film prodcompany --}}
                                        <li class="list-group-item row d-flex">
                                            <div class="col-lg-6">
                                                <label for="prodcompany" class="form-label labels"><strong>Prodcompany</strong>
                                                    <span class="text-danger"> *</span>
                                                </label>
                                                <input type="text" id="prodcompany" name="prodcompany" class="form-control"
                                                    value="{{$film->prodcompany}}">

                                                @if ($errors->has('prodcompany'))
                                                    <span class="text-danger text-left">{{ $errors->first('prodcompany') }}</span>
                                                @endif
                                            </div>
                                        </li>

                                        {{-- Film cast --}}
                                        <li class="list-group-item row d-flex">
                                            <div class="col-lg-6">
                                                <label for="cast" class="form-label labels"><strong>Cast</strong>
                                                    <span class="text-danger"> *</span>
                                                </label>
                                                <input type="text" id="cast" name="cast" class="form-control"
                                                    value="{{$film->cast}}">

                                                @if ($errors->has('cast'))
                                                    <span class="text-danger text-left">{{ $errors->first('cast') }}</span>
                                                @endif
                                            </div>
                                        </li>


                                    </ul>
                                    <hr>
                                </div>
                            </div>



                        </div>

                        <div class="row d-flex">
                            <div class="col-md-4 mb-5">
                                <button type="submit" class="btn btn-success form-control">حفظ التعديلات</button>
                            </div>
                            <div class="col-md-4">
                                <a role="button" class="btn btn-primary form-control"
                                    href="{{route('admin.film.index')}}">رجوع</a>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <!--end page-content-wrapper-->
        </div>
        <!--end page-content-wrapper-->
    </div>
@endsection

@section('script')
{{-- special scripts --}}
    <script>
        function replaceImg(input, imgElement_id) {

            imgElement = '#' + imgElement_id;



            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $(imgElement).attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);

            }
        }
    </script>
@endsection
