@extends('admin.layouts.app')

@section('title', 'All User List')
@section('content')


    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>User List</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item active">All User List</li>
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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0 c_list c_table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th data-breakpoints="xs">Phone</th>
                                        <th data-breakpoints="xs sm md">Email</th>
                                        <th data-breakpoints="xs sm md">Address</th>
                                        <th data-breakpoints="xs">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="checkbox">
                                                <input id="delete_2" type="checkbox">
                                                <label for="delete_2">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="assets/images/xs/avatar1.jpg" class="avatar w30" alt="">
                                            <p class="c_name">John Smith</p>
                                        </td>
                                        <td>
                                            <span class="phone"><i class="zmdi zmdi-whatsapp mr-2"></i>264-625-2583</span>
                                        </td>
                                        <td>
                                            <span class="email"><a href="javascript:void(0);"
                                                    title="">johnsmith@gmail.com</a></span>
                                        </td>
                                        <td>
                                            <address><i class="zmdi zmdi-pin"></i>123 6th St. Melbourne, FL 32904</address>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary btn-sm"><i class="zmdi zmdi-edit"></i></button>
                                            <button class="btn btn-danger btn-sm"><i class="zmdi zmdi-delete"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
