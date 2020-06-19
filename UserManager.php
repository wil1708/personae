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

        return (bool) $q->fetchColumn();
    }



























}
