<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $user){
        return response()->json($user);
    }

    public function update(Request $request, User $user){
        if ($request->has('password')){
            $request->merge([
                'password' => bcrypt($request->password)
            ]);
        }


        $user->update($request->all());
        return response()->json($user);
    }



}
