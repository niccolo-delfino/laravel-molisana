<header>
  <div class="header-up">
    <div class="logo">
      <img src="{{ asset('img/logo.png') }}" alt="">
    </div>
  </div>
  <div class="header-down">
    <ul>
      <li><a href="{{ route('pagina-home') }}" class="{{ (Request::route()->getName() == 'pagina-home') ? 'active' : ''}}">Home</a></li>
      <li><a href="{{ route('pagina-prodotti') }}" class="{{ (Request::route()->getName() == 'pagina-prodotti') ? 'active' : ''}}">Prodotti</a></li>
      <li><a href="{{ route('pagina-notizie') }}" class="{{ (Request::route()->getName() == 'pagina-notizie') ? 'active' : ''}}">News</a></li>
    </ul>
  </div>
</header>
