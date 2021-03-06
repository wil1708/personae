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
    <meta name="robots" content="connection, no follow">
    <!--LINKS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">

    <title>Personae connexion</title>
</head>
<body>
    <header>
        <?php include 'header2.php'; ?>
        <div class="titleButton2">
            <h1 class="titleIndexCreateConnect">PERSONAE</h1>
            <h3 class="titleStrategy">Votre stratégie marketing</h3>
            <form class="formCreate" action="connection.php" method="post">
                <label for="user">Nom d'utilisateur</label>
                <input class="inputCreate" type="text" id="user" name="user" value="">
                <label for="password">Mot de passe</label>
                <input class="inputCreate" type="password" id="password" name="password" value="">
                <button class="submitButton" type="submit" name="action">Se connecter</button>
            </form>
            <?php
            if (isset($_POST['user'])) {$user = ($_POST['user']);}
            if (isset($_POST['password'])) {$password = ($_POST['password']);}

            if (isset($user) && isset($password) && !empty($user) && !empty($password)) {
                $manager->connection($user);
            }
            ?>
        </div>
    </header>
    <?php include 'footer3.php';?>
    <script type="text/javascript" src="assets/libs/jquery/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="assets/js/dist/scripts.min.js"></script>
</body>
</html>
