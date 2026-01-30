@extends('admin.layouts.app')

@section('title', 'Admin Edit')

@section('content')


    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Admin Edit</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item active">Admin Edit</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i
                            class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i
                            class="zmdi zmdi-arrow-right"></i></button>
                    <a href="javascript:void(0);" class="btn btn-info btn-icon float-right"><i class="zmdi zmdi-check"></i></a>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="body">
                            <form action="{{ route('admin.update', $admin->id) }}" method="POST">
                                @csrf                              
                                @method('PUT')
                                
                                <div class="col-lg-12 col-md-12">
                                    <label for="name">Admin Name :</label>
                                    <div class="form-group">
                                        <input type="text" name="name" type="text"
                                            value="{{ old('name', $admin->name ?? '') }}"
                                            class="form-control @error('name') border border-danger @enderror">
                                        @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <label for="phone_number">User Phone Number :</label>
                                    <div class="form-group">
                                        <input type="text" name="phone_number" type="number"
                                            value="{{ old('phone_number', $admin->phone_number ?? '') }}"
                                            class="form-control @error('phone_number') border border-danger @enderror">
                                        @error('phone_number')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-info">Update Admin</button>
                                <a href="{{ route('admin.all') }}" class="btn btn-secondary">Cancel</a>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
