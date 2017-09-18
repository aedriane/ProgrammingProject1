# Profile Manager Package
Basic Profile Manager for Laravel 5.4+

It allows you to manage your authenticated user profile.

You can update your contact information or password, separately. It also validates your current password, preventing unauthorized changes. 

### Installation
Require it using Composer:
```bash
composer require werneckbh/profile
```
If you are using Laravel **5.4**, add the **ProfileServiceProvider** in the Providers array in `config/app.php`: (skip this step if you are on Laravel 5.5)
```php
Werneckbh\Profile\Providers\ProfileServiceProvider::class,
```
If you want to customize the views, run
```bash
php artisan vendor:publish
```
Views will be available at `resources/views/vendor/profile`

### Usage
Add a route to the profile page and you're done!
```php
<a href="{{ route('profile') }}">Profile Page</a>
```

### Todo
 - add tests
 
### License
(MIT)

Copyright (c) 2017 Bruno Vaula Werneck

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.