<?php
session_start();
require_once "connect.php";

$polaczenie = @new mysqli ($host, $db_user, $db_password, $db_name);

if($polaczenie->connect_errno!=0)
{
    echo "Error: ".$polaczenie->connect_errno;
}
else
{
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];
    
    $sql = "SELECT * FROM Uzytkownicy WHERE user='$login'";
    
    if($rezultat = @$polaczenie->query($sql))
    {
        $ilu_userow = $rezultat->num_rows;
        if($ilu_userow>0)
        {
            $wiersz = $rezultat->fetch_assoc();
            $user = $wiersz['user'];
            $hash = $wiersz['pass'];
            $poprawne = password_verify($haslo, $hash);
            if($poprawne == true)
            {
            $_SESSION['login'] = $login;
            
            $rezultat->free_result();
            echo "Witaj ".$user;
header('Location: zalogowany.php');
        }
        }
        
        else
        {
            echo<<<END
            <body style="background-color: #2a2c2b">;
            <div style="text-align: center; border-radius: 20px; padding-top: 200px;">
            <p style="color: white; font-size: 20px;">Błędne dane logowania</p>
            <a href='index.php'><button type='submit' style="font-family: 'Concert One', cursive; color: white; background-color: #18e474; width: 30vh; border-radius: 5px; border: 0.5px solid #18e474; font-size: 25px;">Powrót</button></a>
            </div>
            END;
        }
    }
    $polaczenie->close();
}


?>			