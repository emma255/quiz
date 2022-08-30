<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Untold">
    <meta name="author" content="Emmanuel A Mtasiwa">

    <title>{{ config('app.name', 'UNTOLD') .' | '. str_replace('/', ':', Request::path()) }}</title>

    <link href="{{ asset('plugins/feather/feather.css') }}" rel="stylesheet" type="text/css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/all.min.css') }}">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('plugins/sweetalert2/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}" />
    @yield('styles')
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    <style>
        i.feather {
            font-size: 15px;
        }

        .feather {
            font-size: 20px;
        }


        /* Large devices (laptops/desktops, 992px and up) */
        @media only screen and (min-height: 800px) {
            .scrollable {
                max-height: 750px;
                overflow-y: scroll;
            }

            .scrollable-contacts {
                max-height: 900px;
                overflow-y: scroll;
            }
        }

        /* Large devices (laptops/desktops, 992px and up) */
        @media only screen and (max-height: 800px) {

            .scrollable {
                max-height: 350px;
                overflow-y: scroll;
            }

            .scrollable-contacts {
                max-height: 500px;
                overflow-y: scroll;
            }
        }

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
    @livewireStyles
</head>
