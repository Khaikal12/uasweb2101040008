@extends('layout.be.template')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    {{-- <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Sidenav Light</li>
    </ol> --}}
    <div class="card mb-4">
        <div class="card-body">
            <head>
                <title>Laravel Marquee Text</title>
                <style>
                    body {
                        font-family: 'Arial', sans-serif;
                        margin: 0;
                        padding: 0;
                        background-color: #0d6efd;
                    }

                    .marquee-container {
                        width: 100%;
                        overflow: hidden;
                    }

                    .marquee-content {
                        width: 100%;
                        display: inline-block;
                        white-space: nowrap;
                        animation: marquee 20s linear infinite;
                        font-size: 50px
                    }

                    @keyframes marquee {
                        0% { transform: translateX(100%); }
                        100% { transform: translateX(-100%); }
                    }
                </style>
            </head>

            <body>
                <div class="marquee-container">
                    <div class="marquee-content">
                        <p>SELAMAT DATANG ADMIN GANTENG DI MENU DASHBOARD</p>
                    </div>
                </div>
            </body>
            
        </div>
    </div>
</div>
@endsection
