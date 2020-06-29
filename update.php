<?php
    require "config.php";
    session_start();
    $user = $manager->get($_SESSION['user']);

    if (isset($_GET['deconnexion']))
    {
        session_destroy();
        header('Location: index.php');
        exit();
    }
?>

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
        <title>Personae créer ma stratégie</title>
    </head>
    <body>
<!---------------------------------------------HEADER--------------------------------------------->
        <header>
            <?php include 'header.php';?>
            <div class="titleButton2">
                <h1>PERSONAE</h1>
                <?= "<img src='./assets/upload/".$user->photo()."' />" ?>
                <h3 class="infoTitle">Bienvenue <?= htmlspecialchars($user->user()) ?> </h3>
                <a href="?deconnexion=1"><button class="submitButton" type="submit" name="action">Déconnexion</button></a>
                <h3 class="infoTitle">Créer/éditer ma stratégie marketing</h3>
                <div class="mouse">
                    <div class="wheel"></div>
                </div>
            </div>
        </header>
<!----------------------------------------SECTION STRATEGIC PLAN------------------------------>
        <section class="strategicPlan">
            <img class="laurierW" src="assets/img/laurier2.png" alt="image laurier blanc">
            <h1 class="h1Plan">PLAN STRATEGIQUE</h1>
            <h3 class="diagTitle">1.Diagnostic interne et externe SWOT</h3>
            <i class="fas fa-angle-down fa-3x"></i>
            <h3 class="diagTitle">2. Choix des priorités et des cibles</h3>
            <i class="fas fa-angle-down fa-3x"></i>
            <h3 class="h3Mix diagTitle">3. Mix Marketing</h3>
        </section>
<!--------------------------------------------SECTION DIAGNOSTIC------------------------------>
        <section class="diagnostic">
            <div class="vaseDiagnostic">
                <img class="vase" src="assets/img/europe-2028128_1280.png" alt="vase grèce antique">
                <h1 class="diagnosticTitle">DIAGNOSTIC</h1>
            </div>
            <form action="update.php" method="POST" enctype="multipart/form-data">
                <div class="diagnosticForm">
                    <div class="divRotate">
                        <h4 class="titleRotate">INTERNE</h4>
                        <h4 class="titleRotate">EXTERNE</h4>
                    </div>
                    <div class="posNeg">
                        <h4 class="titlePositif">POSITIF</h4>
                        <div class="forces">
                            <h4 class="titleDiagnostic">Forces</h4>
                            <label for="force1"></label>
                            <input class="inputDiag" type="text" name="force1" id="force1" placeholder="produits..." value="<?= $user->force1() ?>">
                            <label for="force2"></label>
                            <input class="inputDiag" type="text" name="force2" id="force2" placeholder="marque..." value="<?= $user->force2() ?>">
                            <label for="force3"></label>
                            <input class="inputDiag" type="text" name="force3" id="force3" placeholder="management..." value="<?= $user->force3() ?>">
                            <label for="force4"></label>
                            <input class="inputDiag" type="text" name="force4" id="force4" placeholder="force de vente..." value="<?= $user->force4() ?>">
                            <label for="force5"></label>
                            <input class="inputDiag" type="text" name="force5" id="force5" placeholder="communication..." value="<?= $user->force5() ?>">
                            <label for="force6"></label>
                            <input class="inputDiag" type="text" name="force6" id="force6" placeholder="notoriété..." value="<?= $user->force6() ?>">
                        </div>
                        <div class="opportunites">
                            <h4 class="titleDiagnostic">Opportunités</h4>
                            <label for="opportunite1"></label>
                            <input class="inputDiag" type="text" name="opportunite1" id="opportunite1" placeholder="concurrence..." value="<?= $user->opportunite1() ?>">
                            <label for="opportunite2"></label>
                            <input class="inputDiag" type="text" name="opportunite2" id="opportunite2" placeholder="partenaires de distribution..." value="<?= $user->opportunite2() ?>">
                            <label for="opportunite3"></label>
                            <input class="inputDiag" type="text" name="opportunite3" id="opportunite3" placeholder="fournisseurs..." value="<?= $user->opportunite3() ?>">
                            <label for="opportunite4"></label>
                            <input class="inputDiag" type="text" name="opportunite4" id="opportunite4" placeholder="clients..." value="<?= $user->opportunite4() ?>">
                            <label for="opportunite5"></label>
                            <input class="inputDiag" type="text" name="opportunite5" id="opportunite5" placeholder="macro-environnement..." value="<?= $user->opportunite5() ?>">
                            <label for="opportunite6"></label>
                            <input class="inputDiag" type="text" name="opportunite6" id="opportunite6" placeholder="autres..." value="<?= $user->opportunite6() ?>">
                        </div>
                    </div>
                    <div class="posNeg">
                        <h4 class="titlePositif">NEGATIF</h4>
                        <div class="faiblesses">
                            <h4 class="titleFaiblesses">Faiblesses</h4>
                            <label for="faiblesse1"></label>
                            <input class="inputDiag" type="text" name="faiblesse1" id="faiblesse1" placeholder="produits..." value="<?= $user->faiblesse1() ?>">
                            <label for="faiblesse2"></label>
                            <input class="inputDiag" type="text" name="faiblesse2" id="faiblesse2" placeholder="marque..." value="<?= $user->faiblesse2() ?>">
                            <label for="faiblesse3"></label>
                            <input class="inputDiag" type="text" name="faiblesse3" id="faiblesse3" placeholder="management..." value="<?= $user->faiblesse3() ?>">
                            <label for="faiblesse4"></label>
                            <input class="inputDiag" type="text" name="faiblesse4" id="faiblesse4" placeholder="force de vente..." value="<?= $user->faiblesse4() ?>">
                            <label for="faiblesse5"></label>
                            <input class="inputDiag" type="text" name="faiblesse5" id="faiblesse5" placeholder="communication..." value="<?= $user->faiblesse5() ?>">
                            <label for="faiblesse6"></label>
                            <input class="inputDiag" type="text" name="faiblesse6" id="faiblesse6" placeholder="notoriété..." value="<?= $user->faiblesse6() ?>">
                        </div>
                        <div class="menaces">
                            <h4 class="titleDiagnostic">Menaces</h4>
                            <label for="menace1"></label>
                            <input class="inputDiag" type="text" name="menace1" id="menace1" placeholder="concurrence..." value="<?= $user->menace1() ?>">
                            <label for="menace2"></label>
                            <input class="inputDiag" type="text" name="menace2" id="menace2" placeholder="partenaires de distribution..." value="<?= $user->menace2() ?>">
                            <label for="menace3"></label>
                            <input class="inputDiag" type="text" name="menace3" id="menace3" placeholder="fournisseurs..." value="<?= $user->menace3() ?>">
                            <label for="menace4"></label>
                            <input class="inputDiag" type="text" name="menace4" id="menace4" placeholder="clients..." value="<?= $user->menace4() ?>">
                            <label for="menace5"></label>
                            <input class="inputDiag" type="text" name="menace5" id="menace5" placeholder="macro-environnement..." value="<?= $user->menace5() ?>">
                            <label for="menace6"></label>
                            <input class="inputDiag" type="text" name="menace6" id="menace6" placeholder="autres..." value="<?= $user->menace6() ?>">
                        </div>
                    </div>
                </div>
                <div class="divButton">
                    <button class="submitButton submitButton2" type="submit" name="action">Valider mon diagnostic</button>
                </div>
            </form>
            <?php
            if (isset($_POST['force1'])) {$force1 = ($_POST['force1']);}
            if (isset($_POST['force2'])) {$force2 = ($_POST['force2']);}
            if (isset($_POST['force3'])) {$force3 = ($_POST['force3']);}
            if (isset($_POST['force4'])) {$force4 = ($_POST['force4']);}
            if (isset($_POST['force5'])) {$force5 = ($_POST['force5']);}
            if (isset($_POST['force6'])) {$force6 = ($_POST['force6']);}
            if (isset($_POST['opportunite1'])) {$opportunite1 = ($_POST['opportunite1']);}
            if (isset($_POST['opportunite2'])) {$opportunite2 = ($_POST['opportunite2']);}
            if (isset($_POST['opportunite3'])) {$opportunite3 = ($_POST['opportunite3']);}
            if (isset($_POST['opportunite4'])) {$opportunite4 = ($_POST['opportunite4']);}
            if (isset($_POST['opportunite5'])) {$opportunite5 = ($_POST['opportunite5']);}
            if (isset($_POST['opportunite6'])) {$opportunite6 = ($_POST['opportunite6']);}
            if (isset($_POST['faiblesse1'])) {$faiblesse1 = ($_POST['faiblesse1']);}
            if (isset($_POST['faiblesse2'])) {$faiblesse2 = ($_POST['faiblesse2']);}
            if (isset($_POST['faiblesse3'])) {$faiblesse3 = ($_POST['faiblesse3']);}
            if (isset($_POST['faiblesse4'])) {$faiblesse4 = ($_POST['faiblesse4']);}
            if (isset($_POST['faiblesse5'])) {$faiblesse5 = ($_POST['faiblesse5']);}
            if (isset($_POST['faiblesse6'])) {$faiblesse6 = ($_POST['faiblesse6']);}
            if (isset($_POST['menace1'])) {$menace1 = ($_POST['menace1']);}
            if (isset($_POST['menace2'])) {$menace2 = ($_POST['menace2']);}
            if (isset($_POST['menace3'])) {$menace3 = ($_POST['menace3']);}
            if (isset($_POST['menace4'])) {$menace4 = ($_POST['menace4']);}
            if (isset($_POST['menace5'])) {$menace5 = ($_POST['menace5']);}
            if (isset($_POST['menace6'])) {$menace6 = ($_POST['menace6']);}

            if (isset($force1) && isset($force2) && isset($force3) && isset($force4) && isset($force5) && isset($force6) && isset($opportunite1) && isset($opportunite2) && isset($opportunite3) && isset($opportunite4) && isset($opportunite5) && isset($opportunite6) && isset($faiblesse1) && isset($faiblesse2) && isset($faiblesse3) && isset($faiblesse4) && isset($faiblesse5) && isset($faiblesse6) && isset($menace1) && isset($menace2) && isset($menace3) && isset($menace4) && isset($menace5) && isset($menace6)) {
                $user = new User (array('user'=>$_SESSION['user'], 'force1'=>$_POST['force1'], 'force2'=>$_POST['force2'], 'force3'=>$_POST['force3'], 'force4'=>$_POST['force4'], 'force5'=>$_POST['force5'], 'force6'=>$_POST['force6'], 'opportunite1'=>$_POST['opportunite1'], 'opportunite2'=>$_POST['opportunite2'], 'opportunite3'=>$_POST['opportunite3'], 'opportunite4'=>$_POST['opportunite4'], 'opportunite5'=>$_POST['opportunite5'], 'opportunite6'=>$_POST['opportunite6'], 'faiblesse1'=>$_POST['faiblesse1'], 'faiblesse2'=>$_POST['faiblesse2'], 'faiblesse3'=>$_POST['faiblesse3'], 'faiblesse4'=>$_POST['faiblesse4'], 'faiblesse5'=>$_POST['faiblesse5'], 'faiblesse6'=>$_POST['faiblesse6'], 'menace1'=>$_POST['menace1'], 'menace2'=>$_POST['menace2'], 'menace3'=>$_POST['menace3'], 'menace4'=>$_POST['menace4'], 'menace5'=>$_POST['menace5'], 'menace6'=>$_POST['menace6']));

                $manager -> updateDiagnostic($user);
            }
            ?>
            <hr>
        </section>
<!------------------------------------SECTION PRIORITES ET CIBLES----------------------------->
        <section>
            <div class="vaseDiagnostic">
                <img class="vase" src="assets/img/greek-3223553_1280.png" alt="vase grèce antique">
                <h1 class="diagnosticTitle">PRIORITES ET CIBLES</h1>
            </div>
<!--            ---------------------------------FORM marchés prioritaires--------------------------->
            <form action="update.php" method="POST" enctype="multipart/form-data">
<!--                ---------------------------------B2C--------------------------------------------->
                <div class="mainB2c">
                    <h4 class="titlePriority">Choix des marchés prioritaires</h4>
                    <h3 class="titlePriority2">B2C</h3>
                    <div class="b2c">
                        <h4 class="titleDiagnostic">Par critères psychographiques</h4>
                        <label for="psycho1"></label>
                        <input class="inputDiag" type="text" name="psycho1" id="psycho1" placeholder="intérêts..." value="<?= $user->psycho1() ?>">
                        <label for="psycho2"></label>
                        <input class="inputDiag" type="text" name="psycho2" id="psycho2" placeholder="valeurs..." value="<?= $user->psycho2() ?>">
                        <label for="psycho3"></label>
                        <input class="inputDiag" type="text" name="psycho3" id="psycho3" placeholder="attitudes..." value="<?= $user->psycho3() ?>">
                        <label for="psycho4"></label>
                        <input class="inputDiag" type="text" name="psycho4" id="psycho4" placeholder="lifestyle..." value="<?= $user->psycho4() ?>">
                        <label for="psycho5"></label>
                        <input class="inputDiag" type="text" name="psycho5" id="psycho5" placeholder="autres..." value="<?= $user->psycho5() ?>">
                    </div>
                </div>
<!--                ---------------------------------B2B--------------------------------------------->
                <div class="mainB2c">
                    <h3 class="titlePriority2">B2B</h3>
                    <div class="b2b">
                        <h4 class="titleDiagnostic">Par critères fondés sur l'identité</h4>
                        <label for="identite1"></label>
                        <input class="inputDiag" type="text" name="identite1" id="identite1" placeholder="secteurs d'activités..." value="<?= $user->identite1() ?>">
                        <label for="identite2"></label>
                        <input class="inputDiag" type="text" name="identite2" id="identite2" placeholder="taille de l'entreprise..." value="<?= $user->identite2() ?>">
                        <label for="identite3"></label>
                        <input class="inputDiag" type="text" name="identite3" id="identite3" placeholder="statut juridique..." value="<?= $user->identite3() ?>">
                        <label for="identite4"></label>
                        <input class="inputDiag" type="text" name="identite4" id="identite4" placeholder="localisation géographique..." value="<?= $user->identite4() ?>">
                        <label for="identite5"></label>
                        <input class="inputDiag" type="text" name="identite5" id="identite5" placeholder="technologie utilisée..." value="<?= $user->identite5() ?>">
                    </div>
                    <button class="submitButtonMarket" type="submit" name="action">Valider les marchés</button>
                </div>
            </form>
            <?php
            if (isset($_POST['psycho1'])) {$psycho1 = ($_POST['psycho1']);}
            if (isset($_POST['psycho2'])) {$psycho2 = ($_POST['psycho2']);}
            if (isset($_POST['psycho3'])) {$psycho3 = ($_POST['psycho3']);}
            if (isset($_POST['psycho4'])) {$psycho4 = ($_POST['psycho4']);}
            if (isset($_POST['psycho5'])) {$psycho5 = ($_POST['psycho5']);}
            if (isset($_POST['identite1'])) {$identite1 = ($_POST['identite1']);}
            if (isset($_POST['identite2'])) {$identite2 = ($_POST['identite2']);}
            if (isset($_POST['identite3'])) {$identite3 = ($_POST['identite3']);}
            if (isset($_POST['identite4'])) {$identite4 = ($_POST['identite4']);}
            if (isset($_POST['identite5'])) {$identite5 = ($_POST['identite5']);}

             if (isset($psycho1) && isset($psycho2) && isset($psycho3) && isset($psycho4) && isset($psycho5) && isset($identite1) && isset($identite2) && isset($identite3) && isset($identite4) && isset($identite5)) {
                 $user = new User (array('user'=>$_SESSION['user'], 'psycho1'=>$_POST['psycho1'], 'psycho2'=>$_POST['psycho2'], 'psycho3'=>$_POST['psycho3'], 'psycho4'=>$_POST['psycho4'], 'psycho5'=>$_POST['psycho5'], 'identite1'=>$_POST['identite1'], 'identite2'=>$_POST['identite2'], 'identite3'=>$_POST['identite3'], 'identite4'=>$_POST['identite4'], 'identite5'=>$_POST['identite5']));

                 $manager->updateMarket($user);
             }
            ?>
            <!------------------------------FORM produits prioritaires------------------------------>
            <form action="update.php" method="POST" enctype="multipart/form-data">
                <div class="divProduct">
                    <div class="titlePriorityDiv">
                        <h4 class="titlePriority">Choix des produits prioritaires</h4>
                    </div>
                    <div class="threeProducts">
                        <div class="productA">
                            <h3 class="titlePriority2">Produit A</h3>
                            <div class="A">
                                <label for="caracteristique1"></label>
                                <input class="inputDiag" type="text" name="caracteristique1" id="caracteristique1" placeholder="nom..." value="<?= $user->caracteristique1() ?>">
                                <label for="caracteristique2"></label>
                                <input class="inputDiag" type="text" name="caracteristique2" id="caracteristique2" placeholder="caractéristiques..." value="<?= $user->caracteristique2() ?>">
                                <label for="caracteristique3"></label>
                                <input class="inputDiag" type="text" name="caracteristique3" id="caracteristique3" placeholder="caractéristiques..." value="<?= $user->caracteristique3() ?>">
                                <label for="caracteristique4"></label>
                                <input class="inputDiag" type="text" name="caracteristique4" id="caracteristique4" placeholder="caractéristiques..." value="<?= $user->caracteristique4() ?>">
                                <label for="caracteristique5"></label>
                                <input class="inputDiag" type="text" name="caracteristique5" id="caracteristique5" placeholder="caractéristiques..." value="<?= $user->caracteristique5() ?>">
                            </div>
                        </div>
                        <div class="productB">
                            <h3 class="titlePriority2">Produit B</h3>
                            <div class="B">
                                <label for="caracteristique6"></label>
                                <input class="inputDiag" type="text" name="caracteristique6" id="caracteristique6" placeholder="nom..." value="<?= $user->caracteristique6() ?>">
                                <label for="caracteristique7"></label>
                                <input class="inputDiag" type="text" name="caracteristique7" id="caracteristique7" placeholder="caractéristiques..." value="<?= $user->caracteristique7() ?>">
                                <label for="caracteristique8"></label>
                                <input class="inputDiag" type="text" name="caracteristique8" id="caracteristique8" placeholder="caractéristiques..." value="<?= $user->caracteristique8() ?>">
                                <label for="caracteristique9"></label>
                                <input class="inputDiag" type="text" name="caracteristique9" id="caracteristique9" placeholder="caractéristiques..." value="<?= $user->caracteristique9() ?>">
                                <label for="caracteristique10"></label>
                                <input class="inputDiag" type="text" name="caracteristique10" id="caracteristique10" placeholder="caractéristiques..." value="<?= $user->caracteristique10() ?>">
                            </div>
                        </div>
                        <div class="productC">
                            <h3 class="titlePriority2">Produit C</h3>
                            <div class="C">
                                <label for="caracteristique11"></label>
                                <input class="inputDiag" type="text" name="caracteristique11" id="caracteristique11" placeholder="nom..." value="<?= $user->caracteristique11() ?>">
                                <label for="caracteristique12"></label>
                                <input class="inputDiag" type="text" name="caracteristique12" id="caracteristique12" placeholder="caractéristiques..." value="<?= $user->caracteristique12() ?>">
                                <label for="caracteristique13"></label>
                                <input class="inputDiag" type="text" name="caracteristique13" id="caracteristique13" placeholder="caractéristiques..." value="<?= $user->caracteristique13() ?>">
                                <label for="caracteristique14"></label>
                                <input class="inputDiag" type="text" name="caracteristique14" id="caracteristique14" placeholder="caractéristiques..." value="<?= $user->caracteristique14() ?>">
                                <label for="caracteristique15"></label>
                                <input class="inputDiag" type="text" name="caracteristique15" id="caracteristique15" placeholder="caractéristiques..." value="<?= $user->caracteristique15() ?>">
                            </div>
                        </div>
                    </div>
                    <div class="divButtonProducts">
                    <button class="submitButtonMarket" type="submit" name="action">Valider les produits</button>
                    </div>
                </div>
            </form>
            <?php
            if (isset($_POST['caracteristique1'])) {$caracteristique1 = ($_POST['caracteristique1']);}
            if (isset($_POST['caracteristique2'])) {$caracteristique2 = ($_POST['caracteristique2']);}
            if (isset($_POST['caracteristique3'])) {$caracteristique3 = ($_POST['caracteristique3']);}
            if (isset($_POST['caracteristique4'])) {$caracteristique4 = ($_POST['caracteristique4']);}
            if (isset($_POST['caracteristique5'])) {$caracteristique5 = ($_POST['caracteristique5']);}
            if (isset($_POST['caracteristique6'])) {$caracteristique6 = ($_POST['caracteristique6']);}
            if (isset($_POST['caracteristique7'])) {$caracteristique7 = ($_POST['caracteristique7']);}
            if (isset($_POST['caracteristique8'])) {$caracteristique8 = ($_POST['caracteristique8']);}
            if (isset($_POST['caracteristique9'])) {$caracteristique9 = ($_POST['caracteristique9']);}
            if (isset($_POST['caracteristique10'])) {$caracteristique10 = ($_POST['caracteristique10']);}
            if (isset($_POST['caracteristique11'])) {$caracteristique11 = ($_POST['caracteristique11']);}
            if (isset($_POST['caracteristique12'])) {$caracteristique12 = ($_POST['caracteristique12']);}
            if (isset($_POST['caracteristique13'])) {$caracteristique13 = ($_POST['caracteristique13']);}
            if (isset($_POST['caracteristique14'])) {$caracteristique14 = ($_POST['caracteristique14']);}
            if (isset($_POST['caracteristique15'])) {$caracteristique15 = ($_POST['caracteristique15']);}

            if (isset($caracteristique1) && isset($caracteristique2) && isset($caracteristique3) && isset($caracteristique4) && isset($caracteristique5) && isset($caracteristique6) && isset($caracteristique7) && isset($caracteristique8) && isset($caracteristique9) && isset($caracteristique10) && isset($caracteristique11) && isset($caracteristique12) && isset($caracteristique13) && isset($caracteristique14) && isset($caracteristique15)) {
                $user = new User (array('user'=>$_SESSION['user'], 'caracteristique1'=>$_POST['caracteristique1'], 'caracteristique2'=>$_POST['caracteristique2'], 'caracteristique3'=>$_POST['caracteristique3'], 'caracteristique4'=>$_POST['caracteristique4'], 'caracteristique5'=>$_POST['caracteristique5'], 'caracteristique6'=>$_POST['caracteristique6'], 'caracteristique7'=>$_POST['caracteristique7'], 'caracteristique8'=>$_POST['caracteristique8'], 'caracteristique9'=>$_POST['caracteristique9'], 'caracteristique10'=>$_POST['caracteristique10'], 'caracteristique11'=>$_POST['caracteristique11'], 'caracteristique12'=>$_POST['caracteristique12'], 'caracteristique13'=>$_POST['caracteristique13'], 'caracteristique14'=>$_POST['caracteristique14'], 'caracteristique15'=>$_POST['caracteristique15']));

                $manager->updateProduct($user);
            }
            ?>
<!--            --------------------------------FORM PERSONA----------------------------------------->
            <form action="update.php" method="POST" enctype="multipart/form-data">
                <div class="mainB2c">
                    <h4 class="titlePriority3">Persona</h4>
                    <div class="persona">
                        <div class="bandName">
                            <label for="persona_name"></label>
                            <input type="text" name="persona_name" id="persona_name" placeholder="nom..." value="<?= $user->persona_name() ?>">
                        </div>
                        <div class="threePersonaDivs">
<!-----------------------------------------------DIV PERSONA 1---------------------------------------->
                            <div class="divPersona1">
                                <div class="traits1">
                                    <label for="trait1"></label>
                                    <input class="inputTrait" type="text" name="trait1" id="trait1" placeholder="trait de personnalité..." value="<?= $user->trait1() ?>">
                                    <label for="trait2"></label>
                                    <input class="inputTrait" type="text" name="trait2" id="trait2" placeholder="trait de personnalité..." value="<?= $user->trait2() ?>">
                                </div>
                                <div class="traits2">
                                    <label for="trait3"></label>
                                    <input class="inputTrait" type="text" name="trait3" id="trait3" placeholder="trait de personnalité..." value="<?= $user->trait3() ?>">
                                    <label for="trait4"></label>
                                    <input class="inputTrait" type="text" name="trait4" id="trait4" placeholder="trait de personnalité..." value="<?= $user->trait4() ?>">
                                </div>
                                <div>
                                    <label class="labelColor" for="age">Age :</label>
                                    <input class="inputTrait" type="text" name="age" id="age" placeholder="âge..." value="<?= $user->age() ?>">
                                </div>
                                <div>
                                    <label class="labelColor" for="fonction">Fonction :</label>
                                    <input class="inputTrait" type="text" name="fonction" id="fonction" placeholder="fonction..." value="<?= $user->fonction() ?>">
                                </div>
                                <div>
                                    <label class="labelColor" for="ville">Ville :</label>
                                    <input class="inputTrait" type="text" name="ville" id="ville" placeholder="ville..." value="<?= $user->ville() ?>">
                                </div>
                                <div>
                                <label class="labelColor" for="famille">Famille :</label>
                                <input class="inputTrait" type="text" name="famille" id="famille" placeholder="situation familiale..." value="<?= $user->famille() ?>">
                                </div>
                                <label class="labelColor labelPhoto" for="photo">Photo :</label>
                                <input class="inputPhoto" type="file" name="photo" id="photo" accept=".png, .jpg" value="<?= $user->photo() ?>">
<!--                                <input type="hidden" name="MAX_FILE_SIZE" value="1000000">-->
                                <label for="quote"></label>
                                <textarea name="quote" id="quote" placeholder="quote personnelle" cols="30" rows="5"><?= $user->quote() ?></textarea>
                            </div>
<!-----------------------------------------------DIV PERSONA 2---------------------------------------->
                            <div class="divPersona2">
                                <h3 class="titlePersona">MOTIVATIONS</h3>
                                <label for="motivation1"></label>
                                <input class="inputTrait" type="text" name="motivation1" id="motivation1" placeholder="motivation n°1..." value="<?= $user->motivation1() ?>">
                                <label for="range_motivation1"></label>
                                <input class="rangeMotivations" type="range" name="range_motivation1" id="range_motivation1" min="0" max="10" step="1" value="<?= $user->range_motivation1() ?>">
                                <label for="motivation2"></label>
                                <input class="inputTrait" type="text" name="motivation2" id="motivation2" placeholder="motivation n°2..." value="<?= $user->motivation2() ?>">
                                <label for="rangeMotivation2"></label>
                                <input class="rangeMotivations" type="range" name="range_motivation2" id="range_motivation2" min="0" max="10" step="1" value="<?= $user->range_motivation2() ?>">
                                <label for="motivation3"></label>
                                <input class="inputTrait" type="text" name="motivation3" id="motivation3" placeholder="motivation n°3..." value="<?= $user->motivation3() ?>">
                                <label for="rangeMotivation3"></label>
                                <input class="rangeMotivations" type="range" name="range_motivation3" id="range_motivation3" min="0" max="10" step="1" value="<?= $user->range_motivation3() ?>">
                                <h3 class="titlePersona">OBJECTIFS</h3>
                                <label for="objectif1"></label>
                                <input class="inputTrait" type="text" name="objectif1" id="objectif1" placeholder="objectif n°1..." value="<?= $user->objectif1() ?>">
                                <label for="objectif2"></label>
                                <input class="inputTrait" type="text" name="objectif2" id="objectif2" placeholder="objectif n°2..." value="<?= $user->objectif2() ?>">
                                <label for="objectif3"></label>
                                <input class="inputTrait" type="text" name="objectif3" id="objectif3" placeholder="objectif n°3..." value="<?= $user->objectif3() ?>">
                                <div class="bio">
                                    <h3 class="bioTitle">BIO</h3>
                                    <label for="bio"></label>
                                    <textarea name="bio" id="bio" placeholder="description..." cols="60" rows="5"><?= $user->bio() ?></textarea>
                                </div>
                            </div>
<!-----------------------------------------------DIV PERSONA 3---------------------------------------->
                            <div class="divPersona3">
                                <h3 class="titlePersona">PERSONALITE</h3>
                                <label for="introverti">
                                    <div class="rowPersona">
                                        <div class="introvertiLabel">introverti</div>
                                        <div class="extravertiLabel">extraverti</div>
                                    </div>
                                </label>
                                <input class="div3Margin" type="range" name="introverti" id="introverti" min="0" max="10" step="1" value="<?= $user->introverti() ?>">
                                <label for="analytique">
                                    <div class="rowPersona">
                                        <div class="introvertiLabel">analytique</div>
                                        <div class="extravertiLabel">créatif</div>
                                    </div>
                                </label>
                                <input class="div3Margin" type="range" name="analytique" id="analytique" min="0" max="10" step="1" value="<?= $user->analytique() ?>">
                                <label for="loyal">
                                    <div class="rowPersona">
                                        <div class="introvertiLabel">loyal</div>
                                        <div class="extravertiLabel">inconstant</div>
                                    </div>
                                </label>
                                <input class="div3Margin" type="range" name="loyal" id="loyal" min="0" max="10" step="1" value="<?= $user->loyal() ?>">
                                <label for="passif">
                                    <div class="rowPersona">
                                        <div class="introvertiLabel">passif</div>
                                        <div class="extravertiLabel">actif</div>
                                    </div>
                                </label>
                                <input class="div3Margin" type="range" name="passif" id="passif" min="0" max="10" step="1" value="<?= $user->passif() ?>">
                                <h3 class="titlePersona">COMMUNICATION</h3>
                                <label class="labelDiv3" for="reseau">Réseaux sociaux</label>
                                <input class="div3Margin" type="range" name="reseau" id="reseau" min="0" max="10" step="1" value="<?= $user->reseau() ?>">
                                <label class="labelDiv3" for="mobile">Mobile</label>
                                <input class="div3Margin" type="range" name="mobile" id="mobile" min="0" max="10" step="1" value="<?= $user->mobile() ?>">
                                <label class="labelDiv3" for="email">Email</label>
                                <input class="div3Margin" type="range" name="email" id="email" min="0" max="10" step="1" value="<?= $user->email() ?>">
                                <label class="labelDiv3" for="media">Médias traditionnels</label>
                                <input class="div3Margin" type="range" name="media" id="media" min="0" max="10" step="1" value="<?= $user->media() ?>">
                                <h3 class="titlePersona">MARQUES</h3>
                                <div class="threeBrands">
                                    <label class="labelDiv3" for="brand1">Marque n°1</label>
                                    <input class="div3Margin" type="file" name="brand1" id="brand1" accept=".png, .jpg" value="<?= $user->brand1() ?>"
                                    <label class="labelDiv3" for="brand2">Marque n°2</label>
                                    <input class="div3Margin" type="file" name="brand2" id="brand2" accept=".png, .jpg">
                                    <label class="labelDiv3" for="brand3">Marque n°3</label>
                                    <input class="div3Margin" type="file" name="brand3" id="brand3" accept=".png, .jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="submitButtonMarket" type="submit" name="action">Valider le persona</button>
                </div>
            </form>
            <?php
            var_dump($user);
            if (isset($_POST['persona_name'])) {$persona_name = ($_POST['persona_name']);}
            if (isset($_POST['trait1'])) {$trait1 = ($_POST['trait1']);}
            if (isset($_POST['trait2'])) {$trait2 = ($_POST['trait2']);}
            if (isset($_POST['trait3'])) {$trait3 = ($_POST['trait3']);}
            if (isset($_POST['trait4'])) {$trait4 = ($_POST['trait4']);}
            if (isset($_POST['age'])) {$age = ($_POST['age']);}
            if (isset($_POST['fonction'])) {$fonction = ($_POST['fonction']);}
            if (isset($_POST['ville'])) {$ville = ($_POST['ville']);}
            if (isset($_POST['famille'])) {$famille = ($_POST['famille']);}
            if (isset($_FILES['photo'])) {$photo = ($_FILES['photo']);}
            if (isset($_POST['quote'])) {$quote = ($_POST['quote']);}
            if (isset($_POST['motivation1'])) {$motivation1 = ($_POST['motivation1']);}
            if (isset($_POST['range_motivation1'])) {$range_motivation1 = ($_POST['range_motivation1']);}
            if (isset($_POST['motivation2'])) {$motivation2 = ($_POST['motivation2']);}
            if (isset($_POST['range_motivation2'])) {$range_motivation2 = ($_POST['range_motivation2']);}
            if (isset($_POST['motivation3'])) {$motivation3 = ($_POST['motivation3']);}
            if (isset($_POST['range_motivation3'])) {$range_motivation3 = ($_POST['range_motivation3']);}
            if (isset($_POST['objectif1'])) {$objectif1 = ($_POST['objectif1']);}
            if (isset($_POST['objectif2'])) {$objectif2 = ($_POST['objectif2']);}
            if (isset($_POST['objectif3'])) {$objectif3 = ($_POST['objectif3']);}
            if (isset($_POST['bio'])) {$bio = ($_POST['bio']);}
            if (isset($_POST['introverti'])) {$introverti = ($_POST['introverti']);}
            if (isset($_POST['analytique'])) {$analytique = ($_POST['analytique']);}
            if (isset($_POST['loyal'])) {$loyal = ($_POST['loyal']);}
            if (isset($_POST['passif'])) {$passif = ($_POST['passif']);}
            if (isset($_POST['reseau'])) {$reseau = ($_POST['reseau']);}
            if (isset($_POST['mobile'])) {$mobile = ($_POST['mobile']);}
            if (isset($_POST['email'])) {$email = ($_POST['email']);}
            if (isset($_POST['media'])) {$media = ($_POST['media']);}
            if (isset($_FILES['brand1'])) {$brand1 = ($_FILES['brand1']);}
            if (isset($_FILES['brand2'])) {$brand2 = ($_FILES['brand2']);}
            if (isset($_FILES['brand3'])) {$brand3 = ($_FILES['brand3']);}

            if (isset($persona_name) && isset($trait1) && isset($trait2) && isset($trait3) && isset($trait4) && isset($age) && isset($fonction) && isset($ville) && isset($famille) && isset($quote) && isset($motivation1) && isset($range_motivation1) && isset($motivation2) && isset($range_motivation2) && isset($motivation3) && isset($range_motivation3) && isset($objectif1) && isset($objectif2) && isset($objectif3) && isset($bio) && isset($introverti) && isset($analytique) && isset($loyal) && isset($passif) && isset($reseau) && isset($mobile) && isset($email) && isset($media)) {

                $valid_ext = array('jpg','png');
                $upload_ext = pathinfo($photo['name'],PATHINFO_EXTENSION) || pathinfo($brand1['name'],PATHINFO_EXTENSION) || pathinfo($brand2['name'],PATHINFO_EXTENSION) || pathinfo($brand3['name'],PATHINFO_EXTENSION);

                if(in_array($upload_ext,$valid_ext) && ($photo['size'] <= 1000000 && $brand1['size'] <= 1000000 && $brand2['size'] <= 1000000 && $brand3['size'] <= 1000000)) {
                    $dbname1 = uniqid() . '_' . $photo['name'];
                    $dbname2 = uniqid() . '_' . $brand1['name'];
                    $dbname3 = uniqid() . '_' . $brand2['name'];
                    $dbname4 = uniqid() . '_' . $brand3['name'];
                    $upload_name1 = './assets/upload/' . $dbname1;
                    $upload_name2 = './assets/upload/' . $dbname2;
                    $upload_name3 = './assets/upload/' . $dbname3;
                    $upload_name4 = './assets/upload/' . $dbname4;
                    $move_result1 = move_uploaded_file($photo['tmp_name'], $upload_name1);
                    $move_result2 = move_uploaded_file($brand1['tmp_name'], $upload_name2);
                    $move_result3 = move_uploaded_file($brand2['tmp_name'], $upload_name3);
                    $move_result4 = move_uploaded_file($brand3['tmp_name'], $upload_name4);

                    if($move_result1 || $move_result2 || $move_result3|| $move_result4) {

                        $user = new User (array('user'=>$_SESSION['user'], 'persona_name'=>$_POST['persona_name'], 'trait1'=>$_POST['trait1'], 'trait2'=>$_POST['trait2'], 'trait3'=>$_POST['trait3'], 'trait4'=>$_POST['trait4'], 'age'=>$_POST['age'], 'fonction'=>$_POST['fonction'], 'ville'=>$_POST['ville'], 'famille'=>$_POST['famille'], 'photo'=>$dbname1, 'quote'=>$_POST['quote'], 'motivation1'=>$_POST['motivation1'], 'range_motivation1'=>$_POST['range_motivation1'], 'motivation2'=>$_POST['motivation2'], 'range_motivation2'=>$_POST['range_motivation2'], 'motivation3'=>$_POST['motivation3'], 'range_motivation3'=>$_POST['range_motivation3'], 'objectif1'=>$_POST['objectif1'], 'objectif2'=>$_POST['objectif2'], 'objectif3'=>$_POST['objectif3'], 'bio'=>$_POST['bio'], 'introverti'=>$_POST['introverti'], 'analytique'=>$_POST['analytique'], 'quote'=>$_POST['quote'], 'motivation1'=>$_POST['motivation1'], 'loyal'=>$_POST['loyal'], 'passif'=>$_POST['passif'], 'reseau'=>$_POST['reseau'], 'mobile'=>$_POST['mobile'], 'email'=>$_POST['email'], 'media'=>$_POST['media'], 'brand1'=>$dbname2, 'brand2'=>$dbname3, 'brand3'=>$dbname4));

                        $manager->updatePersona($user);
                    }

                }

            }
            ?>
            <hr class="hrPriority">
        </section>
        <section>
            <div class="vaseDiagnostic">
                <img class="vase" src="assets/img/temple.png" alt="dessin temple grecque">
                <h1 class="diagnosticTitle">MIX MARKETING</h1>
            </div>
<!--------------------------------------DIV MIX MARKETING----------------------------------------->
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="divMix">
                    <div class="produit">
                        <label for="concept"></label>
                        <input class="inputDiag inputLenght" type="text" name="concept" id="concept" placeholder="Concept..." value="<?= $user->concept() ?>">
                        <label for="performance"></label>
                        <input class="inputDiag inputLenght" type="text" name="performance" id="performance" placeholder="Performances..." value="<?= $user->performance() ?>">
                        <label for="design"></label>
                        <input class="inputDiag inputLenght" type="text" name="design" id="design" placeholder="Design..." value="<?= $user->design() ?>">
                        <label for="packaging"></label>
                        <input class="inputDiag inputLenght" type="text" name="packaging" id="packaging" placeholder="Packaging..." value="<?= $user->packaging() ?>">
                        <label for="service"></label>
                        <input class="inputDiag inputLenght" type="text" name="service" id="service" placeholder="Services associés..." value="<?= $user->service() ?>">
                        <label for="mark"></label>
                        <input class="inputDiag inputLenght" type="text" name="mark" id="mark" placeholder="Nom de marque..." value="<?= $user->mark() ?>">
                    </div>
                    <div class="prix">
                        <label for="price"></label>
                        <input class="inputDiag inputLenght2" type="text" name="price" id="price" placeholder="Prix de base..." value="<?= $user->price() ?>">
                        <label for="tarifs"></label>
                        <input class="inputDiag inputLenght2" type="text" name="tarifs" id="tarifs" placeholder="Tarifs préférentiels..." value="<?= $user->tarifs() ?>">
                    </div>
                    <div class="distribution">
                        <label for="vente"></label>
                        <input class="inputDiag inputLenght" type="text" name="vente" id="vente" placeholder="Force de vente..." value="<?= $user->vente() ?>">
                        <label for="taille"></label>
                        <input class="inputDiag inputLenght" type="text" name="taille" id="taille" placeholder="Taille, motivation, répartition..." value="<?= $user->taille() ?>">
                        <label for="distribution"></label>
                        <input class="inputDiag inputLenght" type="text" name="distribution" id="distribution" placeholder="Circuits de distribution..." value="<?= $user->distribution() ?>">
                    </div>
                    <div class="communication">
                        <label for="strategie"></label>
                        <input class="inputDiag inputLenght2" type="text" name="strategie" id="strategie" placeholder="Stratégie média..." value="<?= $user->strategie() ?>">
                        <label for="hors_media"></label>
                        <input class="inputDiag inputLenght2" type="text" name="hors_media" id="hors_media" placeholder="Stratégie hors média..." value="<?= $user->hors_media() ?>">
                    </div>
                    <div class="mixCircle">
                        <div class=" titleMix">
                        <h3 class="bioTitle">Produit</h3>
                        <h3 class="bioTitle">Prix</h3>
                        </div>
                        <div class=" titleMix">
                        <h3 class="bioTitle">Distribution</h3>
                        <h3 class="bioTitle">Communication</h3>
                        </div>
                    </div>
                </div>
                <div class="buttonMix">
                    <button class="submitButtonMarket" type="submit" name="action">Valider le mix-marketing</button>
                </div>
            </form>
            <?php
            if (isset($_POST['concept'])) {$concept = ($_POST['concept']);}
            if (isset($_POST['performance'])) {$performance = ($_POST['performance']);}
            if (isset($_POST['design'])) {$design = ($_POST['design']);}
            if (isset($_POST['packaging'])) {$packaging = ($_POST['packaging']);}
            if (isset($_POST['service'])) {$service = ($_POST['service']);}
            if (isset($_POST['mark'])) {$mark = ($_POST['mark']);}
            if (isset($_POST['price'])) {$price = ($_POST['price']);}
            if (isset($_POST['tarifs'])) {$tarifs = ($_POST['tarifs']);}
            if (isset($_POST['vente'])) {$vente = ($_POST['vente']);}
            if (isset($_POST['taille'])) {$taille = ($_POST['taille']);}
            if (isset($_POST['distribution'])) {$distribution = ($_POST['distribution']);}
            if (isset($_POST['strategie'])) {$strategie = ($_POST['strategie']);}
            if (isset($_POST['hors_media'])) {$hors_media = ($_POST['hors_media']);}

            if (isset($concept) && isset($performance) && isset($design) && isset($packaging) && isset($service) && isset($mark) && isset($price) && isset($tarifs) && isset($vente) && isset($taille) && isset($distribution) && isset($strategie) && isset($hors_media)) {

                $user = new User (array('user'=>$_SESSION['user'], 'concept'=>$_POST['concept'], 'performance'=>$_POST['performance'], 'design'=>$_POST['design'], 'packaging'=>$_POST['packaging'], 'service'=>$_POST['service'], 'mark'=>$_POST['mark'], 'price'=>$_POST['price'], 'tarifs'=>$_POST['tarifs'], 'vente'=>$_POST['vente'], 'taille'=>$_POST['taille'], 'distribution'=>$_POST['distribution'], 'strategie'=>$_POST['strategie'], 'hors_media'=>$_POST['hors_media']));

                $manager->updateMix($user);
            }
            ?>
        </section>
        <?php include 'footer.php';?>
        <script type="text/javascript" src="assets/libs/jquery/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="assets/js/dist/scripts.min.js"></script>
    </body>
</html>
