<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
</head>
    <body>
        <p>Merci <?php echo $_POST['user_first_name'] . " " . $_POST['user_name'] ?> de nous avoir contacté à propos de <?php echo $_POST['user_subject'] ?>.</p>
        <p>Un de nos conseiller vous contactera soit à l’adresse <?php echo $_POST['user_email'] ?> ou par téléphone au <?php echo $_POST['user_phone'] ?> dans les plus brefs délais pour traiter votre demande :</p>
        <p><?php echo $_POST['user_message'] ?></p>
    </body>
</html>