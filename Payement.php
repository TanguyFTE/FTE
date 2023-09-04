<?php

try {
    session_start();
    $DB = new PDO('mysql:host=localhost;dbname=fte;charset=utf8', 'root', 'root');
    $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Une erreur a été trouvée lors de la connexion à la base de données : ' . $e->getMessage());
}

// Si la variable "$_POST" contient des informations alors on les traite
if (!empty($_POST)) {
    try {
        extract($_POST);
        $valid = true;

        // On se place sur le bon formulaire grâce au "name" de la balise "input"
        if (isset($_POST['inscription'])) {
            $nom = htmlentities(strtolower(trim($nom))); // On récupère le nom
            $prenom = htmlentities(strtolower(trim($prenom))); // On récupère le prénom
            $mail = htmlentities(strtolower(trim($mail))); // On récupère le mail
            $numero = htmlentities(strtolower(trim($numero))); // On récupère le numéro
            $adresse = htmlentities(strtolower(trim($adresse))); // On récupère l'adresse
            $prix = htmlentities(strtolower(trim($prix))); // On récupère le don

            // Vérification du mail
            if (empty($mail)) {
                $valid = false;
                $er_mail = "Le mail ne peut pas être vide";
            } elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                $valid = false;
                $er_mail = "Le mail n'est pas valide";
                header('Location: Ce_mail_nest_pas_valide.php');
                exit;
            } else {
                // On vérifie que le mail est disponible
                $req_mail = $DB->prepare("SELECT mail FROM adhérents WHERE mail = ?");
                $req_mail->execute(array($mail));
                $req_mail = $req_mail->fetch();
                
                if ($req_mail) {
                    $valid = false;
                    $er_mail = "Ce mail existe déjà";
                    header('Location: Deja_Adherent.php');
                    exit;
                }
            }

            // Si toutes les conditions sont remplies alors on fait le traitement
            if ($valid) {
                // On insère nos données dans la table adhérents
                $req_insert = $DB->prepare("INSERT INTO adhérents (nom, prenom, mail, numero, adresse, prix) VALUES (?,?,?,?,?,?)");
                $req_insert->execute(array($nom, $prenom, $mail, $numero, $adresse, $prix));
                $_SESSION['prix'] = $prix;

                header('Location: Payement_2.php');
                exit;
            }
        }
    } catch (PDOException $e) {
        die('Une erreur s\'est produite lors du traitement du formulaire : ' . $e->getMessage());
    }
}

?>
