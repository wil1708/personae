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
                            <input class="inputDiag" type="text" name="force1" id="force1" placeholder="produits..." value="">
                            <label for="force2"></label>
                            <input class="inputDiag" type="text" name="force2" id="force2" placeholder="marque..." value="">
                            <label for="force3"></label>
                            <input class="inputDiag" type="text" name="force3" id="force3" placeholder="management..." value="">
                            <label for="force4"></label>
                            <input class="inputDiag" type="text" name="force4" id="force4" placeholder="force de vente..." value="">
                            <label for="force5"></label>
                            <input class="inputDiag" type="text" name="force5" id="force5" placeholder="communication..." value="">
                            <label for="force6"></label>
                            <input class="inputDiag" type="text" name="force6" id="force6" placeholder="notoriété..." value="">
                        </div>
                        <div class="opportunites">
                            <h4 class="titleDiagnostic">Opportunités</h4>
                            <label for="opportunite1"></label>
                            <input class="inputDiag" type="text" name="opportunite1" id="opportunite1" placeholder="concurrence..." value="">
                            <label for="opportunite2"></label>
                            <input class="inputDiag" type="text" name="opportunite2" id="opportunite2" placeholder="partenaires de distribution..." value="">
                            <label for="opportunite3"></label>
                            <input class="inputDiag" type="text" name="opportunite3" id="opportunite3" placeholder="fournisseurs..." value="">
                            <label for="opportunite4"></label>
                            <input class="inputDiag" type="text" name="opportunite4" id="opportunite4" placeholder="clients..." value="">
                            <label for="opportunite5"></label>
                            <input class="inputDiag" type="text" name="opportunite5" id="opportunite5" placeholder="macro-environnement..." value="">
                            <label for="opportunite6"></label>
                            <input class="inputDiag" type="text" name="opportunite6" id="opportunite6" placeholder="autres..." value="">
                        </div>
                    </div>
                    <div class="posNeg">
                        <h4 class="titlePositif">NEGATIF</h4>
                        <div class="faiblesses">
                            <h4 class="titleFaiblesses">Faiblesses</h4>
                            <label for="faiblesse1"></label>
                            <input class="inputDiag" type="text" name="faiblesse1" id="faiblesse1" placeholder="produits..." value="">
                            <label for="faiblesse2"></label>
                            <input class="inputDiag" type="text" name="faiblesse2" id="faiblesse2" placeholder="marque..." value="">
                            <label for="faiblesse3"></label>
                            <input class="inputDiag" type="text" name="faiblesse3" id="faiblesse3" placeholder="management..." value="">
                            <label for="faiblesse4"></label>
                            <input class="inputDiag" type="text" name="faiblesse4" id="faiblesse4" placeholder="force de vente..." value="">
                            <label for="faiblesse5"></label>
                            <input class="inputDiag" type="text" name="faiblesse5" id="faiblesse5" placeholder="communication..." value="">
                            <label for="faiblesse6"></label>
                            <input class="inputDiag" type="text" name="faiblesse6" id="faiblesse6" placeholder="notoriété..." value="">
                        </div>
                        <div class="menaces">
                            <h4 class="titleDiagnostic">Menaces</h4>
                            <label for="menace1"></label>
                            <input class="inputDiag" type="text" name="menace1" id="menace1" placeholder="concurrence..." value="">
                            <label for="menace2"></label>
                            <input class="inputDiag" type="text" name="menace2" id="menace2" placeholder="partenaires de distribution..." value="">
                            <label for="menace3"></label>
                            <input class="inputDiag" type="text" name="menace3" id="menace3" placeholder="fournisseurs..." value="">
                            <label for="menace4"></label>
                            <input class="inputDiag" type="text" name="menace4" id="menace4" placeholder="clients..." value="">
                            <label for="menace5"></label>
                            <input class="inputDiag" type="text" name="menace5" id="menace5" placeholder="macro-environnement..." value="">
                            <label for="menace6"></label>
                            <input class="inputDiag" type="text" name="menace6" id="menace6" placeholder="autres..." value="">
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
                $user = new User (array('force1'=>$_POST['force1'], 'force2'=>$_POST['force2'], 'force3'=>$_POST['force3'], 'force4'=>$_POST['force4'], 'force5'=>$_POST['force5'], 'force6'=>$_POST['force6'], 'opportunite1'=>$_POST['opportunite1'], 'opportunite2'=>$_POST['opportunite2'], 'opportunite3'=>$_POST['opportunite3'], 'opportunite4'=>$_POST['opportunite4'], 'opportunite5'=>$_POST['opportunite5'], 'opportunite6'=>$_POST['opportunite6'], 'faiblesse1'=>$_POST['faiblesse1'], 'faiblesse2'=>$_POST['faiblesse2'], 'faiblesse3'=>$_POST['faiblesse3'], 'faiblesse4'=>$_POST['faiblesse4'], 'faiblesse5'=>$_POST['faiblesse5'], 'faiblesse6'=>$_POST['faiblesse6'], 'menace1'=>$_POST['menace1'], 'menace2'=>$_POST['menace2'], 'menace3'=>$_POST['menace3'], 'menace4'=>$_POST['menace4'], 'menace5'=>$_POST['menace5'], 'menace6'=>$_POST['menace6']));
                $manager -> updateDiagnostic($user);
                var_dump($user);
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
            <form action="" method="POST" enctype="multipart/form-data">
<!--                ---------------------------------B2C--------------------------------------------->
                <div class="mainB2c">
                    <h4 class="titlePriority">Choix des marchés prioritaires</h4>
                    <h3 class="titlePriority2">B2C</h3>
                    <div class="b2c">
                        <h4 class="titleDiagnostic">Par critères psychographiques</h4>
                        <label for="psycho1"></label>
                        <input class="inputDiag" type="text" name="psycho1" id="psycho1" placeholder="intérêts..." value="">
                        <label for="psycho2"></label>
                        <input class="inputDiag" type="text" name="psycho2" id="psycho2" placeholder="valeurs..." value="">
                        <label for="psycho3"></label>
                        <input class="inputDiag" type="text" name="psycho3" id="psycho3" placeholder="attitudes..." value="">
                        <label for="psycho4"></label>
                        <input class="inputDiag" type="text" name="psycho4" id="psycho4" placeholder="lifestyle..." value="">
                        <label for="psycho5"></label>
                        <input class="inputDiag" type="text" name="psycho5" id="psycho5" placeholder="autres..." value="">
                    </div>
                </div>
<!--                ---------------------------------B2B--------------------------------------------->
                <div class="mainB2c">
                    <h3 class="titlePriority2">B2B</h3>
                    <div class="b2b">
                        <h4 class="titleDiagnostic">Par critères fondés sur l'identité</h4>
                        <label for="identite1"></label>
                        <input class="inputDiag" type="text" name="identite1" id="identite1" placeholder="secteurs d'activités..." value="">
                        <label for="identite2"></label>
                        <input class="inputDiag" type="text" name="identite2" id="identite2" placeholder="taille de l'entreprise..." value="">
                        <label for="identite3"></label>
                        <input class="inputDiag" type="text" name="identite3" id="identite3" placeholder="statut juridique..." value="">
                        <label for="identite4"></label>
                        <input class="inputDiag" type="text" name="identite4" id="identite4" placeholder="localisation géographique..." value="">
                        <label for="identite5"></label>
                        <input class="inputDiag" type="text" name="identite5" id="identite5" placeholder="technologie utilisée..." value="">
                    </div>
                    <button class="submitButtonMarket" type="submit" name="action">Valider les marchés</button>
                </div>
<!--                ----------------------------FORM produits prioritaires---------------------------->
            </form>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="divProduct">
                    <div class="titlePriorityDiv">
                        <h4 class="titlePriority">Choix des produits prioritaires</h4>
                    </div>
                    <div class="threeProducts">
                        <div class="productA">
                            <h3 class="titlePriority2">Produit A</h3>
                            <div class="A">
                                <label for="caracteristique1"></label>
                                <input class="inputDiag" type="text" name="caracteristique1" id="caracteristique1" placeholder="nom..." value="">
                                <label for="caracteristique2"></label>
                                <input class="inputDiag" type="text" name="caracteristique2" id="caracteristique2" placeholder="caractéristiques..." value="">
                                <label for="caracteristique3"></label>
                                <input class="inputDiag" type="text" name="caracteristique3" id="caracteristique3" placeholder="caractéristiques..." value="">
                                <label for="caracteristique4"></label>
                                <input class="inputDiag" type="text" name="caracteristique4" id="caracteristique4" placeholder="caractéristiques..." value="">
                                <label for="caracteristique5"></label>
                                <input class="inputDiag" type="text" name="caracteristique5" id="caracteristique5" placeholder="caractéristiques..." value="">
                            </div>
                        </div>
                        <div class="productB">
                            <h3 class="titlePriority2">Produit B</h3>
                            <div class="B">
                                <label for="caracteristique6"></label>
                                <input class="inputDiag" type="text" name="caracteristique6" id="caracteristique6" placeholder="nom..." value="">
                                <label for="caracteristique7"></label>
                                <input class="inputDiag" type="text" name="caracteristique7" id="caracteristique7" placeholder="caractéristiques..." value="">
                                <label for="caracteristique8"></label>
                                <input class="inputDiag" type="text" name="caracteristiqu8" id="caracteristique8" placeholder="caractéristiques..." value="">
                                <label for="caracteristique9"></label>
                                <input class="inputDiag" type="text" name="caracteristique9" id="caracteristique9" placeholder="caractéristiques..." value="">
                                <label for="caracteristique10"></label>
                                <input class="inputDiag" type="text" name="caracteristique10" id="caracteristique10" placeholder="caractéristiques..." value="">
                            </div>
                        </div>
                        <div class="productC">
                            <h3 class="titlePriority2">Produit C</h3>
                            <div class="C">
                                <label for="caracteristique11"></label>
                                <input class="inputDiag" type="text" name="caracteristique11" id="caracteristique11" placeholder="nom..." value="">
                                <label for="caracteristique12"></label>
                                <input class="inputDiag" type="text" name="caracteristique12" id="caracteristique12" placeholder="caractéristiques..." value="">
                                <label for="caracteristique13"></label>
                                <input class="inputDiag" type="text" name="caracteristique13" id="caracteristique13" placeholder="caractéristiques..." value="">
                                <label for="caracteristique14"></label>
                                <input class="inputDiag" type="text" name="caracteristique14" id="caracteristique14" placeholder="caractéristiques..." value="">
                                <label for="caracteristique15"></label>
                                <input class="inputDiag" type="text" name="caracteristique15" id="caracteristique15" placeholder="caractéristiques..." value="">
                            </div>
                        </div>
                    </div>
                    <div class="divButtonProducts">
                    <button class="submitButtonMarket" type="submit" name="action">Valider les produits</button>
                    </div>
                </div>
            </form>
<!--            --------------------------------FORM PERSONA----------------------------------------->
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="mainB2c">
                    <h4 class="titlePriority3">Persona</h4>
                    <div class="persona">
                        <div class="bandName">
                            <label for="persona_name"></label>
                            <input type="text" name="persona_name" id="persona_name" placeholder="nom...">
                        </div>
                        <div class="threePersonaDivs">
<!-----------------------------------------------DIV PERSONA 1---------------------------------------->
                            <div class="divPersona1">
                                <div class="traits1">
                                    <label for="trait1"></label>
                                    <input class="inputTrait" type="text" name="trait1" id="trait1" placeholder="trait de personnalité...">
                                    <label for="trait2"></label>
                                    <input class="inputTrait" type="text" name="trait2" id="trait2" placeholder="trait de personnalité...">
                                </div>
                                <div class="traits2">
                                    <label for="trait3"></label>
                                    <input class="inputTrait" type="text" name="trait3" id="trait3" placeholder="trait de personnalité...">
                                    <label for="trait4"></label>
                                    <input class="inputTrait" type="text" name="trait4" id="trait4" placeholder="trait de personnalité...">
                                </div>
                                <div>
                                    <label class="labelColor" for="age">Age :</label>
                                    <input class="inputTrait" type="text" name="age" id="age" placeholder="âge...">
                                </div>
                                <div>
                                    <label class="labelColor" for="fonction">Fonction :</label>
                                    <input class="inputTrait" type="text" name="fonction" id="fonction" placeholder="fonction...">
                                </div>
                                <div>
                                    <label class="labelColor" for="ville">Ville :</label>
                                    <input class="inputTrait" type="text" name="ville" id="ville" placeholder="ville...">
                                </div>
                                <div>
                                <label class="labelColor" for="famille">Famille :</label>
                                <input class="inputTrait" type="text" name="famille" id="famille" placeholder="situation familiale...">
                                </div>
                                <label class="labelColor labelPhoto" for="photo">Photo :</label>
                                <input class="inputPhoto" type="file" name="photo" id="photo" accept="image/*">
                                <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
                                <label for="quote"></label>
                                <textarea name="quote" id="quote" placeholder="quote personnelle" cols="30" rows="5"></textarea>
                            </div>
<!-----------------------------------------------DIV PERSONA 2---------------------------------------->
                            <div class="divPersona2">
                                <h3 class="titlePersona">MOTIVATIONS</h3>
                                <label for="motivation1"></label>
                                <input class="inputTrait" type="text" name="motivation1" id="motivation1" placeholder="motivation n°1...">
                                <label for="range_motivation1"></label>
                                <input class="rangeMotivations" type="range" name="range_motivation1" id="range_motivation1" min="0" max="10">
                                <label for="motivation2"></label>
                                <input class="inputTrait" type="text" name="motivation2" id="motivation2" placeholder="motivation n°2...">
                                <label for="rangeMotivation2"></label>
                                <input class="rangeMotivations" type="range" name="rangeMotivation2" id="rangeMotivation2" min="0" max="10">
                                <label for="motivation3"></label>
                                <input class="inputTrait" type="text" name="motivation3" id="motivation3" placeholder="motivation n°3...">
                                <label for="rangeMotivation3"></label>
                                <input class="rangeMotivations" type="range" name="rangeMotivation3" id="rangeMotivation3" min="0" max="10">
                                <h3 class="titlePersona">OBJECTIFS</h3>
                                <label for="objectif1"></label>
                                <input class="inputTrait" type="text" name="objectif1" id="objectif1" placeholder="objectif n°1...">
                                <label for="objectif2"></label>
                                <input class="inputTrait" type="text" name="objectif2" id="objectif2" placeholder="objectif n°2...">
                                <label for="objectif3"></label>
                                <input class="inputTrait" type="text" name="objectif3" id="objectif3" placeholder="objectif n°3...">
                                <div class="bio">
                                    <h3 class="bioTitle">BIO</h3>
                                    <label for="bio"></label>
                                    <textarea name="bio" id="bio" placeholder="description..." cols="60" rows="5"></textarea>
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
                                <input class="div3Margin" type="range" name="introverti" id="introverti" min="0" max="10">
                                <label for="analytique">
                                    <div class="rowPersona">
                                        <div class="introvertiLabel">analytique</div>
                                        <div class="extravertiLabel">créatif</div>
                                    </div>
                                </label>
                                <input class="div3Margin" type="range" name="analytique" id="analytique" min="0" max="10">
                                <label for="loyal">
                                    <div class="rowPersona">
                                        <div class="introvertiLabel">loyal</div>
                                        <div class="extravertiLabel">inconstant</div>
                                    </div>
                                </label>
                                <input class="div3Margin" type="range" name="loyal" id="loyal" min="0" max="10">
                                <label for="passif">
                                    <div class="rowPersona">
                                        <div class="introvertiLabel">passif</div>
                                        <div class="extravertiLabel">actif</div>
                                    </div>
                                </label>
                                <input class="div3Margin" type="range" name="passif" id="passif" min="0" max="10">
                                <h3 class="titlePersona">COMMUNICATION</h3>
                                <label class="labelDiv3" for="reseau">Réseaux sociaux</label>
                                <input class="div3Margin" type="range" name="reseau" id="reseau" min="0" max="10">
                                <label class="labelDiv3" for="mobile">Mobile</label>
                                <input class="div3Margin" type="range" name="mobile" id="mobile" min="0" max="10">
                                <label class="labelDiv3" for="email">Email</label>
                                <input class="div3Margin" type="range" name="email" id="email" min="0" max="10">
                                <label class="labelDiv3" for="media">Médias traditionnels</label>
                                <input class="div3Margin" type="range" name="media" id="media" min="0" max="10">
                                <h3 class="titlePersona">MARQUES</h3>
                                <div class="threeBrands">
                                    <label class="labelDiv3" for="brand1">Marque n°1</label>
                                    <input class="div3Margin" type="file" name="brand1" id="brand1" accept="image/*">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
                                    <label class="labelDiv3" for="brand2">Marque n°2</label>
                                    <input class="div3Margin" type="file" name="brand2" id="brand2" accept="image/*">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
                                    <label class="labelDiv3" for="brand3">Marque n°3</label>
                                    <input class="div3Margin" type="file" name="brand3" id="brand3" accept="image/*">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="submitButtonMarket" type="submit" name="action">Valider le persona</button>
                </div>
            </form>
            <hr class="hrPriority">
        </section>
        <section>
            <div class="vaseDiagnostic">
                <img class="vase" src="assets/img/temple.png" alt="dessin temple grecque">
                <h1 class="diagnosticTitle">MIX MARKETING</h1>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="divMix">
                    <div class="produit">
                        <label for="concept"></label>
                        <input class="inputDiag inputLenght" type="text" name="concept" id="concept" placeholder="Concept...">
                        <label for="performance"></label>
                        <input class="inputDiag inputLenght" type="text" name="performance" id="performance" placeholder="Performances...">
                        <label for="design"></label>
                        <input class="inputDiag inputLenght" type="text" name="design" id="design" placeholder="Design...">
                        <label for="packaging"></label>
                        <input class="inputDiag inputLenght" type="text" name="packaging" id="packaging" placeholder="Packaging...">
                        <label for="service"></label>
                        <input class="inputDiag inputLenght" type="text" name="service" id="service" placeholder="Services associés...">
                        <label for="mark"></label>
                        <input class="inputDiag inputLenght" type="text" name="mark" id="mark" placeholder="Nom de marque...">
                    </div>
                    <div class="prix">
                        <label for="price"></label>
                        <input class="inputDiag inputLenght2" type="text" name="price" id="price" placeholder="Prix de base...">
                        <label for="tarifs"></label>
                        <input class="inputDiag inputLenght2" type="text" name="tarifs" id="tarifs" placeholder="Tarifs préférentiels...">
                    </div>
                    <div class="distribution">
                        <label for="vente"></label>
                        <input class="inputDiag inputLenght" type="text" name="vente" id="vente" placeholder="Force de vente...">
                        <label for="taille"></label>
                        <input class="inputDiag inputLenght" type="text" name="taille" id="taille" placeholder="Taille, motivation, répartition...">
                        <label for="distribution"></label>
                        <input class="inputDiag inputLenght" type="text" name="distribution" id="distribution" placeholder="Circuits de distribution...">
                    </div>
                    <div class="communication">
                        <label for="strategie"></label>
                        <input class="inputDiag inputLenght2" type="text" name="strategie" id="strategie" placeholder="Stratégie média...">
                        <label for="hors_media"></label>
                        <input class="inputDiag inputLenght2" type="text" name="hors_media" id="hors_media" placeholder="Stratégie hors média...">
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
        </section>
        <?php include 'footer.php';?>
        <script type="text/javascript" src="assets/libs/jquery/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="assets/js/dist/scripts.min.js"></script>
    </body>
</html>
