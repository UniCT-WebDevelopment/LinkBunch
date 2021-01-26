<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use LVR\Colour\Hex;
class UserController extends Controller
{
    public function show(User $user){

        $backgroundColor = $user->background_color;
        $textColor = $user->text_color;

        $user->load('links');
        
        return view('users.show',[
            'user' => $user,
            'backgroundCOlor' => $backgroundColor
        ]);
    }

    public function edit(){
        return view('users.edit',[
            'user' => Auth::user()
        ]);
    }

    public function update(Request $request){
        $request->validate([
            'background_color' => new Hex(),
            'button_color' => new Hex(),
            'border_color' => new Hex(),
            'text_color' => new Hex()
        ]);

        Auth::user()->update($request->only(['background_color','button_color','border_width','border_radius','border_color','text_color','text_font']));

        return redirect()->back()
            ->with(['success' => 'Changes saved successfully!']);
    }
}