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
//    ------------------------------------function create (add)-----------------------------------------

    public function add(User $obj) {
        $q = $this->_db->prepare('INSERT INTO main_table(user, password) VALUES (:user, :password)');

        $q->bindValue(':user', $obj->user(), PDO::PARAM_STR);
        $q->bindValue(':password', $obj->password(), PDO::PARAM_STR);
        $q->execute();
}
    public function exists($info){
        $q = $this->_db->prepare('SELECT COUNT(*) FROM main_table WHERE user=:user');
        $q->bindValue(':user', $info, PDO::PARAM_STR);
        $q->execute();

        return (bool) $result = $q->fetchColumn();
    }
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
    public function get($user){
        $q = $this->_db->prepare('SELECT * FROM main_table WHERE user=:user');
        $q->bindValue(':user', $user);
        $q->execute();
        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        return new User ($donnees);
    }
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



























}
