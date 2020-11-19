<?php
header('Location: index.php');
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>
<?php
    if (!empty($_POST)) { 
        if (isset($_POST['nom_utilisateur'])
        && isset($_POST['prenom_utilisateur'])
        && isset($_POST['mdp_utilisateur'])
        ) {
            try {
                $pdo = new PDO('mysql:host=localhost;dbname=jeux_cimetiere;port=3306', 'root', '');
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
                $nom_utilisateur = $_POST['nom_utilisateur'];
                $prenom_utilisateur = $_POST['prenom_utilisateur'];
                $pass_hache = password_hash($_POST['mdp_utilisateur'], PASSWORD_DEFAULT);
                $courriel_utilisateur = $_POST['courriel_utilisateur'];
                $image_utilisateur = "uploads/".$_FILES["fileToUpload"]["name"];
    
    
                //$sth appartient à la classe PDOStatement
                $sth = $pdo->prepare("
                           INSERT INTO utilisateur(nom_utilisateur, prenom_utilisateur, mdp_utilisateur, courriel_utilisateur, image_utilisateur)
                           VALUES (:nom_utilisateur, :prenom_utilisateur, :mdp_utilisateur, :courriel_utilisateur, :image_utilisateur)
                       ");
                $sth->execute(array(
                    'nom_utilisateur' => $nom_utilisateur,
                    ':prenom_utilisateur' => $prenom_utilisateur,
                    ':mdp_utilisateur' => $pass_hache,
                    ':courriel_utilisateur' => $courriel_utilisateur,
                    ':image_utilisateur' => $image_utilisateur,
    
                ));
                echo "Entrée ajoutée dans la table";
            } catch (PDOException $e) {
                echo "Erreur : " . $e->getMessage();
            }


    }
}
?>