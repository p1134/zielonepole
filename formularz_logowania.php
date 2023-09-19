<!DOCTYPE html>

<html lang="pl" xmlns="http://www.w3.org/1999/xhtml">
<head>
    
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    
</head>
    

<div class="modal fade" id="modalContactForm2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document" style="width: 40vh;">
    <div class="modal-content" style="border-radius: 20px; height: 70vh; background-color: #2a2c2b;">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold"></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="container">
            <div class="row">
            <div class="col-md" style="display: grid; justify-content: center;">
                    <section style="padding-top: 15px;">
                    <h2 style="font-family: 'Concert One', cursive; color: white; text-align: center; padding-bottom: 20px;">Logowanie</h2>
                        <form action="logowanie.php" method="post"> 
                            <input type="text" name="login" style="border-radius: 5px; border: 0.5px solid;">
                            <p style="font-family: 'Concert One', cursive; color: white;">Login</p>
                            <input type="password" name="haslo" style="border-radius: 5px; border: 0.5px solid;">
                            <p style="font-family: 'Concert One', cursive; color: white; padding-bottom: 15px;">Haslo</p>

                            <input type="submit" value="Zaloguj" style="font-family: 'Concert One', cursive; color: white; background-color: #18e474; width: 25vh; border-radius: 5px; border: 0.5px solid #18e474;">
                            <p><a style="color: white; font-size: 12px;" href="zmienhaslo.php">Nie pamiętam hasła</a></p>
                        </form>
                    </section>

            </div>
            </div>
        </div>

      </div>
    </div>
  </div>
</div>

</html>