<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.lordicon.com/lordicon.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="/resources/css/home.css">
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins" />
  <title>BuckStars</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>


  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid" style="margin: 20px;">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="/dashboard">BuckStars</a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="nav justify-content-center nav-underline navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/dashboard">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/aboutus">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contactus">Contact us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="/services" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Products
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="/service1">Espresso Blend</a></li>
              <li><a class="dropdown-item" href="/service2">Cold Brew</a></li>
              <li><a class="dropdown-item" href="/service3">Blueberry Muffin</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <button class="btn btn-outline-success" type="submit">Search</button>
          <input class="form-control me-2" type="search" placeholder="" aria-label="Search">
        </form>
        <a href="logout">
          Log out
        </a>
      </div>
    </div>
  </nav>
  @yield('content')
  <p style="margin-bottom: 10%;"></p>

</body>