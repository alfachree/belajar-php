<?php
session_start();
session_destroy();
echo "yeay .. anda berhasil logout, sampai jumpa...";

echo "<meta http-equiv='refresh'
content='2; url=index.php'>";
?>