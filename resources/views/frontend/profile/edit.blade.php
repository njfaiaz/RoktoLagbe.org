@extends('app')

@push('style')
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/dropify/css/dropify.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/bootstrap-select/css/bootstrap-select.css') }}">
    <style>
        .dropify-wrapper {
            height: 114px !important;
            width: 114px !important;
            margin: 0 auto;
            border-radius: 50%;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            padding: 0 !important;
        }

        .dropify-wrapper .dropify-preview {
            width: 100%;
            height: 100% !important;
            border-radius: 50%;
            overflow: hidden;
            display: flex;
            justify-content: center;
            padding: 0 !important;
            margin: 0 !important;
        }

        .dropify-wrapper .dropify-preview .dropify-render img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
            display: block;
            margin: 0 !important;
            padding: 0 !important;
            vertical-align: middle;
        }

        .dropify-wrapper .dropify-preview .dropify-render {
            padding: 0 !important;
            margin: 0 !important;
        }

        .dropify-wrapper .dropify-clear {
            display: none;
            position: absolute;
            opacity: 0;
            z-index: 7;
            top: 50px;
            right: 20px;
            background: 0 0;
            border: 2px solid #FFF;
            text-transform: uppercase;
            font-size: 10px;
            padding: 1px 10px;
            font-weight: 700;
            color: #FFF;
            -webkit-transition: all .15s linear;
            transition: all .15s linear;
        }

        dl,
        ol,
        ul {
            margin-top: 0;
            margin-bottom: 1rem;
            margin-left: -38px;
        }

        @media screen and (max-width: 767px) {
            .dropify-wrapper {
                height: 90px !important;
                width: 100px !important;
            }

            .dropify-wrapper .dropify-preview {
                height: 90px !important;
                width: 90px !important;
            }

            .dropify-wrapper .dropify-preview .dropify-render img {
                height: 100%;
                width: 100%;
            }

            .dropify-wrapper .dropify-clear {
                top: 40px;
                right: 15px;
            }

            .dropify-wrapper.touch-fallback {
                height: 100px !important;
            }

            .dropify-wrapper .dropify-message {
                position: sticky;
            }

            dl,
            ol,
            ul {
                margin-left: -28px;
            }
        }
    </style>
@endpush
@section('title', 'Profile Edit')



@section('frontend_content')
    <div class="row p-3">
        <div class="col-lg-4 col-md-4 col-sm-12 ">
            <div class="card bg-white">
                <div class="body p-4">
                    <h5><strong>Profile</strong> Settings</h5>
                    <form action="{{ route('user.name.change') }}" method="POST">
                        @csrf
                        <div class="col-lg-12 col-md-12">
                            <label></label>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" value="{{ $user->username }}" disabled>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <label></label>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Full Name" name="name"
                                    value="{{ $user->name }}">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 my-2">
                            <div class="form-group">
                                <label></label>
                                <input type="email" name="email" value="{{ $user->email }}"
                                    class="form-control @error('email') border border-danger @enderror"
                                    placeholder="Email Address">
                                @error('email')
                                    <div class="text-red-500 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>

            <div class="card bg-white my-3">
                <div class="body p-4">
                    <h5><strong>Address Change</strong> Settings</h5>


                    <form method="POST" action="{{ route('user.address.update') }}">
                        @csrf

                        <div>
                            <label></label>
                            <input type="text" class="form-control" id="district" autocomplete="off"
                                value="{{ old('district', $address?->district?->district_name) }}"
                                placeholder="District Name">
                            <input type="hidden" id="district_id" name="district_id"
                                value="{{ old('district_id', $address?->district_id) }}" class="form-control">
                            <ul id="district-list-profile"></ul>

                            <!-- Display error for district -->
                            @if ($errors->has('district_id'))
                                <span class="text-danger">{{ $errors->first('district_id') }}</span>
                            @endif
                        </div>

                        <div>
                            <label></label>
                            <input type="text" class="form-control" id="upazila" autocomplete="off"
                                value="{{ old('upazila', $address?->upazila?->upazila_name) }}" placeholder="Upazila Name">
                            <input type="hidden" id="upazila_id" name="upazila_id"
                                value="{{ old('upazila_id', $address?->upazila_id) }}" class="form-control">
                            <ul id="upazila-list-profile"></ul>

                            <!-- Display error for upazila -->
                            @if ($errors->has('upazila_id'))
                                <span class="text-danger">{{ $errors->first('upazila_id') }}</span>
                            @endif
                        </div>

                        <div>
                            <label></label>
                            <input type="text" class="form-control" id="union" autocomplete="off"
                                value="{{ old('union', $address?->union?->union_name) }}" placeholder="Union Name">
                            <input type="hidden" id="union_id" name="union_id"
                                value="{{ old('union_id', $address?->union_id) }}" class="form-control">
                            <ul id="union-list-profile"></ul>

                            <!-- Display error for union -->
                            @if ($errors->has('union_id'))
                                <span class="text-danger">{{ $errors->first('union_id') }}</span>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-info mt-3">Update Address</button>
                    </form>


                </div>
            </div>

            <div class="card bg-white my-3">
                <div class="body p-4">
                    <h5><strong>Password</strong> Change</h5>
                    <form action="{{ route('admin.password.change') }}" method="POST">
                        @csrf
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label></label>
                                <input type="password" name="old_password" class="form-control"
                                    placeholder="Enter Old password" />
                                @error('old_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label></label>
                                <input type="password" name="new_password" class="form-control"
                                    placeholder="Enter New password" />
                                @error('new_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 my-2">
                            <div class="form-group">
                                <label></label>
                                <input type="password" name="con_password" class="form-control"
                                    placeholder="Enter Confirm password" />
                                @error('con_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info submit font-weight-bold" name="submit"
                            value="Submit">Password Change</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card bg-white shadow-sm">
                <div class="body p-4">

                    <h5 class="mb-4"><strong>Basic</strong> Settings</h5>

                    <form action="{{ route('user.profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Profile Image -->
                        <div class="mb-4">
                            <input type="file"
                                id="imageUpload"
                                name="image"
                                class="dropify"
                                data-max-file-size="2M"
                                data-default-file="{{ optional($profile)->image ? asset($profile->image) : '' }}"
                                data-msg-placeholder="Upload your Profile">
                        </div>

                        <!-- Phone Number -->
                        <div class="mb-3">
                            <input type="text"
                                name="phone_number"
                                id="phone_number"
                                value="{{ old('phone_number', $profile->phone_number ?? '') }}"
                                class="form-control @error('phone_number') is-invalid @enderror"
                                placeholder="Enter phone number" required>
                            @error('phone_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <select name="gender"
                                    id="gender"
                                    class="form-select"
                                    required>
                                <option value="" disabled {{ empty($profile->gender) ? 'selected' : '' }}>
                                    Select Gender
                                </option>
                                <option value="Male" {{ ($profile->gender ?? '') === 'Male' ? 'selected' : '' }}>
                                    Male
                                </option>
                                <option value="Female" {{ ($profile->gender ?? '') === 'Female' ? 'selected' : '' }}>
                                    Female
                                </option>
                            </select>
                        </div>

                        <!-- Blood Group -->
                        <div class="mb-3">
                            <select name="blood_id"
                                    id="blood_group"
                                    class="form-select"
                                    required>
                                <option value="" disabled {{ empty($profile->blood_id) ? 'selected' : '' }}>
                                    Select Your Blood Group
                                </option>
                                @foreach ($bloods as $blood)
                                    <option value="{{ $blood->id }}"
                                        {{ old('blood_id', $profile->blood_id ?? '') == $blood->id ? 'selected' : '' }}>
                                        {{ $blood->blood_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            @php $today = date('Y-m-d'); @endphp

                            <input type="text"
                                name="previous_donation_date"
                                id="previous_donation_date"
                                class="form-control @error('previous_donation_date') is-invalid @enderror"
                                placeholder="Previous Donation Date"
                                value="{{ old('previous_donation_date', $profile->previous_donation_date ?? '') }}"
                                max="{{ $today }}"
                                onfocus="this.type='date'"
                                onblur="if(!this.value)this.type='text'"
                                required>

                        </div>

                        <button type="submit" class="btn btn-info px-4">
                            Update Information
                        </button>

                    </form>

                </div>
            </div>
        </div>



    </div>



    @push('footer_scripts')
        <script src="{{ asset('assets/admin/plugins/dropify/js/dropify.min.js') }}"></script>
        <script>
            $(document).ready(function() {
                // Initialize Dropify
                $('.dropify').dropify({
                    messages: {
                        'default': 'Upload Your Profile',
                        'replace': 'Are you sure to upload this image?',
                        'remove': 'Remove',
                        'error': 'Oops! Something went wrong.'
                    }
                });
            });
        </script>
        <script src="{{ asset('assets/admin/js/pages/forms/dropify.js') }}"></script>

        <script>
            $(document).ready(function() {
                // District Autocomplete
                $('#district').on('keyup', function() {
                    let query = $(this).val();
                    $.ajax({
                        url: '/search-districts',
                        type: 'GET',
                        data: {
                            query: query
                        },
                        success: function(data) {
                            $('#district-list-profile').empty();
                            data.forEach(district => {
                                $('#district-list-profile').append(
                                    `<li class="form-control" data-id="${district.id}">${district.district_name}</li>`
                                );
                            });
                        }
                    });
                });

                // Select District
                $(document).on('click', '#district-list-profile li', function() {
                    let districtId = $(this).data('id');
                    $('#district').val($(this).text());
                    $('#district_id').val(districtId);
                    $('#district-list-profile').empty();

                    // Clear Upazila & Union
                    $('#upazila').val('');
                    $('#upazila_id').val('');
                    $('#upazila-list-profile').empty();

                    $('#union').val('');
                    $('#union_id').val('');
                    $('#union-list-profile').empty();

                    loadUpazilas(districtId);
                });

                // Load Upazilas
                function loadUpazilas(districtId) {
                    $('#upazila').off('keyup').on('keyup', function() {
                        let query = $(this).val();
                        $.ajax({
                            url: '/search-upazilas',
                            type: 'GET',
                            data: {
                                query: query,
                                district_id: districtId
                            },
                            success: function(data) {
                                $('#upazila-list-profile').empty();
                                data.forEach(upazila => {
                                    $('#upazila-list-profile').append(
                                        `<li class="form-control" data-id="${upazila.id}">${upazila.upazila_name}</li>`
                                    );
                                });
                            }
                        });
                    });

                    // Select Upazila
                    $(document).off('click', '#upazila-list-profile li').on('click', '#upazila-list-profile li',
                        function() {
                            let upazilaId = $(this).data('id');
                            $('#upazila').val($(this).text());
                            $('#upazila_id').val(upazilaId);
                            $('#upazila-list-profile').empty();

                            // Clear Union
                            $('#union').val('');
                            $('#union_id').val('');
                            $('#union-list-profile').empty();

                            loadUnions(upazilaId);
                        });
                }

                // Load Unions
                function loadUnions(upazilaId) {
                    $('#union').off('keyup').on('keyup', function() {
                        let query = $(this).val();
                        $.ajax({
                            url: '/search-unions',
                            type: 'GET',
                            data: {
                                query: query,
                                upazila_id: upazilaId
                            },
                            success: function(data) {
                                $('#union-list-profile').empty();
                                data.forEach(union => {
                                    $('#union-list-profile').append(
                                        `<li class="form-control" data-id="${union.id}">${union.union_name}</li>`
                                    );
                                });
                            }
                        });
                    });

                    // Select Union
                    $(document).off('click', '#union-list-profile li').on('click', '#union-list-profile li',
                        function() {
                            let unionId = $(this).data('id');
                            $('#union').val($(this).text());
                            $('#union_id').val(unionId);
                            $('#union-list-profile').empty();
                        });
                }
            });
        </script>
    @endpush
@endsection
