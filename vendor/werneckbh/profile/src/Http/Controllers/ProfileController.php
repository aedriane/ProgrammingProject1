<?php

namespace Werneckbh\Profile\Http\Controllers;

use App\Http\Controllers\Controller;
use Werneckbh\Profile\Http\Requests\ProfilePasswordRequest;
use Werneckbh\Profile\Http\Requests\ProfileRequest;
use Werneckbh\Profile\Http\Services\ProfileService;
use DB;

class ProfileController extends Controller
{
    /**
     * @var ProfileService
     */
    private $service;

    public function __construct(ProfileService $service)
    {
        $this->service = $service;
    }

    /**
     * Show the profile page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('profile::index');
    }

    /**
     * Updates contact information
     *
     * @param ProfileRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeContactInfo(ProfileRequest $request)
    {
        $this->service->updateContacInformation($request->only(['firstname', 'lastname', 'email']));

        return redirect()->route('profile');
    }

    /**
     * Show form to update password
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showUpdatePasswordForm()
    {
        return view('profile::security');
    }

    /**
     * Stores updated user password
     *
     * @param ProfilePasswordRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storePassword(ProfilePasswordRequest $request)
    {
        $this->service->updatePassword($request->get('password'));

        return redirect()->route('profile');
    }

    /**
     * Shows delete confirmation
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showDeleteAccountConfirmation()
    {
        return view('profile::delete');
    }

    /**
     * Deletes user account
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteAccount()
    {
        $this->service->deleteAccount();

        return redirect()->to('/');
    }
}
