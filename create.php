<?php require "config.php"; ?>
<!doctype html>
<html lang="en">
<head>
    <!--META-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="William Pires">
    <meta name="description" content="Votre ressource stragégie marketing">
    <meta name="robots" content="index, no follow">
    <!--LINKS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">

    <!--OPENGRAPH ogp.me-->
    <meta property="og:title" content="Personae">
    <meta property="og:description" content="Votre ressource stratégie marketing">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <title>Personae création de compte</title>
</head>
<body>
    <header>
        <?php include 'header2.php'; ?>
        <div class="titleButton2">
            <h1 class="titleIndexCreateConnect">PERSONAE</h1>
            <h3 class="titleStrategy">Votre stratégie marketing</h3>
            <form class="formCreate" action="create.php" method="post">
                <label class="labelDiv4" for="user">Nom d'utilisateur</label>
                <input class="inputCreate" type="text" id="user" name="user" value="">
                <label class="labelDiv4" for="password">Mot de passe</label>
                <input class="inputCreate" type="password" id="password" name="password" value="">
                <label class="labelDiv4" for="password">Confirmation de mot de passe</label>
                <input class="inputCreate" type="password" id="password" name="confpassword" value="">
                <button class="submitButton" type="submit" name="action">Créer un compte</button>
            </form>

        <?php
        if (isset($_POST['user'])) {$user = ($_POST['user']);}
        if (isset($_POST['password'])) {$password = ($_POST['password']);}
        if (isset($_POST['confpassword'])) {$confpassword = ($_POST['confpassword']);}

        if (isset($user) && isset($password) && isset($confpassword) && $password == $confpassword && !empty($user) && !empty($password) && !empty($confpassword)){
            if ($manager->exists($_POST['user'])){
                echo '<p class="labelDiv4">Cet utilisateur existe déjà</p>';
            }else{
                $user = new User (array('user'=>$_POST['user'], 'password'=>password_hash($_POST['password'], PASSWORD_DEFAULT)));
                $manager -> add($user);
                echo '<p class="labelDiv4">Votre compte a bien été crée</p>';
                echo '<META http-equiv="refresh" content="2; URL=connection.php"> ';
            }

        }else {
            echo '<p class="labelDiv4">Veuillez remplir entièrement les champs</p>';
        }
        ?>
        </div>
    </header>
    <?php include 'footer3.php';?>
    <script type="text/javascript" src="assets/libs/jquery/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="assets/js/dist/scripts.min.js"></script>
</body>
</html>
