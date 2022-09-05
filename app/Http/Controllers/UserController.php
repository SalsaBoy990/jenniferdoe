<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Actions\Fortify\PasswordValidationRules;
use Illuminate\Support\Str;
use App\Support\InteractsWithBanner;

class UserController extends Controller
{
    use PasswordValidationRules;
    use InteractsWithBanner;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', User::class);

        $users = User::orderBy('created_at', 'DESC')->get();
        return view('admin.user.index')->with([
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', User::class);

        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', User::class);

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string'],
            'role' => ['required', 'numeric', 'min:1', 'max:2'],
        ]);

        $newUser = User::create([
            'name' => htmlspecialchars($request->name),
            'email' => htmlspecialchars($request->email),
            'password' => Hash::make($request->password),
            'role' => intval($request->role), // 1 = admin, 2 = client
            'remember_token' => Str::random(10),
        ]);

        $newUser->save();

        $this->banner('Successfully created the with the name of "' . htmlspecialchars($request->name) . '"!');
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $this->authorize('delete', [User::class, $user]);

        $oldName = htmlentities($user->name);
        $user->deleteProfilePhoto();
        $user->tokens->each->delete();
        $user->delete();

        $this->banner('Successfully deleted the user with the name of "' . $oldName .'"!');
        return redirect()->route('user.index');
    }
}
