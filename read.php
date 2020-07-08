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
    <title>Personae voir ma stratégie</title>
</head>
<body>
<!---------------------------------------------HEADER--------------------------------------------->
<header>
    <?php include 'header.php';?>
    <div class="titleButton2">
        <h1>PERSONAE</h1>
        <img  class="laurierImg" src="./assets/img/laurier1.png" alt="dessin couronne de laurier">
        <h3 class="infoTitle">Bienvenue <?= htmlspecialchars($user->user()) ?> </h3>
        <a href="?deconnexion=1"><button class="submitButton" type="submit" name="action">Déconnexion</button></a>
        <h3 class="infoTitle">Voir ma stratégie marketing</h3>
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
    <a href="#diagTotal" class="arrowMargin1"><i class="fas fa-angle-down fa-3x"></i></a>
    <h3 class="diagTitle">2. Choix des priorités et des cibles</h3>
    <a href="#priorityTotal"  class="arrowMargin2"><i class="fas fa-angle-down fa-3x"></i></a>
    <h3 class="h3Mix diagTitle">3. Mix Marketing</h3>
    <a href="#mixTotal"  class="arrowMargin3"><i class="fas fa-angle-down arrowMargin fa-3x"></i></a>
</section>
<!--------------------------------------------SECTION DIAGNOSTIC------------------------------>
<section class="diagnostic">
    <div class="vaseDiagnostic">
        <img class="vase scrollVase" src="assets/img/europe-2028128_1280.png" alt="vase grèce antique">
        <div class="sectionDiag">
            <h1 class="diagnosticTitle" id="diagTotal">DIAGNOSTIC</h1>
        </div>
    </div>
        <div class="diagnosticForm">
            <div class="divRotate">
                <h4 class="titleRotate">INTERNE</h4>
                <h4 class="titleRotate">EXTERNE</h4>
            </div>
            <div class="posNeg">
                <h4 class="titlePositif">POSITIF</h4>
                <div class="forces">
                    <h4 class="titleDiagnostic">Forces</h4>
                    <div class="divDiagRead">
                        <p class="echoP"><?= $user->force1() ?></p>
                        <p class="echoP"><?= $user->force2() ?></p>
                        <p class="echoP"><?= $user->force3() ?></p>
                        <p class="echoP"><?= $user->force4() ?></p>
                        <p class="echoP"><?= $user->force5() ?></p>
                        <p class="echoP"><?= $user->force6() ?></p>
                    </div>
                </div>
                <div class="opportunites">
                    <h4 class="titleDiagnostic">Opportunités</h4>
                    <div class="divDiagRead">
                        <p class="echoP"><?= $user->opportunite1() ?></p>
                        <p class="echoP"><?= $user->opportunite2() ?></p>
                        <p class="echoP"><?= $user->opportunite3() ?></p>
                        <p class="echoP"><?= $user->opportunite4() ?></p>
                        <p class="echoP"><?= $user->opportunite5() ?></p>
                        <p class="echoP"><?= $user->opportunite6() ?></p>
                    </div>
                </div>
            </div>
            <div class="posNeg">
                <h4 class="titlePositif">NEGATIF</h4>
                <div class="faiblesses">
                    <h4 class="titleFaiblesses">Faiblesses</h4>
                    <div class="divDiagRead">
                        <p class="echoP2"><?= $user->faiblesse1() ?></p>
                        <p class="echoP2"><?= $user->faiblesse2() ?></p>
                        <p class="echoP2"><?= $user->faiblesse3() ?></p>
                        <p class="echoP2"><?= $user->faiblesse4() ?></p>
                        <p class="echoP2"><?= $user->faiblesse5() ?></p>
                        <p class="echoP2"><?= $user->faiblesse6() ?></p>
                    </div>
                </div>
                <div class="menaces">
                    <h4 class="titleDiagnostic">Menaces</h4>
                    <div class="divDiagRead">
                        <p class="echoP"><?= $user->menace1() ?></p>
                        <p class="echoP"><?= $user->menace2() ?></p>
                        <p class="echoP"><?= $user->menace3() ?></p>
                        <p class="echoP"><?= $user->menace4() ?></p>
                        <p class="echoP"><?= $user->menace5() ?></p>
                        <p class="echoP"><?= $user->menace6() ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="divButton">
            <button class="submitButton submitButton2" type="submit" name="action">Valider mon diagnostic</button>
        </div>


    <hr>
</section>
<!------------------------------------SECTION PRIORITES ET CIBLES----------------------------->
<section>
    <div class="vaseDiagnostic">
        <img class="vase scrollCircle" src="assets/img/greek-3223553_1280.png" alt="vase grèce antique">
        <div class="sectionDiag">
            <h1 class="diagnosticTitle" id="priorityTotal">PRIORITES ET CIBLES</h1>
        </div>
    </div>
    <!--            ---------------------------------FORM marchés prioritaires--------------------------->
    <form action="update.php" method="POST" enctype="multipart/form-data">
        <!--                ---------------------------------B2C--------------------------------------------->
        <div class="mainB2c">
            <h4 class="titlePriority">Choix des marchés prioritaires</h4>
            <h3 class="titlePriority2">B2C</h3>
            <div class="b2c">
                <h4 class="titleDiagnostic">Par critères psychographiques</h4>
                <div class="divDiagRead">
                    <p class="echoP"><?= $user->psycho1() ?></p>
                    <p class="echoP"><?= $user->psycho2() ?></p>
                    <p class="echoP"><?= $user->psycho3() ?></p>
                    <p class="echoP"><?= $user->psycho4() ?></p>
                    <p class="echoP"><?= $user->psycho5() ?></p>
                </div>
            </div>
        </div>
        <!--                ---------------------------------B2B--------------------------------------------->
        <div class="mainB2c">
            <h3 class="titlePriority2">B2B</h3>
            <div class="b2b">
                <h4 class="titleDiagnostic">Par critères fondés sur l'identité</h4>
                <div class="divDiagRead">
                    <p class="echoP"><?= $user->identite1() ?></p>
                    <p class="echoP"><?= $user->identite2() ?></p>
                    <p class="echoP"><?= $user->identite3() ?></p>
                    <p class="echoP"><?= $user->identite4() ?></p>
                    <p class="echoP"><?= $user->identite5() ?></p>
                </div>
            </div>
            <button class="submitButtonMarket" type="submit" name="action">Valider les marchés</button>
        </div>
    </form>

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
                        <p class="echoP"><?= $user->caracteristique1() ?></p>
                        <p class="echoP"><?= $user->caracteristique2() ?></p>
                        <p class="echoP"><?= $user->caracteristique3() ?></p>
                        <p class="echoP"><?= $user->caracteristique4() ?></p>
                        <p class="echoP"><?= $user->caracteristique5() ?></p>
                    </div>
                </div>
                <div class="productB">
                    <h3 class="titlePriority2">Produit B</h3>
                    <div class="B">
                        <p class="echoP"><?= $user->caracteristique6() ?></p>
                        <p class="echoP"><?= $user->caracteristique7() ?></p>
                        <p class="echoP"><?= $user->caracteristique8() ?></p>
                        <p class="echoP"><?= $user->caracteristique9() ?></p>
                        <p class="echoP"><?= $user->caracteristique10() ?></p>
                    </div>
                </div>
                <div class="productC">
                    <h3 class="titlePriority2">Produit C</h3>
                    <div class="C">
                        <p class="echoP2"><?= $user->caracteristique11() ?></p>
                        <p class="echoP2"><?= $user->caracteristique12() ?></p>
                        <p class="echoP2"><?= $user->caracteristique13() ?></p>
                        <p class="echoP2"><?= $user->caracteristique14() ?></p>
                        <p class="echoP2"><?= $user->caracteristique15() ?></p>
                    </div>
                </div>
            </div>
            <div class="divButtonProducts">
                <button class="submitButtonMarket" type="submit" name="action">Valider les produits</button>
            </div>
        </div>
    </form>

    <!--            --------------------------------FORM PERSONA-------------------------------->
    <form action="update.php" method="POST" enctype="multipart/form-data">
        <div class="mainB2c">
            <h4 class="titlePriority3">Persona</h4>
            <div class="persona">
                <div class="bandName">
                    <h3 class="personaName"><?= $user->persona_name() ?></h3>
                </div>
                <div class="threePersonaDivs">
                    <!-----------------------------------------------DIV PERSONA 1----------------->
                    <div class="divPersona1">
                        <h3 class="titlePersona">TRAITS DE PERSONALITE</h3>
                        <div class="traits1">
                            <p class="echoP3"><?= $user->trait1() ?></p>
                            <p class="echoP3"><?= $user->trait2() ?></p>

                            <p class="echoP3"><?= $user->trait3() ?></p>
                            <p class="echoP3"><?= $user->trait4() ?></p>
                        </div>
                        <h3 class="titlePersona">SITUATION</h3>
                        <div>
                            <p class="echoP3">Age : <?= $user->age() ?></p>
                        </div>
                        <div>
                            <p class="echoP3">Fonction : <?= $user->fonction() ?></p>
                        </div>
                        <div>
                            <p class="echoP3">Location : <?= $user->ville() ?></p>
                        </div>
                        <div>
                            <p class="echoP3">Famille : <?= $user->famille() ?></p>
                        </div>
                        <div class="photoPersona"><?= "<img src='./assets/upload/".$user->photo()."' />" ?></div>
                        <h3 class="titlePersona">QUOTE PERSONNELLE</h3>
                        <p class="echoP3">"<?= $user->quote() ?>"</p>
                    </div>
                    <!-----------------------------------------------DIV PERSONA 2---------------->
                    <div class="divPersona2">
                        <h3 class="titlePersona">MOTIVATIONS</h3>
                        <div class="echoP4"><?= $user->motivation1() ?></div>
                        <label for="range_motivation1"></label>
                        <input class="rangeMotivations" type="range" name="range_motivation1" id="range_motivation1" min="0" max="10" step="1" value="<?= $user->range_motivation1() ?>">
                        <div class="echoP4"><?= $user->motivation2() ?></div>
                        <label for="rangeMotivation2"></label>
                        <input class="rangeMotivations" type="range" name="range_motivation2" id="range_motivation2" min="0" max="10" step="1" value="<?= $user->range_motivation2() ?>">
                        <div class="echoP4"><?= $user->motivation3() ?></div>
                        <label for="rangeMotivation3"></label>
                        <input class="rangeMotivations" type="range" name="range_motivation3" id="range_motivation3" min="0" max="10" step="1" value="<?= $user->range_motivation3() ?>">
                        <h3 class="titlePersona">OBJECTIFS</h3>
                        <p class="echoP3"><?= $user->objectif1() ?></p>
                        <p class="echoP3"><?= $user->objectif2() ?></p>
                        <p class="echoP3"><?= $user->objectif3() ?></p>
                        <div class="bio">
                            <h3 class="bioTitle">BIO</h3>
                            <p class="echoP3"><?= $user->bio() ?></p>
                        </div>
                    </div>
                    <!-----------------------------------------------DIV PERSONA 3----------------->
                    <div class="divPersona3">
                        <h3 class="titlePersona">PERSONALITE</h3>
                        <label for="introverti">
                            <div class="rowPersona">
                                <div class="introvertiLabel2">introverti</div>
                                <div class="extravertiLabel2">extraverti</div>
                            </div>
                        </label>
                        <input class="div3Margin" type="range" name="introverti" id="introverti" min="0" max="10" step="1" value="<?= $user->introverti() ?>">
                        <label for="analytique">
                            <div class="rowPersona">
                                <div class="introvertiLabel2">analytique</div>
                                <div class="extravertiLabel2">créatif</div>
                            </div>
                        </label>
                        <input class="div3Margin" type="range" name="analytique" id="analytique" min="0" max="10" step="1" value="<?= $user->analytique() ?>">
                        <label for="loyal">
                            <div class="rowPersona">
                                <div class="introvertiLabel2">loyal</div>
                                <div class="extravertiLabel2">inconstant</div>
                            </div>
                        </label>
                        <input class="div3Margin" type="range" name="loyal" id="loyal" min="0" max="10" step="1" value="<?= $user->loyal() ?>">
                        <label for="passif">
                            <div class="rowPersona">
                                <div class="introvertiLabel2">passif</div>
                                <div class="extravertiLabel2">actif</div>
                            </div>
                        </label>
                        <input class="div3Margin" type="range" name="passif" id="passif" min="0" max="10" step="1" value="<?= $user->passif() ?>">
                        <h3 class="titlePersona">COMMUNICATION</h3>
                        <div class="introvertiLabel2">Réseaux sociaux</div>
                        <input class="div3Margin" type="range" name="reseau" id="reseau" min="0" max="10" step="1" value="<?= $user->reseau() ?>">
                        <div class="introvertiLabel2">Mobile</div>
                        <input class="div3Margin" type="range" name="mobile" id="mobile" min="0" max="10" step="1" value="<?= $user->mobile() ?>">
                        <div class="introvertiLabel2">Email</div>
                        <input class="div3Margin" type="range" name="email" id="email" min="0" max="10" step="1" value="<?= $user->email() ?>">
                        <div class="introvertiLabel2">Médias traditionnels</div>
                        <input class="div3Margin" type="range" name="media" id="media" min="0" max="10" step="1" value="<?= $user->media() ?>">
                        <h3 class="titlePersona">MARQUES</h3>
                        <div class="threeBrands">
                            <div><?= "<img src='./assets/upload/".$user->brand1()."' />" ?></div>
                            <div><?= "<img src='./assets/upload/".$user->brand2()."' />" ?></div>
                            <div><?= "<img src='./assets/upload/".$user->brand3()."' />" ?></div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="submitButtonMarket" type="submit" name="action">Valider le persona</button>
        </div>
    </form>

    <hr class="hrPriority">
</section>
<!--------------------------------------DIV MIX MARKETING----------------------------------------->
<section>
    <div class="vaseDiagnostic">
        <img class="vase scrollTemple" src="assets/img/temple2.png" alt="dessin temple grecque">
        <div class="sectionDiag">
            <h1 class="diagnosticTitle" id="mixTotal">MIX MARKETING</h1>
        </div>
    </div>

    <form action="update.php" method="POST" enctype="multipart/form-data">
        <div class="divMix">
            <div class="produit">
                <h4 class="titleMix2">Produit</h4>
                <p class="echoP"><?= $user->concept() ?></p>
                <p class="echoP"><?= $user->performance() ?></p>
                <p class="echoP"><?= $user->design() ?></p>
                <p class="echoP"><?= $user->packaging() ?></p>
                <p class="echoP"><?= $user->service() ?></p>
                <p class="echoP"><?= $user->mark() ?></p>
            </div>
            <div class="prix">
                <h4 class="titleMix2">Prix</h4>
                <p class="echoP"><?= $user->price() ?></p>
                <p class="echoP"><?= $user->tarifs() ?></p>
            </div>
            <div class="distribution">
                <h4 class="titleMix2">Distribution</h4>
                <p class="echoP"><?= $user->vente() ?></p>
                <p class="echoP"><?= $user->taille() ?></p>
                <p class="echoP"><?= $user->distribution() ?></p>
            </div>
            <div class="communication">
                <h4 class="titleMix2">Communication</h4>
                <p class="echoP"><?= $user->strategie() ?></p>
                <p class="echoP"><?= $user->hors_media() ?></p>
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

