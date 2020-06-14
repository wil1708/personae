
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
        <link rel="stylesheet" href="assets/css/style.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
        <!--OPENGRAPH ogp.me-->
        <meta property="og:title" content="Personae">
        <meta property="og:description" content="Votre ressource stratégie marketing">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">
        <title>Personae créer ma stratégie</title>
    </head>
    <body>
<!--    -------------------------------------------HEADER------------------------------------------------->
        <header>
            <?php include 'header.php';?>
            <div class="titleButton2">
                <h1>PERSONAE</h1>
                <h4></h4>
                <h6>Déconnexion</h6>
                <h3 class="infoTitle">Créer/éditer ma stratégie marketing</h3>
                <div class="mouse">
                    <div class="wheel"></div>
                </div>
            </div>
        </header>
<!--        --------------------------------------SECTION STRATEGIC PLAN---------------------------------->
        <section class="strategicPlan">
            <img class="laurierW" src="assets/img/laurier2.png" alt="image laurier blanc">
            <h1 class="h1Plan">PLAN STRATEGIQUE</h1>
            <h3 class="diagTitle">1.Diagnostic interne et externe SWOT</h3>
            <i class="fas fa-angle-down fa-3x"></i>
            <h3 class="diagTitle">2. Choix des priorités et des cibles</h3>
            <i class="fas fa-angle-down fa-3x"></i>
            <h3 class="h3Mix diagTitle">3. Mix Marketing</h3>
        </section>
<!--        ------------------------------------------SECTION DIAGNOSTIC---------------------------------->
        <section class="diagnostic">
            <div class="vaseDiagnostic">
                <img class="vase" src="assets/img/europe-2028128_1280.png" alt="vase grèce antique">
                <h1 class="diagnosticTitle">DIAGNOSTIC</h1>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
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
                    <button class="submitButton" type="submit" name="action">Valider mon diagnostic</button>
                </div>
            </form>
            <hr>
        </section>
<!--        ----------------------------------SECTION PRIORITES ET CIBLES------------------------------->
        <section>
            <div class="vaseDiagnostic">
                <img class="vase" src="assets/img/greek-3223553_1280.png" alt="vase grèce antique">
                <h1 class="diagnosticTitle">PRIORITES ET CIBLES</h1>
            </div>
<!--            ---------------------------------FORM marchés prioritaires----------------------------->
            <form action="" method="POST" enctype="multipart/form-data">
<!--                ---------------------------------B2C------------------------------------------------>
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
<!--                ---------------------------------B2B------------------------------------------------>
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
<!--                ----------------------------FORM produits prioritaires-------------------------------->
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
<!--            --------------------------------FORM PERSONA---------------------------------------------->
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="mainB2c">
                    <h4 class="titlePriority3">Persona</h4>
                    <div class="persona">
                        <div class="bandName">

                        </div>
                        <div class="threePersonaDivs">
                            <div class="divPersona1">

                            </div>
                            <div class="divPersona2">

                            </div>
                            <div class="divPersona3">

                            </div>
                        </div>
                    </div>
                    <button class="submitButtonMarket" type="submit" name="action">Valider le persona</button>
                </div>
            </form>
        </section>
        <script type="text/javascript" src="assets/libs/jquery/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="assets/js/dist/scripts.min.js"></script>
    </body>
</html>
