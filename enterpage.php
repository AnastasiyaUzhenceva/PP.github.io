<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<head class = "header">
  <meta charset="UTF-8">
  <title>Поисковая система СибГУТИ</title>
  <link rel="stylesheet" type="text/css" href="general.css" />
  <link rel="stylesheet" type="text/css" href="enterpage.css" />
</head>
<body>
    <div class="content">
            Поисковая система СибГУТИ
        </div>
        <div class="enterdivs">
            <a class="enteradmin" href="adminactions.html">
                Я админ
            </a>
            <a class="enteruser" href="useractions.html">
                Я пользователь
            </a>
        </div>
    </div>
    <?php
    $servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "бд_пис";

// создание подключения к базе
$connection = mysqli_connect($servername, $username, $password, $dbname);
    if(empty($_POST['name'])) exit("Не указано имя пользователя");
    if(empty($_POST['pass'])) exit("Не указан пароль пользователя");
    $name=$_POST['name']; //Возвращаем переменую со значением "name"
    $pass=$_POST['pass']; //Возвращаем переменную со значением "pass"
    $trim_str_name= trim($name); //Удаление пробелов в Имени
    $trim_str_pass= trim($pass); //Удаление пробелов в Пароле
    $sql = mysql_query("Select * from userlist where name = '$name'and pass='$pass';" );
    if (mysql_num_rows($sql) > 0)
    {
        echo ("Все Ok");
    }
    else {
        print "Ошибка авторизации";
    }
    ?>
</body>
</html>