<!DOCTYPE html>
<html lang="fr">
<?php
$progname = basename($_SERVER['SCRIPT_FILENAME'],".php");
include_once 'include/config.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>TG COUNTER F62DMR</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Fredoka+One&family=Tourney&family=Oswald&display=swap" rel="stylesheet">
<script type="text/javascript" src="scripts/hbmon.js"></script>
<link rel="stylesheet" type="text/css" href="css/styles.php" />
<meta http-equiv="refresh" content="120">
</head>
<body style="background-color: transparent;font: 10pt arial, sans-serif;">
<center><div style="width:1100px; text-align: center; margin-top:5px;">
</div>
<div style="width: 800px;">
<p style="text-align:center;"><span style="color:blue;font-size: 18px; font-weight:bold;">Top 5 des groupes de discussion les plus utilisés le <?php
    // Affiche la date du jour
    echo date_fran();
?></span></p>

<?php
/*---------------------------------------------------------------*/
/*
    Titre : Date du jour en fran&ccedil;ais de manière littérale                                                        
                                                                                                                          
    URL   : https://phpsources.net/code_s.php?id=7
    Auteur           : Avina                                                                                              
    Date édition     : 28 Aout 2004                                                                                       
    Date mise à jour : 11 Aout 2019                                                                                      
    Rapport de la maj:                                                                                                    
    - fonctionnement du code vérifié                                                                                    
    - modification de la description                                                                                      
*/
/*---------------------------------------------------------------*/
    
    function date_fran()
    {
    $mois = array("janvier", "fevrier", "mars",
                  "avril","mai", "juin", 
                  "juillet", "août","septembre",
                  "octobre", "novembre", "decembre");
    $jours= array("dimanche", "lundi", "mardi",
                  "mercredi", "jeudi", "vendredi",
                  "samedi");
    return $jours[date("w")]." ".date("j").(date("j")==1 ? "er":" ").
           $mois[date("n")-1]." ".date("Y");
    }
?>                           
<p>
</div>
<!-- TG table -->
<div style="width: 1100px; margin-left:0px; center;">
<fieldset style="background-color:#FFFFFF; width:500px;margin-left:10px;margin-right:10px;font-size:14px;border-top-left-radius: 10px; border-top-right-radius: 10px;border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
<style>
table, th, td {
  border: 1px solid lightgrey;
  border-collapse: collapse;
}
</style>
<table style="text-align: center; margin-top:5px; table-layout:fixed; font: 10pt arial, sans-serif;background-color: #f9f9f9;">
    <tr class="theme_color" style="background-color:#337ab7; color:white; height: 32px;font: 11pt tahoma, sans-serif; border:2;">
        <th style='width: 90px;'><b>Nom du TG</b></th>
        <th style='width: 180px;'><b>Nom du <br>Talk Group</b></th>
        <th style='width: 120px;'><b>Nombre <br>d'échanges</b></th>
        <th style='width: 140px;'><b>Durée totale <br>des QSOs</b></th>
        <th style='width: 350px;'><b>Les plus bavards</b></th>
    </tr>

</table>
</body>
</html>
