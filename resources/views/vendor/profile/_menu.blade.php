

<div class="list-group">
    <a href="#" class="list-group-item {{ Request::is('#') ? 'active' : '' }}"><h3 style="text-align:center">{{Auth::user()->username}}</h3></a>
    <a href="{{ route('profile') }}" class="list-group-item {{ Request::is('profile') ? 'active' : '' }}">Contact Info</a>
    <a href="{{ route('profile.security') }}"
       class="list-group-item {{ Request::is('profile/security') ? 'active' : '' }}">Security</a>
           <a href="{{ route('preferences') }}" class="list-group-item {{ Request::is('preferences') ? 'active' : '' }}">Preferences</a>
    <a href="{{ route('profile.delete.show') }}" class="list-group-item {{ Request::is('profile/delete-account') ? 'list-group-item-danger active' : '' }}">Delete
        Account</a>
</div>
