<!DOCTYPE html>

<html lang="pl" xmlns="http://www.w3.org/1999/xhtml">
<head>
    
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    
    <style><?php include 'home.css'; ?></style>
    
</head>
    

<div class="modal fade" id="rezerwacja_kamper" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document" style="">
    <div class="modal-content" style="border-radius: 20px; height: 80,5vh; background-color: ; width: 100vh;">
        <div class="container">
        <div class="row" style="height: 80vh;">
        <div class="col-md-5" style="background-color: #18e474; border-top-left-radius: 20px; border-bottom-left-radius: 20px; text-align: center; padding-top: 24vh;">
            <img src="Grafiki/camper.svg" style="width: 200px;">
        </div>

      <div class="modal-body mx-3">
        <div class="container">
            <div class="row">
            <div class="col-md-12" style="display: grid; justify-content: center;">
                    <section style="padding-top: 70px;">
                    <h2 style="font-family: 'Concert One', cursive; color: #2a2c2b; text-align: center;">Rezerwacja</h2>
                            <p style="font-family: 'Concert One', cursive; color: #2a2c2b; padding-bottom: 20px; margin-left: 0;">Wybierz sektor i podaj liczbe miejsc</p>
                        <form action="zamowienie_kamper.php" method="post"> 
                            
                            <input type="text" name="sektorA" style="border-radius: 5px; border: 0.5px solid; margin-right: 10px;" value="0">
                            <span class="badge badge-primary badge-pill" style="background-color: #2a2c2b; font-size: 12px;">30 PLN/doba</span>
                            <p style="font-family: 'Concert One', cursive; color: #2a2c2b;">Sektor A</p>
                            
                            <input type="text" name="sektorC" style="border-radius: 5px; border: 0.5px solid; margin-right: 10px;" value="0">
                            <span class="badge badge-primary badge-pill" style="background-color: #2a2c2b; font-size: 12px;">35 PLN/doba</span>
                            <p style="font-family: 'Concert One', cursive; color: #2a2c2b;">Sektor C</p>
                            
                            <input type="text" name="sektorJ" style="border-radius: 5px; border: 0.5px solid; margin-right: 10px;" value="0">
                            <span class="badge badge-primary badge-pill" style="background-color: #2a2c2b; font-size: 12px;">40 PLN/doba</span>
                            <p style="font-family: 'Concert One', cursive; color: #2a2c2b;">Sektor J</p>
                            
                            <section>
                            <input class="podsumowanie" type="submit" value="P O D S U M O W A N I E" style="font-family: 'Concert One', cursive; color: white; background-color: #2a2c2b; width: 40vh; border-radius: 20px; border: 0.5px solid #2a2c2b;">
                            </section>
                            
                            <p><a class="mapa" href="zalogowany.php#plan_pola" target="_blank">Mapa</a></p>
                        </form>
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

</html>