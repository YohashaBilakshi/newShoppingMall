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
    <h2 id="head2">Experience the best service with the best product</h2>
    <section id="id_items">

        <div class="item1">
            <div class="image">
                <h3>Fruits</h3>
                <img  src="{{ asset('assets/images_supermarket/super4.jpg') }}" alt="" onclick=hello()>
                <h4 id="item_name">Mango</h4>
                Rs.<h5 id="item_price">250/-</h5>                
                <button class="btn_item">Add</button>
                
            </div>
            
            <div class="image">
                <h3>Bakery</h3>
                <img src= "{{ asset('assets/images_supermarket/super5.jpg') }}" alt="">
                <h4 id="item_name">Mango</h4>
                Rs.<h5 id="item_price">250/-</h5>  
                <button class="btn_item">Add</button>
            </div>
            
            <div class="image">
                <h3>Meat</h3>
                <img  src="{{ asset('assets/images_supermarket/super6.jpg') }}" alt="">
                <h4 id="item_name">Mango</h4>
                Rs.<h5 id="item_price">250/-</h5>  
                <button class="btn_item">Add</button>
            </div>
           
            <div class="image">
                <h3>Cosmatics</h3>
                <img  src="{{ asset('assets/images_supermarket/super7.jpg') }}" alt="">
                <h4 id="item_name">Mango</h4>
                Rs.<h5 id="item_price">250/-</h5>  
                <button class="btn_item">Add</button>
            </div>
        </div>
        <br>

        <div class="item2">
            <div class="image">
                <h3>Fruits</h3>
                <img  src="{{ asset('assets/images_supermarket/super4.jpg') }}" alt="" onclick=hello()>
                <h4 id="item_name">Mango</h4>
                Rs.<h5 id="item_price">250/-</h5>                
                <button class="btn_item">Add</button>
                
            </div>
            
            <div class="image">
                <h3>Bakery</h3>
                <img src= "{{ asset('assets/images_supermarket/super5.jpg') }}" alt="">
                <h4 id="item_name">Mango</h4>
                Rs.<h5 id="item_price">250/-</h5>  
                <button class="btn_item">Add</button>
            </div>
            
            <div class="image">
                <h3>Meat</h3>
                <img  src="{{ asset('assets/images_supermarket/super6.jpg') }}" alt="">
                <h4 id="item_name">Mango</h4>
                Rs.<h5 id="item_price">250/-</h5>  
                <button class="btn_item">Add</button>
            </div>
           
            <div class="image">
                <h3>Cosmatics</h3>
                <img  src="{{ asset('assets/images_supermarket/super7.jpg') }}" alt="">
                <h4 id="item_name">Mango</h4>
                Rs.<h5 id="item_price">250/-</h5>  
                <button class="btn_item">Add</button>
            </div>
        </div>
       
      
    </section>

</body>

<script src="{{ asset('assets/js/home.js') }}"></script>

</html>