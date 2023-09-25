<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('assets/css/home.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <div>
            <h1 id="logo">LOGO</h1>
        </div>
        <div id="h_items">
            <a href="#">Home</a>
            <a href="#">Items</a>
            <a href="#">Chart</a>
            <a href="#">Login</a>
        </div>
    </header>

    <h2 class="slide">Automatic Slideshow</h2>

<div class="slideshow" style="max-width:500px">
  <img class="mySlides" src="{{ asset('assets/images_supermarket/super4.jpg') }}" style="width:100%">
  <img class="mySlides" src="{{ asset('assets/images_supermarket/super5.jpg') }}" style="width:100%">
  <img class="mySlides" src="{{ asset('assets/images_supermarket/super6.jpg') }}" style="width:100%">
</div>


    
    <section id="body">
        gdfgdfg
    </section>

</body>

<script src="{{ asset('assets/js/home.js') }}"></script>

</html>