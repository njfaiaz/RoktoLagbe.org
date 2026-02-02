@extends('app')
@section('title', 'History')

@push('style')
    <style>
        * {
            box-sizing: border-box;
        }

        #notfound {
            min-height: 30vh;
            position: relative;
        }

        #notfound .notfound {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            max-width: 800px;
            width: 100%;
            text-align: center;
            padding: 0 15px;
        }

        .notfound p {
            font-family: 'Montserrat', sans-serif;
            font-size: 20px;
            color: #000;
            margin-bottom: 20px;
        }

        .notfound a {
            font-size: 14px;
            text-transform: uppercase;
            background: #0046d5;
            padding: 15px 30px;
            border-radius: 40px;
            color: #fff;
            font-weight: 700;
            display: inline-block;
            box-shadow: 0px 4px 15px -5px #0046d5;
        }

        @media (max-width: 768px) {
            #notfound .notfound {
                top: 30%;
            }

            .notfound p {
                font-size: 16px;
            }
        }
    </style>
@endpush



@section('frontend_content')

<div class="container py-4">

    <div class="row justify-content-center">
        <div class="col-12">
            <div id="notfound">
                <div class="notfound">
                    <p>
                        ওয়েবসাইট ব্যবহার করতে গিয়ে কোনো অসুবিধা বা অভিযোগ থাকলে,
                        দয়া করে আমাদের ফেসবুক গ্রুপে জানিয়ে দিন।
                        আমরা দ্রুত ব্যবস্থা নিতে প্রতিশ্রুতিবদ্ধ।
                    </p>
                    <a href="https://www.facebook.com/groups/roktolagbe.org"
                       target="_blank" rel="noopener noreferrer">
                        Go To Facebook Group
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4 mb-5">
        @foreach ($admins as $admin)
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 ">
                <div class="card admin-card h-100 text-center shadow-sm">

                    <div class="cover_bg_image admin-bg py-4">
                        <h5 class="admin-name text-white mb-0">
                            {{ $admin->name }}
                        </h5>
                    </div>

                    <div class="admin-avatar my-3">
                        <img src="{{ asset('images/profile_av.jpg') }}"
                             class="rounded-circle border"
                             width="80"
                             height="80"
                             alt="Admin Avatar">
                    </div>

                    <div class="admin-info px-3 pb-4">
                        <p class="mb-0"> Admin Phone Number:<br>
                            <strong>{{ $admin->phone_number }}</strong>
                        </p>
                    </div>

                </div>
            </div>
        @endforeach
    </div>

</div>

@endsection

