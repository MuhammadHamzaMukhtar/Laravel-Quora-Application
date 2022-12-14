<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function edit(Request $request)
    {
        $search = $request->search;

        return view('profile.edit', ['user' => $request->user(), 'search' => $search]);
    }

    /**
     * Update the user's profile information.
     *
     * @param  \App\Http\Requests\ProfileUpdateRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        // $request->user()->fill($request->validated());
        $user = User::find(auth()->id());

        if ($user->email !== $request['email']) {

            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'pic' => 'mimes:jpg,jpeg,png|max:2048'
            ]);
        } else {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'pic' => 'mimes:jpg,jpeg,png|max:2048'
            ]);
        }

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        if ($request->pic) {
            $image = $request->file('pic')->getClientOriginalName();
            $request->pic->move(public_path('images'), $image);

            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'profile_pic' => $image,
            ]);
        } else {

            $user->update([
                'name' => $request->name,
                'email' => $request->email
            ]);
        }


        // $request->user()->save();

        return Redirect::route('profile.edit')->with('success', 'profile-updated');
    }

    /**
     * Delete the user's account.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function updatePassword(Request $request)
    {
        $current_pass = $request->current_password;
        // dd($current_pass);

        if (!Hash::check($current_pass, Auth::user()->password)) {

            // dd('true');
            return 'false';
        } else {

            return 'true';
        }
    }
}
