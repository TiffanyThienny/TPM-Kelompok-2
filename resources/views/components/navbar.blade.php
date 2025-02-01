<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Tecnospace</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contact-us">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Lead-Information">Lead Information (Binusian)</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('getLeadnonbinInfo') }}">Lead Information (Non-Binusian)</a>
          </li>
          
            <li class="nav-item">
              <form action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-link nav-link" style="cursor: pointer;">Logout</button>
              </form>
            </li>
          @else
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/Member">Register</a>
            </li>
          @endauth
        </ul>
  
        <!-- Search Form -->
        <form class="d-flex" role="search" action="/search" method="GET">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="query">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKPL7Ad1z0ipYddZ4KhT4hP9NBd+kDLz5A2s7rZihZsZlPfPoNN3BHKMZ8RgD+58" crossorigin="anonymous"></script>
  