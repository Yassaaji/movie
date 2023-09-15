<?php

namespace App\Http\Controllers\Account;

use Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function edit()
    {
        return view('editpassword');
    }

    public function update()
    {
       request()->validate([
    'old_password' => 'required',
    'password' => ['required', 'string', 'min:8', 'confirmed'],
], [
    'old_password.required' => 'Kolom Password Lama harus diisi.',
    'password.required' => 'Kolom Password Baru harus diisi.',
    'password.string' => 'Password Baru harus berupa teks.',
    'password.min' => 'Password Baru harus memiliki panjang minimal :min karakter.',
    'password.confirmed' => 'Konfirmasi Password Baru tidak cocok dengan Password Baru.',
]);


        $currentPassword = auth()->user()->password;
        $old_password = request('old_password');

        if (Hash::check($old_password, $currentPassword)) {
            auth()->user()->update([
                'password' => bcrypt(request('password')),
            ]);
            return redirect()->back()->with('success', "Password berhasil diperbarui.");
        } else {
            return redirect()->back()->withErrors(['old_password' => "Password lama tidak cocok."]);
        }
    }
}
