<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('assets/css/home.css') }}" rel="stylesheet">
</head>
<body>
 

    
    <section id="body">

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

    <h2 class="h_slide">Super Market</h2>

        <div class="slideshow" style="max-width:500px">
        <img class="mySlides" src="{{ asset('assets/images_supermarket/super4.jpg') }}">
        <img class="mySlides" src="{{ asset('assets/images_supermarket/super5.jpg') }}">
        <img class="mySlides" src="{{ asset('assets/images_supermarket/super6.jpg') }}">
        </div>   
      
    </section>

    <section id="items">

        <div class="item1">
            <div class="image1">
                <h3>Fruits</h3>
                <img  src="{{ asset('assets/images_supermarket/super4.jpg') }}" alt="" onclick=hello()>
                <button class="btn_item">Click</button>
            </div>
            
            <div class="image2">
                <h3>Bakery</h3>
                <img src= "{{ asset('assets/images_supermarket/super5.jpg') }}" alt="">
                <button class="btn_item">Click</button>
            </div>
            
            <div class="image3">
                <h3>Meat</h3>
                <img  src="{{ asset('assets/images_supermarket/super6.jpg') }}" alt="">
                <button class="btn_item">Click</button>
            </div>
           
            <div class="image4">
                <h3>Cosmatics</h3>
                <img  src="{{ asset('assets/images_supermarket/super7.jpg') }}" alt="">
                <button class="btn_item">Click</button>
            </div>
        </div>
       
      
    </section>

</body>

<script src="{{ asset('assets/js/home.js') }}"></script>

</html>