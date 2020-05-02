<?php
$acc=file_get_contents("{$_SERVER["REMOTE_ADDR"]}/user.txt");
echo "<p>Kullanici {$acc}";
if(@$_POST["?logout"]){
    `rmdir  {$_SERVER["REMOTE_ADDR"]}`;
    header("Location:/register.php?logout");
}
?>
<form action="" method="POST">
    <input type="text" hidden="hidden" value="logout">
    <input type="submit" name="?logout" value="cikis">
</form> 
