<?php

$host='localhost';
$databse='seti_comment';
$user='root';
$password='';

$conn=mysqli_connect($host, $user, $password, $databse) or die("ошибка". mysqli_error($conn));

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}


$imia = $_POST['imia'];
$email = $_POST['email'];
$login = $_POST['login'];
$password = $_POST['password'];


$sql = "INSERT INTO trener (id_trenera, imia, email, login, password) VALUES ('','$ima', '$email', '$login','$password')";

if ($conn->query($sql) === TRUE) {

    print("<!DOCTYPE html>
    <html lang='en' translate='no'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='preconnect' href='https://fonts.googleapis.com'>
        <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
        <link href='https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;600;700&display=swap'
            rel='stylesheet'>
        <link rel='stylesheet' href='../css/reset.css'>
        <link rel='stylesheet' href='../css/style.css'>
        <title>Registration</title>
    </head>
    <body>
        <div class='wrapper'>
            <div class='container-authorization'>
                <section class='authorization'>
                <div class='registration-img'>
                </div>
              <div class='authorization__content'>
                <div class='registracia__close'>
                    <a class='link link__registration' href='./../index.html'>X</a>
                </div>
                    <h1>Пользователь успешно зарегистрирован! Добро пожаловать, 
                ");
                echo  $imia . "!";
    print("  </h1>    </div>
            </section>
        </div>
        </div>
        </body>
        </html>");
} else {
    print("<!DOCTYPE html>
    <html lang='en' translate='no'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='preconnect' href='https://fonts.googleapis.com'>
        <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
        <link href='https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@400;600;700&display=swap'
            rel='stylesheet'>
        <link rel='stylesheet' href='../css/reset.css'>
        <link rel='stylesheet' href='../css/style.css'>
        <title>Registration</title>
    </head>
    <body>
        <div class='wrapper'>
            <div class='container-authorization'>
                <section class='authorization'>
                <div class='registration-img'>
                </div>
              <div class='authorization__content'>
                <div class='registracia__close'>
                    <a class='link link__registration' href='./../registracia.html'>X</a>
                </div>
                    <h1> Ошибка: 
                ");
              
    print("  </h1>    </div>
            </section>
        </div>
        </div>
        </body>
        </html>");
}

$conn->close();
?>