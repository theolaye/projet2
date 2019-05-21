<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style_array.css">
    <title>Renvoyer un étudiant de la promo1</title>
</head>
<body>
<div class="supprimer_p">




<form action="" name="searchthis" method="post">
<input id="quantite" name="code" type="text" placeholder="entrer un code" />
<input id="quantite" name="nom" type="text" placeholder="nom de l'apprenant" />
<input id="quantite" name="prenom" type="text" placeholder="prénom de l'apprenant " />
<input id="quantite" name="datenaiss" type="text" placeholder="date de naissance " />
<input id="quantite" name="tel" type="text" placeholder="numéro de téléphone " />
<input id="quantite" name="mail" type="text" placeholder="mail " />
<input id="search-btn" name="search" type="submit" value="Exclure" />

</form>
</div>


<?php
 $code=$_POST['code'];
 $nom=$_POST['nom'];
 $prenom=$_POST['prenom'];
 $datenaiss=$_POST['datenaiss'];
 $tel=$_POST['tel'];
 $mail=$_POST['mail'];

$filename="promo.txt"; 
$file = file($filename); 

$nbligne = count($file); 
if($nbligne[0] ==$code)
{
unset($file[0]);
fwrite($fp,$code.";".$nom.";".$prenom.$datenaiss.";".$tel.";".$mail."\n"); 
echo'<pre>';
echo fread($filename,filesize('promo.txt'));
echo'</pre>';
}

file_put_contents($filename, $file); 
    
    ?>
    </body>
</html>