<!-- .navbar -->
<nav id="navbar" class="navbar">
  <ul>
    <li><a class="nav-link scrollto active" href="{{ url('/') }}">Home</a></li>
    <li><a class="nav-link scrollto" href="#about">About</a></li>
    @if($token == "kosong")
      <li>
        <a class="nav-link scrollto" href="{{ url('/loginSuplier') }}">Login</a>
      </li>

      <li>
        <a class="getstarted scrollto" href="{{ url('/register') }}">Daftar</a>
      </li>
    @else
      <li>
        <a class="nav-link scrollto" href="{{ url('/logoutSuplier') }}">Logout</a>
      </li>
    @endif
  </ul>
  <i class="bi bi-list mobile-nav-toggle"></i>
</nav>
