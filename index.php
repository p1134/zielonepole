<?php
@session_start();
?>
<!DOCTYPE html>

<html lang="pl" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Zielone Pole</title>
    <meta name="description" content="Rezerwacja miejsc na polu namiotowym, miejsca dla kamperów." />
    <meta name="keywords" content="pole namiotowe, kemping, camping, kamping, namiot, kamper, camper, kampery, namioty, " />
    <meta name="author" content="Paulina Ryguła" />

    <style><?php include 'home.css'; ?></style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <?php
    if (isset($_SESSION['e_login']) || isset($_SESSION['e_haslo']) || isset($_SESSION['e_regulamin']) || isset($_SESSION['e_email']) || isset($_SESSION['e_login2']) || isset($_SESSION['e_email2'])):
    ?>
    <script>
        window.onload = () => {
            $('#modalContactForm3').modal('show');
        };
    </script>
        <?php
        endif;
        ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">

</head>

<body>
<?php include 'formularz_logowania.php'; ?>
<?php include 'formularz_rejestracji.php'; ?>    

    <!-- Pasek górny -->
    <div class="container-fluid" style="background-color: #17e074; height: auto;">
        <div class="container">
            <div class="row">
                <div class="col-md-2" style="height: 50px; display: flex; position: relative;">
                    <img src="grafiki/pin-map.svg" style="width: 25px;">
                    <p class="adres">Zielona 37, Namiotowo</p>
                    </div>
                <div class="col-md-2" style="height: 50px; display: flex; position: relative; padding-left: 50px;">
                    <img src="grafiki/telefon.svg" style="width: 25px;">
                    <p class="telefon">123 456 789</p>
                    </div>
                <div class="col-md-2" style="height: 50px; display: flex; position: relative;">
                    <img src="grafiki/mail.svg" style="width: 25px;">
                    <p class="mail">kontakt@zielonepole.cba.pl</p>
                    </div>
                <div class="col-md-3"></div>
                <div class="col-md-2 crej" style="height: 50px;">
                    <p class="rejestracja"><a href="" class="nav-link rejestracja" data-toggle="modal" data-target="#modalContactForm3" data-backdrop="static">Rejestracja</a></p>
                </div>
                <div class="col-md-1 clog" style="height: 50px; ">
                     <p class="logowanie"><a href="" class="nav-link logowanie" data-toggle="modal" data-target="#modalContactForm2">Logowanie</a></p>
                </div>
             </div>
         </div>
     </div>

<!-- Pasek menu i logo -->
    <div class="container-fluid" style="background-color: #f3f3f3; height: auto;">
    <div class="container">
        <div class="row">
<!-- Logo -->
            <div class="col-md-2" style="height: 130px; display: grid; justify-content: center;">
                <img src="grafiki/logo.svg" style="height: 70px; margin-top: 15px; margin-left: 10px;">
                <div class="napisy-logo " style="display: flex; position: relative; padding-bottom: 10px;">
                 <p id="zielone-logo">ZIELONE</p>
                 <p id="pole-logo">POLE</p>
                </div>
            </div>
<!-- Menu -->
            <div class="col-md-10 menu-bar">
<ul class="nav menu-lista" style="margin-right: -25px;">
  <li class="nav-item menu">
    <a class="nav-link active" href="#o_nas">O nas</a>
  </li>
  <li class="nav-item menu">
    <a class="nav-link" href="#plan_pola">Plan pola</a>
  </li>
  <li class="nav-item menu">
    <a class="nav-link" href="#galeria">Galeria</a>
  </li>
  <li class="nav-item menu">
    <a class="nav-link" href="#cennik">Cennik</a>
  </li>
  <li class="nav-item menu">
    <a class="nav-link" href="formularz_logowania2.php">Rezerwacja</a>
  </li>
  <li class="nav-item menu">
    <a href="" class="nav-link" data-toggle="modal" data-target="#modalContactForm">Kontakt</a>
  </li>
</ul>

<!-- Formularz kontaktowy -->
<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="border-radius: 20px;">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Napisz do nas</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="form34" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form34">Imię</label>
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="form29" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form29">E-mail</label>
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-tag prefix grey-text"></i>
          <input type="text" id="form32" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form32">Temat</label>
        </div>

        <div class="md-form">
          <i class="fas fa-pencil prefix grey-text"></i>
          <textarea type="text" id="form8" class="md-textarea form-control" rows="4"></textarea>
          <label data-error="wrong" data-success="right" for="form8">Wiadomość</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-success przycisk_wyslij" style="border-radius: 10px; padding: 3px 20px 3px 20px; background-color: #17e074;">WYŚLIJ<i class="fas fa-paper-plane-o ml-1"></i></button>
      </div>
    </div>
  </div>
</div>

            </div>
        </div>
        </div>
    </div>
<!-- Baner i opis -->
        <div class="baner" style="">
            <div class="container">
                <div class="row">
                    <div class="col-md-6" style="height: auto; display: grid; justify-content: start;; padding-top: 300px;">
                        <section>
                            <a href="formularz_logowania2.php" style="text-decoration: none; color: white;"><button type="button"  class="btn btn-outline-* przycisk-rezerwuj" style="font-size: 50px; border-radius: 20px; padding: 20px 80px 20px 80px;">REZERWUJ</button></a>
                        </section>
                    </div>
                    <div class="col-md-6" style="height: auto; display: grid; justify-content: center; text-align: center;">
                        <h1 id="baner-zielone">ZIELONE</h1>
                        <h1 id="baner-pole">POLE</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="container c1">
        <div class="row kwadraty">
        <div class="col-md-3 cc1">
            <section class="kwadrat1">
            <a href="rezerwacja_namiot.php"><img src="Grafiki/tent.svg" style="width: 150px; margin-top: 45px;" class="ikona"></a>
            </section>
        </div>
        <div class="col-md-3 cc1">
            <section class="kwadrat1">
            <a href="rezerwacja_kamper.php"><img src="Grafiki/camper.svg" style="width: 150px; margin-top: 45px;" class="ikona"></a>
            </section>
        </div>
        <div class="col-md-3 cc1">
            <section class="kwadrat1">
            <a href="#galeria"><img src="Grafiki/attraction.svg" style="width: 150px; margin-top: 45px;" class="ikona"></a>
            </section>
        </div>
        </div>
        </div>

        <div class="opis" style="height: auto; background-color: #f3f3f3; padding-bottom: 90px;">
            <div class="container">
                <div class="row" id="o_nas" style="padding-top: 350px;">
                    <div class="col-md-5">
                    <h2><span id="tyt-1-1">CAMPING</span><span id="tyt-1-2"> I POLE NAMIOTOWE</span></h2>
                </div>
                <div class="row">
                    <div class="col-md-12" style="padding-top: 50px; display: grid">
                        <p class="opis_pola" style="display: grid;
    margin: 0 20px 0 20px;">Nasz kemping znajduje się na skraju małej, turystycznej miejscowości. Położony jest
                        bezpośrednio nad jeziorem, w pobliżu znajduje się wypożyczalnia kajaków oraz
                        rowerów. Wokół pola namiotowego rozpościera się potężny kompleks leśny.
                        <br>
                        Do dyspozycji naszych gości przygotowany jest teren o powierzchni ok. 2 ha z miejscami
                        przeznaczonymi dla przyczep kempingowych, camperów oraz namiotów. Pole biwakowe
                        od lat cieszy się dużym uznaniem wśród wczasowiczów. Przez wielu z nich uważane jest
                        za jedno z najpiękniejszych miejsc noclegowych na Mazurach.</p>
                    </div>
                    </div>
            </div>
                <hr style="margin-top: 120px;">
                    <div class="col-md-12" style="padding-top: 70px;" id="plan_pola">
                    <p><span id="tyt-1-1">PLAN</span><span id="tyt-1-2"> POLA</span></p>
                </div>
        </div>
<!-- Plan pola -->
                    <div class="opis" style="background-color: #f3f3f3;">
            <div class="container">
                <div class="row">
                    <div class="col-md-7" style="display: grid; justify-content: left;">
                        <h5 style="display: grid;
    margin: 40px 20px 0 20px;">Na terenie obiektu znajdują się:
                        </h5>
                        <ul>
                            <li>pola kempingowe i namiotowe</li>
                            <li>plac zabaw dla dzieci</li>
                            <li>punkt sanitarny z dostępem do ciepłej wody 24/7</li>
                            <li>przyłącza elektryczne</li>
                            <li>wiata biesiadna z kominkiem</li>
                            <li>pomost wędkarski</li>
                        </ul>
                    </div>
                    <div class="col-md-5" style="display: grid;">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                          <div class="carousel-inner" style="border-radius: 20px;">
                            <div class="carousel-item active">
                              <img class="d-block w-100" src="Grafiki/slider/1.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="Grafiki/slider/2.jpeg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="Grafiki/slider/3.jpg" alt="Third slide">
                            </div>
                          </div>
                        </div>
                    </div>
                    </div>
            </div>
    </div>
        <!-- Mapa pola -->
    <div class="mapa_pola" style="padding-top: 10vh; background-color: #f3f3f3;">
        <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3" style=" display: grid; justify-content: center;">
                <img src="Grafiki/mapka_campingu.jpg" style="border-radius: 50px; border: 3px solid black; height: 775px;">
            </div>
        </div>
            <hr style="margin-top: 120px;">
        </div>
    </div>
    </div>

    <div id="cennik" style="background-color: #f3f3f3; padding-bottom: 100px;" >
        <div class="container">
            <div class="row">
            <div class="col-md-5">
                <h2><span id="tyt-1-1">OFERTA</span><br><span id="tyt-1-2"> I CENNIK</span></h2>
            </div>
            </div>
            <div class="row" style="margin-top: 70px;">
                <div class="col-md-6">
                    <ul class="list-group">
                      <li class="list-group-item d-flex justify-content-between align-items-center" style="font-weight: bold; font-size: 18px;">
                        Parcela - Namiot
                        <span class="badge badge-primary badge-pill" style="background-color: #2a2c2b; font-size: 15px;">36 miejsc</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                        Sektor B
                        <span class="badge badge-primary badge-pill" style="background-color: #17e074; font-size: 15px;">20 PLN/doba</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                        Sektor D-E-G
                        <span class="badge badge-primary badge-pill" style="background-color: #17e074; font-size: 15px;">25 PLN/doba</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                        Sektor H
                        <span class="badge badge-primary badge-pill" style="background-color: #17e074; font-size: 15px;">30 PLN/doba</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-center align-items-center">
                          <button type="button" class="btn btn-outline-* rez_cennik" style="font-size: 20px; border-radius: 20px; padding: 7px 30px 7px 30px;"><a href="formularz_logowania2.php" style="color: white; text-decoration: none;">REZERWUJ</a></button>

                      </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="list-group">
                      <li class="list-group-item d-flex justify-content-between align-items-center" style="font-weight: bold; font-size: 18px;">
                        Parcela - Kamper
                        <span class="badge badge-primary badge-pill" style="background-color: #2a2c2b; font-size: 15px;">22 miejsca</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                        Sektor A
                        <span class="badge badge-primary badge-pill" style="background-color: #17e074; font-size: 15px;">30 PLN/doba</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                        Sektor C
                        <span class="badge badge-primary badge-pill" style="background-color: #17e074; font-size: 15px;">35 PLN/doba</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                        Sektor J
                        <span class="badge badge-primary badge-pill" style="background-color: #17e074; font-size: 15px;">40 PLN/doba</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-center align-items-center">
                          <button type="button" class="btn btn-outline-* rez_cennik" style="font-size: 20px; border-radius: 20px; padding: 7px 30px 7px 30px;"><a href="formularz_logowania2.php" style="color: white; text-decoration: none;">REZERWUJ</a></button>

                      </li>
                    </ul>
                </div>
            </div>
            <hr style="margin-top: 120px;">
        </div>
    </div>

<!-- Aktywny wypoczynek -->
    <div class="galeria" style="background-color: #f3f3f3; padding-bottom: 150px;" >
        <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2><span id="tyt-1-1">AKTYWNY</span><span id="tyt-1-2"> WYPOCZYNEK</span></h2>
            </div>
        </div>
        </div>
            <!-- Zielony pasek -->
        <div class="container-fluid" style="background-color: #17e074; height: 250px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 pasek_wypoczynek">
                        <img src="Grafiki/kayak.svg" width="180px">
                    </div>
                    <div class="col-md-4 pasek_wypoczynek">
                        <img src="Grafiki/rower.svg" width="180px">
                    </div>
                    <div class="col-md-4 pasek_wypoczynek">
                        <img src="Grafiki/fishing.svg" width="180px">
                    </div>
                </div>
            </div>
        </div>
<!-- Slidery -->
        <div class="container" style="padding-bottom: 70px; margin-top: 70px;">
            <div class="row">
<!-- Slider ze zdjęciami 1 -->
                <div class="col-md-6">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner" style="border-radius: 25px; margin-top: 80px;">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="Grafiki/splyw.jpg" alt="Spływ kajakowy">
                          <div class="carousel-caption d-none d-md-block">
                            <h5>Spływ kajakowy</h5>
                            <p>znajdujący się w pobliżu obiektu</p>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="Grafiki/rowery.jpg" alt="Wypożyczalnia rowerów">
                          <div class="carousel-caption d-none d-md-block">
                            <h5>Wypożycz rower</h5>
                            <p>I zwiedzaj okolicę</p>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="Grafiki/lowienie.jpg" alt="Third slide">
                          <div class="carousel-caption d-none d-md-block">
                            <h5>Łowisko</h5>
                            <p>rozłóż namiot i wybierz się na ryby</p>
                          </div>
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                </div>

<!-- Slider ze zdjęciami 2 -->
                <div class="col-md-6">
                    <div id="carouselExampleIndicator" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicator" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicator" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicator" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicator" data-slide-to="3"></li>
                      </ol>
                      <div class="carousel-inner" style="border-radius: 25px; margin-top: 80px;">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="Grafiki/kamper.jpg" alt="Kamper">
                          <div class="carousel-caption d-none d-md-block">
                            <h5>Parcela</h5>
                            <p>miejsce dla kamperów</p>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="Grafiki/las.jpg" alt="Las">
                          <div class="carousel-caption d-none d-md-block">
                            <h5>Jezioro</h5>
                            <p>widok z parceli</p>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="Grafiki/pole.png" alt="Pole namiotowe">
                          <div class="carousel-caption d-none d-md-block">
                            <h5>Parcele</h5>
                            <p>na polu namiotowym</p>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="Grafiki/widok.jpg" alt="Widok z góry">
                          <div class="carousel-caption d-none d-md-block">
                            <h5>Pole namiotowe</h5>
                            <p>z góry</p>
                          </div>
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicator" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicator" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="stopka" style="border-top: 1.5px solid black;">
        <div class="container" style="margin-top: 40px; padding-bottom: 30px;">
            <div class="row">
                <div class="col-sm-4" style="display: grid; justify-content: center; padding-top: 20px; line-height: 22px;">
                    <p><span class="stopka_czarny">Zielona 37, Namiotowo<br>
                    kontakt@</span><span class="stopka_zielony">zielone</span><span class="stopka_czarny">pole.pl<br>
                        123 456 789</span></p>
                </div>
                <div class="col-sm-4" style="padding-left: 30px; margin-top: 15px;">
                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><img src="Grafiki/Stopka/instalogo.svg" style="width: 74px;"></a>
                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><img src="Grafiki/Stopka/fblogo.svg" style="width: 70px; margin-left: 40px;"></a>
                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><img src="Grafiki/Stopka/twitterlogo.svg" style="width: 80px; margin-left: 40px;"></a>
                </div>
                <div class="col-sm-4 stopka_linki" style="line-height: 22px; padding-top: 20px; padding-left: 100px;">
                    <a href="#cennik" class="stopka_czarny">Cennik</a><br>
                    <a href="formularz_logowania2.php" class="stopka_zielony">Rezerwacja</a><br>
                    <a href="" class="stopka_czarny" class="nav-link" data-toggle="modal" data-target="#modalContactForm">Kontakt</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
