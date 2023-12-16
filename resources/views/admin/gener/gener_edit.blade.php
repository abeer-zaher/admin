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

               <div class="mt-2">
                    @include('admin.layouts.partials.messages')
                </div>
                <form method="POST" action="{{route('admin.gener.update',['id'=>$gener->id])}}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="card col-12 radius-15">
                        <div class="row mt-5">
                            <div class="col-lg-6 col-xl-6">



                                {{-- Gener Informations --}}
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">

                                        {{-- Gener Name --}}
                                        <li class="list-group-item row d-flex">
                                            <div class="col-lg-6">
                                                <label for="name" class="form-label labels"><strong>Gener name</strong>
                                                    <span class="text-danger"> *</span>
                                                </label>
                                                <input type="text" id="name" name="name" class="form-control"
                                                    value="{{$gener->name}}">

                                                @if ($errors->has('name'))
                                                    <span class="text-danger text-left">{{ $errors->first('name') }}</span>
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
                                    href="{{route('admin.gener.index')}}">رجوع</a>
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
