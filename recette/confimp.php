<?php include('controller/connexion.inc.php');$req=$connexion->query("SELECT * FROM recette ORDER BY id DESC LIMIT 1");while($d=$req->fetch()){$ref=$d['ref_r'];$date=$d['datee_r'];$mt=$d['mtchiffre_r'];$lib=$d['libelleop_r'];$mtlettre=$d['mtlettre_r'];$direction=$d['signdirection_r'];$caisse=$d['caissier_r'];$benef=$d['benef_r'];} ?>