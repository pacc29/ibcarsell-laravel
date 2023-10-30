<nav class="navbar custom_nav-container navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('inicio')}}" wire:navigate>
      <img src="/storage/images/logo1.png" style="width: 150px;" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbarSupportedContent">
      <div class="d-flex mx-auto  align-items-center justify-content-center">
        <ul class="header__list navbar-nav">
          <li class="nav-item">
            <a class="header__item header__item-1 nav-link" href="{{route('comprar')}}" wire:navigate>Comprar</a>
          </li>
          <li class="nav-item">
            <a class="header__item header__item-2 nav-link" href="{{route('vender')}}" wire:navigate>Vender</a>
          </li>
          <li class="nav-item">
            <a class="header__item header__item-3 nav-link" href="{{route('contacto')}}" wire:navigate>Contactanos</a>
          </li>
          <li class="nav-item">
            <a class="header__item header__item-4 nav-link" href="{{route('blog')}}" wire:navigate>Blog</a>
          </li>
          @auth
          <livewire:auth.logout />
          @if (auth()->user()->is_admin)
          <li class="nav-item">
            <a class="header__item header__item-4 nav-link mx-5" href="{{route('admin')}}" wire:navigate>Admin</a>
          </li>
          @endif
          @else
          <li class="nav-item">
            <a class="header__item header__item-6 nav-link" href="{{route('login')}}" wire:navigate>Login</a>
          </li>
          <li class="nav-item">
            <a class="header__item header__item-5 nav-link" href="{{route('registro')}}" wire:navigate>Registro</a>
          </li>
          @endauth
        </ul>
      </div>
    </div>
    <div class="quote_btn-container d-none d-lg-flex gap-4 justify-content-center align-items-center">
      @auth
      <span class="header__email">{{auth()->user()->nombre}}</span>
      @endauth
      <a class="header__email" href="mailto:ibcarsell@corpibgroup.com"><i
          class="bi bi-envelope-fill"></i><span>ibcarsell@corpibgroup.com</span></a>
    </div>
  </div>
</nav>