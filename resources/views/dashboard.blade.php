<!DOCTYPE html>
<html lang="en">
@extends('nav')
@section('content')
<section>
  <div class="circle"></div>
  <div class="container">
    <div class="text-box">
      <h2>Its not just a Coffee <br>Its <span>BuckStars</span></h2>
      <p>Where every sip tells a story.</p>
    </div>
    <div class="floating" style="height:400px; width:400px;">
      <img src="https://cdn.pixabay.com/photo/2016/06/24/10/46/drinks-1477040_1280.png" width="400" height="400" />
    </div>
  </div>
</section>


<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item">
      <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="#3586ff"></rect><text x="50%" y="50%" fill="white" dy=".3em">Espresso Blend</text>
      </svg>
    </div>
    <div class="carousel-item">
      <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="#3586ff"></rect><text x="50%" y="50%" fill="white" dy=".3em">Cold Brew</text>
      </svg>
    </div>
    <div class="carousel-item active">
      <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="#3586ff"></rect><text x="50%" y="50%" fill="white" dy=".3em">Blueberry Muffin</text>
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

@endsection

</html>