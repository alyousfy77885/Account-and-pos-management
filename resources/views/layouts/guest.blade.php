<!DOCTYPE html>
<html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title> 

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css?v='.$asset_v) }}">

    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css?v='.$asset_v) }}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/css/AdminLTE.min.css?v='.$asset_v) }}">

    <!-- app css -->
    <link rel="stylesheet" href="{{ asset('css/app.css?v='.$asset_v) }}">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  <style>
            * {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;

direction:rtl;

            }

            h1,h2,h3,h4,h5,h6,p,span,div { 
                font-family: DejaVu Sans; 
                font-size:10px;
                font-weight: normal;
            }

            th,td { 
                font-family: DejaVu Sans; 
                font-size:10px;
            }

            .panel {
                margin-bottom: 20px;
                background-color: #fff;
                border: 1px solid transparent;
                border-radius: 4px;
                -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
                box-shadow: 0 1px 1px rgba(0,0,0,.05);
            }

            .panel-default {
                border-color: #ddd;
            }

            .panel-body {
                padding: 15px;
            }

            table {
                width: 100%;
                max-width: 100%;
                margin-bottom: 0px;
                border-spacing: 0;
                border-collapse: collapse;
                background-color: transparent;
direction:rtl;
            }

            thead  {
                text-align:right;
                display: table-header-group;
                vertical-align: middle;
            }

            th, td  {
                border: 1px solid #ddd;
                padding: 6px;
            }

            .well {
                min-height: 20px;
                padding: 19px;
                margin-bottom: 20px;
                background-color: #f5f5f5;
                border: 1px solid #e3e3e3;
                border-radius: 4px;
                -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
                box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
            }
        </style>

</head>

<body>

    @yield('content')

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js?v=$asset_v"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js?v=$asset_v"></script>
    <![endif]-->

    <!-- jQuery 2.2.3 -->
    <script src="{{ asset('AdminLTE/plugins/jQuery/jquery-2.2.3.min.js?v=' . $asset_v) }}"></script>
    <script src="{{ asset('plugins/printThis.js?v=' . $asset_v) }}"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="{{ asset('bootstrap/js/bootstrap.min.js?v=' . $asset_v) }}"></script>
</body>

</html>