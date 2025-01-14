<?php
session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];

$user = $_SESSION['username'];
$pass = $_SESSION['password'];


if($user == "Jokowi" and $pass = "0d4d1ngm40l3h"){
echo "Anda berhasil login";
echo "<br>";
echo "username :". $user;
echo "<br>";
echo "password :". $pass;
echo "<br>";

echo "<a href='Logout.php'>Logout</a>";

}else{
    echo "Maaf kawan, kata sandi dan username nya tidak cocok..";
    echo "<meta http-equiv='refresh' content='2; url=index.php'>";
}

?>