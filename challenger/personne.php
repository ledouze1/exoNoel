<?php

class Personne{
    public string $nom;
    public int $age;

    public function __construct(string $nom, int $age){
        $this->nom = $nom; 
        $this->age = $age;
    }

    public function sePresenter(){
        return "Bonjour, je m'appelle $this->nom et j'ai $this->age ans.<br />";
    }


    /*
    // GET SET //

    public function getNom(): string{
        return $this->nom;
    }
    public function setNom(string $nom): void{
        $this->nom = strtoupper($nom);
    }


    public function getAge(): int{
        return $this->age;
    }
    public function setAge(string $age): void{
        $this->age = $age;
    }
    */
}
