
<?php

try {
    session_start();
    $DB = new PDO('mysql:host=localhost;dbname=fte;charset=utf8;','root','root');
} catch (Exception $e) {
    die('Une erreur a été trouvée lors de la connexion à la base de données : ' . $e->getMessage());
}

// Si la variable "$_POST" contient des informations alors on les traite
if (!empty($_POST)) {
    try {
        extract($_POST);
        $valid = true;

        // On se place sur le bon formulaire grâce au "name" de la balise "input"
        if (isset($_POST['inscription'])) {
            $mail = htmlentities(strtolower(trim($mail))); // On récupère le mail

            // Vérification du mail
            if (empty($mail)) {
                $valid = false;
                $er_mail = "Le mail ne peut pas être vide";
                header('Location: Mail_Vide.php');
            } elseif (!preg_match("/^[a-z0-9\-_.]+@[a-z]+\.[a-z]{2,3}$/i", $mail)) {
                $valid = false;
                $er_mail = "Le mail n'est pas valide";
                header('Location: Ce_mail_nest_pas_valide.php');
                exit;

            } else {
                // On vérifie que le mail est disponible
                $req_mail = $DB->prepare("SELECT mail FROM newsletter WHERE mail = ?");
                $req_mail->execute(array($mail));
                $req_mail = $req_mail->fetch();
                
                if ($req_mail['mail'] <> "") {
                    $valid = false;
                    $er_mail = "Ce mail existe déjà";
                    header('Location: Ce_mail_existe_deja.php');
                    exit;
    
                }
            }

            // Si toutes les conditions sont remplies alors on fait le traitement
            if ($valid) {
                // On insère nos données dans la table utilisateur
                $req_insert = $DB->prepare("INSERT INTO newsletter (mail) VALUES (?)");
                $req_insert->execute(array($mail));

                header('Location: Merci_inscription_newsletter.php');
                exit;
            }
        }
    } catch (Exception $e) {
        die('Une erreur s\'est produite lors du traitement du formulaire : ' . $e->getMessage());
    }
}

?>
