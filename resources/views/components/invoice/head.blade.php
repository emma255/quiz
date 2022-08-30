<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="UTF-8" />

    <title>{{ config('app.name', 'Invoices') }}</title>

    <!-- Bootstrap core CSS -->

    <style>
        body {
            font-family: 'Raleway';
        }

        .row {
            margin-right: -15px;
            margin-left: -15px;
        }

        .row:before,
        .row:after {
            display: table;
            content: " ";
        }

        .row:after {
            clear: both;
        }

        .col-xs-1,
        .col-xs-2,
        .col-xs-3,
        .col-xs-4,
        .col-xs-5,
        .col-xs-6,
        .col-xs-7,
        .col-xs-8,
        .col-xs-9,
        .col-xs-10,
        .col-xs-11,
        .col-xs-12 {
            position: relative;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
            float: left;
        }

        .col-xs-1 {
            width: 8.3333333333%;
        }

        .col-xs-2 {
            width: 16.6666666667%;
        }

        .col-xs-3 {
            width: 25%;
        }

        .col-xs-4 {
            width: 33.3333333333%;
        }

        .col-xs-5 {
            width: 41.6666666667%;
        }

        .col-xs-6 {
            width: 50%;
        }

        .col-xs-7 {
            width: 58.3333333333%;
        }

        .col-xs-8 {
            width: 66.6666666667%;
        }

        .col-xs-9 {
            width: 75%;
        }

        .col-xs-10 {
            width: 83.3333333333%;
        }

        .col-xs-11 {
            width: 91.6666666667%;
        }

        .col-xs-12 {
            width: 100%;
        }


        .col-xs-offset-0 {
            margin-left: 0%;
        }

        .col-xs-offset-1 {
            margin-left: 8.3333333333%;
        }

        .col-xs-offset-2 {
            margin-left: 16.6666666667%;
        }

        .col-xs-offset-3 {
            margin-left: 25%;
        }

        .col-xs-offset-4 {
            margin-left: 33.3333333333%;
        }

        .col-xs-offset-5 {
            margin-left: 41.6666666667%;
        }

        .col-xs-offset-6 {
            margin-left: 50%;
        }

        .col-xs-offset-7 {
            margin-left: 58.3333333333%;
        }

        .col-xs-offset-8 {
            margin-left: 66.6666666667%;
        }

        .col-xs-offset-9 {
            margin-left: 75%;
        }

        .col-xs-offset-10 {
            margin-left: 83.3333333333%;
        }

        .col-xs-offset-11 {
            margin-left: 91.6666666667%;
        }

        .col-xs-offset-12 {
            margin-left: 100%;
        }


        .clearfix:before,
        .clearfix:after {
            display: table;
            content: " ";
        }

        .clearfix:after {
            clear: both;
        }

        .center-block {
            display: block;
            margin-right: auto;
            margin-left: auto;
        }

        .pull-right {
            float: right !important;
        }

        .pull-left {
            float: left !important;
        }

        .hide {
            display: none !important;
        }

        .show {
            display: block !important;
        }

        .invisible {
            visibility: hidden;
        }

        .text-hide {
            font: 0/0 a;
            color: transparent;
            text-shadow: none;
            background-color: transparent;
            border: 0;
        }

        .hidden {
            display: none !important;
        }

        .affix {
            position: fixed;
        }

        .text-right {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        .text-left {
            text-align: left;
        }

        .bg-gray {
            background-color: lightgray;
        }

        table {
            font-size: x-small;
            border-collapse: collapse;
            width: 100%;
        }

        table td,
        table th {
            border: 1px solid #ddd;
            font-size: 9px;
            padding: 4px;
        }

        #summation td {
            border: 0px;
            font-size: 9px;
            padding: 4px;
            text-align: right;
        }

        footer {
            position: absolute;
            bottom: -1cm;
            left: 0cm;
            right: 0cm;
            height: 5cm;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">
</head>