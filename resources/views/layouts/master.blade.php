<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var result = $("#ajax-result");
            //request to add project
            $('#create-project-form').submit(function(e){
                e.preventDefault();
                $.ajax({
                    /* the route pointing to the post function */
                    url: '../createProjectAjax',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {_token: CSRF_TOKEN, serial:$('#create-project-form').serializeArray()},
                    dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) {
                        var status = data.status;
                        var project_list = $('#project-list');
                        result.empty();
                        result.removeClass();
                        if(status !== null) {
                            result.append(status);
                            result.addClass('alert alert-success');
                            project_list.append("<option value='"+data.id+"'>"+data.name+"</option>");
                        }else{
                            result.append('Error: the project is not added');
                            result.addClass()
                        }
                        $('#create-project-modal').modal('toggle');
                        $('#create-project-form').trigger("reset");
                        document.body.scrollTop = document.documentElement.scrollTop = 0;
                    }
                });
            });

            //request to add client
            $('#create-client-form').submit(function(e){
                e.preventDefault();
                $.ajax({
                    /* the route pointing to the post function */
                    url: '../createClientAjax',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {_token: CSRF_TOKEN, serial:$('#create-client-form').serializeArray()},
                    dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) {
                        var status = data.status;
                        var client_list = $('#client-list');
                        result.empty();
                        result.removeClass();
                        if(status !== null) {
                            result.append(status);
                            result.addClass('alert alert-success');
                            client_list.append("<option value='"+data.id+"'>"+data.name+"</option>");
                        }else{
                            result.append('Error: the project is not added');
                            result.addClass()
                        }
                        $('#create-client-modal').modal('toggle');
                        $('#create-client-form').trigger("reset");
                        document.body.scrollTop = document.documentElement.scrollTop = 0;
                    }
                });
            });
            // request to add detailed document..

            //request to add document
            // $('#add-documnet-btn').submit(function(e){
            //     e.preventDefault();
            //     alert('test');
            //     var title_input = "<input class='form-control' type='text' name='title[]'>";
            //     var description_input = "<input class='form-control' type='text'  name='desc[]'>";
            //     var file_input = "<input class='form-control' type='file' name='file[]'>";
            //     $('#document-list').append("<li class='bg-info'>"+ title_input + description_input+ file_input +"</li>");
            // });
        });
        function addDocument() {
            var title_input = "<input class='form-control-sm' type='text' name='title[]' placeholder='title'>";
            var description_input = "<input class='form-control-sm' type='text'  name='desc[]' placeholder='description'>";
            var file_input = "<input class='form-control-sm' type='file' name='file[]'>";
            $('#document-list').append("<li>"+ title_input + description_input+ file_input +"</li>");
        }
    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Styles -->
    <link href="{{ asset('css/custome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>

<div id='app' class="container-fluid text-capitalize">
    <div class="row">
        @if(Auth::user())
            <div class="sidebar-bg col-md-2 col-lg-2 px-1 vh-100 sticky-top d-none d-sm-none d-md-block">
                @include('layouts.sidebar')
            </div>
            <div class="col-lg-10 col-md-10 col-sm-12">
                <div class="row">
                    <div class="w-100">
                        @include('layouts.navbar')
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-12">
                        @include('layouts.messages')
                        @yield('content')
                        @yield('card')
                    </div>
                </div>
            </div>
        @else
            <div class="col-10 mr-auto ml-auto mt-5">
                @yield('content')
            </div>
        @endif
    </div>
</div>
</body>
</html>
