<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="style_array.css">
    <title>Promotion</title>
</head>
<body>
<h1>Ajout promo</h1>

<form action="" name="searchthis" method="post">
<input id="quantite" name="code" type="text" placeholder="entrer un code" />
<input id="quantite" name="nom" type="text" placeholder="nom de la promo" />
<input id="quantite" name="mois" type="text" placeholder="mois " />
<input id="quantite" name="annee" type="text" placeholder="l'année " />
<input id="search-btn" name="ajoupromo" type="submit" value="Ajouter une promo" />
</form>
<style>
body {
  height: 100vh;
  min-height: 500px;
  background-image: url('https://source.unsplash.com/BtbjCFUvBXs/1920x1080');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}
table, th, td {
  border: 1px solid black;
}
</style>
<table>
<tr>
<th>code</th>
<th>nom</th>
<th>mois</th>
<th>années</th>

</tr>
  <?php
  $fp=fopen("promo2.txt","r");
  while(!feof($fp)){
     $line = fgets($fp);
     $tab = explode(";",$line);
     //var_dump($fp);
     echo "<tr>
     <td>$tab[0]</td>;
     <td>$tab[1]</td>;
      <td>$tab[2]</td>;    
      <td>$tab[3]</td>;
      
  </tr>";
  }
 	//ajouter
     
     if (isset($_POST['ajoupromo'])){
        
        $code=$_POST['code'];
        $nom=$_POST['nom'];
        $mois=$_POST['mois'];
        $annee=$_POST['annee'];

        $fp=fopen("promo2.txt","a+");
 fwrite($fp,$code.";".$nom.";".$mois.";".$annee.";\n");


   
     fclose($fp);

     $fp=fopen("promo2.txt","r");

     $ligne=fgets($fp);
     $element=explode(";",$ligne);

          for($i=0;$i<count($tab);$i++){
              $code=$tab[$i][0];
              $nom=$tab[$i][1];
              $mois=$tab[$i][2];
              $annee=$tab[$i][3];
               

              
       
               echo '<th>';
               echo '<td>'.$code.'</td>';
               echo '<td>'.$nom.'</td>';
               echo '<td>'.$mois.'</td>'; 
               echo '<td>'.$annee.'</td>';   
               
               echo '</th>';          
            }
        
        }
    
    
    
    ?>


</table>


    </body>
</html>