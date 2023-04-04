<?php
    $usr ="";
    $pwd ="";
    $salah = 0;

    if(isset($_GET["txUser"])){
    $usr = $_GET["txUser"];
    $pwd = $_GET["txPass"];

    if($usr==""){
        $salah=1;
    }else{
        echo "isi dari Field user: ".$usr;
    }
    if($pwd==""){
        $salah=1;
    }else{
        echo "isi dari Field Password: ".$pwd;
    }
    }
   
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form dengan metode get</title>
</head>
<body>
    <?php
    if($salah == 1){
        echo "<div style = 'color: red'> User name/Password masih kosong</div>";

    }
    ?>
<!-- Merequest data  -->
    <form method="GET" action="Latihan01.php"> 
        <div>
            User Name
            <input type="text" name="txUser" required>

        </div>
           <div>
           Password
            <input type="Password" name="txPass"  required>

        </div>
           <div>
            <button type="submit"> Login </button>
        </div>
    </form>
    
</body>
</html>