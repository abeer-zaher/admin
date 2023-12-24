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
                <form method="POST" action="{{route('admin.film.update',['id'=>$film->id])}}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="card col-12 radius-15">
                        <div class="row mt-5">
                            <div class="col-lg-6 col-xl-6">

                                {{-- Film Image --}}
                                <div class="card-group radius-15">
                                    <div class="card">
                                        <label >Film poster</label>
                                        <div class="img_thumbnail">
                                            <a href="{{ url($film->photo) }}">
                                               <img src="{{ url($film->photo) }}" >
                                                  </a>
                                        </div>
                                                  <div class="card-body">
                                                    <div class="image-upload">
                                                        <label for="input_image">
                                                            <i class="attach-doc fa fa-cloud-upload fa-2x" aria-hidden="true"></i>
                                                        </label>

                                                        <input name="photo" class="form-control" id="input_image" type="file" onchange="replaceImg(this, 'photo');" />
                                                    </div>
                                                </div>

                                                  <div>
                                                    <label >Film images</label>
                                                    <br>
                                                    <div class="img_thumbnail">
                                                    @foreach ($film->images as $img)
                                                    <a href="{{ url($img->path) }}">
                                                      <img src="{{ url($img->path) }}" >
                                                    </a>
                                                    @endforeach
                                                </div>
                                                  </div>
                                        <div class="card-body">
                                            <div class="image-upload">
                                                <label for="input_image">
                                                   {{-- <i class="attach-doc fa fa-cloud-upload fa-2x" aria-hidden="true"></i> --}}
                                                   <a role="button" type="button" class="btn btn-info" href="{{route('admin.film.edit_img',['id'=>$film->id])}}">
                                                        {{ __('change images') }} <span id="all_count_bedge" class="badge bg-light text-dark"></span>
                                                    </a>
                                                </label>

                                                <input name="image[]" class="form-control" id="input_image" type="file"
                                                    onchange="replaceImg(this, 'image');" />
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
                                                <label for="name" class="form-label labels"><strong>Film name</strong>
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
                                                <label for="description" class="form-label labels"><strong>Description</strong>
                                                    <span class="text-danger"> *</span>
                                                </label>
                                                <textarea class="form-control" name="description" id="description" placeholder="description.." rows="3">{{$film->description}}</textarea>

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
                                                <textarea class="form-control" name="cast" id="cast" placeholder="cast" rows="3">{{$film->cast}}</textarea>


                                                @if ($errors->has('cast'))
                                                    <span class="text-danger text-left">{{ $errors->first('cast') }}</span>
                                                @endif
                                            </div>
                                        </li>

                                        {{-- Film price --}}
                                        <li class="list-group-item row d-flex">
                                            <div class="col-lg-6">
                                                <label for="price" class="form-label labels"><strong>price</strong>
                                                    <span class="text-danger"> *</span>
                                                </label>
                                                <input type="text" id="price" name="price" class="form-control" value="{{$film->price}}">
                                                @if ($errors->has('price'))
                                                <span class="text-danger text-left">{{ $errors->first('price') }}</span>
                                                @endif
                                            </div>
                                        </li>

                                        {{--Gener of film--}}
                                        <li class="list-group-item row d-flex">
                                            <div class="col-lg-6">
                                                <label for="gener" class="form-label labels"><strong>Gener</strong>
                                                    <span class="text-danger"> *</span>
                                                </label>
                                                @php


                                                 $str = '';
                                                 foreach ($film->geners as $gener){
                                                 $str = ('-'. $gener->name);
                                                   }
                                                @endphp
                                                <input type="text" id="gener" name="gener" class="form-control"
                                                    value={{$str}}>

                                        <div>

                                               @foreach($geners as $item)

                                               <input type="checkbox" name="geners[]" value="{{$item->id}}" >

                                               <label for="formGroupExampleInput" >{{$item->name}}</label>
                                               <br>
                                                  @endforeach
                                             </div>


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
