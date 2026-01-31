<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/boxicons-master/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bfont-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/coustom/css/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/coustom/css/toastr.css') }}">
    @stack('style')
    <title>Home</title>
</head>

<body>

    <div class="container header">

        <!--=============== HEADER ===============-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="{{ auth()->check() ? route('user.dashboard') : route('gust.view') }}" class="nav__logo">
                    RoktoLagbe.org
                </a>


                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="{{ auth()->check() ? route('user.dashboard') : route('gust.view') }}"
                                class="nav__link active-link">
                                <i class='bx bx-home-alt nav__icon'></i>
                                <span class="nav__name">Home</span>
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="{{ route('user.search') }}"
                                class="nav__link {{ request()->routeIs('user.search') ? 'active-link' : '' }}">
                                <i class='bx bx-search nav__icon'></i>
                                <span class="nav__name">Search</span>
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="{{ route('user.history') }}"
                                class="nav__link {{ request()->routeIs('user.history') ? 'active-link' : '' }}">
                                <i class='bx bx-history nav__icon'></i>
                                <span class="nav__name">History</span>
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="{{ route('user.fake') }}"
                                class="nav__link {{ request()->is('user.fake') ? 'active-link' : '' }}">
                                <i class='bx bxs-user-x nav__icon'></i>
                                <span class="nav__name">Fake User</span>
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="{{ route('user.support') }}"
                                class="nav__link {{ request()->is('user.support') ? 'active-link' : '' }}">
                                <i class='bx bx-support nav__icon'></i>
                                <span class="nav__name">Support</span>
                            </a>
                        </li>

                    </ul>
                </div>

                <div class="nav-user-icon online" onclick="settingsMenuToggle()">
                    <img src="{{ asset('images/profile_av.jpg') }}" alt="User Profile Image">
                </div>

                <!--------------------- setting-menu ---------------------------------------->
                <div class="setting-menu">
                    <div id="dark-btn">
                        <span></span>
                    </div>
                    <div class="setting-menu-inner">
                        <div class="user-profile">
                            <a href="{{ route('user.profile') }}"> <img src="{{ asset('images/profile_av.jpg') }}"
                                    alt="User Profile Image"></a>
                            <div>
                                <p> Gust User </p>
                                <a href="{{ route('user.profile') }}">See Your Profile</a>
                            </div>
                        </div>
                        <hr>
                        <div class="user-profile">
                            <img src="{{ asset('assets/frontend/img/feedback.png') }}">
                            <div>
                                <p> Giv Feed Back </p>
                                <a href="#">Help us</a>
                            </div>
                        </div>
                        <hr>
                        <div class="setting-link">
                            <img src="{{ asset('assets/frontend/img/setting.png') }}" class="setting-icon">
                            <a href="#">Setting & Privacy <img src="{{ asset('assets/frontend/img/arrow.png') }}"
                                    width="10px"></a>
                        </div>
                        <div class="setting-link">
                            <img src="{{ asset('assets/frontend/img/help.png') }}" class="setting-icon">
                            <a href="#"> Help & Support <img src="{{ asset('assets/frontend/img/arrow.png') }}"
                                    width="10px"></a>
                        </div>
                        <div class="setting-link">
                            <img src="{{ asset('assets/frontend/img/display.png') }}" class="setting-icon">
                            <a href=""> Display & Accessibility <img
                                    src="{{ asset('assets/frontend/img/arrow.png') }}" width="10px"></a>
                        </div>

                        <div class="setting-link">
                            <img src="{{ asset('assets/frontend/img/logout.png') }}" class="setting-icon">

                            @guest
                                <a href="{{ route('login') }}">
                                    Login <img src="{{ asset('assets/frontend/img/arrow.png') }}" width="10px">
                                </a>
                            @else
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout <img src="{{ asset('assets/frontend/img/arrow.png') }}" width="10px">
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            @endguest
                        </div>

                    </div>
            </nav>
        </header>
    </div>

    <!--------------------- Nave Bar End ---------------------------------------->
    <section class="content">

        <div class="container">
            <main class="main">
                <div class="">
                    <div class="card-container">

                        @php
                            $loggedInUserId = auth()->id();
                            $loggedInUser = auth()->user();
                            $loggedInUserProfileComplete = false;

                            if (
                                $loggedInUser &&
                                optional($loggedInUser->profiles)->bloods &&
                                $loggedInUser->addresses
                            ) {
                                $loggedInUserProfileComplete = true;
                            }
                        @endphp

                        @foreach ($users as $user)
                            <div class="card bg-white">
                                <div class="body">
                                    <div class="cover_bg_image">
                                        <h3>{{ $user->name }}</h3>
                                        <h4>{{ optional(optional($user->profiles)->bloods)->blood_name ?? 'N/A' }}</h4>
                                    </div>

                                    <img src="{{ asset(optional($user->profiles)->image ?? 'images/profile_av.jpg') }}"
                                        width="60" height="60" alt="Profile of {{ $user->name }}" />

                                    <p>
                                        {{ optional(optional($user->addresses)->district)->district_name ?? 'N/A' }},
                                        {{ optional(optional($user->addresses)->upazila)->upazila_name ?? 'N/A' }},
                                        {{ optional(optional($user->addresses)->union)->union_name ?? 'N/A' }}
                                    </p>

                                    <div class="cardbtn">
                                        <button class="btn view"
                                            onclick="handleViewProfileShow('{{ $loggedInUserProfileComplete ? 'yes' : 'no' }}', '{{ route('user.profile.show', $user->username) }}')">
                                            View Profile
                                        </button>

                                        <button class="btn message"
                                            onclick="handleViewProfileShow('{{ $loggedInUserProfileComplete ? 'yes' : 'no' }}', '{{ route('user.support') }}')">
                                            Contact
                                        </button>
                                    </div>

                                    @php
                                        $profilePreviousDate = optional($user->profiles)->previous_donation_date;
                                        $latestDonationDate = optional(
                                            $user->donatehistories()->latest('donation_date')->first(),
                                        )->donation_date;

                                        $baseDate = null;

                                        if ($profilePreviousDate && $latestDonationDate) {
                                            $baseDate = \Carbon\Carbon::parse($profilePreviousDate)->gt(
                                                \Carbon\Carbon::parse($latestDonationDate),
                                            )
                                                ? $profilePreviousDate
                                                : $latestDonationDate;
                                        } elseif ($profilePreviousDate) {
                                            $baseDate = $profilePreviousDate;
                                        } elseif ($latestDonationDate) {
                                            $baseDate = $latestDonationDate;
                                        }

                                        $endDate = $baseDate
                                            ? \Carbon\Carbon::parse($baseDate)->addDays(120)->format('Y-m-d H:i:s')
                                            : null;

                                        $isLoggedInUser = auth()->check() && auth()->id() === $user->id;
                                    @endphp

                                    @if ($endDate)
                                        <div class="timer" data-endtime="{{ $endDate }}"
                                            data-userid="{{ $user->id }}"
                                            data-is-logged-in-user="{{ $isLoggedInUser ? 'yes' : 'no' }}">
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    <div class="my-3">
                        <ul class="pagination pagination-primary m-b-0 justify-content-start">
                            {{ $users->links('pagination::bootstrap-4') }}
                        </ul>
                    </div>
                </div>
            </main>
        </div>
    </section>

    <!--=============== MAIN JS ===============-->
    <script src="{{ asset('assets/frontend/js/fontawesome.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/countdown.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
    <script src="{{ asset('assets/coustom/js/toastr.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/coustom/css/toastr.css') }}">

    <script>
        function handleViewProfileShow(isProfileComplete, profileUrl) {
            if (isProfileComplete === 'yes') {
                window.location.href = profileUrl;
            } else {
                toastr.options = {
                    "positionClass": "toast-top-right",
                    "timeOut": "3000",
                    "closeButton": true
                };
                toastr.error('Please login or register first!', 'Not Logged In');
            }
        }
    </script>
    @include('alert')
</body>

</html>
