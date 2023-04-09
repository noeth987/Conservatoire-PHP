<?php
class Professeur {
    private $idprof;
    private $nom;
    private $prenom;
    private $ref;
    private $salaire;

    public function getIdprof() {
        return $this->idprof;
    }

    public function setIdprof($idprof) {
        $this->idprof = $idprof;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function getRef() {
        return $this->ref;
    }

    public function setRef($ref) {
        $this->ref = $ref;
    }

    public function getSalaire() {
        return $this->salaire;
    }

    public function setSalaire($salaire) {
        $this->salaire = $salaire;
    }
}
