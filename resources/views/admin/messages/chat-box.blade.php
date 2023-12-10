@extends('admin.layouts.dashboard')

@php
    $page = 'messages';
    session(['page' => $page]);
@endphp

@section('content')
    <!--page-wrapper-->
    <div class="page-wrapper">
        <!--page-content-wrapper-->
        <div class="page-content-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                {{-- <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">



                </div> --}}
                <!--end breadcrumb-->

                <div class="chat-wrapper">

                    <div class="chat-sidebar">

                        <div class="chat-sidebar-header">
                            <div class="d-flex align-items-center">
                                {{-- <div class="chat-user-online">
                                    <img src="" width="45" height="45"
                                        class="rounded-circle" alt="" />
                                </div> --}}
                                {{-- <div class="flex-grow-1 ms-2">
                                    <p class="mb-0">{{ Auth::user()->user_name }}</p>
                                </div> --}}
                            </div>
                            <div class="mb-3"></div>
                            <div class="input-group input-group-sm"> <span class="input-group-text bg-transparent"><i
                                        class='bx bx-search'></i></span>
                                <input type="text" class="form-control" onkeyup="sortUsers(window.status, this.value);"
                                    placeholder="People...">
                                <span class="input-group-text bg-transparent">
                                    <i class='bx bx-dialpad'></i>
                                </span>
                            </div>


                            {{-- <div class="chat-tab-menu mt-3">
                                <ul class="nav nav-pills nav-justified">
                                    <li class="nav-item">
                                        <a role="button" class="nav-link active" data-bs-toggle="pill"
                                            onclick="sortUsers('Active')">
                                            <div class="font-24 parent-icon icon-color-3"><i
                                                    class="bx bx-md bx-select-multiple"></i>
                                            </div>
                                            <div><strong>{{ __('الخدمات النشطة') }}</strong>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a role="button" class="nav-link" data-bs-toggle="pill"
                                            onclick="sortUsers('Completed')">
                                            <div class="font-24"><i class="bx bx-md bx-book-bookmark"></i>
                                            </div>
                                            <div><strong>{{ __('الخدمات المنتهية') }}</strong>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div> --}}

                        </div>

                        <div class="chat-sidebar-content">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-Chats">

                                    {{-- <div class="card-header">
                                        <div class="card-title"> services list:  </div>
                                    </div> --}}
                                    <div class="chat-list">
                                        <div id="users_list" class="list-group list-group-flush">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body" id="chat_header">

                    </div>



                    <div id="chat-content" class="chat-content">


                    </div>



                    <div id="chat-footer">

                    </div>


                    <!--start chat overlay-->
                    <div class="overlay chat-toggle-btn-mobile"></div>
                    <!--end chat overlay-->
                </div>


            </div>
        </div>
        <!--end page-content-wrapper-->
    </div>
    <!--end page-wrapper-->
@endsection


@section('script')
    <script>
        // These Lines is to get login_user information to add them on the displayed sent message in chat area
        var from_user_id = "{{ Auth::user()->id }}";
        var myName = "{{ Auth::user()->user_name }}";

        window.admin_img = "{{ url('storage/images/profile-images/blank-profile-admin.png') }}";
        window.user_img = "{{ url('storage/images/profile-images/blank-profile-male.jpg') }}";
        
    </script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>
    <script type="text/javascript">
        var page = "<?= $page ?>";
    </script>
    {{-- <script type="text/javascript" src="{{ asset('assets/js/fcm-notifications.js') }}"></script> --}}
    <script src="{{ asset('assets/admin/js/chat-box.js?v=2') }}"></script>



    <script>
        $(document).ready(function() {
            // window.status = 'Active';
            sortUsers();
        });


        // messaging.onMessage((payload) => {
        //     var title = payload.data.title;
        //     var body = JSON.parse(payload.data.body);
        //     messageReceived(title, body);
        // });
    </script>
@endsection
