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
            <a href="#id_items">Items</a>
            <a href="#">Chart</a>
            <a href="{{ asset('resources/views/Users/signup.blade.php') }}">Login</a>         
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

<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">our services</a></li>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">affiliate program</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">shipping</a></li>
                        <li><a href="#">returns</a></li>
                        <li><a href="#">order status</a></li>
                        <li><a href="#">payment options</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>online shop</h4>
                    <ul>
                        <li><a href="#">watch</a></li>
                        <li><a href="#">bag</a></li>
                        <li><a href="#">shoes</a></li>
                        <li><a href="#">dress</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
   </footer>

<script src="{{ asset('assets/js/home.js') }}"></script>

</html>