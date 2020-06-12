
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
<!--    -------------------------------------------HEADER--------------------------------------------------->
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
<!--        --------------------------------------SECTION STRATEGIC PLAN------------------------------------>
        <section class="strategicPlan">
            <img class="laurierW" src="assets/img/laurier2.png" alt="image laurier blanc">
            <h1 class="h1Plan">PLAN STRATEGIQUE</h1>
            <h3 class="diagTitle">1.Diagnostic interne et externe SWOT</h3>
            <i class="fas fa-angle-down fa-3x"></i>
            <h3 class="diagTitle">2. Choix des priorités et des cibles</h3>
            <i class="fas fa-angle-down fa-3x"></i>
            <h3 class="h3Mix diagTitle">3. Mix Marketing</h3>
        </section>
<!--        ------------------------------------------SECTION DIAGNOSTIC------------------------------------>
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

        </section>
        <script type="text/javascript" src="assets/libs/jquery/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="assets/js/dist/scripts.min.js"></script>
    </body>
</html>
