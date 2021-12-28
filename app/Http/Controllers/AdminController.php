<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function adminLogin() {
        return view('admin.login');
    }

    public function index() {
        return view('admin.dashboard');
    }

    public function profile() {
        $user = Auth::user();
        return view('admin.profile_update', compact('user'));
    }

    public function profileUpdate(Request $request) {
        $user = Auth::user();
        $this->validate($request, [
            'name'        => 'required|max:100',
            'email'       => 'required|max:100|email|unique:users,email,' . $user->id,
            'image'       => 'dimensions:width=200,height=200'

        ]);
        $image = $request->image;
        if ($image) {
            if ($user->image != null) {
                File::delete(public_path('images/' . $user->image));
            }
            $image_name = hexdec(uniqid());
            $ext        = strtolower($image->getClientOriginalExtension());

            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'avatar/';
            $upload_path1    = 'images/avatar';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path1, $image_full_name);
            // $img = Image::make($image)->resize(680, 437);
            // $img->save($upload_path1 . $image_full_name, 60);

        } else {
            $image_url = $user->image;
        }
        $user->update([
            'name'        => $request->name,
            'image'       => $image_url,
            'email'       => $request->email,

        ]);
        return redirect()->back()->with('success', 'Profile has been updated');
    }

    public function updatePassword(Request $request) {
        //dd($request->all());
        if (Auth::check()) {
            $data = $request->validate([
                'old_password' => 'required',
                'password'     => 'required|confirmed',
            ]);
            $currentPassword = Auth::User()->password;
            if (Hash::check($data['old_password'], $currentPassword)) {
                $userId         = Auth::User()->id;
                $user           = User::find($userId);
                $user->password = Hash::make($data['password']);
                $user->save();
                Auth::logout();
                return redirect()->route('login')->with('message', 'Password change successfully. Please Login again');
            } else {
                return back()->withErrors(['Sorry, your current password was not recognised. Please try again.']);
            }
        }
    }


}
