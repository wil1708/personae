<?php


class User
{
    private $_id;
    private $_user;
    private $_password;
    private $_force1;
    private $_force2;
    private $_force3;
    private $_force4;
    private $_force5;
    private $_force6;
    private $_opportunite1;
    private $_opportunite2;
    private $_opportunite3;
    private $_opportunite4;
    private $_opportunite5;
    private $_opportunite6;
    private $_faiblesse1;
    private $_faiblesse2;
    private $_faiblesse3;
    private $_faiblesse4;
    private $_faiblesse5;
    private $_faiblesse6;
    private $_menace1;
    private $_menace2;
    private $_menace3;
    private $_menace4;
    private $_menace5;
    private $_menace6;
    private $_psycho1;
    private $_psycho2;
    private $_psycho3;
    private $_psycho4;
    private $_psycho5;
    private $_identite1;
    private $_identite2;
    private $_identite3;
    private $_identite4;
    private $_identite5;
    private $_caracteristique1;
    private $_caracteristique2;
    private $_caracteristique3;
    private $_caracteristique4;
    private $_caracteristique5;
    private $_caracteristique6;
    private $_caracteristique7;
    private $_caracteristique8;
    private $_caracteristique9;
    private $_caracteristique10;
    private $_caracteristique11;
    private $_caracteristique12;
    private $_caracteristique13;
    private $_caracteristique14;
    private $_caracteristique15;
    private $_persona_name;
    private $_trait1;
    private $_trait2;
    private $_trait3;
    private $_trait4;
    private $_age;
    private $_fonction;
    private $_ville;
    private $_famille;
    private $_photo;
    private $_quote;
    private $_motivation1;
    private $_range_motivation1;
    private $_motivation2;
    private $_range_motivation2;
    private $_motivation3;
    private $_range_motivation3;
    private $_objectif1;
    private $_objectif2;
    private $_objectif3;
    private $_bio;
    private $_introverti;
    private $_analytique;
    private $_loyal;
    private $_passif;
    private $_reseau;
    private $_mobile;
    private $_email;
    private $_media;
    private $_brand1;
    private $_brand2;
    private $_brand3;
    private $_concept;
    private $_performance;
    private $_design;
    private $_packaging;
    private $_service;
    private $_mark;
    private $_price;
    private $_tarifs;
    private $_vente;
    private $_taille;
    private $_distribution;
    private $_strategie;
    private $_hors_media;

    //----------------------------------------CONSTRUCTEUR----------------------------------------

    public function __construct(array $donnees){
        $this->hydrate($donnees);
    }

    public function hydrate(array $donnees){
        foreach($donnees as $key => $value)
        {
            $method ='set'.ucfirst($key);
            if(method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }
//    -----------------------------------------FONCTIONS GETTERS-------------------------------------

    public function id() {
        return $this->_id;
    }
    public function user() {
        return $this->_user;
    }
    public function password() {
        return $this->_password;
    }
    public function force1() {
        return $this->_force1;
    }
    public function force2() {
        return $this->_force2;
    }
    public function force3() {
        return $this->_force3;
    }
    public function force4() {
        return $this->_force4;
    }
    public function force5() {
        return $this->_force5;
    }
    public function force6() {
        return $this->_force6;
    }
    public function opportunite1() {
        return $this->_opportunite1;
    }
    public function opportunite2() {
        return $this->_opportunite2;
    }
    public function opportunite3() {
        return $this->_opportunite3;
    }
    public function opportunite4() {
        return $this->_opportunite4;
    }
    public function opportunite5() {
        return $this->_opportunite5;
    }
    public function opportunite6() {
        return $this->_opportunite6;
    }
    public function faiblesse1() {
        return $this->_faiblesse1;
    }
    public function faiblesse2() {
        return $this->_faiblesse2;
    }
    public function faiblesse3() {
        return $this->_faiblesse3;
    }
    public function faiblesse4() {
        return $this->_faiblesse4;
    }
    public function faiblesse5() {
        return $this->_faiblesse5;
    }
    public function faiblesse6() {
        return $this->_faiblesse6;
    }
    public function menace1() {
        return $this->_menace1;
    }
    public function menace2() {
        return $this->_menace2;
    }
    public function menace3() {
        return $this->_menace3;
    }
    public function menace4() {
        return $this->_menace4;
    }
    public function menace5() {
        return $this->_menace5;
    }
    public function menace6() {
        return $this->_menace6;
    }
    public function psycho1() {
        return $this->_psycho1;
    }
    public function psycho2() {
        return $this->_psycho2;
    }
    public function psycho3() {
        return $this->_psycho3;
    }
    public function psycho4() {
        return $this->_psycho4;
    }
    public function psycho5() {
        return $this->_psycho5;
    }
    public function identite1() {
        return $this->_identite1;
    }
    public function identite2() {
        return $this->_identite2;
    }
    public function identite3() {
        return $this->_identite3;
    }
    public function identite4() {
        return $this->_identite4;
    }
    public function identite5() {
        return $this->_identite5;
    }
    public function caracteristique1() {
        return $this->_caracteristique1;
    }
    public function caracteristique2() {
        return $this->_caracteristique2;
    }
    public function caracteristique3() {
        return $this->_caracteristique3;
    }
    public function caracteristique4() {
        return $this->_caracteristique4;
    }
    public function caracteristique5() {
        return $this->_caracteristique5;
    }
    public function caracteristique6() {
        return $this->_caracteristique6;
    }
    public function caracteristique7() {
        return $this->_caracteristique7;
    }
    public function caracteristique8() {
        return $this->_caracteristique8;
    }
    public function caracteristique9() {
        return $this->_caracteristique9;
    }
    public function caracteristique10() {
        return $this->_caracteristique10;
    }
    public function caracteristique11() {
        return $this->_caracteristique11;
    }
    public function caracteristique12() {
        return $this->_caracteristique12;
    }
    public function caracteristique13() {
        return $this->_caracteristique13;
    }
    public function  caracteristique14() {
        return $this->_caracteristique14;
    }
    public function caracteristique15() {
        return $this->_caracteristique15;
    }
    public function persona_name() {
        return $this->_persona_name;
    }
    public function trait1() {
        return $this->_trait1;
    }
    public function trait2() {
        return $this->_trait2;
    }
    public function trait3() {
        return $this->_trait3;
    }
    public function trait4() {
        return $this->_trait4;
    }
    public function age() {
        return $this->_age;
    }
    public function fonction() {
        return $this->_fonction;
    }
    public function ville() {
        return $this->_ville;
    }
    public function famille() {
        return $this->_famille;
    }
    public function photo() {
        return $this->_photo;
    }
    public function quote() {
        return $this->_quote;
    }
    public function motivation1() {
        return $this->_motivation1;
    }
    public function range_motivation1() {
        return $this->_range_motivation1;
    }
    public function motivation2() {
        return $this->_motivation2;
    }
    public function range_motivation2() {
        return $this->_range_motivation2;
    }
    public function motivation3() {
        return $this->_motivation3;
    }
    public function range_motivation3() {
        return $this->_range_motivation3;
    }
    public function objectif1() {
        return $this->_objectif1;
    }
    public function objectif2() {
        return $this->_objectif2;
    }
    public function objectif3() {
        return $this->_objectif3;
    }
    public function bio() {
        return $this->_bio;
    }
    public function introverti() {
        return $this->_introverti;
    }
    public function analytique() {
        return $this->_analytique;
    }
    public function loyal() {
        return $this->_loyal;
    }
    public function passif() {
        return $this->_passif;
    }
    public function reseau() {
        return $this->_reseau;
    }
    public function mobile() {
        return $this->_mobile;
    }
    public function email() {
        return $this->_email;
    }
    public function media() {
        return $this->_media;
    }
    public function brand1() {
        return $this->_brand1;
    }
    public function brand2() {
        return $this->_brand2;
    }
    public function brand3() {
        return $this->_brand3;
    }
    public function concept() {
        return $this->_concept;
    }
    public function performance() {
        return $this->_performance;
    }
    public function design() {
        return $this->_design;
    }
    public function packaging() {
        return $this->_packaging;
    }
    public function service() {
        return $this->_service;
    }
    public function mark() {
        return $this->_mark;
    }
    public function price() {
        return $this->_price;
    }
    public function tarifs() {
        return $this->_tarifs;
    }
    public function vente() {
        return $this->_vente;
    }
    public function taille() {
        return $this->_taille;
    }
    public function distribution() {
        return $this->_distribution;
    }
    public function strategie() {
        return $this->_strategie;
    }
    public function hors_media() {
        return $this->_hors_media;
    }

//    ---------------------------------FONCTION SETTERS---------------------------------------

    public function setUser($u){
        if (is_string($u)){
            $this->_user=$u;
        }
    }
    public function setPassword($p){
        if (is_string($p)){
            $this->_password=$p;
        }
    }
    public function setForce1($f1){
        if (is_string($f1)){
            $this->_force1=$f1;
        }
    }
    public function setForce2($f2){
        if (is_string($f2)){
            $this->_force2=$f2;
        }
    }
    public function setForce3($f3){
        if (is_string($f3)){
            $this->_force3=$f3;
        }
    }
    public function setForce4($f4){
        if (is_string($f4)){
            $this->_force4=$f4;
        }
    }
    public function setForce5($f5){
        if (is_string($f5)){
            $this->_force5=$f5;
        }
    }
    public function setForce6($f6){
        if (is_string($f6)){
            $this->_force6=$f6;
        }
    }
    public function setOpportunite1($o1){
        if (is_string($o1)){
            $this->_opportunite1=$o1;
        }
    }
    public function setOpportunite2($o2){
        if (is_string($o2)){
            $this->_opportunite2=$o2;
        }
    }
    public function setOpportunite3($o3){
        if (is_string($o3)){
            $this->_opportunite3=$o3;
        }
    }
    public function setOpportunite4($o4){
        if (is_string($o4)){
            $this->_opportunite4=$o4;
        }
    }
    public function setOpportunite5($o5){
        if (is_string($o5)){
            $this->_opportunite5=$o5;
        }
    }
    public function setOpportunite6($o6){
        if (is_string($o6)){
            $this->_opportunite6=$o6;
        }
    }
    public function setFaiblesse1($fa1){
        if (is_string($fa1)){
            $this->_faiblesse1=$fa1;
        }
    }
    public function setFaiblesse2($fa2){
        if (is_string($fa2)){
            $this->_faiblesse2=$fa2;
        }
    }
    public function setFaiblesse3($fa3){
        if (is_string($fa3)){
            $this->_faiblesse3=$fa3;
        }
    }
    public function setFaiblesse4($fa4){
        if (is_string($fa4)){
            $this->_faiblesse4=$fa4;
        }
    }
    public function setFaiblesse5($fa5){
        if (is_string($fa5)){
            $this->_faiblesse5=$fa5;
        }
    }
    public function setFaiblesse6($fa6){
        if (is_string($fa6)){
            $this->_faiblesse6=$fa6;
        }
    }
    public function setMenace1($m1){
        if (is_string($m1)){
            $this->_menace1=$m1;
        }
    }
    public function setMenace2($m2){
        if (is_string($m2)){
            $this->_menace2=$m2;
        }
    }
    public function setMenace3($m3){
        if (is_string($m3)){
            $this->_menace3=$m3;
        }
    }
    public function setMenace4($m4){
        if (is_string($m4)){
            $this->_menace4=$m4;
        }
    }
    public function setMenace5($m5){
        if (is_string($m5)){
            $this->_menace5=$m5;
        }
    }
    public function setMenace6($m6){
        if (is_string($m6)){
            $this->_menace6=$m6;
        }
    }
    public function setPsycho1($p1){
        if (is_string($p1)){
            $this->_psycho1=$p1;
        }
    }
    public function setPsycho2($p2){
        if (is_string($p2)){
            $this->_psycho2=$p2;
        }
    }
    public function setPsycho3($p3){
        if (is_string($p3)){
            $this->_psycho3=$p3;
        }
    }
    public function setPsycho4($p4){
        if (is_string($p4)){
            $this->_psycho4=$p4;
        }
    }
    public function setPsycho5($p5){
        if (is_string($p5)){
            $this->_psycho5=$p5;
        }
    }
    public function setIdentite1($i1){
        if (is_string($i1)){
            $this->_identite1=$i1;
        }
    }
    public function setIdentite2($i2){
        if (is_string($i2)){
            $this->_identite2=$i2;
        }
    }
    public function setIdentite3($i3){
        if (is_string($i3)){
            $this->_identite3=$i3;
        }
    }
    public function setIdentite4($i4){
        if (is_string($i4)){
            $this->_identite4=$i4;
        }
    }
    public function setIdentite5($i5){
        if (is_string($i5)){
            $this->_identite5=$i5;
        }
    }
    public function setCaracteristique1($c1){
        if (is_string($c1)){
            $this->_caracteristique1=$c1;
        }
    }
    public function setCaracteristique2($c2){
        if (is_string($c2)){
            $this->_caracteristique2=$c2;
        }
    }
    public function setCaracteristique3($c3){
        if (is_string($c3)){
            $this->_caracteristique3=$c3;
        }
    }
    public function setCaracteristique4($c4){
        if (is_string($c4)){
            $this->_caracteristique4=$c4;
        }
    }
    public function setCaracteristique5($c5){
        if (is_string($c5)){
            $this->_caracteristique5=$c5;
        }
    }
    public function setCaracteristique6($c6){
        if (is_string($c6)){
            $this->_caracteristique6=$c6;
        }
    }
    public function setCaracteristique7($c7){
        if (is_string($c7)){
            $this->_caracteristique7=$c7;
        }
    }
    public function setCaracteristique8($c8){
        if (is_string($c8)){
            $this->_caracteristique8=$c8;
        }
    }
    public function setCaracteristique9($c9){
        if (is_string($c9)){
            $this->_caracteristique9=$c9;
        }
    }
    public function setCaracteristique10($c10){
        if (is_string($c10)){
            $this->_caracteristique10=$c10;
        }
    }
    public function setCaracteristique11($c11){
        if (is_string($c11)){
            $this->_caracteristique11=$c11;
        }
    }
    public function setCaracteristique12($c12){
        if (is_string($c12)){
            $this->_caracteristique12=$c12;
        }
    }
    public function setCaracteristique13($c13){
        if (is_string($c13)){
            $this->_caracteristique13=$c13;
        }
    }
    public function setCaracteristique14($c14){
        if (is_string($c14)){
            $this->_caracteristique14=$c14;
        }
    }
    public function setCaracteristique15($c15){
        if (is_string($c15)){
            $this->_caracteristique15=$c15;
        }
    }
    public function setPersona_name($pers){
        if (is_string($pers)){
            $this->_persona_name=$pers;
        }
    }
    public function setTrait1($t1){
        if (is_string($t1)){
            $this->_trait1=$t1;
        }
    }
    public function setTrait2($t2){
        if (is_string($t2)){
            $this->_trait2=$t2;
        }
    }
    public function setTrait3($t3){
        if (is_string($t3)){
            $this->_trait3=$t3;
        }
    }
    public function setTrait4($t4){
        if (is_string($t4)){
            $this->_trait4=$t4;
        }
    }
    public function setAge($ag){
        if (is_int($ag)){
            $this->_age=$ag;
        }
    }
    public function setFonction($fonc){
        if (is_string($fonc)){
            $this->_fonction=$fonc;
        }
    }
    public function setVille($vi){
        if (is_string($vi)){
            $this->_ville=$vi;
        }
    }
    public function setFamille($fam){
        if (is_string($fam)){
            $this->_famille=$fam;
        }
    }
    public function setPhoto($pho){
        if (is_string($pho)){
            $this->_photo=$pho;
        }
    }
    public function setQuote($quo){
            if (is_string($quo)){
                $this->_quote=$quo;
            }
    }
    public function setMotivation1($mov1){
            if (is_string($mov1)){
                $this->_motivation1=$mov1;
            }
    }
    public function setRange_motivation1($ra1){
            if( is_int($ra1)){
                $this->_range_motivation1=$ra1;
            }
    }
    public function setMotivation2($mov2){
        if (is_string($mov2)){
            $this->_motivation2=$mov2;
        }
    }
    public function setRange_motivation2($ra2){
        if( is_int($ra2)){
            $this->_range_motivation2=$ra2;
        }
    }
    public function setMotivation3($mov3){
        if (is_string($mov3)){
            $this->_motivation3=$mov3;
        }
    }
    public function setRange_motivation3($ra3){
        if( is_int($ra3)){
            $this->_range_motivation3=$ra3;
        }
    }
    public function setObjectif1($obj1){
        if (is_string($obj1)){
            $this->_objectif1=$obj1;
        }
    }
    public function setObjectif2($obj2){
        if (is_string($obj2)){
            $this->_objectif2=$obj2;
        }
    }
    public function setObjectif3($obj3){
        if (is_string($obj3)){
            $this->_objectif3=$obj3;
        }
    }
    public function setBio($bio){
        if (is_string($bio)){
            $this->_bio=$bio;
        }
    }
    public function setIntroverti($intr){
        if (is_int($intr)){
            $this->_introverti=$intr;
        }
    }
    public function setAnalytique($ana){
        if (is_int($ana)){
            $this->_analytique=$ana;
        }
    }
    public function setLoyal($loy){
        if (is_int($loy)){
            $this->_loyal=$loy;
        }
    }
    public function setPassif($pas){
        if (is_int($pas)){
            $this->_passif=$pas;
        }
    }
    public function setReseau($res){
        if (is_int($res)){
            $this->_reseau=$res;
        }
    }
    public function setMobile($mob){
        if (is_int($mob)){
            $this->_mobile=$mob;
        }
    }
    public function setEmail($em){
        if (is_int($em)){
            $this->_email=$em;
        }
    }
    public function setMedia($med){
        if (is_int($med)){
            $this->_media=$med;
        }
    }
    public function setBrand1($bra1){
        if (is_string($bra1)){
            $this->_brand1=$bra1;
        }
    }
    public function setBrand2($bra2){
        if (is_string($bra2)){
            $this->_brand2=$bra2;
        }
    }
    public function setBrand3($bra3){
        if (is_string($bra3)){
            $this->_brand3=$bra3;
        }
    }
    public function setConcept($conc){
        if (is_string($conc)){
            $this->_concept=$conc;
        }
    }
    public function setPerformance($perf){
        if (is_string($perf)){
            $this->_performance=$perf;
        }
    }
    public function setDesign($des){
        if (is_string($des)){
            $this->_design=$des;
        }
    }
    public function setPackaging($pack){
        if (is_string($pack)){
            $this->_packaging=$pack;
        }
    }
    public function setService($serv){
        if (is_string($serv)){
            $this->_service=$serv;
        }
    }
    public function setMark($mar){
        if (is_string($mar)){
            $this->_mark=$mar;
        }
    }
    public function setPrice($pri){
        if (is_string($pri)){
            $this->_price=$pri;
        }
    }
    public function setTarifs($tar){
        if (is_string($tar)){
            $this->_tarifs=$tar;
        }
    }
    public function setVente($ven){
        if (is_string($ven)){
            $this->_vente=$ven;
        }
    }
    public function setTaille($tai){
        if (is_string($tai)){
            $this->_taille=$tai;
        }
    }
    public function setDistribution($dist){
        if (is_string($dist)){
            $this->_distribution=$dist;
        }
    }
    public function setStrategie($strat){
        if (is_string($strat)){
            $this->_strategie=$strat;
        }
    }
    public function setHors_media($hor){
        if (is_string($hor)){
            $this->_hors_media=$hor;
        }
    }






















}

