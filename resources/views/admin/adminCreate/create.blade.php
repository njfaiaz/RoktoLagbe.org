@extends('admin.layouts.app')

@section('title', 'Admin Create')






@section('content')


    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Admin Create</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item active">Admin Create</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i
                            class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i
                            class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="body">
                            <form action="{{ isset($admin) ? route('admin.update', $admin->id) : route('admin.store') }}" method="POST">
            @csrf
            @if(isset($admin))
                @method('PUT')
            @endif

            <div class="form-group">
                <label>Admin Full Name:</label>
                <input type="text" name="name" value="{{ old('name', $admin->name ?? '') }}" class="form-control @error('name') border border-danger @enderror" required placeholder="Admin Full Name">
                @error('name') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label>Admin Phone Number:</label>
                <input type="text" name="phone_number" value="{{ old('phone_number', $admin->phone_number ?? '') }}" class="form-control @error('phone_number') border border-danger @enderror" required placeholder="Admin Phone Number">
                @error('phone_number') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <button type="submit" class="btn btn-info">{{ isset($admin) ? 'Update Admin' : 'Add Admin' }}</button>
        </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



@endsection
