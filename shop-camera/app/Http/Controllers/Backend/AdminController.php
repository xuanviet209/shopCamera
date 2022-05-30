<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function index()
    {
        $dataAdmin = Admin::get();
        return view('backend.admin.index', [
            'admin' => $dataAdmin
        ]);
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $id = is_numeric($id) ? $id : 0;
        $infoAdmin = DB::table('admins')->where('id', $id)->first();
        if ($infoAdmin !== null) {
            return view('backend.admin.edit', [
                'info' => $infoAdmin
            ]);
        } else {
            return view('backend.not_found.admin');
        }
    }

    public function handleEdit(Request $request)
    {
        $usernameAdmin = $request->input('usernameAdmin');
        $fullnameAdmin  = $request->input('fullnameAdmin');
        $birthdayAdmin = $request->input('birthdayAdmin');
        $phoneAdmin = $request->input('phoneAdmin');
        $emailAdmin = $request->input('emailAdmin');
        $gender = $request->input('genderAdmin');
        $gender = $gender === '1' ? $gender : '0';

        $id = $request->id;
        $id = is_numeric($id) ? $id : 0;
        $infoAdmin = DB::table('admins')->where('id', $id)->first();

        if ($infoAdmin === null) {
            return redirect()->route('admin.admin.error');
        }

        $avatar = $infoAdmin->avatar;
        // upload anh
        if ($request->hasFile('avatarAdmin')) {
            if ($request->file('avatarAdmin')->isValid()) {
                // xoa anh cu
                File::delete('public/storage/images/' . $avatar);

                // tien hanh upload
                $avatar = $request->file('avatarAdmin')->getClientOriginalName();
                $dateCreate = date('Y-m-d H:i:s');
                $timeCreate = strtotime($dateCreate);
                $oldLogo = $timeCreate . '-' . $avatar;

                // anh day vao thu muc public
                $request->file('avatarAdmin')->move('storage/images', $avatar);
            }
        }
        $update = DB::table('admins')->where('id', $id)->update([
            'username' => $usernameAdmin,
            'fullname' => $fullnameAdmin,
            'gender' => $gender,
            'birthday' => $birthdayAdmin,
            'phone' => $phoneAdmin,
            'email' => $emailAdmin,
            'avatar' => $avatar,
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        if ($update) {
            return redirect()->route('admin.admin');
        } else {
            return redirect()->route('admin.admin.edit', ['slug' => Str::slug($infoAdmin->name), 'id' => $id]);
        }
    }
}
