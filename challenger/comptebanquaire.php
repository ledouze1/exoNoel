<?php

class CompteBancaire{
    public float $solde;

    public function __construct(float $soldeInitial) {
        $this->solde = $soldeInitial;
    }

    public function deposer($montant) {
        $this->solde += $montant;
        echo "le montant déposé est de $montant. ";
    }

    public function retirer($montant) {
        if ($montant > $this->solde) {
            echo "Le montant à retirer dépasse le solde! ";
        } else {
            $this->solde -= $montant;
            echo "le montant retiré est de $montant. ";
        }
    }


    /*
    // GET SET //

    public function getSolde(): float{
        return $this->solde;
    }
    public function setSolde(float $solde): void{
        $this->solde = ($solde);
    }
    */
}



?>