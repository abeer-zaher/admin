@extends('admin.layouts.dashboard')

@php
    $page = 'setting_edit';
@endphp

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
    <!--page-wrapper-->
    <div class="page-wrapper">
        <!--page-content-wrapper-->
        <div class="page-content-wrapper">
            <div class="page-content">

                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">

                </div>
                <!--end breadcrumb-->

                <div class="card radius-15" style="background-color: rgba(177, 169, 169, 0.451)">
                    <div class="card-body">


                        <div class="card-title">
                            <h4 class="mb-0">تعديل قيمة الاعدادات</h4>
                        </div>
                        <hr />

                        <form method="POST" action="{{ route('admin.settings.update', $setting) }}"
                            enctype="multipart/form-data">
                            @method('patch')
                            @csrf

                            <div class="rwo">
                                <label for="key" class="form-label">{{ __('المفتاح') }}</label>
                                <input type="text" class="form-control" name="key" value="{{ $setting->key }}"
                                    disabled>

                                @if ($errors->has('key'))
                                    <span class="text-danger text-left">{{ $errors->first('key') }}</span>
                                @endif
                            </div>
                            <hr>
                            <div class="rwo">
                                <label for="value" class="form-label">{{ __('القيمة') }}</label>

                                <textarea class="form-control" name="value" id="value" rows="7" required>{{ $setting->value }}</textarea>

                                @if ($errors->has('value'))
                                    <span class="text-danger text-left">{{ $errors->first('value') }}</span>
                                @endif
                            </div>

                            <hr>

                            <div class="rwo">
                                <label for="value" class="form-label">{{ __('الوصف') }}</label>
                                <input type="text" class="form-control" value="{{ $setting->description }}" disabled>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-md-1">
                                    <button class="btn btn-success" type="submit">حفظ</button>
                                </div>
                                <div class="col-md-1">
                                    <a href="{{ route('admin.settings.index') }}" role="button"
                                        class="btn btn-warning">{{ __('إالغاء') }}</a>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>


            </div>
        </div>
        <!--end page-content-wrapper-->
    </div>
    <!--end page-content-wrapper-->
@endsection

@section('script')
@endsection
