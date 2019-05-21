<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style_array.css">
    <title>Modifier</title>
</head>
<body>
<style>
body {
  height: 100vh;
  min-height: 500px;
  background-image: url('https://source.unsplash.com/BtbjCFUvBXs/1920x1080');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}
</style>
    <h1>Modifier les informations d'un étudiant</h1>
<div class="supprimer_p">

<form action="" name="searchthis" method="post">

<input id="quantite" name="code" type="text" placeholder="entrer un code" />
<input id="quantite" name="nom" type="text" placeholder="nom de l'étudiant" />
<input id="quantite" name="nom" type="text" placeholder="prenom de l'étudiant" />
<input id="quantite" name="datenaiss" type="text" placeholder="la date de naissance" />
<input id="quantite" name="tel" type="text" placeholder="tel " />
<input id="quantite" name="mail" type="text" placeholder="mail " />
<input id="search-btn" name="modif" type="submit" value="Modifier " />
</form>

</div>

<style>
table, th, td {
  border: 1px solid black;
}
</style>
<table>
<tr>
<th>code</th>
<th>nom</th>
<th>prénom</th>
<th>date de naissance</th>
<th>téléphone</th>
<th>mail</th>
</tr>
<?php
 $fp=fopen("apprenant.txt","r");
 while(!feof($fp)){
    $line = fgets($fp);
    $tab = explode(";",$line);
    //var_dump($fp);
    echo "<tr>
    <td>$tab[0]</td>;
    <td>$tab[1]</td>;
     <td>$tab[2]</td>;    
     <td>$tab[3]</td>;
     <td>$tab[4]</td>;
     <td>$tab[5]</td>;
 </tr>";
}
$a=0;
$new=0;
$tab=0;
$ligne="";
ini_set("display_errors",1);
    
if (isset($_POST['modif'])) {
  
    
        $code=$_POST['code'];
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $datenaiss=$_POST['datenaiss'];
        $tel=$_POST['tel'];
        $mail=$_POST['mail'];
       
        $fp=fopen("apprenant.txt","r");

        while(!feof($fp)){
    
            $ligne = fgets($fp);
    
            $tab = explode(";",$ligne);
    
                if($code == $tab[0]){
                    $new = ($code.";".$nom.";".$prenom.";".$datenaiss.";".$tel.";".$mail.";\n");
                }
                else{
                    $new = $ligne;
                }
    
            $contenu = $contenu.$new;
        }
            fclose($fp);
            
            file_put_contents("apprenant.txt",$contenu);
    
    
}
    ?>
    </body>
</html>