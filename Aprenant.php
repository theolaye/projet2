<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="style_array.css">
    <title>Apprenants</title>
</head>
<body>
<h1>Ajouter un Apprenant à la promo1</h1>
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

<form action="" name="searchthis" method="post">
<input id="quantite" name="code" type="text" placeholder="entrer un code" />
<input id="quantite" name="nom" type="text" placeholder="nom de l'apprenant" />
<input id="quantite" name="prenom" type="text" placeholder="prénom de l'apprenant " />
<input id="quantite" name="datenaiss" type="text" placeholder="date de naissance " />
<input id="quantite" name="tel" type="text" placeholder="numéro de téléphone " />
<input id="quantite" name="mail" type="text" placeholder="mail " />
<select name="statut">
      <option>present</option>
      <option>exclu</option>
</select>

            <select id="select_area" name="promo">                      
        <?php
          $fp = file("promo2.txt");
          for ($i=0; $i < count($fp); $i++) { 
            $code[$i]=strtok($fp[$i],';');
            $nom[$i]=strtok(";");
            $mois[$i]=strtok(";");
            $anne[$i]=strtok(";");  
           echo "<option value='$code[$i]'>$nom[$i]</option>";
          }  
        ?>              
      </select>
<input type="button" name="beuss" value="selectionner"/>

<input id="search-btn" name="ajou" type="submit" value="Ajouter un étudiant" />
</form>


  <?php
 
 	//ajouter
     

    
     
     if (isset($_POST['ajou'])){
        
        $code=$_POST['code'];
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $datenaiss=$_POST['datenaiss'];
        $tel=$_POST['tel'];
        $mail=$_POST['mail'];
        $statut=$_POST['statut'];
        $promo=$_POST['promo'];


        $fp=fopen("apprenant.txt","a+");
 fwrite($fp,"\n".$code.";".$nom.";".$prenom.";".$datenaiss.";".$tel.";".$mail.";".$statut.";".$promo.";");
 
     fclose($fp);
    }
    echo "    <table>
     <tr>
     <th>code</th>
     <th>nom</th>
     <th>prénom</th>
     <th>date de naissance</th>
     <th>Numéro de téléphone</th>
     <th>Adresse Mail</th>
     <th>Statut</th>
     <th>Promo</th>
     </tr>";

     $fp=fopen("apprenant.txt","r");
 while(!feof($fp))
 {
  $ligne=fgets($fp);
  $tab=explode(";",$ligne);

         echo "<tr>
         <td>$tab[0]</td>
         <td>$tab[1]</td>
          <td>$tab[2]</td> 
          <td>$tab[3]</td>
          <td>$tab[4]</td>
          <td>$tab[5]</td> 
          <td>$tab[6]</td>
          
          <td>";
          if ($tab[7]=='present'){
           echo"<a href='statut.php?code=$tab[0]'>present</a> ";
          }if ($tab[7]=='exclu'){
            echo"<a href='statut.php?code=$tab[0]'>exclus</a> ";
          }
          echo"</td>
      </tr>"; 
 }
 echo "</table>";
 fclose($fp);
      
         
        

    
    ?>
  </body>
  </html>