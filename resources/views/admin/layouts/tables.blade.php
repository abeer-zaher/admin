@extends('admin.layouts.dashboard')

{{-- special styles for tables --}}
@section('style')
    <style>
        .td-img {
            width: 50px !important;
            height: 50px !important;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        #lightbox {
            position: fixed;
            top: 3%;
            left: 3%;
            width: 70%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            display: none;
            justify-content: center;
            align-items: center;
        }

        #lightbox .image-container {
            position: relative;
            display: inline-block;
        }

        #lightbox img {
            position: inherit;
            max-width: 500px;
            max-height: 500px;
        }

        #lightbox .close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 30px;
            font-weight: bold;
            color: #05f15f;
            cursor: pointer;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .gallery a {
            margin: 10px;
        }

        .gallery img {
            max-width: 200px;
            max-height: 200px;
        }

        .table-p {
            cursor: pointer;
            color: blue;
        }
    </style>
@endsection

@section('content')
    <!--page-wrapper-->
    <div class="page-wrapper">
        <!--page-content-wrapper-->
        <div class="page-content-wrapper">
            <div class="page-content">

                <div class="mt-2">
                    @include('admin.layouts.partials.messages')
                </div>

                <div class="mt-2">

                </div>



                @yield('table')



                {{-- this for displaying text messages in modal --}}
                {{-- @include('admin.layouts.partials.display-text-modal') --}}


            </div>
        </div>
        <!--end page-content-wrapper-->
    </div>
    <!--end page-content-wrapper-->
@endsection


@section('script')
    <!--Data Tables js-->
    <script src="{{ asset('assets/admin/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>


    {{-- this script for auto hide the sidebar --}}
    <script>
        $(document).ready(function() {
            $("#toggle-btn").click();
        });
    </script>

    <script>
        //Default data table
        $('#example').DataTable();
        $(document).ready(function() {
            var table = $('#example2').DataTable({
                lengthChange: true,
                buttons: ['copy', 'excel', 'pdf', 'print', 'colvis']
            });
            table.buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
        });
    </script>


    <script>
        function showMessage(element) {
            text = element.innerHTML;
            title = 'المحتوى';
            modal_id = "#textModal";
            $(modal_id).on('show.bs.modal', function(e) {
                $(e.currentTarget).find('h5').html(title);
                $(e.currentTarget).find('#text-paragraph').html(text);
            });

            $(modal_id).modal('show');
        }
    </script>


    <script>
        const galleries = document.querySelectorAll('.gallery');
        const lightbox = document.querySelector('#lightbox');
        const lightboxImg = lightbox.querySelector('img');
        const closeBtn = lightbox.querySelector('.close');

        galleries.forEach(gallery => {
            gallery.addEventListener('click', (e) => {
                e.preventDefault();
                const target = e.target;
                if (target.tagName === 'IMG') {
                    const imageUrl = target.parentNode.href;
                    lightboxImg.src = imageUrl;
                    lightbox.style.display = 'flex';
                }
            });
        });



        closeBtn.addEventListener('click', () => {
            closeLightbox();
        });

        document.addEventListener('click', (e) => {
            if (e.target === lightbox) {
                closeLightbox();
            }
        });

        function closeLightbox() {
            lightbox.style.display = 'none';
        }

    </script>
    {{--<script>


    $(document).ready(function(){
    $('#remove').on('click', function(e){
    console.log('10');
    e.preventDefault();
    var ele = $(this);

    if(confirm("Do you really want to remove?")){
    $.ajax({
    url: "{{route('admin.film.remove')}}",
    method: "GET",
    data: {
    _toke: '{{csrf_token()}}',
    id: ele.parents("tr").attr("data-id")
    },
    success: function(responce){
     window.location.reload();
     console.log(20);
    }
    });
    }
    });
    });

</script>--}}

    @yield('script2')
@endsection
