<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class UserApiController extends Controller
{
    /**
     * Display a listing of the resource.
    */
    public function index(Request $request)
    {
        if ($request->has('email'))
            $users = User::where('email', $request->email)->get();
        else
            $users = User::all();


        return UserResource::collection($users);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'name' => ['required', 'min:4', 'max:255'],
                'email' => ['required', 'email', 'unique:users,email'],
                'password' => ['required', 'min:8', 'max:255'],
            ]);
        } catch (ValidationException $ex) {
            //return $ex->errors();
            return response()->json($ex->errors(), 422);
        }

        $user = User::create($data);

        //return new UserResource($user);
        return response()->json($user, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return new UserResource($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        try {
            $data = $request->validate([
                'name' => ['min:4', 'max:255'],
                'email' => ['email', 'unique:users,email,'.$user->id],
                'password' => ['nullable', 'min:8', 'max:255'],
            ]);
        } catch (ValidationException $ex) {
            //return $ex->errors();
            return response()->json($ex->errors(), 422);
        }

        $user->update($data);

        //return new UserResource($user);
        return response()->json($user);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return response('User deleted', 200);
    }
}
