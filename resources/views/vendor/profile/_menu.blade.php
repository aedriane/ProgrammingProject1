<div class="list-group"> <a href="#" class="list-group-item {{ Request::is('#') ? 'active' : '' }}  profilemenu"><h3><b>{{Auth::user()->username}}</b></h3></a>
	<a href="{{ route('profile') }}" class="list-group-item {{ Request::is('profile') ? 'active' : '' }}  profilemenu">Contact Info</a>
	<a href="{{ route('profile.security') }}" class="list-group-item {{ Request::is('profile/security') ? 'active' : '' }} profilemenu">Security</a>
	<a href="{{ route('preferences') }}" class="list-group-item {{ Request::is('preferences') ? 'active' : '' }} profilemenu">Preferences</a>
	<a href="{{ route('profile.delete.show') }}" class="list-group-item {{ Request::is('profile/delete-account') ? 'list-group-item-danger active' : '' }} profilemenu">Delete
        Account</a>
</div>
