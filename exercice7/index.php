<!DOCTYPE html>
<html>
    <head>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 7</title>
    </head>
    <body>
        <nav>
            <h2>Liens des exercices</h2>
            <ul>
                <li><a href="http://partie7/exercice1/">Exercice 1</a></li>
                <li><a href="http://partie7/exercice2/">Exercice 2</a></li>
                <li><a href="http://partie7/exercice3/">Exercice 3</a></li>
                <li><a href="http://partie7/exercice4/">Exercice 4</a></li>
                <li><a href="http://partie7/exercice5/">Exercice 5</a></li>
                <li><a href="http://partie7/exercice6/">Exercice 6</a></li>
                <li><a href="http://partie7/exercice8/">Exercice 8</a></li>
            </ul>
        </nav>
        <p>Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier.</p> 
        <!-- Ouverture des balises PHP dans une balise p -->
        <p>
            Vérification et affichage des paramètre de l'URL:
            <?php
            // Vérification que les elements ne sont pas vides
            if (empty($_POST['firstName']) || empty($_POST['secondName']) || empty($_POST['civility']) || empty($_FILES['file']['name']) || $_FILES['file']['error'] != 0) {
                echo 'Il faut renseigner un nom et un prénom et votre CV au format PDF.';
                ?>
            <form method="post" action="index.php" enctype="multipart/form-data">
                <select name="civility">
                    <option value="Monsieur">Monsieur</option>
                    <option value="Madame">Madame</option>
                </select>
                <label for="firstName">Prénom: <input type="text" name="firstName" id="firstName"/></label>
                <label for="secondName">Nom: <input type="text" name="secondName" id="secondName"/></label>
                <label for="file">Nom: <input type="file" name="file" id="file"/></label>
                <button type="submit">Envoyer</button>
            </form>
            <?php
            } elseif ($_FILES['file']['size'] <= 5000000) { 
                $file_info = pathinfo($_FILES['file']['name']);
                $file_upload = $file_info['extension'];
                $ext_autorised = array('pdf');
                if (in_array($file_upload, $ext_autorised)){
                    // Affiche les elements en sécurisant les valeurs pour ne pas afficher les balises HTML et supprimer les espaces avant et après
                    echo strip_tags(trim($_POST['civility'])) . ' ' . strip_tags(trim($_POST['firstName'])) . ' ' . strip_tags(trim($_POST['secondName'])) . ' ' . strip_tags(trim($_FILES['file']['name']));
                    move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . basename($_FILES['file']['name']));
                } else {
                    echo 'Le format du fichier n\'est pas PDF';
                }            
            }
            ?>
         </p>
    </body>
</html