@extends('admin.layouts.dashboard')


@section('style')
{{-- special styles for this page --}}
<link href="{{ asset('assets/admin/plugins/image-uploader/image-uploader.css') }}" rel="stylesheet" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
    integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<style>
    .labels {
        font-size: 18px;
    }

    .img-preview {
        max-width: 180px;
    }

    input[type=file] {
        padding: 10px;
        /* background: #2d2d2d; */
    }
</style>
@endsection


@section('content')
<!--page-wrapper-->
<div class="page-wrapper">
    <!--page-content-wrapper-->
    <div class="page-content-wrapper">
        <div class="page-content">


            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">


            </div>
            <!--end breadcrumb-->


            <div class="col-12 col-lg-12 col-xl-12">

                <div class="col-xl-9 mx-auto">
                    <h6 class="mb-0 text-uppercase">Add a new film</h6>
                    <hr>
                    <div class="card border-top border-0 border-4 border-primary">
                        <div class="card-body p-5">
                            <div class="card-title d-flex align-items-center">
                                <h4 class="mb-0 text-primary">Film Info</h4>
                            </div>

                            <hr>
                            <div class="mt-2">
                                @include('admin.layouts.partials.messages')
                            </div>
                            <form action="{{route('admin.film.update_img',['id'=>$film->id])}}" method="POST"
                                class="row g-3" enctype="multipart/form-data">
                                @csrf

                                {{-- add more images --}}


                                <div class="col-md-8">
                                    <label for="image" class="form-label labels"><strong>{{ __('add more images')
                                            }}</strong>
                                        <span class="text-danger"> *</span>
                                    </label>
                                    <br>
                                    <input type='file' id="images" name="image[]" multiple
                                        accept=".jpg, .png, image/jpeg, image/png" onchange="readURL(this);" />

                                    <img class="img-preview" id="image_preview1" src="image" alt="choose image" />
                                   <label>Film images</label>
                                    <br>
                                    <div class="img_thumbnail">
                                    @foreach ($film->images as $img)
                                    <a href="{{ url($img->path) }}">
                                        <img src="{{ url($img->path) }}"   >
                                    </a>
                                    @endforeach
                                    </div>


                                    <div>
                                        @if ($errors->has('image'))
                                        <span class="text-danger text-left">{{ $errors->first('image') }}</span>
                                        @endif
                                    </div>

                                </div>

                                <hr>

                                <div class="row d-flex">
                                    <div class="col-md-2">
                                        <button class="btn btn-success" type="submit">{{ __('Add') }}</button>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="{{route('admin.film.edit',['id' =>$film->id])}}" role="button" class="btn btn-warning">{{
                                            __('Cencel') }}</a>
                                    </div>
                                </div>


                            </form>

                        </div>
                    </div>
                </div>



            </div>

        </div>
    </div>
    <!--end page-content-wrapper-->
</div>
<!--end page-content-wrapper-->
@endsection


@section('script')
{{-- special scripts --}}
<script src="{{ asset('assets/admin/plugins/image-uploader/image-uploader.js') }}"></script>

<script>
    function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#image_preview1')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
@endsection
