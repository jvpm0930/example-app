<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="/resources/css/home.css">
  <title>Products</title>
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
      color: #017143;
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
      background: #017143;
      clip-path: circle(600px at right 800px);
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
            <a class="nav-link" aria-current="page" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/aboutus">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contactus">Contact us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="/services" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
        <h2><br><span>BuckStars</span></h2>
        <p>
          We value your feedback and are here to assist you in any way we can. Whether you have questions, suggestions, or simply want to share your love for coffee, we're all ears! You can reach us through the following channels:
        </p>
        <ul>
          <li>Address: [123 Main Street, City, State, Zip Code]</li>
          <li>Phone: [555-555-5555]</li>
          <li>Email: [info@BuckStars.com]</li>
          <li>Social Media: [Facebook: @BuckStars | Instagram: @BuckStars]</li>
        </ul>
        <p>
          Our friendly staff is available during our business hours to answer your calls and emails promptly. Additionally, feel free to connect with us on social media for the latest updates, promotions, and behind-the-scenes glimpses into our coffee-loving community. We look forward to hearing from you soon!
        </p>
      </div>
      <div class="img-box">
        <img src="./images/img1.png" class="starbucks" alt="">
      </div>
    </div>
  </section>

</body>

</html>