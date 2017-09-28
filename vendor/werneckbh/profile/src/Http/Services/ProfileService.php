<?php

namespace Werneckbh\Profile\Http\Services;

use Illuminate\Support\Facades\Auth;

class ProfileService
{
    /**
     * Updates User Contact Information
     *
     * @param array $data
     */
    public function updateContacInformation(array $data)
    {
        Auth::user()->firstname = $data['firstname'];
        Auth::user()->lastname = $data['lastname'];        
        Auth::user()->email = $data['email'];
        Auth::user()->save();
    }

    /**
     * Updates user password
     *
     * @param string $password
     */
    public function updatePassword(string $password)
    {
        Auth::user()->password = bcrypt($password);
        Auth::user()->save();
    }

    /**
     * Deletes User Account
     */
    public function deleteAccount()
    {
        Auth::user()->delete();
    }
}
