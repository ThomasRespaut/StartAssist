<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="formulaire.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,400i,700">
</head>
<body>
    <section id="formulaire">
        <div class="container">
            <div class="wrapper">
                <ul class="steps">
                    <li class="is-active">Etape 1</li>
                    <li>Etape 2</li>
                    <li>Etape 3</li>
                    <li>Etape 4</li>
                    <li>Etape 5</li>
                    <li>Etape 6</li>
                    <li>Etape 7</li>
                    <li>Etape 8</li>
                    <li>Etape 9</li>
                    <li>Etape 10</li>
                    <li>Etape 11</li>
                </ul>

                <form class="form-wrapper" method="post">
                    <fieldset class="section is-active">
                        <h3 class = "formh3">Quel est le domaine d'activit� de votre projet ?</h3>
                        <label>domaineprojet</label>
                        <input type="text" name="domaineprojet" id="domaineprojet" placeholder="Nom" required>
                        <div class="buttonsuivant">Suivant</div>
                    </fieldset>


                    <fieldset class="section">
                        <h3 class = "formh3">Quelle est l'id�e principale qui se cache derri�re votre projet ?</h3>
                        <label>ideeprojet</label>
                        <textarea name="ideeprojet" id="ideeprojet" placeholder="Id�e" required></textarea>
                        <div class="buttonsuivant">Suivant</div>
                    </fieldset>

                    <fieldset class="section">
                        <h3 class = "formh3">Quel est votre public cible ou votre march� potentiel ?</h3>
                        <label>publiccible</label>
                        <input type="text" name="publiccible" id="publiccible" placeholder="Public cible" required>
                        <div class="buttonsuivant">Suivant</div>
                    </fieldset>

                    <fieldset class="section">
                        <h3 class = "formh3">Quel est le stade actuel de d�veloppement de votre projet ?</h3>
                        <div class="row cf">
                            <div class="four col">
                                <input type="radio" name="stade" id="r1" value="Id�e" checked>
                                <label for="r1">
                                    <h4>Id�e</h4>
                                </label>
                            </div>
                            <div class="four col">
                                <input type="radio" name="stade" id="r2" value="Prototype">
                                <label for="r2">
                                    <h4>Prototype</h4>
                                </label>
                            </div>
                            <div class="four col">
                                <input type="radio" name="stade" id="r3" value="Lancement">
                                <label for="r3">
                                    <h4>Lancement</h4>
                                </label>
                            </div>
                        </div>
                        <div class="buttonsuivant">Suivant</div>
                    </fieldset>

                    <fieldset class="section">
                        <h3 class = "formh3">Quelles sont vos motivations et vos objectifs en tant qu'entrepreneur ou porteur de projet ? </h3>
                        <label>motivation</label>
                        <textarea name="motivation" id="motivation" placeholder="Motivation" required></textarea>
                        <div class="buttonsuivant">Suivant</div>
                    </fieldset>

                    <fieldset class="section">
                        <h3 class = "formh3">Quels sont les d�fis auxquels vous �tes confront�s pour r�aliser votre projet ? </h3>
                        <label>defis</label>
                        <textarea name="defis" id="defis" placeholder="D�fis" required></textarea>
                        <div class="buttonsuivant">Suivant</div>
                    </fieldset>

                    <fieldset class="section">
                        <h3>Comment envisagez-vous de financer et de promouvoir votre projet ? </h3>
                        <label>financement</label>
                        <textarea name="financement" id="financement" placeholder="Financement" required></textarea>
                        <div class="buttonsuivant">Suivant</div>
                    </fieldset>

                    <fieldset class="section">
                        <h3 class = "formh3">Avez-vous d�j� effectu� une �tude de march�, une analyse de la concurrence ou la cr�ation d'un MVP ?</h3>
                        <div class="row cf">
                            <div class="four col">
                                <input type="radio" name="etude_marche" id="r4" value="Oui" checked>
                                <label for="r4">
                                    <h4>Oui</h4>
                                </label>
                            </div>
                            <div class="four col">
                                <input type="radio" name="etude_marche" id="r5" value="En cours">
                                <label for="r5">
                                    <h4>En cours</h4>
                                </label>
                            </div>
                            <div class="four col">
                                <input type="radio" name="etude_marche" id="r6" value="Non">
                                <label for="r6">
                                    <h4>Non</h4>
                                </label>
                            </div>
                        </div>
                        <div class="buttonsuivant">Suivant</div>
                    </fieldset>

                    <fieldset class="section">
                        <<h3 class = "formh3">Quels sont les principaux obstacles que vous avez rencontr�s jusqu'� pr�sent dans votre parcours entrepreneurial ? </h3>
                        <label>obstacle</label>
                        <textarea name="obstacle" id="obstacle" placeholder="Obstacle" required></textarea>
                        <div class="buttonsuivant">Suivant</div>
                    </fieldset>

                <fieldset class="section">
                    <h3 class = "formh3">Comment StartAssist pourrait vous aider � d�velopper votre projet et � le faire �voluer ?</h3>
                    <label>startassist</label>
                    <textarea name="startassist" id="startassist" placeholder="StartAssist" required></textarea>
                    <div class="buttonsubmit">Soumettre le questionnaire</div>
                </fieldset>

                <fieldset class="section">
                    <h3 class = "formh3">Formulaire envoy� !</h3>
                    <p>Votre formulaire a bien �t� pris en compte</p>
                </fieldset>
            </form>
        </div>
    </div>
</section>

    <footer>
        <p>Tous droits r�serv�s � 2023 StartAssist</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
<?php
// Inclure les fichiers de la biblioth�que PHPMailer avec les bons chemins d'acc�s
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST["startassist"])) {
    // Collectez les donn�es du formulaire
    $domaineprojet = utf8_encode($_POST["domaineprojet"]);
    $ideeprojet = utf8_encode($_POST["ideeprojet"]);
    $publiccible = utf8_encode($_POST["publiccible"]);
    // Collectez les autres champs de formulaire de la m�me mani�re

    // Ajoutez les champs de type "radio" dans le message
    $stade = "";
    if (isset($_POST["stade"])) {
        $stade = $_POST["stade"];
    }
    $etude_marche = "";
    if (isset($_POST["etude_marche"])) {
        $etude_marche = $_POST["etude_marche"];
    }
    if (isset($_POST["obstacle"])) {
        $obstacle = $_POST["obstacle"];
    }

    $startassist = utf8_encode($_POST["startassist"]);

    // Configurez les param�tres de l'e-mail
    $to = "thomas.respaut@gmail.com"; // Remplacez par votre adresse e-mail
    $subject = "Nouvelle soumission de formulaire";
    $message = "Domaine du projet: " . $domaineprojet . "\n";
    $message .= "Id�e principale du projet: " . $ideeprojet . "\n";
    $message .= "Public cible ou march� potentiel: " . $publiccible . "\n";
    // Ajoutez les autres champs du formulaire au message
    $message .= "Stade actuel de d�veloppement: " . $stade . "\n";
    $message .= "Avez-vous effectu� une �tude de march�, une analyse de la concurrence ou la cr�ation d'un MVP ?: " . $etude_marche . "\n";
    $message .= "Les obstacles rencontr�s : " . $obstacle . "\n";
    $message .= "Sa demande par rapport � StartAssist : " . $startassist . "\n";

    // Envoyez l'e-mail en utilisant PHPMailer
    $mail = new PHPMailer(true);
    try {
        $mail->CharSet = 'UTF-8';
        $mail->setFrom('thomas.respaut@startassist.fr', 'StartAssist');
        $mail->addAddress($to);
        $mail->isHTML(false);
        $mail->Subject = $subject;
        $mail->Body = $message;
        $mail->send();

        // Si l'e-mail est envoy� avec succ�s, renvoyez une r�ponse JSON pour le traitement Ajax
        echo json_encode(array("success" => true));
    } catch (Exception $e) {
        // S'il y a une erreur lors de l'envoi de l'e-mail, renvoyez une r�ponse JSON avec l'erreur
        echo json_encode(array("success" => false, "error" => "Erreur lors de l'envoi de l'e-mail."));
    }
}
?>
</body>
</html>

