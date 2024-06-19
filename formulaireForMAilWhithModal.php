<!-- formulaire happyoptique -->
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

use function PHPSTORM_META\type;

?>

<head>
    <!DOCTYPE html>
    <html lang="fr">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- on inclut le fichier css -->
    <link rel="stylesheet" href="base/style.css">
</head>

<body>
    <!-- logo happyoptique -->
    <a href="https://www.happy-optic.fr"><img src="photosite/logo.webp" alt=" logo Happy optic"></a>
    <h1>
        <?php echo date("d/m/y")  ?>
    </h1>
    <p2>
        <!--  formulaire _______________________________________________________________________________________________________________ -->
        <form method="post" enctype="multipart/form-data" action="#modal">
            <label>Votre Nom</label><br>
            <input type="text" name="nom" id="nom" placeholder="Ex: Dupont" required>
            <br><br>
            <label>Votre Prénom</label><br>
            <input type="text" name="prenom" id="prenom" placeholder="Ex: Pierre" required>
            <br><br>
            <!-- <label>Votre date de naissance</label><br>
                <input type="date" name="dateDeNAissance"id="dateDeNAissance">
                    <br><br> -->
            <label>Votre Adresse</label><br>
            <input type="text" name="adresse" id="adresse" placeholder="Ex: 9 rue colbert 13001 Marseille " required>
            <br><br>
            <label>Votre Numéro de Téléphone</label><br>

            <input type="text" name="numeroDeTelephone" id="numeroDeTelephone" placeholder="Ex:095459240" pattern="0\d{9}" title="veuillez entrer un numéro de téléphone valide." required><!-- 10 chifffres commence par 0 -->
            <br><br>
            <label>Votre Email</label><br>
            <input type="email" name="email" id="email" placeholder="Ex: pierre.dupont@gmail.com" required>
            <br><br>

            <label>Choisissez Votre Complementaire santé</label><br>
            <div>
                <input type="radio" name="choixCmuOuMutuelle" id="CMU" value="CMU">
                <label for="CMU">CMU</label><br>
                <input type="radio" name="choixCmuOuMutuelle" id="Mutuelle" value="Mutuelle" checked>
                <label for="Mutuelle">Mutuelle</label>

            </div>
            <input type="text" name="mutuelClient" id="mutuelClient" placeholder="Ex: Macif">
            <br><br>
            <!-- choix multiple connaissance -->
            <label>Comment vous nous connaissez ?</label><br>
            <select name="choixConaissance" id="choix" required>
                <option value="magasin">magasin</option>
                <option value="Pub écran ">Pub écran </option>
                <option value="Pub prospectus">Pub prospectus</option>
                <option value="Ami/collègue ">Ami/collègue</option>
                <option value="Moteur de recherche">Moteur de recherche</option>
                <option value="Réseaux sociaux ">Réseaux sociaux</option>
                <option value="Autre">Autre</option>
            </select>
            <br><br>
            <!-- suite pour photo identite etc -->
            <p3>

                <label>Prendre en photo votre carte vitale.</label><br>
                <input type="file" name="carteVitale" accept="image/*">
                <br><br>
                <label>Prendre en photo votre carte mutuelle ou votre attestation CMU.</label><br>
                <input type="file" name="carteMutuelle" accept="image/*">
                <br><br>
                <label>Prendre en photo votre ordonnance du médecin.</label><br>
                <input type="file" name="ordonnanceDuMedecin" accept="image/*">
                <br><br>
            </p3>

            <label>Vous rencontrez des problemes avec le formulaire indiquez nous ici!</label><br>
            <textarea name="problemesRencontres" id="problemesRencontres" cols="40" rows="10" placeholder="Indiquez Votre soucis ici et nous reviendrons vers vous"></textarea><br>
            <button type="submit">Envoyer</button>
        </form>
    </p2>

    <!-- modale popup -->
    <div id="modal">
        <b1>Votre dossier est pris en charge.</b1><br><br>
        <b2>
            <a href="https://www.happy-optic.fr"><img src="/photosite/logo-HO.png" alt="Happy optic" style="width: 150px; height: 90%px;"></a><br><br>
        </b2>

        <b3>vous remercie de la confiance que vous lui avez accordée, en faisant appel à nos services. <br>
            En attendant, vous pouvez nous suivre sur les réseaux sociaux. </b3><br><br>
        <b4>
            <a href="https://www.facebook.com/people/Happy-Optic-Audio/100078241003161/"><img src="/photosite/facebook.png" alt="Facebook" style="width: 40px; height: 10%px;"></a>
            <a href="https://www.instagram.com/happy.optic/"><img src="/photosite/instagram.png" alt="Instagram" style="width: 40px; height: 40px;"></a>
            <a href="https://www.snapchat.com/add/happy.optic?share_id=RjlBNDZG&locale=fr_FR"><img src="/photosite/snap.png" alt="Snapchat" style="width: 40px; height: 10%px;"></a><br>
        </b4>

        <b3>ou bien en nous laissant un avis positif</b3><br><br>
        <b4>
            <a href="https://www.google.com/maps/place/Happy+Optic+%26+Audio/@43.299071,5.372123,17z/data=!4m8!3m7!1s0x12c9c1a3a26da48f:0xe9413ad0b6f94b84!8m2!3d43.299071!4d5.3746979!9m1!1b1!16s%2Fg%2F11pkcz7z6t?entry=ttu"><img src="/photosite/google.png" alt="Google" style="width: 40px; height: 40px;"></a>
            <a href="https://www.pagesjaunes.fr/contribution/votre-avis/61268225?codeRubrique=58102500"><img src="/photosite/pagesjaunes-seeklogo.com.png" alt="pages jaunes" style="width: 40px; height: 40px;"></a>
        </b4>

        <br><br>
        <b3>La boutique Happy Optic & Audio et son équipe vous remercient par avance.</b3>
        <a href="#" class="modal_close">&times;</a>
    </div>

    <?php
    //fonction mail de php mailer 
    require_once "base/phpMailer/Exception.php";
    require_once "base/phpMailer/PHPMailer.php";
    require_once "base/phpMailer/SMTP.php";

    // Configuration de PHPMailer
    $mail = new PHPMailer(true);

    //mail sans photo--------------------------------------------------------------------------------------------
    try {
        //$mail->SMTPDebug=SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = "ssl0.ovh.net";
        $mail->SMTPAuth   = true;
        $mail->Port = 587;
        $mail->CharSet = "utf-8";
        $mail->addAddress("yourAdressMail");
        $mail->Username = "yourAdressMail";
        $mail->setFrom("yourAdressMail");
        $mail->Password   = "YourPassWord";
        $mail->Subject = "Formulaire Client:" . $_POST["nom"] . " " . $_POST["prenom"] . " " . "avec Photos";
        $mail->addReplyTo($_POST["email"]);
        if (isset(
            $_POST["nom"],
            $_POST["prenom"],
            $_POST['email'],
            $_POST['adresse'],
            $_POST['numeroDeTelephone'],
            $_POST['choixConaissance']
        )) {

            $mail->Subject = "Formulaire Client:" . $_POST["nom"] . " " . $_POST["prenom"] . " " . "Sans Photos";
            $mail->Body =
                "Nouveau client: " . $_POST["nom"] . " " . $_POST["prenom"] . "\n" .
                "Email: " . $_POST["email"] . "\n" .
                "Adresse: " . $_POST["adresse"] . "\n" .
                "Numero De Telephone: " . $_POST["numeroDeTelephone"] . "\n" .
                "Choix Conaissance: " . $_POST["choixConaissance"];

            $allowed = [
                "jpg" => "image/jpeg",
                "jpeg" => "image/jpeg",
                "png" => "image/png",
                "webp" => "image/webp",
                "heic" => "image/heic",
                "heif" => "image/heif",
                "tiff" => "image/tiff",
                "raw" => "image/raw"
            ];

            // ajout img carte vitale----------------------------------------------------------------------------------------------------------------
            if (isset($_FILES["carteVitale"]) && $_FILES["carteVitale"]["error"] === 0) {

                $file_name_cv = $_FILES["carteVitale"]["name"];
                $file_size_cv = $_FILES["carteVitale"]["size"];
                $file_type_cv = $_FILES["carteVitale"]["type"];

                $extension_cv = strtolower(pathinfo($file_name_cv, PATHINFO_EXTENSION));
                if (!array_key_exists($extension_cv, $allowed) || !in_array($file_type_cv, $allowed)) {
                    die("erreur fichier non accepte");
                }
                if ($file_size_cv > 4024 * 4024) {
                    die("fichier trop volumineux");
                }


                $new_name_cv = md5(uniqid());
                $new_file_name_cv = __DIR__ . "/files/$new_name_cv.$extension_cv";

                if (!move_uploaded_file($_FILES["carteVitale"]["tmp_name"], $new_file_name_cv)) {
                    die("L'upload a échoué");
                }
                chmod($new_file_name_cv, 0644);
                $mail->addAttachment($new_file_name_cv);
                $mail->Subject = "Formulaire Client:" . $_POST["nom"] . " " . $_POST["prenom"] . " " . "Avec Photo";
            }

            // ajout img carte mutuelle-------------------------------------------------------------------------------------------------------------------
            if (isset($_FILES["carteMutuelle"]) && $_FILES["carteMutuelle"]["error"] === 0) {
                $file_name_cm = $_FILES["carteMutuelle"]["name"];
                $file_size_cm = $_FILES["carteMutuelle"]["size"];
                $file_type_cm = $_FILES["carteMutuelle"]["type"];

                $extension_cm = strtolower(pathinfo($file_name_cm, PATHINFO_EXTENSION));
                if (!array_key_exists($extension_cm, $allowed) || !in_array($file_type_cm, $allowed)) {
                    die("erreur fichier non accepte");
                }
                if ($file_size_cm > 4024 * 4024) {
                    die("fichier trop volumineux");
                }
                $new_name_cm = md5(uniqid());
                $new_file_name_cm = __DIR__ . "/files/$new_name_cm.$extension_cm";

                if (!move_uploaded_file($_FILES["carteMutuelle"]["tmp_name"], $new_file_name_cm)) {
                    die("L'upload a échoué");
                }
                chmod($new_file_name_cm, 0644);
                $mail->addAttachment($new_file_name_cm);
                $mail->Subject = "Formulaire Client:" . $_POST["nom"] . " " . $_POST["prenom"] . " " . "Avec Photo";
            }
            // ajout img ordonnance du medecin----------------------------------------------------------------------------------------------------------------
            if (isset($_FILES["ordonnanceDuMedecin"]) && $_FILES["ordonnanceDuMedecin"]["error"] === 0) {
                $file_name_om = $_FILES["ordonnanceDuMedecin"]["name"];
                $file_size_om = $_FILES["ordonnanceDuMedecin"]["size"];
                $file_type_om = $_FILES["ordonnanceDuMedecin"]["type"];

                $extension_om = strtolower(pathinfo($file_name_om, PATHINFO_EXTENSION));
                if (!array_key_exists($extension_om, $allowed) || !in_array($file_type_om, $allowed)) {
                    die("erreur fichier non accepte");
                }
                if ($file_size_om > 4024 * 4024) {
                    die("fichier trop volumineux");
                }
                $new_name_om = md5(uniqid());
                $new_file_name_om = __DIR__ . "/files/$new_name_om.$extension_om";

                if (!move_uploaded_file($_FILES["ordonnanceDuMedecin"]["tmp_name"], $new_file_name_om)) {
                    die("L'upload a échoué");
                }
                chmod($new_file_name_om, 0644);
                $mail->addAttachment($new_file_name_om);
                $mail->Subject = "Formulaire Client:" . $_POST["nom"] . " " . $_POST["prenom"] . " " . "Avec Photo";
            }
        }
        //ajout des informations qui ne sont pas obliagtoires
        if (isset($_POST["choixCmuOuMutuelle"])) {
            if ($_POST["choixCmuOuMutuelle"] == "CMU") {
                $mail->Subject .= "\r, CMU";
            }
        }

        if (isset($_POST["mutuelClient"]) && (!($_POST["mutuelClient"] == NULL))) {
            $mail->Body .= "\nMutuelle Client: " . $_POST["mutuelClient"] . "\n";
            $mail->Subject .= "\r,mutuelle ";
        }
        if (isset($_POST["problemesRencontres"]) && (!($_POST["problemesRencontres"] == NULL))) {
            $mail->Body .= "Problemes rencontres: " . $_POST["problemesRencontres"] . "\n";
            $mail->addCC("mimouni.avner@icloud.com");
        }
        $mail->send();
    } catch (Exception $e) {
        echo "messsage non envoye error:{$mail->ErrorInfo}";
    }


    ?>

</body>

</html>