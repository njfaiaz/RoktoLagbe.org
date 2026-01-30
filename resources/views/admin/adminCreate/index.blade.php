@extends('admin.layouts.app')

@section('title', 'All Admin List')
@section('content')


    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>User List</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item active">All Admin List</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i
                            class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i
                            class="zmdi zmdi-arrow-right"></i></button>
                            <a href="{{ route('admin.create') }}" class="btn btn-info btn-icon float-right"><i class="zmdi zmdi-hc-fw"></i></a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table
                                class="table table-hover product_item_list c_table theme-color mb-0 footable footable-1 footable-paging footable-paging-center breakpoint-lg"
                                style="">
                                <thead>
                                    <tr class="footable-header">
                                        <th class="footable-sortable" style="display: table-cell;">ID Name<span
                                                class="fooicon fooicon-sort"></span></th>
                                        
                                        <th class="footable-sortable" style="display: table-cell;">Full Name<span
                                                class="fooicon fooicon-sort"></span></th>
                                        <th data-breakpoints="sm xs" class="footable-sortable" style="display: table-cell;">
                                            Phone Number<span class="fooicon fooicon-sort"></span></th>
                                        
                                        <th data-breakpoints="sm xs md" class="footable-sortable footable-last-visible"
                                            style="display: table-cell;">Action<span class="fooicon fooicon-sort"></span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @forelse ($admins as $key => $admin)
                                        <tr>
                                            <td style="display: table-cell; vertical-align: middle; text-align: center;">
                                                {{ $key + 1 }}</td>
                                            


                                            <td style="display: table-cell; vertical-align: middle; text-align: center;">
                                                <h5>{{ $admin->name }}</h5>
                                            </td>
                                            <td style="display: table-cell; vertical-align: middle; text-align: center;">
                                                <span class="text-muted">{{ $admin->phone_number ?? 'N/A' }}</span>
                                            </td>
                                            <td class="footable-last-visible" style="display: table-cell;">
                                                <a href="{{ route('admin.edit', $admin->id) }}"
                                                    class="btn btn-default waves-effect waves-float btn-sm waves-red"><i class="zmdi zmdi-edit"></i></a>
                                               

                                                        <form action="{{ route('admin.destroy', $admin->id) }}" method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-default waves-effect waves-float btn-sm waves-red"
                                                                onclick="return confirm('Are you sure you want to delete this admin?')">
                                                                <i class="zmdi zmdi-delete"></i>
                                                            </button>
                                                        </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center">No users found.</td>
                                        </tr>
                                    @endforelse

                                </tbody>
                                <tfoot></tfoot>
                            </table>
                        </div>
                    </div>
                    <div class=" d-flex justify-content-start align-items-start py-3">
                        <div class="body">
                            <ul class="pagination pagination-primary m-b-0">
                                {{ $admins->links('pagination::bootstrap-4') }}
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
