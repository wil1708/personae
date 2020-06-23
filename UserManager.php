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




























}
