<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/"><img src="../images/logo30x30.png" alt="Аукционстрой"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

  @if(Auth::check())
    <ul class="navbar-nav mr-auto">
      <li class="nav-item {{ Request::is('/home') ? "active" : "" }}">
        <a class="nav-link" href="/home">Сделать заказ </a>
      </li>
      <li class="nav-item {{ Request::is('tenders') ? "active" : "" }}">
        <a class="nav-link" href="/tenders">Мои тендеры</a>
      </li>
      <!--<li class="nav-item {{ Request::is('about') ? "active" : "" }}">
        <a class="nav-link" href="/about">About</a>
      </li>
      <li class="nav-item {{ Request::is('contact') ? "active" : "" }}">
        <a class="nav-link" href="/contact">Contact</a>
      </li>-->


    </ul>
  @endif
    <ul class="nav navbar-nav justify-content-end">
      @if(Auth::check())

        <li class="nav-item">
        <a class="nav-link" style="color: #337ab7;" href="#">Стать продавцом</a>
      </li>

        <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Привет, {{ Auth::user()->name}}
        </a>
        <div class="dropdown-menu " aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('account.index') }}"> <span class="fa fa-user"></span> Профиль</a>
          <a class="dropdown-item" href="#"> <span class="fa fa-bell"></span> Уведомления</a>
          <a class="dropdown-item" href="#"> <span class="fa fa-cog"></span> Настройки</a>

          <div class="dropdown-divider"></div>

        <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
          <span class="fa fa-sign-out"></span>   Выйти
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>

        </div>
      </li>
      @else
      <li>
        <a class="nav-link" href="{{ route('login')}}">Войти</a>
      </li>
       <li><a class="nav-link" href="{{ route('register') }}">Регистрация</a></li>
      @endif
    </ul>
  </div>
</nav>
<br>
