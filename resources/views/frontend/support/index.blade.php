@extends('app')
@section('title', 'History')

@push('style')
    <style>
        * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {
            padding: 0;
            margin: 0;
        }

        #notfound {
            height: 30vh;
        }

        #notfound .notfound {
            position: absolute;
            left: 50%;
            top: 20%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .notfound {
            max-width: 800px;
            width: 100%;
            text-align: center;
        }

        .notfound p {
            font-family: 'Montserrat', sans-serif;
            color: #000;
            font-size: 20px;
            font-weight: 400;
            margin-bottom: 20px;
            margin-top: 0px;
        }

        .notfound a {
            font-family: 'Montserrat', sans-serif;
            font-size: 14px;
            text-decoration: none;
            text-transform: uppercase;
            background: #0046d5;
            display: inline-block;
            padding: 15px 30px;
            border-radius: 40px;
            color: #fff;
            font-weight: 700;
            -webkit-box-shadow: 0px 4px 15px -5px #0046d5;
            box-shadow: 0px 4px 15px -5px #0046d5;
        }


        @media only screen and (max-width: 767px) {
            .notfound .notfound-404 {
                height: 142px;
            }

            .notfound .notfound-404 h1 {
                font-size: 112px;
            }
        }
    </style>
@endpush


@section('frontend_content')

    <div id="notfound">
        <div class="notfound">
            <p>
                ওয়েবসাইট ব্যবহার করতে গিয়ে কোনো অসুবিধা বা অভিযোগ থাকলে, দয়া করে আমাদের ফেসবুক গ্রুপে জানিয়ে দিন। আমরা
                দ্রুত ব্যবস্থা নিতে প্রতিশ্রুতিবদ্ধ।
            </p>
            <a href="https://www.facebook.com/groups/roktolagbe.org" target="_blank" rel="noopener noreferrer">
                Go To Facebook Group
            </a>
        </div>
    </div>

    <div class="card-container py-3">

        @foreach ($admins as $admin)
            <div class="card bg-white admin-card">
                <div class="body text-center">

                    <!-- Top Design Strip -->
                    <div class="cover_bg_image admin-bg">
                        <h3 class="admin-name">{{ $admin->name }}</h3>
                    </div>

                    <!-- Avatar -->
                    <div class="admin-avatar">
                        <img src="{{ asset('images/profile_av.jpg') }}" alt="Admin Avatar">
                    </div>

                    <!-- Info -->
                    <div class="admin-info">
                        <p class="admin-number">
                            <i class='bx bx-id-card'></i>
                            Admin Phone Number: <strong>{{ $admin->phone_number }}</strong>
                        </p>
                    </div>

                </div>
            </div>
        @endforeach

    </div>


@endsection
