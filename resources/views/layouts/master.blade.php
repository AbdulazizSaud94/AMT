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
        $(document).ready(function () {
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $('#create-project-form').submit(function (e) {
                e.preventDefault();
                $.ajax({
                    /* the route pointing to the post function */
                    url: '../createProjectAjax',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {_token: CSRF_TOKEN, serial: $('#create-project-form').serializeArray()},
                    dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) {
                        var status = data.status;
                        var result = $("#ajax-result");
                        result.empty();
                        result.removeClass();
                        if (status !== null) {
                            result.append(status);
                            result.addClass('alert alert-success');

                        } else {
                            result.append('Error: the project is not added');
                            result.addClass()
                        }
                        $('#create-project-modal').modal('toggle');
                        $('#create-project-form').trigger("reset");
                        document.body.scrollTop = document.documentElement.scrollTop = 0;
                    }
                });

            });
        });
    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
<div>
    <div class="container-fluid">
        @if(Auth::user())
            <div class="row">
                <div class="col-md-2 p-0">
                    @include('layouts.sidebar')
                </div>
                <div class="col-md-10 p-0">
                    @include('layouts.navbar')
                    <main class="py-4 pl-5">
                        @include('layouts.messages')
                        @yield('content')
                    </main>
                </div>
            </div>
    </div>
    @endif
</div>
</body>
</html>
