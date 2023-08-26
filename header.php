<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Printifyz Pvt Ltd</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
        <link href="img/logoo.png" rel="icon" style="width: 170px;">
        <!-- <link rel="icon" href="favicon.ico" type="image/x-icon"/> -->

    <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Oswald:wght@500;600;700&family=Pacifico&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <!-- <link rel="stylesheet" href="../New folder/style1.css"> -->
        <!-- <link rel="stylesheet" href="../New folder/style2.css"> -->

    <!-- Pagination Script -->
        <script src="js/script.js" type="text/javascript"></script>

        <script type="text/javascript">
                
            function dropOpen(value){
                var shirts = document.getElementById("shirts");
                var child = document.getElementById("pages");
                var wedding = document.getElementById("wedding");
                var birthday = document.getElementById("birthday");
                var babyAndKids = document.getElementById("babyAndKids");
                var greeting = document.getElementById("greeting");
                if(value == 'pages')
                {
                    child.style.display="block";
                } else if(value=='shirts')
                {
                    shirts.style.display="block";
                }
                else if(value == 'wedding')
                {
                    wedding.style.display="block";
                }else if(value == 'birthday')
                {
                    birthday.style.display="block";
                }else if(value == 'babyAndKids')
                {
                    babyAndKids.style.display="block";
                }else if(value == 'greeting')
                {
                    greeting.style.display="block";
                } 


            }

            function dropClose(value){
                var shirts = document.getElementById("shirts");
                var child = document.getElementById("pages");
                var wedding = document.getElementById("wedding");
                var birthday = document.getElementById("birthday");
                var babyAndKids = document.getElementById("babyAndKids");
                var greeting = document.getElementById("greeting");
                if (value == 'pages')
                {
                    child.style.display="none";
                }else if(value== 'shirts')
                {
                    shirts.style.display="none";
                }
                else if(value == 'wedding')
                {
                    wedding.style.display="none";
                }else if(value == 'birthday')
                {
                    birthday.style.display="none";
                }else if(value == 'babyAndKids')
                {
                    babyAndKids.style.display="none";
                }else if(value == 'greeting')
                {
                    greeting.style.display="none";
                }
            }

            function childClose($this){
                console.log("working");
                dropClose(this);
            }

        </script>
</head>

<body>
    <!-- Topbar Start -->
        <div class="container-fluid px-0 d-none d-lg-block ">
            <div class="row gx-0">
                <div class="col-lg-3 text-center ">
                    <div class="d-inline-flex  justify-content-center">
                        <div class="text-center">
                            <!-- <img src="img/logo.jpg" alt="Logo Here" class="w-25"> -->
                        <a href="index.php"> 
                            <img src="img/logobggg.png" alt="Logo Here" class="w-100">
                        </a>    
                        
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center ">
                    <form action="">
                        <div class="input-group mt-4">
                            <i class="bi bi-search" style="position:relative; left: 30px; top: 17px;"></i>
                            <input type="text" class="form-control border-white p-3" placeholder="      Search" style="background-color: #D9D9D980; border-radius: 5px">
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 text-center py-3">
                    <div class="d-inline-flex align-items-center justify-content-center">
                        <div class="text-center mt-4 text-danger fw-bolder">
                            <a href="login.php" style="color:#F45051;"><span class="text-uppercase mb-1">Login</span></a> / 
                            <a href="sign-up.php" style="color:#F45051;"><span class="text-uppercase mb-1">Sign up</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-0">
            <a href="index.php" class="navbar-brand d-block d-lg-none">
                <!-- <h1 class="m-0 text-uppercase text-dark"><img src="img/icon.png" alt="Logo Here" style="width: 100px; height: 100px">Printifyz</h1> -->
                <h1 class="m-0 text-uppercase text-danger">Printifyz</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="bi bi-list" onclick="closeOpenHeader()"  style="color: black; font-size: 40px;"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto mx-lg-auto py-0 text-dark">

                <div class="" onmouseover="dropOpen('shirts')" onmouseout="dropClose('shirts')">
                    <a href="shirtsPage.php" class="nav-item nav-link text-dark nav-link">T-shirts</a>
                        <div class="dropdown-menu m-0" id="shirts">
                            <a href="shirtspage.php" class="dropdown-item">T-shirts</a>
                            <a href="longsleaves.php" class="dropdown-item">Long Sleaves</a>
                            <a href="hoodies.php" class="dropdown-item">Hoodies</a>
                            <!-- <a href="poloshirts.php" class="dropdown-item">Polo Shirts</a> -->
                            <a href="caps.php" class="dropdown-item">Caps</a>
                            <a href="waterbottle.php" class="dropdown-item">Water bottle</a>
                        </div>
                    </div>
                    
                    <div class="" onmouseover="dropOpen('wedding')" onmouseout="dropClose('wedding')">
                        <a href="weddingPage.php" class="nav-item nav-link text-dark nav-link">Wedding</a>
                        <div class="dropdown-menu m-0" id="wedding">
                            <a href="#" class="dropdown-item">Save Date</a>
                            <a href="#" class="dropdown-item">Bachelor Party</a>
                            <a href="#" class="dropdown-item">Bridal Shower</a>
                            <a href="#" class="dropdown-item">Engagement Party</a>
                            <a href="#" class="dropdown-item">Response & RSVP Cards</a>
                        </div>
                    </div>

                    <div class="" onmouseover="dropOpen('birthday')" onmouseout="dropClose('birthday')">
                        <a href="birthdayPage.php" class="nav-item nav-link text-dark nav-link">Birthday</a>
                        <div class="dropdown-menu m-0" id="birthday">
                            <a href="birthdayPage.php" class="dropdown-item">Birthday Invitation</a>
                            <a href="#" class="dropdown-item">1st Birthday Invitation</a>
                            <a href="#" class="dropdown-item">For Women</a>
                            <a href="#" class="dropdown-item">For Men</a>
                            <a href="#" class="dropdown-item">For Kid’s</a>
                            <a href="#" class="dropdown-item">For Babies</a>
                        </div>
                    </div>

                    <div class="" onmouseover="dropOpen('babyAndKids')" onmouseout="dropClose('babyAndKids')">
                        <a href="babyAndKids.php" class="nav-item nav-link text-dark nav-link">Baby & Kids</a>
                        <div class="dropdown-menu m-0" id="babyAndKids">
                            <a href="babyAndKids.php" class="dropdown-item">For Babies</a>
                            <a href="#" class="dropdown-item">For Babies     (Girl’s/Boy’s)</a>
                            <a href="#" class="dropdown-item">For Kids</a>
                            <a href="#" class="dropdown-item">For Kid’s        (Girl’s/Boy’s)</a>
                        </div>
                    </div>

                    <a href="party.php" class="nav-item nav-link text-dark">Party</a>
                    
                    <div class="" onmouseover="dropOpen('greeting')" onmouseout="dropClose('greeting')">
                        <a href="greeting.php" class="nav-item nav-link text-dark">Greetings</a>
                        <div class="dropdown-menu m-0" id="greeting">
                            <a href="greeting.php" class="dropdown-item">Thank you Cards</a>
                            <a href="#" class="dropdown-item">Graduation Day Cards</a>
                            <a href="#" class="dropdown-item">Support Cards</a>
                        </div>
                    </div>
                    <a href="gallery.php" class="nav-item nav-link text-dark">Gallery</a>
                    <div class="nav-item dropdown" onmouseover="dropOpen('pages')" onmouseout="dropClose('pages')">
                        <a href="#" class="nav-link text-dark dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0" id="pages">
                            <a href="#" class="dropdown-item">About Us</a>
                            <a href="contact.php" class="dropdown-item">Contact Us</a>
                            <a href="#" class="dropdown-item">FAQ</a>
                            <a href="term-conditions.php" class="dropdown-item">Terms & Conditions</a>

                        </div>
                    </div>
                    <a href="#" class="nav-item nav-link text-dark" style="position:relative; top:-10px;"><i class="bi bi-question-circle" style="font-size:30px;"></i></a>
                    <a href="#" class="nav-item nav-link text-dark" style="position:relative; top:-12px;"><i class="bi bi-bag" style="font-size: 30px;"></i></a>
                </div>
            </div>
        </nav>
    <!-- Navbar End -->