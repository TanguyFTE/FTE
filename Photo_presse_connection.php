<?php
// Informations de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "FTE";

// Création de la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification des erreurs de connexion
if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

// Récupération des informations saisies par l'utilisateur
$identifiant = $_POST['identifiant'];
$mdp = $_POST['mdp'];

// Requête pour vérifier les informations dans la base de données
$sql = "SELECT * FROM presse WHERE identifiant = '$identifiant' AND mdp = '$mdp'";
$result = $conn->query($sql);

// Vérification du résultat de la requête
if ($result->num_rows > 0) {
    // Informations correctes, redirection vers Iiiiiiiiiii.php
    header("Location: Photo_presse_oui.php");
    exit();
} else {
    // Informations incorrectes, redirection vers Gggggg.php
    header("Location: Photo_presse_non.php");
    exit();
}

// Fermeture de la connexion à la base de données
$conn->close();
?>
