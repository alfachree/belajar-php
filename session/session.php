<?php
session_start();
$_SESSION["Username"] = "Joko";
$_SESSION["Password"] = "screet";

echo "Berhasil membuat session";
echo "<br>";

echo "<a href=cek_session.php>
Cek session</a>";

?>