<!DOCTYPE html>

<html lang="pl" xmlns="http://www.w3.org/1999/xhtml">
<head>
    
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    
</head>
    <div class="container">
        <div class="row">
            <div class="col-md-4" style="border-right:1px solid #bbbcbd; height: 650px; width: 0; margin-top: 40px;">
            </div>
            <div class="col-md-4">
      <div class="modal-body mx-3" style="padding-top: 20vh;">
        <div class="container">
            <div class="row">
            <div class="col-md" style="display: grid; justify-content: center;">
                    <section style="padding-top: 15px;">
                    <h2 style="font-family: 'Concert One', cursive; color: black; text-align: center; padding-bottom: 20px;">Logowanie</h2>
                        <form action="logowanie.php" method="post"> 
                            <input type="text" name="login" style="border-radius: 5px; border: 0.5px solid;">
                            <p style="font-family: 'Concert One', cursive; color: black;">Login</p>
                            <input type="password" name="haslo" style="border-radius: 5px; border: 0.5px solid;">
                            <p style="font-family: 'Concert One', cursive; color: black; padding-bottom: 15px;">Haslo</p>

                            <input type="submit" value="Zaloguj" style="font-family: 'Concert One', cursive; color: white; background-color: #18e474; width: 25vh; border-radius: 5px; border: 0.5px solid #18e474;">
                            <p style="margin: 0; padding-top: 10px;"><a style="color: black; font-size: 12px;" href="zmienhaslo.php">Nie pamiętam hasła</a></p>
                            <p style="margin: 0; line-height: 10px;"><a style="color: black; font-size: 12px;" href="formularz_rejestracji2.php">Zarejestruj się</a></p>
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