<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script stlye="text/javascript" src="./js/jquery.js"></script>
    <script stlye="text/javascript" src="./js/easing.js"></script>
    <link rel="stylesheet" href="./css/lobby.css">
    <title>Lobby</title>
</head>
<body>


   
<!--____________________HEADER____________________-->

<header>
    
    <div class="left"></div>

    <div class="mid"></div>

    <div class="right">
        <a href="./services/deconnexion.php">Deconnexion</a>
    </div>

</header>

<!--____________________MAIN____________________-->
<div class="main">
    
    <table border="1">  
        <tr>
            <td class="cat">Categorie</td>
        </tr>
        <?php while($c = $cat -> fetch()){?>
        <tr>
            <td>
                <span><a href="./index.php?page=categorie&id=<?php echo $c['id']; ?>"> <?php echo $c['nom']; ?> </a></span> 
            </td>
        </tr>
        <?php } ?>    
    </table>

</div>



<!--____________________FOOTER____________________-->

<script type="text/javascript" src="./js/inscription.js"></script> 
</body>
</html>