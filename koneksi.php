<!--
+====================================================================================================+
+  _ _ _ _ _     __     __    _ _ _ _ _     __ _ _ _ __    _ _ _ _      __    __ _ _ _    __         +
+ |_ _    _ _|  |  |   |  |  |_ _    _ _|  /     _     \  |   __   \   |  |  /   __   \  |  |        +
+     |  |      |  |   |  |      |  |      |   /   \   |  |  |_ |  |   |  |  |  |__|  |  |  |        +
+     |  |      |  |   |  |      |  |      |   |   |   |  |   _   _/   |  |  |   __   |  |  |        +
+     |  |      |  \_ _/  |      |  |      |   \ _ /   |  |  | \  \    |  |  |  |  |  |  |  |_ _ __  +
+     |__|      \__ _ _ _ /      |__|      \_ _ _ _ _ _/  |__|  \__\   |__|  |__|  |__|  |_ _ _ _ _| +  
+   __    __    _ _ _ _ _ _    _ _ _ _     __    _ _ _     __    _ _ _ _ _                           +
+  |  | /   /  /     _     \  |   __  \   |  |  |     \   |  |  /   _ _ __\                          +
+  |  |/   /   |   /   \   |  |  /  \  |  |  |  |  |\  \  |  |  |  /  _ __                           +
+  |      /    |   |   |   |  |  |  |  |  |  |  |  | \  \ |  |  |  | |_   \                          +
+  |  |\  \    |   \ _ /   |  |  \ _/  |  |  |  |  |  \  \|  |  |  |__ |  |                          +
+  |__| \__\   \_ _ _ _ _ _/  |_ _ _ _/   |__|  |__|   \_ _ _|  \ _ _ _ _ /                          +
+====================================================================================================+
!-->
<?php
$server="localhost"; // alamat server
$username="root"; // username mysql
$password="root"; // password mysql, jika tidak diberi password maka isi dengan ""
$nama_db="latihan"; // nama database yang akan digunakan

$koneksi=mysql_connect($server,$username,$password) or die (mysql_error());
$db=mysql_select_db($nama_db);
?>