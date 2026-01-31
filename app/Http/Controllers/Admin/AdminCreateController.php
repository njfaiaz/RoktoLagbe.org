<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminCreate;
use Illuminate\Http\Request;

class AdminCreateController extends Controller
{
    public function index()
    {
        $admins = AdminCreate::paginate(10);
        return view('admin.adminCreate.index', compact('admins'));
    }

    public function create()
    {
        return view('admin.adminCreate.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => [
                'required',
                'string',
                'size:11',
                'regex:/^01[0-9]{9}$/'
            ],
        ]);

        AdminCreate::create($request->only(['name', 'phone_number']));

        $notification = array(
            'message' => 'Admin created successfully!',
            'alert' => 'success'
        );
        return back()->with($notification);
    }

    public function edit(AdminCreate $admin)
    {
        return view('admin.adminCreate.edit', compact('admin'));
    }


    public function update(Request $request, AdminCreate $admin)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' =>
                'required',
                'string',
                'size:11',
                'regex:/^01[0-9]{9}$/' . $admin->id,
        ]);

        $admin->update($request->only(['name', 'phone_number']));

        $notification = array(
            'message' => 'Admin updated successfully!',
            'alert' => 'success'
        );
        return back()->with($notification);
    }

    public function destroy(AdminCreate $admin)
    {
        $admin->delete();

        $notification = [
            'message' => 'Admin deleted successfully!',
            'alert' => 'success'
        ];

        return back()->with($notification);
    }
}
