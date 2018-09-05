<?php	
	include('excel/controller/connexion.inc.php');
 
 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Gestion de caisse</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css" media="screen">
	<link rel="shortcut icon" type="image/x-icon" href="depense/image/LOGO-SIMPA_SAMARA.png">
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
</head>
<body>
	
	<!-- <div class="container">
		<h1 class="flex">GESTION DES PIECES</h1>
	</div> -->
			<!-- <div class="col-lg-12 flex">
				<div class="col-sm "><a href="depense/" class="btn btn-primary">Journal de caisse - Dépense</a></div>
				
				<div class="col-sm"><a href="recette/" class="btn btn-primary">Journal de caisse - Recette</a></div>
				
				<div class="col-sm"><a href="excel/" class="btn btn-primary">Journal de caisse - Bilan Annuel/Mensuel </a></div>	
			</div> -->
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

    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Journal de Caisse</a>
            </div>
            <!-- /.navbar-header -->

            
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
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
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Recette<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="recette/saisie.php">Enregistrement</a>
                                </li>
                                <li>
                                    <a href="recette/search.php">Recherche</a>
                                </li>
                                <li>
                                    <a href="recette/imprim.php">Impression</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
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
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>

                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        
        <!-- /#page-wrapper -->

    </div>
    <div id="page-wrapper" class="">
    	<div class="row">
    		<div class="col-lg-12 flex">
    			<h1>Bienvenue !</h1>
    		</div>
    	</div>
    	<div class="row flex">
    			<div class="col-lg-6">
    				<table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <td colspan="6" style="text-align: center;">LES DEPENSES</td>
                    </tr>
                  <tr>
                    <th>DATE</th>
                    <th>N° PIÈCE</th>
                    <th>LIBELLÉ</th>
                    <th>DÉBIT</th>
                    <th>CRÉDIT</th>
                    <th>SOLDE</th>
                  </tr>
                  </thead>
                  <tbody>
                  	<?php 
                  		$req=$connexion->query("SELECT DISTINCT * from depense ORDER BY datee DESC");
                  		while($s=$req->fetch())
                		 {
		                  $ref=$s['ref'];
		                  
		                  $date=$s['datee'];
		                   
		                  $mt=$s['mtchiffre'];
		                   
		                  $lib=$s['libelleop'];
                  
		                    echo"<tr>";
		                    echo"<td>".$date."</td>";
		                    echo"<td>".$ref."</td>";
		                    echo"<td>".$lib."</td>";
		                    echo"<td>".$mt."</td>";
		                    echo"<td>"."-"."</td>";
		                    echo"<td>"."-"."</td>";
		                    echo"</tr>";
                     
                    
                
                		} 
                  	?>
                  </tbody>
              </table>
    			</div>
    			<div class="col-lg-6 ">
    				<table class="table table-bordered table-striped ">
	                 <thead>
	                    <tr>
	                      	<td colspan="6" style="text-align: center;">LES RECETTES</td>
	                    </tr>
	                 	 <tr>
		                    <th>DATE</th>
		                    <th>N° PIÈCE</th>
		                    <th>LIBELLÉ</th>
		                    <th>DÉBIT</th>
		                    <th>CRÉDIT</th>
		                    <th>SOLDE</th>
	                  	</tr>
	                 </thead>
	                <tbody>
	                  	<?php 
	                  	$req2=$connexion->query("SELECT DISTINCT * from recette ORDER BY datee_r DESC");
                  			 while($d=$req2->fetch()) 
			                {
			                  $ref_r=$d['ref_r'];
			                  $date_r=$d['datee_r'];
			                  $mt_r=$d['mtchiffre_r'];
			                  $lib_r=$d['libelleop_r'];
			                    echo"<tr>";
			                    echo"<td>".$date_r."</td>";
			                    echo"<td>".$ref_r."</td>";
			                    echo"<td>".$lib_r."</td>";
			                    echo"<td>"."-"."</td>";
			                    echo"<td>".$mt_r."</td>";
			                    echo"<td>"."-"."</td>";
			                  echo"</tr>";
			                  
			                }
                  	 	?>
	             	</tbody>
	             </table>
    		</div>
    	</div>		
    </div>
<!--  -->
<div class="footer noimp">
    
      
        <div class="col-lg-12 flex">
          <div class="col-sm-6">
            <h5 class="size flex">Copyright © 2018. Togola Aboubacar / Toumba Andrez</h5>
          </div>
          <div class=" col-sm-6">
            <h5 class="size flex">All right reserved.</h5>
          </div>
        </div>
      
  </div>

<script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morrisjs/morris.min.js"></script>
    <script src="data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>



</body>
</html>