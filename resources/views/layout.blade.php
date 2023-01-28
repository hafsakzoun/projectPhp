<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Furnishings @yield('title')</title>
    <link rel="website icon" type="png" href="images/cap1.png">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="/css/stl.css">

</head>
<body>
    <!-- header section starts  -->
<header>

<input type="checkbox" name="" id="toggler">
<label for="toggler" class="fas fa-bars"></label>

<a href="#" class="logo">Furnishings<span>.</span></a>

<nav class="navbar">
    <a href="/home">home</a>
    <a href="/about">about</a>
    <a href="/products">products</a>
    <a href="/review">review</a>
    <a href="/contact">contact</a>
    <a href="/categories">categories</a>
</nav>

<div class="icons">
    <a href="#" class="fas fa-heart"></a>
    <a href="#" class="fas fa-shopping-cart"></a>
    <a href="/login" class="fas fa-user"></a>
</div>

</header>

<!-- header section ends -->

    @yield('content');
<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span> contact </span> us </h1>

    <div class="row">

        <form action="">
            <input type="text" placeholder="name" class="box">
            <input type="email" placeholder="email" class="box">
            <input type="number" placeholder="number" class="box">
            <textarea name="" class="box" placeholder="message" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>

        <div class="image">
            <img src="images/cap1.png" alt="">
        </div>

    </div>

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">about</a>
            <a href="#">products</a>
            <a href="#">review</a>
            <a href="#">contact</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#">my account</a>
            <a href="#">my order</a>
            <a href="#">my favorite</a>
        </div>

        <div class="box">
            <h3>locations</h3>
            <a href="#">Moroco</a>
            <a href="#">USA</a>
            <a href="#">japan</a>
            <a href="#">france</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#">+123-456-7890</a>
            <a href="#">elyahyaouyiman9@gmail.com</a>
            <a href="#">tanger, Moroco - 900000</a>
            <img src="images/payment.png" alt="paymens">
        </div>

    </div>

    <div class="credit"> created by <span> team. H.Y.I.F.I </span> | all rights reserved </div>

</section>

<!-- footer section ends -->


















    
</body>
</html>