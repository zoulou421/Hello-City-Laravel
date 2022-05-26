<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>{{ isset($title) ? $title. ' | '.config('app.name'): config('app.name')}} - Plateforme de développement des applications au sénégal</title>
   
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{asset('images/sn_dev.jfif')}}" type="image/png">

    <!--====== Animate CSS ======-->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="{{asset ('assets/css/tiny-slider.css') }}">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="{{ asset('assets/fonts/lineicons/font-css/LineIcons.css') }}">

    <!--====== Tailwind CSS ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/tailwindcss.css') }}">

    

</head>

<body>