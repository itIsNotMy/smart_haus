<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="{{ route('equipment.index') }}" class="nav-link px-2 text-white">Главная</a></li>
          <li><a href="{{ route('equipment.create') }}" class="nav-link px-2 text-white">Зарегестрировать</a></li>
        </ul>
        <form id="search" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input @input="value" type="search" class="form-control form-control-dark text-white bg-dark" placeholder="Search..." aria-label="Search">
        </form>
        <div class="text-end">
        <form method="POST" action="{{ route('logout') }}">
         @csrf
         <x-responsive-nav-link :href="route('logout')"
                 onclick="event.preventDefault();
                             this.closest('form').submit();">
          <label class="px-2 text-white">{{ Auth::user()->name }}</label>
          <input type="button" class="btn btn-warning" value="{{ __('Log Out') }}" />
          </x-responsive-nav-link>
         </form>
        </div>
      </div>
    </div>
</header>