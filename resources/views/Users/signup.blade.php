<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="{{ asset('assets/css/signup.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <h2>Create Your Account here and get offers !!</h2>
        <h3>Already member ? <a href="#">Login</a> here</h3>
    </header>
    <br>
    <div id="col_1">
       <form action="">
            <h3>Phone number *</h3>
            <input type="text" placeholder="  Please enter your phone number" require>

            <h3>Verification code from whatsapp *</h3>
            <input type="text" placeholder="  Verification code" require>
            <br>
            <a href="#">Get code via other methods</a>

            <h3>Password *</h3>
            <input type="text" placeholder="  Please enter your phone number" require>

            <h3>Birthday</h3>
            <input type="date" placeholder="  Verification code" require>  
            <br><br><br>
            
            <input type="button" value="SIGN UP" >

       </form>

    </div>
   
    
</body>
</html>