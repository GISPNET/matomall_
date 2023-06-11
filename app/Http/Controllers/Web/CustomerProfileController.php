<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerProfileController extends Controller
{
    public function update(Request $request)
    {
        $data=$request->all();
        $request->validate([
            'name'=>'required',
            'email'=>'required'
        ]);

        $user=Auth::user();

        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('avatar', 'public');
            $user = \App\Models\User::find($user->id);
            if ($user->profile_picture) {
                Storage::disk('public')->delete($user->profile_picture);
            }
            $data['profile_picture']=$path;
        }

        $user=Auth::user()->update($data);

        return redirect()->back()->with('success','Perfil actualizado');
    }
}
