<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Furnishings @yield('title')</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="/css/stl.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <style type="text/css">
        a{
            text-decoration: none;
        }
        .logo:hover{
            color:var(--yallow);
        }

        .btn{
            display: inline-block;
            margin-top: 1rem;
            border-radius: 5rem;
            background:#333;
            color:#fff;
            padding:.9rem 3.5rem;
            cursor: pointer;
            font-size: 1.7rem;
        }

        .dropdown-menu li {
            position:relative;
        } 
        
        .navbar-nav 
        {
            position: absolute;
            top:28%;
        }
        .nav-link
        {
            color:#666;
        }
        .dropdown-menu .submenu {
            display: none;
            position: absolute;
            left: 100%;
            top: -7px;
        }
 
    </style>
</head>
<body>
    <!-- header section starts  -->;
<header>

<input type="checkbox" name="" id="toggler">
<label for="toggler" class="fas fa-bars"></label>

<a href="#" class="logo">Furnishings<span>.</span></a>

<nav class="navbar">
    <a href="/home">home</a>
    <a href="#about">about</a>
    <a href="#products">products</a>
    <a href="#review">review</a>
    <a href="#contact">contact</a>                
</nav>
<ul class="navbar-nav">
                        <li class="nav-item dropdown ">
                            <a href="/categories" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Categories</a>
                            <ul class="dropdown-menu drop ">
                                <li><a href="/sofas&armchairs" class="dropdown-item">Sofas and armchairs &raquo;</a>
                                    <ul class="dropdown-menu submenu">
                                        <li><a href="" class="dropdown-item">Sofas</a></li>
                                        <li><a href="" class="dropdown-item">Armchairs</a></li>
                                        <li><a href="" class="dropdown-item">Easy chairs</a></li>
                                        <li><a hrfe="" class="dropdown-item">Chaise longues</a></li>
                                    </ul>
                                </li>
                                <li><a href="/tables&chairs" class="dropdown-item ">Tables and chairs &raquo;</a>
                                    <ul class="dropdown-menu submenu">
                                        <li><a href="" class="dropdown-item">Chairs</a></li>
                                        <li><a href="" class="dropdown-item">Stools</a></li>
                                        <li><a href="" class="dropdown-item">Indoor benches</a></li>
                                        <li><a hrfe="" class="dropdown-item">Game tables</a></li>
                                        <li><a href="" class="dropdown-item">Writing tables</a></li>
                                        <li><a href="" class="dropdown-item">Secretary desks</a></li>
                                    </ul>
                                </li>
                                <li><a href="/storagesys&units" class="dropdown-item ">Storage systems and units &raquo;</a>
                                    <ul class="dropdown-menu  submenu">
                                        <li><a href="" class="dropdown-item">Bookcases</a></li>
                                        <li><a href="" class="dropdown-item">Storage walls</a></li>
                                        <li><a href="" class="dropdown-item">TV cabinets</a></li>
                                        <li><a hrfe="" class="dropdown-item">Highboardss</a></li>
                                        <li><a href="" class="dropdown-item">Display Cabinets</a></li>
                                        <li><a href="" class="dropdown-item">Hallway units</a></li>
                                        <li><a href="" class="dropdown-item">Wall cabinets</a></li>
                                    </ul>
                                </li>
                                <li><a href="" class="dropdown-item ">Sleeping area and children's bedrooms &raquo;</a>
                                    <ul class="dropdown-menu submenu">
                                        <li><a href="" class="dropdown-item">Beds</a></li>
                                        <li><a href="" class="dropdown-item">Bedside tables</a></li>
                                        <li><a href="" class="dropdown-item">Chests of drawers</a></li>
                                        <li><a hrfe="" class="dropdown-item">Walk-in wardrobes</a></li>
                                        <li><a hrfe="" class="dropdown-item">Headboards</a></li>
                                        <li><a hrfe="" class="dropdown-item">Dressing tables</a></li>

                                    </ul>
                                </li>
                                <li><a href="" class="dropdown-item ">Kids furniture Furniture components and hardware  &raquo;</a>
                                    <ul class="dropdown-menu submenu">
                                        <li><a href="" class="dropdown-item">Kids bedroom</a></li>
                                        <li><a href="" class="dropdown-item">Kids bedrooms accessories</a></li>
                                        <li><a href="" class="dropdown-item">Kids tables and chairs</a></li>
                                        <li><a hrfe="" class="dropdown-item">Kids tableware</a></li>
                                    </ul>
                                </li>
                                <li><a href="" class="dropdown-item">Furniture components and hardware  &raquo;</a>
                                    <ul class="dropdown-menu submenu">
                                        <li><a href="" class="dropdown-item">Drawers</a></li>
                                        <li><a href="" class="dropdown-item">Cabinet doors</a></li>
                                        <li><a href="" class="dropdown-item">Table tops</a></li>
                                        <li><a hrfe="" class="dropdown-item">Table bases</a></li>
                                        <li><a href="" class="dropdown-item">Table legs</a></li>
                                        <li><a href="" class="dropdown-item">Trestles</a></li>
                                        <li><a href="" class="dropdown-item">Furniture foils</a></li>
                                        <li><a href="" class="dropdown-item">Furniture handles</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
<div class="icons">
    <a href="#" class="fas fa-heart"></a>
    <a href="/cart" class="fas fa-shopping-cart"></a>
    <a href="#" class="fas fa-user"></a>
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