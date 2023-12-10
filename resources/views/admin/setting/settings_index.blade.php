@extends('admin.layouts.tables')

@php
    $page = 'settings_index';
@endphp

@section('table')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">

        <a role="button" class="mr-3 btn btn-success" data-bs-toggle="modal" data-bs-target="#addSpecialWordModal">

            {{ __('إضافة عبارة خاصة للاقتراحات') }}

        </a>
    </div>
    <!--end breadcrumb-->

    <div class="card">
        <div class="card-body">

            <div class="card-title">
                <h4 class="mb-0">{{ __('الإعدادات') }}</h4>
            </div>
            <hr />


            <div class="card-title">
                <a role="button" type="button" value="%" class="btn btn-info"
                    href="{{ route('admin.settings.index') }}">
                    {{ __('جميع الاعدادات') }} <span id="all_count_bedge" class="badge bg-light text-dark"></span>
                </a>
                @foreach ($types as $filter)
                    <a role="button" type="button" value="{{ $filter->type }}" class="btn btn-info"
                        href="{{ route('admin.settings.filter', $filter->type) }}">
                        {{ __($filter->type) }} <span id="all_count_bedge" class="badge bg-light text-dark"></span>
                    </a>
                @endforeach

            </div>

            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>المفتاح</th>
                            <th>القيمة</th>
                            <th>الوصف</th>
                            <th>الإجراءات</th>
                        </tr>
                    </thead>
                    <tbody id="table-body">
                        @foreach ($settings as $setting)
                            <tr>

                                <td style="max-width: 200px">
                                    <p class="p200" onclick="showMessage(this)">
                                        {{ $setting->key }}
                                    </p>
                                </td>


                                <td style="max-width: 400px">
                                    <p class="clickable p400" onclick="showMessage(this)">
                                        {{ $setting->value }}
                                    </p>
                                </td>



                                <td style="max-width: 600px">
                                    <p class="clickable p600" onclick="showMessage(this)">
                                        {{ $setting->description }}
                                    </p>
                                </td>

                                <td>
                                    <div class="d-flex" style="flex-wrap: wrap">
                                        <a href="{{ route('admin.settings.edit', $setting) }}" title="تعديل">
                                            <i class="fa-solid fa-2x fa-pen-to-square"></i>
                                        </a>

                                        @if ($setting->type == 'Special Words')
                                            <a role="button" class="mr-3 text-danger" data-bs-toggle="modal"
                                                data-bs-target="#deleteSpecialWordModal" title="حذف"
                                                data-setting_id="{{ $setting->id }}"
                                                data-special_word="{{ $setting->value }}">

                                                <i class="fa-solid fa-2x fa-trash"></i>
                                            </a>
                                        @endif


                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>المفتاح</th>
                            <th>القيمة</th>
                            <th>الوصف</th>
                            <th>الإجراءات</th>
                        </tr>
                    </tfoot>
                </table>
            </div>


        </div>
    </div>

    @include('admin.layouts.partials.deleteSpecialWordModal')
    @include('admin.layouts.partials.addSpecialWordModal')
@endsection


@section('script2')
    <script>
        $('#deleteSpecialWordModal').on('show.bs.modal', function(e) {

            //get data-id attribute of the clicked element
            var setting_id = $(e.relatedTarget).data('setting_id');
            var special_word = $(e.relatedTarget).data('special_word');

            //populate the textbox
            $(e.currentTarget).find('#setting_id').val(setting_id);

            // var modal_title = $(e.currentTarget).find('#deleteProductModal-title').html();
            var modal_body = 'هل تريد بالتأكيد حذف العبارة : ' + special_word;

            // $(e.currentTarget).find('#deleteProductModal-title').html(modal_title + product_name);
            $(e.currentTarget).find('#deleteSpecialWordModal-body').html(modal_body);
        });
    </script>


    {{-- <script>
        $('#addSpecialWordModal').on('show.bs.modal', function(e) {

            //get data-id attribute of the clicked element
            var setting_id = $(e.relatedTarget).data('setting_id');
            var special_word = $(e.relatedTarget).data('special_word');

            //populate the textbox
            $(e.currentTarget).find('#setting_id').val(setting_id);

            // var modal_title = $(e.currentTarget).find('#addSpecialWordModal-title').html();
            var modal_body = $(e.currentTarget).find('#addSpecialWordModal-body').html();

            // $(e.currentTarget).find('#addSpecialWordModal-title').html(modal_title + product_name);
            $(e.currentTarget).find('#addSpecialWordModal-body').html(modal_body + special_word);
        });
    </script> --}}
@endsection
