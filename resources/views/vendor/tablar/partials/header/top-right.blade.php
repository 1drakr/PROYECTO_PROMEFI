<div class="nav-item dropdown">
    <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
       aria-label="Open user menu">
        <span class="avatar avatar-sm"
              style="background-image: url({{ asset('storage/' . Auth::user()->perfil->Avatar) }})"></span>
        <div class="d-none d-xl-block ps-2">
            <div>{{ Auth::user()->name }}</div>
            <div class="mt-1 small text-muted">{{ Auth::user()->perfil->rol->Nombre }}</div>
        </div>
    </a>
    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
        @php
            $logout_url = View::getSection('logout_url') ?? config('tablar.logout_url', 'logout');
            $profile_url = route('perfils.edit');
            $setting_url = View::getSection('setting_url') ?? config('tablar.setting_url', 'home');
        @endphp

        <a href="#" class="dropdown-item">Status</a>
        <a href="{{ $profile_url }}" class="dropdown-item">Profile</a>
        <a href="#" class="dropdown-item">Feedback</a>
        <div class="dropdown-divider"></div>
        <a href="{{ $setting_url }}" class="dropdown-item">Settings</a>
        <a class="dropdown-item"
           href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fa fa-fw fa-power-off text-red"></i>
            {{ __('tablar::tablar.log_out') }}
        </a>

        <form id="logout-form" action="{{ $logout_url }}" method="POST" style="display: none;">
            @if(config('tablar.logout_method'))
                {{ method_field(config('tablar.logout_method')) }}
            @endif
            {{ csrf_field() }}
        </form>
    </div>
</div>
