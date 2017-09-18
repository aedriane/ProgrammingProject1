<?php

Route::middleware('web')->group(function () {

    Route::middleware('auth')->prefix('profile')->namespace('\Werneckbh\Profile\Http\Controllers')->group(function () {

        Route::get('', 'ProfileController@index')
            ->name('profile');
        Route::put('contact-information', 'ProfileController@storeContactInfo')
            ->name('profile.contact-info.store');
        Route::get('security', 'ProfileController@showUpdatePasswordForm')
            ->name('profile.security');
        Route::put('security', 'ProfileController@storePassword')
            ->name('profile.security.store');
        Route::get('delete-account', 'ProfileController@showDeleteAccountConfirmation')
            ->name('profile.delete.show');

        Route::get('preferences', '\App\Http\Controllers\HomeController@showPreferences')->name('preferences');
        Route::post('preferences', '\App\Http\Controllers\HomeController@editPreferences')->name('edit-preferences');

        Route::delete('delete-account', 'ProfileController@deleteAccount')
            ->name('profile.remove');

    });

});
