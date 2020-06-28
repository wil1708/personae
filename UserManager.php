<?php


class UserManager
{
    private $_db;

    public function __construct($db)
    {
        $this->setDb($db);
    }
    public function db() {
        return $this->_db;
    }
    public function setDb($db) {
        $this->_db = $db;
    }
//    ------------------------------------function create (add)--------------------------------------

    public function add(User $obj) {
        $q = $this->_db->prepare('INSERT INTO main_table(user, password) VALUES (:user, :password)');

        $q->bindValue(':user', $obj->user(), PDO::PARAM_STR);
        $q->bindValue(':password', $obj->password(), PDO::PARAM_STR);
        $q->execute();
}
//------------------------------------function exists---------------------------------------------
    public function exists($info){
        $q = $this->_db->prepare('SELECT COUNT(*) FROM main_table WHERE user=:user');
        $q->bindValue(':user', $info, PDO::PARAM_STR);
        $q->execute();

        return (bool) $result = $q->fetchColumn();
    }
//    ---------------------------------function connection------------------------------------
    public function connection($info2){
        $q = $this->_db->prepare('SELECT id, password FROM main_table WHERE user=:user');
        $q->bindValue(':user', $info2, PDO::PARAM_STR);
        $q->execute();
        $result = $q->fetch();

        $passverify = password_verify($_POST['password'], $result['password']);

        if($passverify){
            session_start();
            $_SESSION['id'] = $result['id'];
            $_SESSION['user'] = $info2;
            echo '<p class="labelDiv3">Vous êtes connecté</p>';
            $success = true;
            if($success){
                echo '<META http-equiv="refresh" content="2; URL=update.php"> ';
            }
        }
        else{
            echo '<p class="labelDiv3">Mauvais identifiant ou mot de passe</p>';
        }

    }
//    --------------------------------------function get user-----------------------------------
    public function get($user){
        $q = $this->_db->prepare('SELECT * FROM main_table WHERE user=:user');
        $q->bindValue(':user', $user);
        $q->execute();
        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        return new User ($donnees);
    }
//    -------------------------------------function updateDiagnostic-----------------------------
    public function updateDiagnostic(User $obj){
        $q = $this->_db->prepare('UPDATE main_table SET force1=:force1, force2=:force2, force3=:force3, force4=:force4, force5=:force5, force6=:force6, opportunite1=:opportunite1, opportunite2=:opportunite2, opportunite3=:opportunite3, opportunite4=:opportunite4, opportunite5=:opportunite5, opportunite6=:opportunite6, faiblesse1=:faiblesse1, faiblesse2=:faiblesse2, faiblesse3=:faiblesse3, faiblesse4=:faiblesse4, faiblesse5=:faiblesse5, faiblesse6=:faiblesse6, menace1=:menace1, menace2=:menace2, menace3=:menace3, menace4=:menace4, menace5=:menace5, menace6=:menace6 WHERE user=:user');

        $q->bindValue(':user', $obj->user());
        $q->bindValue(':force1', $obj->force1(), PDO::PARAM_STR);
        $q->bindValue(':force2', $obj->force2(), PDO::PARAM_STR);
        $q->bindValue(':force3', $obj->force3(), PDO::PARAM_STR);
        $q->bindValue(':force4', $obj->force4(), PDO::PARAM_STR);
        $q->bindValue(':force5', $obj->force5(), PDO::PARAM_STR);
        $q->bindValue(':force6', $obj->force6(), PDO::PARAM_STR);
        $q->bindValue(':opportunite1', $obj->opportunite1(), PDO::PARAM_STR);
        $q->bindValue(':opportunite2', $obj->opportunite2(), PDO::PARAM_STR);
        $q->bindValue(':opportunite3', $obj->opportunite3(), PDO::PARAM_STR);
        $q->bindValue(':opportunite4', $obj->opportunite4(), PDO::PARAM_STR);
        $q->bindValue(':opportunite5', $obj->opportunite5(), PDO::PARAM_STR);
        $q->bindValue(':opportunite6', $obj->opportunite6(), PDO::PARAM_STR);
        $q->bindValue(':faiblesse1', $obj->faiblesse1(), PDO::PARAM_STR);
        $q->bindValue(':faiblesse2', $obj->faiblesse2(), PDO::PARAM_STR);
        $q->bindValue(':faiblesse3', $obj->faiblesse3(), PDO::PARAM_STR);
        $q->bindValue(':faiblesse4', $obj->faiblesse4(), PDO::PARAM_STR);
        $q->bindValue(':faiblesse5', $obj->faiblesse5(), PDO::PARAM_STR);
        $q->bindValue(':faiblesse6', $obj->faiblesse6(), PDO::PARAM_STR);
        $q->bindValue(':menace1', $obj->menace1(), PDO::PARAM_STR);
        $q->bindValue(':menace2', $obj->menace2(), PDO::PARAM_STR);
        $q->bindValue(':menace3', $obj->menace3(), PDO::PARAM_STR);
        $q->bindValue(':menace4', $obj->menace4(), PDO::PARAM_STR);
        $q->bindValue(':menace5', $obj->menace5(), PDO::PARAM_STR);
        $q->bindValue(':menace6', $obj->menace6(), PDO::PARAM_STR);
        $q->execute();
    }
//----------------------------------------function updateProduct------------------------------------
    public function updateProduct(User $obj){
        $q = $this->_db->prepare('UPDATE main_table SET caracteristique1=:caracteristique1, caracteristique2=:caracteristique2, caracteristique3=:caracteristique3, caracteristique4=:caracteristique4, caracteristique5=:caracteristique5, caracteristique6=:caracteristique6, caracteristique7=:caracteristique7, caracteristique8=:caracteristique8, caracteristique9=:caracteristique9, caracteristique10=:caracteristique10, caracteristique11=:caracteristique11, caracteristique12=:caracteristique12, caracteristique13=:caracteristique13, caracteristique14=:caracteristique14, caracteristique15=:caracteristique15 WHERE user=:user');

        $q->bindValue(':user', $obj->user());
        $q->bindValue(':caracteristique1', $obj->caracteristique1(), PDO::PARAM_STR);
        $q->bindValue(':caracteristique2', $obj->caracteristique2(), PDO::PARAM_STR);
        $q->bindValue(':caracteristique3', $obj->caracteristique3(), PDO::PARAM_STR);
        $q->bindValue(':caracteristique4', $obj->caracteristique4(), PDO::PARAM_STR);
        $q->bindValue(':caracteristique5', $obj->caracteristique5(), PDO::PARAM_STR);
        $q->bindValue(':caracteristique6', $obj->caracteristique6(), PDO::PARAM_STR);
        $q->bindValue(':caracteristique7', $obj->caracteristique7(), PDO::PARAM_STR);
        $q->bindValue(':caracteristique8', $obj->caracteristique8(), PDO::PARAM_STR);
        $q->bindValue(':caracteristique9', $obj->caracteristique9(), PDO::PARAM_STR);
        $q->bindValue(':caracteristique10', $obj->caracteristique10(), PDO::PARAM_STR);
        $q->bindValue(':caracteristique11', $obj->caracteristique11(), PDO::PARAM_STR);
        $q->bindValue(':caracteristique12', $obj->caracteristique12(), PDO::PARAM_STR);
        $q->bindValue(':caracteristique13', $obj->caracteristique13(), PDO::PARAM_STR);
        $q->bindValue(':caracteristique14', $obj->caracteristique14(), PDO::PARAM_STR);
        $q->bindValue(':caracteristique15', $obj->caracteristique15(), PDO::PARAM_STR);

        $q->execute();
    }
//------------------------------------------function updateMarket---------------------------------
    public function updateMarket(User $obj){
        $q = $this->_db->prepare('UPDATE main_table SET psycho1=:psycho1, psycho2=:psycho2, psycho3=:psycho3, psycho4=:psycho4, psycho5=:psycho5, identite1=:identite1, identite2=:identite2, identite3=:identite3, identite4=:identite4, identite5=:identite5 WHERE user=:user');

        $q->bindValue(':user', $obj->user());
        $q->bindValue(':psycho1', $obj->psycho1(), PDO::PARAM_STR);
        $q->bindValue(':psycho2', $obj->psycho2(), PDO::PARAM_STR);
        $q->bindValue(':psycho3', $obj->psycho3(), PDO::PARAM_STR);
        $q->bindValue(':psycho4', $obj->psycho4(), PDO::PARAM_STR);
        $q->bindValue(':psycho5', $obj->psycho5(), PDO::PARAM_STR);
        $q->bindValue(':identite1', $obj->identite1(), PDO::PARAM_STR);
        $q->bindValue(':identite2', $obj->identite2(), PDO::PARAM_STR);
        $q->bindValue(':identite3', $obj->identite3(), PDO::PARAM_STR);
        $q->bindValue(':identite4', $obj->identite4(), PDO::PARAM_STR);
        $q->bindValue(':identite5', $obj->identite5(), PDO::PARAM_STR);

        $q->execute();
    }
    //------------------------------------------function updateMix---------------------------------
    public function updateMix(User $obj){
        $q = $this->_db->prepare('UPDATE main_table SET concept=:concept, performance=:performance, design=:design, packaging=:packaging, service=:service, mark=:mark, price=:price, tarifs=:tarifs, vente=:vente, taille=:taille, distribution=:distribution, strategie=:strategie, hors_media=:hors_media WHERE user=:user');

        $q->bindValue(':user', $obj->user());
        $q->bindValue(':concept', $obj->concept(), PDO::PARAM_STR);
        $q->bindValue(':performance', $obj->performance(), PDO::PARAM_STR);
        $q->bindValue(':design', $obj->design(), PDO::PARAM_STR);
        $q->bindValue(':packaging', $obj->packaging(), PDO::PARAM_STR);
        $q->bindValue(':service', $obj->service(), PDO::PARAM_STR);
        $q->bindValue(':mark', $obj->mark(), PDO::PARAM_STR);
        $q->bindValue(':price', $obj->price(), PDO::PARAM_STR);
        $q->bindValue(':tarifs', $obj->tarifs(), PDO::PARAM_STR);
        $q->bindValue(':vente', $obj->vente(), PDO::PARAM_STR);
        $q->bindValue(':taille', $obj->taille(), PDO::PARAM_STR);
        $q->bindValue(':distribution', $obj->distribution(), PDO::PARAM_STR);
        $q->bindValue(':strategie', $obj->strategie(), PDO::PARAM_STR);
        $q->bindValue(':hors_media', $obj->hors_media(), PDO::PARAM_STR);

        $q->execute();
    }
    //----------------------------------------function updateProduct------------------------------------
    public function updatePersona(User $obj){
        $q = $this->_db->prepare('UPDATE main_table SET persona_name=:persona_name, trait1=:trait1, trait2=:trait2, trait3=:trait3, trait4=:trait4, age=:age, fonction=:fonction, ville=:ville, famille=:famille, photo=:photo, quote=:quote, motivation1=:motivation1, range_motivation1=:range_motivation1, motivation2=:motivation2, range_motivation2=:range_motivation2, motivation3=:motivation3, range_motivation3=:range_motivation3, objectif1=:objectif1, objectif2=:objectif2, objectif3=:objectif3, bio=:bio, introverti=:introverti, analytique=:analytique, loyal=:loyal, passif=:passif, reseau=:reseau, mobile=:mobile, email=:email, media=:media, brand1=:brand1, brand2=:brand2, brand3=:brand3 WHERE user=:user');

        $q->bindValue(':user', $obj->user());
        $q->bindValue(':persona_name', $obj->persona_name(), PDO::PARAM_STR);
        $q->bindValue(':trait1', $obj->trait1(), PDO::PARAM_STR);
        $q->bindValue(':trait2', $obj->trait2(), PDO::PARAM_STR);
        $q->bindValue(':trait3', $obj->trait3(), PDO::PARAM_STR);
        $q->bindValue(':trait4', $obj->trait4(), PDO::PARAM_STR);
        $q->bindValue(':age', $obj->age(), PDO::PARAM_INT);
        $q->bindValue(':fonction', $obj->fonction(), PDO::PARAM_STR);
        $q->bindValue(':ville', $obj->ville(), PDO::PARAM_STR);
        $q->bindValue(':famille', $obj->famille(), PDO::PARAM_STR);
        $q->bindValue(':photo', $obj->photo(), PDO::PARAM_STR);
        $q->bindValue(':quote', $obj->quote(), PDO::PARAM_STR);
        $q->bindValue(':motivation1', $obj->motivation1(), PDO::PARAM_STR);
        $q->bindValue(':range_motivation1', $obj->range_motivation1(), PDO::PARAM_INT);
        $q->bindValue(':motivation2', $obj->motivation2(), PDO::PARAM_STR);
        $q->bindValue(':range_motivation2', $obj->range_motivation2(), PDO::PARAM_INT);
        $q->bindValue(':motivation3', $obj->motivation3(), PDO::PARAM_STR);
        $q->bindValue(':range_motivation3', $obj->range_motivation3(), PDO::PARAM_INT);
        $q->bindValue(':objectif1', $obj->objectif1(), PDO::PARAM_STR);
        $q->bindValue(':objectif2', $obj->objectif2(), PDO::PARAM_STR);
        $q->bindValue(':objectif3', $obj->objectif3(), PDO::PARAM_STR);
        $q->bindValue(':bio', $obj->bio(), PDO::PARAM_STR);
        $q->bindValue(':introverti', $obj->introverti(), PDO::PARAM_INT);
        $q->bindValue(':analytique', $obj->analytique(), PDO::PARAM_INT);
        $q->bindValue(':loyal', $obj->loyal(), PDO::PARAM_INT);
        $q->bindValue(':passif', $obj->passif(), PDO::PARAM_INT);
        $q->bindValue(':reseau', $obj->reseau(), PDO::PARAM_INT);
        $q->bindValue(':mobile', $obj->mobile(), PDO::PARAM_INT);
        $q->bindValue(':email', $obj->email(), PDO::PARAM_INT);
        $q->bindValue(':media', $obj->media(), PDO::PARAM_INT);
        $q->bindValue(':brand1', $obj->brand1(), PDO::PARAM_STR);
        $q->bindValue(':brand2', $obj->brand2(), PDO::PARAM_STR);
        $q->bindValue(':brand3', $obj->brand3(), PDO::PARAM_STR);

        $q->execute();
    }
























}
