
<!DOCTYPE html>

<html lang="pl" xmlns="http://www.w3.org/1999/xhtml">
<head>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">

</head>

    <div class="container">
        <div class="row">
            <div class="col-md-4" style="border-right:1px solid #bbbcbd; height: 650px; width: 0; margin-top: 40px;">
            </div>
            <div class="col-md-4">
      <div class="modal-body mx-3">
        <div class="container">
            <div class="row">
            <div class="col-md" style="display: grid; justify-content: center;">
                    <section style="padding-top: 10vh;">
                    <h2 style="font-family: 'Concert One', cursive; color: black; text-align: center; padding-bottom: 10px;">Rejestracja</h2>
                        <form action="rejestracja.php" method="post">

                            <input type="text" name="login" style="border-radius: 5px; border: 0.5px solid;">
                            <?php
                            if (isset($_SESSION['e_login']))
                            {
                                echo "<br><span style='color: red; font-size: 10px'>" . $_SESSION['e_login'] . '</span>';
                                unset($_SESSION['e_login']);
                            }
                            if (isset($_SESSION['e_login2']))
                            {
                                echo "<br><span style='color: red; font-size: 10px'>" . $_SESSION['e_login2'] . '</span>';
                                unset($_SESSION['e_login2']);
                            }
                            
                            ?>
                            <p style="font-family: 'Concert One', cursive; color: black;">Login</p>

                            <input type="password" name="haslo" style="border-radius: 5px; border: 0.5px solid;">
                            <?php
                            if (isset($_SESSION['e_haslo']))
                            {
                                echo "<br><span style='color: red; font-size: 10px'>" . $_SESSION['e_haslo'] . '</span>';
                                unset($_SESSION['e_haslo']);
                            }
                            ?>
                            <p style="font-family: 'Concert One', cursive; color: black;">Haslo</p>

                            <input type="text" name="imie" style="border-radius: 5px; border: 0.5px solid;">
                            <p style="font-family: 'Concert One', cursive; color: black;">Imie</p>

                            <input type="text" name="nazwisko" style="border-radius: 5px; border: 0.5px solid;">
                            <p style="font-family: 'Concert One', cursive; color: black;">Nazwisko</p>

                            <input type="text" name="email" style="border-radius: 5px; border: 0.5px solid;">
                            <?php
                            if (isset($_SESSION['e_email']))
                            {
                            echo "<br><span style='color: red; font-size: 10px'>" . $_SESSION['e_email'] . '</span>';
                            unset($_SESSION['e_email']);
                            }
                            
                            if (isset($_SESSION['e_email2']))
                            {
                            echo "<br><span style='color: red; font-size: 10px'>" . $_SESSION['e_email2'] . '</span>';
                            unset($_SESSION['e_email2']);
                            }
                            ?>
                            <p style="font-family: 'Concert One', cursive; color: black;  padding-bottom: 5px;">E-mail</p>
                            <input type="checkbox" name="regulamin" > <a href="#" style="font-size: 14px;">Akceptuję regulamin</a>
                            <?php
                            if (isset($_SESSION['e_regulamin']))
                            {
                                echo "<br><span style='color: red; font-size: 10px'>" . $_SESSION['e_regulamin'] . '</span>';
                                unset($_SESSION['e_regulamin']);
                            }
                            ?>
                            <br><br>
                            <input type="submit" value="Zarejestruj" id="rej" style="font-family: 'Concert One', cursive; color: white; background-color: #18e474; width: 25vh; border-radius: 5px; border: 0.5px solid #18e474;">
                            <p><a style="color: black; font-size: 12px;" href="formularz_logowania2.php">Zaloguj się</a></p>
                        </form>
                    </section>

            </div>
            </div>
        </div>
    </div>
            </div>
            <div class="col-md-4" style="border-left:1px solid #bbbcbd; height: 650px; width: 0; margin-top: 40px;">
            </div>
        </div>

      </div>

</html>
