

{{-- this page has table , extends from tables layout --}}
@extends('admin.layouts.tables')

@section('table')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">

        <div>
        <a role="button" type="button" class="btn btn-info" href="{{route('admin.film.create')}}">
            {{ __('إضافة فيلم') }} <span id="all_count_bedge" class="badge bg-light text-dark"></span>
        </a>
        <a role="button" type="button" class="btn btn-info" href="{{route('admin.gener.create')}}">
            {{ __('إضافة نوع') }} <span id="all_count_bedge" class="badge bg-light text-dark"></span>
        </a>
        </div>

    </div>
    <!--end breadcrumb-->

    <div class="card">
        <div class="card-body">

            <div class="card-title">
                <h4 class="mb-0">{{ __('التصنيفات') }}</h4>
            </div>
            <hr />

            <div class="card-title">
                <div>
                    <a role="button" type="button" class="btn btn-info" href="{{route('admin.film.index')}}">
                        {{ __('All films') }} <span id="all_count_bedge" class="badge bg-light text-dark"></span>
                    </a>

                    <a role="button" type="button" class="btn btn-info" href="{{route('admin.gener.index')}}">
                        {{ __('All geners') }} <span id="all_count_bedge" class="badge bg-light text-dark"></span>
                    </a>
                </div>
            </div>

            <hr>
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>name</th>
                            <th>description</th>
                            <th>dateshow</th>
                            <th>director</th>
                            <th>prodcompany</th>
                            <th>cast</th>
                            <th>photo</th>
                            <th>gener</th>
                        </tr>
                    </thead>
                    <tbody id="table-body">
                        @foreach ($films as $film)
                            <tr>
                                <td style="max-width: 3px">
                                    <p> {{ $film->id }} </p>
                                </td>
                                <td style="max-width: 50px">
                                    <p> {{ $film->name }} </p>
                                </td>
                                <td style="max-width: 200px">
                                    <p> {{ $film->description }} </p>
                                </td>
                                <td style="max-width: 50px">
                                    <p> {{ $film->dateshow }} </p>
                                </td>
                                <td style="max-width: 50px">
                                    <p> {{ $film->director }} </p>
                                </td>
                                  <td style="max-width: 50px">
                                    <p> {{ $film->prodcompany }} </p>
                                </td>
                                <td style="max-width: 200px">
                                    <p> {{ $film->cast }} </p>
                                </td>


                                <td style="max-width: 150px">
                                    <div class="gallery">

                                        <a href="{{ url($film->photo) }}">
                                            <img src="{{ url($film->photo) }}" class="user-img td-img">
                                        </a>

                                    </div>

                                    <div id="lightbox">
                                        <div class="image-container">
                                            <img src="">
                                            <span class="close">&times;</span>
                                        </div>
                                    </div>
                                </td>

                                <td style="max-width: 100px">
                                    <p>
                                        {{$film->geners}}
                                    </p>

                                </td>


                                <td style="max-width: 30px">

                                    <div class="d-flex" style="flex-wrap: wrap">

                                        <a href="{{ route('admin.film.edit', $film->id) }}">
                                            <i class="fa-solid fa-2x fa-pen-to-square"></i>
                                        </a>

                                    </div>
                                </td>


                            </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>name</th>
                            <th>description</th>
                            <th>dateshow</th>
                            <th>director</th>
                            <th>prodcompany</th>
                            <th>cast</th>
                            <th>photo</th>
                            <th>gener</th>
                        </tr>
                    </tfoot>
                </table>

            </div>
        </div>
    </div>
@endsection

@section('script2')
{{-- special scripts for this page --}}
@endsection
