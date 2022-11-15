<!DOCTYPE html>
<html>
    <head>
        <!-- Basic Page Needs -->
        <meta charset="UTF-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="keywords" content="">
        <meta name="author" content="CreativeLayers">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Confirmation</title>
        <!-- Boostrap style -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <!-- theme style -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/confirma.scss">
        <!-- Responsive style -->
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"> 
    </head>
    <body onload="defaultDayTime();">
        <div class="layout-theme">
            <div id="loading-overlay">
            <div class="loader"></div>
        </div>
            <!-- Start Header -->
            <header id="header" class="header-02" style="background-color: black;">
                <div class="container-fluid">
                    <div id="logo" class="logo-pro">
                        <a href="{{route('acceuil')}}" title="logo prodrive">
                            <img src="images/1w.png" alt="">
                        </a>
                    </div>
                    <div class="container center">
                        <div class="navigation">
                            <div class="mobile-menu">
                                <span></span>
                            </div>
                            <div id="main-menu" class="main-menu">
                                <div class="top-text">
                                    <span>
                                        <a href="{{route('acceuil')}}" title=""><img src="images/1w.png" alt=""></a></span>
                                    <i class="pe-7s-close"></i>
                                </div>
                                <ul class="menu">
                                    <li>
                                        <a href="{{route('acceuil')}}">Acceuil</a>
                                    </li>
                                    <li>
                                        <a href="{{route('services')}}">Services</a>
                                    </li>
                                    <li>
                                        <a href="{{route('flottes')}}">Flottes</a>
                                    </li>
                                    <li>
                                        <a href="{{route('contacts')}}">Contact</a>
                                    </li>
                                    <li  id="menureserv" style="display:none">
										<a href="{{route('reservations')}}">Reservation</a>
									</li>
                                </ul>
                            </div>
                        </div>
                        <div class="box-right">
                            <div class="login">
                                <a href="{{route('reservations')}}">Réservation</a>
                            </div>
                        </div>
                    </div>

                </div>
            </header>
        <div class="contain center" style="margin-top:100px; margin-bottom:100px;">
            <h1 style="line-height: 1.1;">Votre réservation a été bien confirmée</h1>
            <h5 style="margin-top: 20px;">Lorem ipsum dolor sit amet consectetur adipisicing elit</h5>
            <i class="far fa-check-circle fa-4x" style="color: rgb(34, 185, 34); margin-top:20px;"></i>
            <div style="margin-top: 50px;">
                <button type="button" class="no-bg clr-1 border-1"><a href="{{route('acceuil')}}" style="color: #bf9c60">Acceuil </a><img src="images/icon/right-4.png" alt=""></button>
            </div>
        </div>

        <footer id="footer" class="footer-02">
            <div class="container">
                <div class="widget-footer widget-about">
                <div id="logo" class="logo-pro">
                    <a href="{{route('acceuil')}}" title="logo prodrive">
                        <img src="images/1w.png" alt="">
                    </a>
                </div>
                <ul class="infomation-ft">
                    <li>
                        29 Rue du Patis Rondin, 44300 Nantes, France.
                    </li>
                    <li>0683910625</li>
                    <li>mypremiumvtc@gmail.com</li>
                </ul>
                <ul class="social-ft">
                    <li>
                        <a href="#" title="Facebook">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Twitter">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Instagram">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Pinterest">
                            <i class="fa fa-pinterest" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Dribble">
                            <i class="fa fa-dribbble" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Google">
                            <i class="fa fa-google" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
                </div>
            </div>
        </footer>
        <!-- End Footer -->
        <!-- Start Footer Bottom -->
        <section class="footer-bottom center">
            <div class="container">
                <ul class="city">
                    <li>
                        <a href="{{route('acceuil')}}" title="">Acceuil</a>
                    </li>
                    <li>
                        <a href="{{route('services')}}" title="">Services</a>
                    </li>
                    <li>
                        <a href="{{route('flottes')}}" title="">Flottes</a>
                    </li>
                    <li>
                        <a href="{{route('contacts')}}" title="">Contact</a>
                    </li>
                    <li>
                        <a href="{{route('reservations')}}" title="">Réservation</a>
                    </li>
                    <li>
                        <a href="{{route('mentions-legales')}}" title="">Mentions légales</a>
                    </li>
                </ul>
            </div>
        </section>
        <!-- End Footer Bottom -->
        <!-- Start copyright -->
        <section class="copyright cpr2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Copyright <a href="https://premium-west-transport.com" style="color: #bf9c60">MYPREMIUM VTC</a> © 2021. Tous Droits Réservés</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End copyright -->
        <div class="scroll-top">
        </div>
    </div>

<!-- Javascript -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/tether.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/waypoints.min.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/owl.carousel.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="js/gmap3.min.js"></script>
<script type="text/javascript" src="js/waves.min.js"></script>
<script type="text/javascript" src="js/template.js"></script>
{{-- <script type="text/javascript" src="js/script.js"></script> --}}

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAc7zsgsxb3InhgQCG28Zf8nluBh3jY4T0&libraries=places"></script>

<script>
var animation = document.getElementById('successAnimation');
var restart = document.getElementById('replay');

restart.addEventListener('click', function(e) {
  e.preventDefault;
  animation.classList.remove('animated');
  void animation.parentNode.offsetWidth;
  animation.classList.add('animated');
}, false);
</script>

<!-- End Javascript -->
    </body>

</html>


