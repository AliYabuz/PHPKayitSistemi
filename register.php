<!DOCTYPE html>
<?php
if(file_exists("user.txt")){
    header("Location: /user.php");
}

?>
<html>
    <style>
        body{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
    </style>
<head>
    <title>Basit Uye Girisi</title>
</head>
<center><body><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    <h3 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Uye Ol</h3><br />
    <form action="api.php" method="POST">
      

        
        Kullanici Adi <input name="name" value=""style="border-width: 0pt; color: white; background-color: #252525; border-radius: 2pt;" type="text"><br /><br />
        Sifre <input name="sifre" type="password" style="border-width: 0pt; color: white; background-color: #252525; border-radius: 2pt;" value=""><br />
        <input type="submit"style="border-width: 0pt; color: white; background-color: #252525; border-radius: 2pt;" value="Tamamla">
    </form>  
    <?php
    if(@strrpos($_SERVER["REQUEST_URI"],"?logout")==!null){
        echo "<p style=\"color:red;\">hesabinizdan basariyla cikis yapildi!";
        }
    ?>
</body></center>
</html>
