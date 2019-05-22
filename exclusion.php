<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acceuil</title>
    
</head>
<body>
<style>
body {
  background: url('https://source.unsplash.com/twukN12EN7c/1920x1080') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;
}
</style>
<a class="navbar-brand"><img src="Sonatel.png" width="350" ></a>
  
  <style type="text/css">
            .contextMenus {position:absolute; background-color:#cfcfcf;
            border-style:solid; border-width:1px;
            border-color:#EFEFEF #505050 #505050 #EFEFEF;
            visibility:hidden}
            .menuItem {cursor:pointer; font-size:9pt;
            font-family:Arial, Helvetica, sans-serif;
            padding-left:5px; color:black;
            background-color:transparent;
            text-decoration:none}
            .menuItemOn {cursor:pointer; font-size:9pt;
            font-family:Arial, Helvetica, sans-serif;
            padding-left:5px; color:red;
            background-color:yellow;
            text-decoration:underline}
            .contextEntry {font-weight:bold; color:rgb(196, 18, 18); cursor:pointer}
            </style>
            <script type="text/javascript" src="contextMenus.js"></script>
            </head>
            <body onload="initContextMenus( )">
            <h1>Dalal ak jamm</h1>
            <hr />
            <p> <span id="lookup2" class="contextEntry">Bienvenue </span></p>
            <div id="contextMenu1" class="contextMenus" onclick="hideContextMenus( )"
            onmouseup="execMenu(event)" onmouseover="toggleHighlight(event)"
            onmouseout="toggleHighlight(event)">
            <table><tbody>
            <tr><td class="menuItem">Merriam-Webster Dictionary</td></tr>
            <tr><td class="menuItem">Merriam-Webster Thesaurus</td></tr>
            </tbody></table>
            </div>

            


  <div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
        
					<li class="active"><a href="Aprenant.php">Ajouter un apprenant </a></li>
					<li><a href="modifapp.php">Modifier les informations concernant un apprenant</a></li>
					<li class="dropdown">
						<a href="modifpromo.php" class="dropdown-toggle" data-toggle="dropdown">Modifier les informations concernant une promo <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="promo2.php">Ajouter une Promotion</a></li>
						
						</ul>
					</li>
					
			
			</div><!--/.nav-collapse -->
		</div>
	</div> 
</body>
</html>