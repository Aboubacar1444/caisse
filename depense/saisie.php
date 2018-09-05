<?php 
	require_once ('controller/connexion.inc.php');
	include('modele/config.php');

 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="shortcut icon" type="image/x-icon" href="image/LOGO-SIMPA_SAMARA.png">
	<link rel="stylesheet" href="css/style.css" media="screen">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/print.css" media="print">

	<script src="js/style.js"></script>

	<title>Pièce de caisse - Dépense</title>
	
</head>
<body>
	<div class="container-fluid ">
		<div class="row">
			<div class=" col-lg-12 flex"><img src="image/LOGO-SIMPA_SAMARA.png" alt="logo SIMPA SAMARA" class="flex" width="100">
			</div><hr>
			<div class=" flex col-lg-12">
					<h4 class="flex ">SAMARA - SOCIETE SARDINIERE MAROCAINE</h4>
			</div>	
		</div>
		<hr>
		<div class="row">
			<div class="col-lg-12  ">
				<table class="table ">
					<tr>
						<td style="border: none !important;"><h6>Siège/Head office: 16, Rue Tinghirt, Roches Noires,<br>BP, 3066, Casablanca - Maroc <br>Tél:+212 5 22 24 19 09 <br>Fax: +212 5 22 24 18 49</h6></td>
						<td class="float-right" style="border: none !important;"><h6>Usine/factory: Quartier Industriel d'Essouira,<br>Essouira - Maroc <br>Tél: +212 5 24 78 34 01<br> Fax: +212 5 24 47 62 32</h6></td>
					</tr>
				</table>
			</div>
		</div>
	
	
		<div class="row">
			<div class="col-lg-12 flex ">
				<h2 class="soulign">Pièce de caisse - Dépense</h2>
			</div>
		</div>
	</div>
	<hr><br>
	<div class="container-fluid">
		<div class="row flex">
			<div class="flex col-lg-7">
				<form action="" method="post" class="form-control form-group ">
					<h4 class="flex">Saisie des informations</h4><hr>
					<input type="text" name="ref" required placeholder="Pièce N°..." class="form-control" autofocus><br>
					
					<input type="date" name="date"  required class="form-control" placeholder="jj/mm/aaaa" maxlength="10"><br>
					
					<input type="text" name="mt" placeholder="Montant en chiffre" id='t' required class="form-control"><br>
					
					<textarea name="lib" id="lib" cols="30" rows="3" placeholder="libellé de l'opération" required class="form-control"></textarea><br>
					
					<textarea name="mtlettre" id='lettres' cols="30" rows="3" required placeholder="Arrêtée la présente pièce de caisse de dépense à la somme de :" class="form-control" readonly>&nbsp</textarea><hr>

					
					<div class="col-lg-12  flex">
						<div class="col-lg-4 d-inline flex">Accord direction <br>
							<input type="checkbox" name="direction" value="OK" class="form-control flex" required>
						</div>
						<div class="col-lg-4  d-inline 	flex">Caissier(e)<br>
							
							<input type="checkbox" name="caisse" class="form-control" value="OK">
							
						</div>
						<div class="col-lg-4  d-inline 	flex">Le bénéficiaire
							<input type="checkbox" name="benef" class="form-control flex" required value="OK">
						</div>
					</div>
					
					<hr>
					<input type="submit" name="add" value="Enregistrer" class="form-group btn btn-primary col-lg-2 mr-5">
					<a href="../index.php" class="form-group btn btn-dark col-lg-2 mr-5">Accueil</a>
					<a href="imprim.php" class="form-group btn btn-warning col-lg-2" title="Avant d'imprimer, enrégistrez d'abord dans la base de données.">Imprimer</a>
				</form>

			</div>
		</div>
	</div>
	<div class="footer">
				<div class="col-lg-12 flex">
					<div class="col-sm-6">
						<h5 class="size flex">Copyright © 2018. Togola Aboubacar / Toumba Andrez</h5>
					</div>
					<div class="col-sm-6">
						<h5 class="size flex">All right reserved.</h5>
					</div>
				</div>
	</div>

<!--  -->
	
    <!-- <div id="wrapper">
        <!--  
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Journal de Caisse</a>
            </div>-->
            <!--/.navbar-header-->

            
            <!--/.navbar-top-links-->

            <!--<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Dépense<span class="fa arrow"></span></a>
                            <ul class="nav nav-first-level">
                                <li>
                                    <a href="depense/saisie.php">Enregistrement</a>
                                </li>
                                <li>
                                    <a href="depense/search.php">Recherche</a>
                                </li>
                                <li>
                                    <a href="depense/imprim.php">Impression</a>
                                </li>
                            </ul>
                            
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Recette<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                <a href="recette/saisie.php">Enregistrement</a>
                                </li>
                                <li>
                                    <a href="recette/saisie.php">Recherche</a>
                                </li>
                                <li>
                                    <a href="recette/saisie.php">Impression</a>
                                </li>
                            </ul>
                            
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Bilan<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="excel/annuel.php">Annuel</a>
                                </li>
                                <li>
                                    <a href="excel/janvier.php">Janvier</a>
                                </li>
                                <li>
                                    <a href="excel/fevrier.php">Février</a>
                                </li>
                                <li>
                                    <a href="excel/mars.php">Mars</a>
                                </li>
                                <li>
                                    <a href="excel/avril.php">Avril</a>
                                </li>
                                <li>
                                    <a href="excel/mai.php">Mai</a>
                                </li>
                                <li>
                                    <a href="excel/juin.php">Juin</a>
                                </li>
                                <li>
                                    <a href="excel/juillet.php">Juillet</a>
                                </li>
                                <li>
                                    <a href="excel/aout.php">Août</a>
                                </li>
                                <li>
                                    <a href="excel/septembre.php">Septembre</a>
                                </li>
                                <li>
                                    <a href="excel/octobre.php">Octobre</a>
                                </li>
                                <li>
                                    <a href="excel/novembre.php">Novembre</a>
                                </li>
                                <li>
                                    <a href="excel/decembre.php">Décembre</a>
                                </li>
                            </ul>
                           
                        </li> -->
                   </ul>

                </div>
                <!-- /.sidebar-collapse -->
           <!--</div>-->
              
        </nav>

        
        <!-- /#page-wrapper -->

    <!-- </div> -->
    <!-- <div id="page-wrapper" class="">
    	<!-- <div class="row">
    		<div class="col-lg-12 flex">
    			<h1>Bienvenue !</h1>
    		</div>
    	</div>	 -->
    	<!-- <div class="row">
			<div class=" col-lg-12"><img src="image/LOGO-SIMPA_SAMARA.png" alt="logo SIMPA SAMARA" class="flex" width="100">
			</div><hr>
			<div class=" flex col-lg-12">
					<h4 class="flex ">SAMARA - SOCIETE SARDINIERE MAROCAINE</h4>
			</div>	
		</div> -->
		<!-- <hr>
		<div class="row">
			<div class="col-lg-12">
				<table class="table">
					<tr>
						<td style="border: none !important;"><h6>Siège/Head office: 16, Rue Tinghirt, Roches Noires,<br>BP, 3066, Casablanca - Maroc <br>Tél:+212 5 22 24 19 09 <br>Fax: +212 5 22 24 18 49</h6></td>
						<td class="float-right" style="border: none !important;"><h6>Usine/factory: Quartier Industriel d'Essouira,<br>Essouira - Maroc <br>Tél: +212 5 24 78 34 01<br> Fax: +212 5 24 47 62 32</h6></td>
					</tr>
				</table>
			</div>
		</div> -->
	
	
		<!-- <div class="row">
			<div class="col-lg-12 flex">
				<h3 class="soulign">Pièce de caisse - Dépense</h3>
			</div>
		</div> -->
    	<!-- <div class="row flex">
			<div class="col-lg-10">
				<form action="" method="post" class="form-control form-group ">
					<h4 class="flex">Saisie des informations</h4><hr>
					<input type="text" name="ref" required placeholder="Pièce N°..." class="form-control" autofocus><br>
					
					<input type="date" name="date"  required class="form-control" placeholder="jj/mm/aaaa" maxlength="10"><br>
					
					<input type="text" name="mt" placeholder="Montant en chiffre" id='t' required class="form-control"><br>
					
					<textarea name="lib" id="lib" cols="30" rows="3" placeholder="libellé de l'opération" required class="form-control"></textarea><br>
					
					<textarea name="mtlettre" id='lettres' cols="30" rows="3" required placeholder="Arrêtée la présente pièce de caisse de dépense à la somme de :" class="form-control" readonly>&nbsp</textarea><hr>
					
					<div class="col-lg-12  flex">
						<div class="col-lg-5 d-inline flex">Accord direction <br>
							<input type="checkbox" name="direction" value="OK" class="form-control flex" required>
						</div>
						<div class="col-lg-5  d-inline 	flex">Caissier(e)<br>
							
							<input type="checkbox" name="caisse" class="form-control" value="OK">
							
						</div>
						<div class="col-lg-5  d-inline 	flex">Le bénéficiaire
							<input type="checkbox" name="benef" class="form-control flex" required value="OK">
						</div>
					</div>
					<hr>
					<br>
					<div class="row flex">
						<div class="col-lg-12">
							<div class="col-lg-6 flex">
								<input type="submit" name="add" value="Enregistrer" class="form-group btn btn-primary col-lg-4">
							</div>
							<div class="col-lg-6 flex">
								<a href="imprim.php" class="form-group btn btn-warning col-lg-4" title="Avant d'imprimer, enrégistrez d'abord dans la base de données.">Imprimer</a>
							</div>
						</div>
					</div>
				</form>

			</div>
		</div> -->
    <!-- </div>  -->
    <!-- <div class="footer">
		
			
				<div class="col-lg-12 flex">
					<div class="col-sm-6">
						<h5 class="size flex">Copyright © 2018. Togola Aboubacar / Toumba Andrez</h5>
					</div>
					<div class=" col-sm-6">
						<h5 class="size flex">All right reserved.</h5>
					</div>
				</div>
			
	</div> -->
<!--  -->



</body>
</html>