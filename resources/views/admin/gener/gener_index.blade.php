

{{-- this page has table , extends from tables layout --}}
@extends('admin.layouts.tables')

@section('table')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">

        <div>
       {{-- <a role="button" type="button" class="btn btn-info" href="{{route('admin.film.create')}}">
            {{ __('Add film') }} <span id="all_count_bedge" class="badge bg-light text-dark"></span>
        </a>--}}
        <a role="button" type="button" class="btn btn-info" href="{{route('admin.gener.create')}}">
            {{ __('Add gener') }} <span id="all_count_bedge" class="badge bg-light text-dark"></span>
        </a>
        </div>

    </div>
    <!--end breadcrumb-->

    <div class="card">
        <div class="card-body">

            <div class="card-title">
                <h4 class="mb-0">{{ __('Categories') }}</h4>
            </div>
            <hr />

            <div class="card-title">
                <div>
                    {{--<a role="button" type="button" class="btn btn-info" href="{{route('admin.film.index')}}">
                        {{ __('All films') }} <span id="all_count_bedge" class="badge bg-light text-dark"></span>
                    </a>--}}

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

                        </tr>
                    </thead>
                    <tbody id="table-body">
                        @foreach ($geners as $gener)
                            <tr>
                                <td style="max-width: 3px">
                                    <p> {{ $gener->id }} </p>
                                </td>
                                <td style="max-width: 50px">
                                    <p> {{ $gener->name }} </p>
                                </td>



                                <td style="max-width: 30px">

                                    <div class="d-flex" style="flex-wrap: wrap">

                                        <a href="{{ route('admin.gener.edit', $gener->id) }}">
                                            <i class="fa-solid fa-2x fa-pen-to-square"></i>
                                        </a>
                                        <a href="{{ route('admin.gener.destroy', $gener->id) }}">
                                            <i class="fas fa-2x fa-trash-alt"></i>
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
