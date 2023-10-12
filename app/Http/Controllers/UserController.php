<?php

namespace App\Http\Controllers;

use App\Models\User; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function updateImage(Request $request)
    {
        // $validated = $request->validate([
        //     'avatar' => 'required',
        // ]);
        
        // $avatar = request()->file('avatar');
        
        // dd($validated);


        // $avatarName = time().'.'.$request->avatar->getClientOriginalExtension();
        

        // $request->avatar->move(public_path('avatars'), $avatarName);

        // Auth()->user()->update(['avatar'=>$avatarName]);

        return back()->with('error', 'Gagal update avatar');
        
        
        // return redirect()->route('user.index')->with('success', 'Data berhasil disimpan.');
    }

    public function update(Request $request){        
        $validated = $request->validate([
            'name'=>'required|max:255',
            'email'=>'required|email',
            'phoneNumber'=>'required',
            'tanggal'=>'required',
            'bulan'=>'required',
            'tahun'=>'required'
            // "photo" => "nullable|file|mimes:jpeg,png|max:1000",
        ]);
        
        
        $user = Auth::user();
        $user->name = $validated['name'];
        $user->phone_number = $validated['phoneNumber'];
        $user->tanggal_lahir = $validated['tanggal'];
        $user->bulan_lahir = $validated['bulan'];
        $user->tahun_lahir = $validated['tahun'];
        $user->email = $validated['email'];
//         if($request->hasFile('photo')){

// //          delete old photo  => path:storage/profile/profile_6221cecf36ad9.jpg
//             $subStrPhotoName = Str::substr($user->photo,16);
//             Storage::delete('public/profile/'.$subStrPhotoName);

// //            create new photo
//             $dir="storage/profile";
//             $newName = "profile_".uniqid().".".$request->file('photo')->extension();
//             $request->file('photo')->storeAs("public/profile",$newName);
//             $user->photo = $dir."/".$newName;
//         }
        $user->update();

        return redirect()->back()->with('updated', 'Berhasil update profile!');
    }
}