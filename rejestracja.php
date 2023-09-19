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
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $email = $_POST['email'];
    $regulamin = $_POST['regulamin'];
    $blad = false;

    if (strlen($login) < 3 || strlen($login) > 20) {
        $_SESSION['e_login'] = "Login powinien mieć od 3 do 20 znaków";
        $blad = true;
    }

    if (!ctype_alnum($login)) {
        $_SESSION['e_login'] = "Login może zawierać jedynie znaki alfanumeryczne";
        $blad = true;
    }

    if (strlen($haslo) < 6) {
        $_SESSION['e_haslo'] = "Hasło powinno mieć co najmniej 6 znaków";
        $blad = true;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['e_email'] = "Podaj prawidłowy adres e-mail";
        $blad = true;
    }

    if (!isset($regulamin) || $regulamin === false) {
        $_SESSION['e_regulamin'] = "Aby przejść dalej akceptuj regulamin";
        $blad = true;
    }

    
        $haslo_hash = password_hash ($haslo, PASSWORD_DEFAULT);

    // ta sql służy do pobrania użytkowników o takim loginie lub emailu
    $sql = "SELECT * FROM Uzytkownicy WHERE user='$login' OR email='$email'";

    if($rezultat = @$polaczenie->query($sql)) {
        $ilu_userow = $rezultat->num_rows;
        if ($ilu_userow > 0) {
            // istnieje już użytkownik o takim loginie lub emailu
            $wiersz = $rezultat->fetch_assoc();
            
            if($login == $wiersz['user'])
            {
        $_SESSION['e_login2'] = "Nazwa użytkownika jest już zajęta";
        $blad = true;
            }
            
            if($email == $wiersz['email'])
            {
        $_SESSION['e_email'] = "Adres e-mail jest już zajęty";
        $blad = true;
            }
            

            $rezultat->free_result();
        }

        else {
            // tworzenie nowego użytkownika

            $sql = "INSERT INTO Uzytkownicy (user, pass, name, surname, email) VALUES ('$login', '$haslo_hash', '$imie', '$nazwisko', '$email')";

            if ($rez = @$polaczenie->query($sql)) {
                $_SESSION['login'] = $login;
                header('Location: zalogowany.php');
            }
        }
    }
        if ($blad === true) {
        header('Location: index.php');
        die;
    }
    $polaczenie->close();
}


?>
