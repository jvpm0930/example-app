<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="/resources/css/home.css">
  <title>Home</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&family=Nunito+Sans:ital,wght@0,400;0,700;0,800;1,300;1,700&family=Poppins:wght@400;500;600;700;800;900&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    section {
      position: relative;
      width: 100%;
      min-width: 100vh;
      padding: 100px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: #fff;
    }

    header {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      padding: 20px 10px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header .logo {
      position: relative;
      max-width: 80px;
    }

    header ul {
      position: relative;
      display: flex;
    }

    header ul li {
      list-style: none;
    }

    header ul li a {
      display: inline-block;
      color: #333;
      font-weight: 800;
      margin-left: 40px;
      text-decoration: none;
    }

    .container {
      position: relative;
      width: 100%;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .container .text-box {
      position: relative;
      max-width: 600px;
    }

    .container .text-box h2 {
      color: #333;
      font-size: 4em;
      font-weight: 500px;
    }

    .container .text-box h2 span {
      color: #3586ff;
      font-size: 1.2em;
      font-weight: 900;
    }

    .container .text-box p {
      color: #333;
    }

    .container .text-box a {
      display: inline-block;
      margin-top: 20px;
      padding: 8px 20px;
      background: #017143;
      color: #fff;
      border-radius: 40px;
      font-weight: 500;
      letter-spacing: 1px;
      text-decoration: none;
    }

    .container .img-box {
      width: 600px;
      display: flex;
      justify-content: flex-end;
      padding-right: 50px;
      margin-top: 50px;
    }

    .container .img-box img {
      max-width: 340px;
    }

    .thumb {
      position: absolute;
      left: 50%;
      bottom: 20px;
      transform: translateX(-50%);
      display: flex;
    }

    .thumb li {
      list-style: none;
      display: inline-block;
      margin: 0 20px;
      padding: none;
      cursor: pointer;
      transition: 0.5s;
    }

    .thumb li:hover {
      transform: translateY(-15px);
    }

    .thumb li img {
      max-width: 600px;
    }

    .social {
      position: absolute;
      top: 50%;
      right: 30px;
      transform: translateY(-50%);
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }

    .social li {
      list-style: none;
    }

    .social li a {
      display: inline-block;
      margin: 5px 0;
      transform: scale(0.6);
      filter: invert(1);
    }

    .circle {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: #3586ff;
      clip-path: circle(600px at right 800px);
    }

    .footer {
      position: relative;
      width: 100%;
      background: #3586ff;
      min-height: 100px;
      padding: 20px 50px;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }

    .social-icon,
    .menu {
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 10px 0;
      flex-wrap: wrap;
    }

    .social-icon__item,
    .menu__item {
      list-style: none;
    }

    .social-icon__link {
      font-size: 2rem;
      color: #fff;
      margin: 0 10px;
      display: inline-block;
      transition: 0.5s;
    }

    .social-icon__link:hover {
      transform: translateY(-10px);
    }

    .menu__link {
      font-size: 1.2rem;
      color: #fff;
      margin: 0 10px;
      display: inline-block;
      transition: 0.5s;
      text-decoration: none;
      opacity: 0.75;
      font-weight: 300;
    }

    .menu__link:hover {
      opacity: 1;
    }

    .footer p {
      color: #fff;
      margin: 15px 0 10px 0;
      font-size: 1rem;
      font-weight: 300;
    }

    .wave {
      position: absolute;
      top: -100px;
      left: 0;
      width: 100%;
      height: 100px;
      background: url("https://i.ibb.co/wQZVxxk/wave.png");
      background-size: 1000px 100px;
    }

    .wave#wave1 {
      z-index: 1000;
      opacity: 1;
      bottom: 0;
      animation: animateWaves 4s linear infinite;
    }

    .wave#wave2 {
      z-index: 999;
      opacity: 0.5;
      bottom: 10px;
      animation: animate 4s linear infinite !important;
    }

    .wave#wave3 {
      z-index: 1000;
      opacity: 0.2;
      bottom: 15px;
      animation: animateWaves 3s linear infinite;
    }

    .wave#wave4 {
      z-index: 999;
      opacity: 0.7;
      bottom: 20px;
      animation: animate 3s linear infinite;
    }

    @keyframes animateWaves {
      0% {
        background-position-x: 1000px;
      }

      100% {
        background-positon-x: 0px;
      }
    }

    @keyframes animate {
      0% {
        background-position-x: -1000px;
      }

      100% {
        background-positon-x: 0px;
      }
    }

    .btn:hover {
      background-color: #3586ff;
    }

    .floating {
      animation-name: floating;
      animation-duration: 5s;
      animation-iteration-count: infinite;
      animation-timing-function: ease-in-out;
      margin-left: 0px;
      margin-top: 0px;
    }

    @keyframes floating {
      0% {
        transform: translate(0, 0px);
      }

      50% {
        transform: translate(0, 15px);
      }

      100% {
        transform: translate(0, -0px);
      }
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid" style="margin: 20px;">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="/">BuckStars</a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="nav justify-content-center nav-underline navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/home">Home</a>
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
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>


  <section>
    <div class="circle"></div>
    <div class="container">
      <div class="text-box">
        <h2>Its not just a Coffee <br>Its <span>BuckStars</span></h2>
        <p>Where every sip tells a story.</p>
      </div>
      <div class="floating" style="height:400px; width:400px;">
        <img src="https://cdn.pixabay.com/photo/2016/06/24/10/46/drinks-1477040_1280.png" width="400" height="400" alt="" />
      </div>
    </div>
  </section>


  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item">
        <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#3586ff"></rect><text x="50%" y="50%" fill="white" dy=".3em">First Product</text>
        </svg>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#3586ff"></rect><text x="50%" y="50%" fill="white" dy=".3em">Second Product</text>
        </svg>
      </div>
      <div class="carousel-item active">
        <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#3586ff"></rect><text x="50%" y="50%" fill="white" dy=".3em">Third Product</text>
        </svg>
      </div>
    </div>
  </div>


  <section>
    <div class="container">
      <div class="text-box">
        <h2>Welcome to our cozy coffee shop <br><span>BuckStars</span></h2>
        <p>Nestled in the heart of Pantukan, our cozy coffee haven is conveniently situated on Main Street, easily accessible from both downtown and residential neighborhoods. Look for our charming storefront adorned with inviting signage and the aroma of freshly brewed coffee wafting through the air. Our central location makes us the perfect pitstop for commuters, students, and locals alike, seeking a moment of respite from the hustle and bustle of city life. With ample street parking available and public transportation stops nearby, visiting us is as convenient as it is delightful. So come on over and let us be your oasis in the midst of urban adventures!</p>
      </div>
      <div class="floating" style="height:400px; width:400px;">
        <img src="https://cdn.pixabay.com/photo/2016/01/10/22/23/location-1132648_1280.png" width="400" height="400" alt="" />
      </div>
    </div>
  </section>

  <p style="margin-bottom: 10%;"></p>

  <footer class="footer">
    <div class="waves">
      <div class="wave" id="wave1"></div>
      <div class="wave" id="wave2"></div>
      <div class="wave" id="wave3"></div>
      <div class="wave" id="wave4"></div>
    </div>
    <ul class="social-icon">
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-facebook"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-twitter"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-linkedin"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-instagram"></ion-icon>
        </a></li>
    </ul>
    <ul class="menu">
      <li class="menu__item"><a class="menu__link" href="/home">Home</a></li>
      <li class="menu__item"><a class="menu__link" href="/aboutus">About us</a></li>
      <li class="menu__item"><a class="menu__link" href="/contactus">Contact us</a></li>

    </ul>
    <p>&copy;2024 BuckStars | All Rights Reserved</p>
  </footer>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>