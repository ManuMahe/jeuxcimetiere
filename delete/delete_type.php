<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Effacement d'une ligne</title>
    
    <!--Feuille de style-->
    <link rel="stylesheet" href="../ressources/css/styles.css" />


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
	


<?php
	try{
                   $pdo = new PDO('mysql:host=localhost;dbname=jeux_cimetiere;port=3306', 'root', '');
	               $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	              
	               $sql = "DELETE FROM type_jeu WHERE id_type= '$_GET[id_type]'";
	               $sth = $pdo->prepare($sql);
	               $sth->execute();
	              
	               $count = $sth->rowCount();
	               print('Effacement de ' .$count. ' entrées.');
	           }
	                
	           catch(PDOException $e){
	               echo "Erreur : " . $e->getMessage();
               }
               
header("location: ../administration.php")
?>


</body>
</html>