<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['login']))
{
  header('Location:index.php');
    die;
}
?>


<html lang="pl" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Zielone Pole</title>
    <meta name="description" content="Rezerwacja miejsc na polu namiotowym, miejsca dla kamperów." />
    <meta name="keywords" content="pole namiotowe, kemping, camping, kamping, namiot, kamper, camper, kampery, namioty, " />
    <meta name="author" content="Paulina Ryguła" />
    
    <style><?php include 'home.css'; ?></style>
<?php 
    include 'formularz_logowania.php';
    include 'formularz_rejestracji.php';
    include 'rezerwacja_namiot.php';
    include 'rezerwacja_kamper.php';
?>
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    
</head>

<body>
    
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
                    <p class="konto"><a class="konto" href="konto.php"><?php echo $_SESSION['login'] ?></a></p>
                </div>
                <div class="col-md-1 clog" style="height: 50px;">
                     <p class="wyloguj"><a class="wyloguj" href="wylogowanie.php">Wyloguj</a></p>
                </div>
             </div>
         </div>
     </div>
    
<!-- Pasek menu i logo -->
    <div class="container-fluid" style="background-color: #f3f3f3; height: auto; border-bottom: 1.5px solid #edecec;">
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
    <a class="nav-link active" href="zalogowany.php#o_nas">O nas</a>
  </li>
  <li class="nav-item menu">
    <a class="nav-link" href="zalogowany.php#plan_pola">Plan pola</a>
  </li>
  <li class="nav-item menu">
    <a class="nav-link" href="zalogowany.php#galeria">Galeria</a>
  </li>
  <li class="nav-item menu">
    <a class="nav-link" href="zalogowany.php#cennik">Cennik</a>
  </li>
  <li class="nav-item menu">
    <a class="nav-link" href="rezerwacja_wybor.php">Rezerwacja</a>
  </li>
  <li class="nav-item menu">
    <a href="" class="nav-link" data-toggle="modal" data-target="#modalContactForm">Kontakt</a>
  </li>
</ul>
                
<!-- Formularz kontaktowy -->
<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
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
        <button class="btn btn-success">Wyślij <i class="fas fa-paper-plane-o ml-1"></i></button>
      </div>
    </div>
  </div>
</div>
                
            </div>
        </div>
        </div>
    </div>
<div style="background-color: #f6f6f6;">
<div class="container" style="height: 70vh;">
    <div class="row">
        <div class="col-md-5">
            <div class="row" style="height: 30vh">
                <div class="col-md-12" style="text-align: center; padding-top: 119px;">
                    <img src="Grafiki/camping-tent.svg" style="height: 130px;">
                </div>
            </div>
            <div class="row" style="height: 30vh;">
                <div class="col-md-12">
                  <a class="nav-link namiot-wybor" href="" data-toggle="modal" data-target="#rezerwacja_namiot" style="font-family: 'Concert One', cursive; color: black; text-align: center; font-size: 50px; text-decoration: none; "><p>NAMIOT</p></a>
                </div>
            </div>
        </div>
        <div class="col-md-1 offset-1" style="border-left:1px solid #bbbcbd; height: 400px; width: 0; margin-top: 40px;"></div>
        <div class="col-md-5">
            <div class="row" style="height:30vh;">
                <div class="col-md-12" style="text-align: center; padding-top: 119px;">
                    <img src="Grafiki/campervan.svg" style="height: 130px;">
                </div>
            </div>
            <div class="row" style="height: 30vh;">
                <div class="col-md-12">
                  <a class="kamper-wybor" href="" style="font-family: 'Concert One', cursive; color: black; text-align: center; font-size: 50px; text-decoration: none; "><p >KAMPER</p></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
    
    
    <div class="stopka" style="border-top: 1.5px solid #edecec;">
        <div class="container" style="margin-top: 40px; padding-bottom: 30px;">
            <div class="row">
                <div class="col-sm-4" style="display: grid; justify-content: center; padding-top: 20px; line-height: 22px;">
                    <p><span class="stopka_czarny">Zielona 37, Namiotowo<br>
                    kontakt@</span><span class="stopka_zielony">zielone</span><span class="stopka_czarny">pole.pl<br>
                        123 456 789</span></p>
                </div>
                <div class="col-sm-4" style="padding-left: 30px; margin-top: 15px;">
                    <a href=""><img src="Grafiki/Stopka/instalogo.svg" style="width: 74px;"></a>
                    <a href=""><img src="Grafiki/Stopka/fblogo.svg" style="width: 70px; margin-left: 40px;"></a>
                    <a href=""><img src="Grafiki/Stopka/twitterlogo.svg" style="width: 80px; margin-left: 40px;"></a>
                </div>
                <div class="col-sm-4 stopka_linki" style="line-height: 22px; padding-top: 20px; padding-left: 100px;">
                    <a href="#cennik" class="stopka_czarny">Cennik</a><br>
                    <a href="#" class="stopka_zielony">Rezerwacja</a><br>
                    <a href="#" class="stopka_czarny">Kontakt</a>
                </div>
            </div>
        </div>
    </div>

    
<?php
require_once "connect.php";

$polaczenie = @new mysqli ($host, $db_user, $db_password, $db_name);

if($polaczenie->connect_errno!=0)
{
    echo "Error: ".$polaczenie->connect_errno;
}
else
{
$login = $_SESSION['login'];
$rodzaj = "namiot";
$sektorB = $_POST['sektorB'];
$sektorD = $_POST['sektorD'];
$sektorE = $_POST['sektorE'];
$sektorG = $_POST['sektorG'];
$sektorH = $_POST['sektorH'];
$razemB = 20 * $sektorB;
$razemD = 25 * $sektorD;
$razemE = 25 * $sektorE;
$razemG = 25 * $sektorG;
$razemH = 30 * $sektorH;
$suma = $razemB + $razemD + $razemE + $razemG + $razemH;

$sql = "INSERT INTO Rezerwacje (user, rodzaj, sektorA_doby,sektorB_doby, sektorC_doby,sektorD_doby, sektorE_doby, sektorG_doby, sektorH_doby, sektorJ_doby, koszt) VALUES ('$login', '$rodzaj','0', '$sektorB','0' , '$sektorD', '$sektorE', '$sektorG', '$sektorH', '0', '$suma')";
                if ($rez = @$polaczenie->query($sql)) {
            }
$polaczenie->close();
}
?>
    
<div class="modal fade" id="zamowienie_namiot" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document" style="">
    <div class="modal-content" style="border-radius: 20px; height: 80,5vh; background-color: ; width: 100vh;">
        <div class="container">
        <div class="row" style="height: 80vh;">
        <div class="col-md-5" style="background-color: #18e474; border-top-left-radius: 20px; border-bottom-left-radius: 20px; text-align: center; padding-top: 24vh;">
            <img src="Grafiki/tent.svg" style="width: 200px;">
        </div>

      <div class="modal-body mx-3">
        <div class="container">
            <div class="row">
            <div class="col-md-12" style="display: grid; justify-content: center;">
                    <section style="padding-top: 30px;">
                    <h2 style="font-family: 'Concert One', cursive; color: #2a2c2b; text-align: center;">Podsumowanie</h2>
                        
                            
                    <ul class="list-group" style="padding-top: 20px;">
                      <li class="list-group-item d-flex justify-content-between align-items-center" style="font-size: 20px; font-family: 'Concert One', cursive;">
                        <div class="container">
                          <div class="row">
                            <div class="col-md-4" style="display: grid; justify-content: center;">
                              Sektor
                              </div>
                            <div class="col-md-4" style="display: grid; justify-content: center;">
                              Doby
                              </div>
                            <div class="col-md-4" style="display: grid; justify-content: center;">
                              Razem
                              </div>
                            </div>
                          </div>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="container">
                          <div class="row">
                            <div class="col-md-4" style="display: grid; justify-content: center;">
                              B
                              </div>
                            <div class="col-md-4" style="display: grid; justify-content: center;">
                              <?php echo $sektorB ?>
                              </div>
                            <div class="col-md-4" style="display: grid; justify-content: center;">
                            <span class="badge badge-primary badge-pill" style="background-color: #2a2c2b; font-size: 15px;"><?php echo "$razemB PLN" ?></span>
                              </div>
                            </div>
                          </div>
                      </li>
                        
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="container">
                          <div class="row">
                            <div class="col-md-4" style="display: grid; justify-content: center;">
                              D
                              </div>
                            <div class="col-md-4" style="display: grid; justify-content: center;">
                              <?php echo $sektorD ?>
                              </div>
                            <div class="col-md-4" style="display: grid; justify-content: center;">
                            <span class="badge badge-primary badge-pill" style="background-color: #2a2c2b; font-size: 15px;"><?php echo "$razemD PLN" ?></span>
                              </div>
                            </div>
                          </div>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="container">
                          <div class="row">
                            <div class="col-md-4" style="display: grid; justify-content: center;">
                              E
                              </div>
                            <div class="col-md-4" style="display: grid; justify-content: center;">
                              <?php echo $sektorE ?>
                              </div>
                            <div class="col-md-4" style="display: grid; justify-content: center;">
                            <span class="badge badge-primary badge-pill" style="background-color: #2a2c2b; font-size: 15px;"><?php echo "$razemE PLN" ?></span>
                              </div>
                            </div>
                          </div>
                      </li>
                        
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="container">
                          <div class="row">
                            <div class="col-md-4" style="display: grid; justify-content: center;">
                              G
                              </div>
                            <div class="col-md-4" style="display: grid; justify-content: center;">
                              <?php echo $sektorG ?>
                              </div>
                            <div class="col-md-4" style="display: grid; justify-content: center;">
                            <span class="badge badge-primary badge-pill" style="background-color: #2a2c2b; font-size: 15px;"><?php echo "$razemH PLN" ?></span>
                              </div>
                            </div>
                          </div>
                      </li>
                        
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="container">
                          <div class="row">
                            <div class="col-md-4" style="display: grid; justify-content: center;">
                              H
                              </div>
                            <div class="col-md-4" style="display: grid; justify-content: center;">
                              <?php echo $sektorH ?>
                              </div>
                            <div class="col-md-4" style="display: grid; justify-content: center;">
                            <span class="badge badge-primary badge-pill" style="background-color: #2a2c2b; font-size: 15px;"><?php echo "$razemH PLN" ?></span>
                              </div>
                            </div>
                          </div>
                      </li>
                        
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="container">
                          <div class="row">
                            <div class="col-md-4" style="display: grid; justify-content: center;">
                            <section style="font-size: 20px; font-family: 'Concert One', cursive;">Suma</section>
                              </div>
                            <div class="col-md-4" style="display: grid; justify-content: center;">
                              
                              </div>
                            <div class="col-md-4" style="display: grid; justify-content: center;">
                            <span class="badge badge-primary badge-pill" style="background-color: #18e474; font-size: 16px; padding-top: 6px;"><?php echo "$suma PLN" ?></span>
                              </div>
                            </div>
                          </div>
                      </li>

                    </ul>
                            
                        <section style="display: grid; justify-content: center; padding-top: 20px;">
                            <button type="button" class="btn btn-outline-* rez_podsumowanie" style="font-size: 20px; border-radius: 20px; padding: 5px 30px 5px 30px;"><a href="zalogowany.php" style="text-decoration: none;" class="rez_podsumowanie">REZERWUJ</a></button>
                      </section>
                    </section>
            </div>
            </div>
        </div>

      </div>
    </div>
  </div>
</div>
    </div>
    </div> 
    
<?php    
echo "<script type='text/javascript'>
$(document).ready(function(){
$('#zamowienie_namiot').modal('show');
});
</script>";
?>
    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
</body>
</html>