
<?php
echo "<p style=\"font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color:red;\">{$_POST["name"]} Uyeliginiz Basariyla Sonuclandi! ";
`mkdir {$_SERVER["REMOTE_ADDR"]}`;
@file_put_contents("{$_SERVER["REMOTE_ADDR"]}/user.txt",$_POST["name"]);
@file_put_contents("{$_SERVER["REMOTE_ADDR"]}/sifre.txt",$_POST["sifre"]);
?>
<br />
<form action="user.php" method="POST">

    <input type="submit" style="border-width: 0pt; color: white; background-color: #252525; border-radius: 2pt;" value="Profilim">
</form>
