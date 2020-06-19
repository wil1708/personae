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
        <?php include 'header.php'; ?>
        <div class="titleButton2">
            <h1>PERSONAE</h1>
            <form class="formCreate" action="create.php" method="post">
                <label for="user">Nom d'utilisateur</label>
                <input class="inputCreate" type="text" id="user" name="user" value="">
                <label for="password">Mot de passe</label>
                <input class="inputCreate" type="text" id="password" name="password" value="">
                <label for="password">Confirmation de mot de passe</label>
                <input class="inputCreate" type="text" id="password" name="confpassword" value="">
                <button class="submitButton" type="submit" name="action">Créer un compte</button>
            </form>
        </div>
        <?php
//
            $user = new User (array('user'=>$_POST['user'], 'password'=>$_POST['password']));
//
            $manager -> add($user);
//        }
        var_dump($user);
        ?>
    </header>
    <script type="text/javascript" src="assets/libs/jquery/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="assets/js/dist/scripts.min.js"></script>
</body>
</html>
