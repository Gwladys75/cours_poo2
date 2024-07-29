<?php

class CompteEpargne extends Compte

{
    private $taux_interets;

    public function __construct(string $nom, float $montant, int $taux)
    {
        
        parent::__construct($nom, $montant);
        $this->taux_interets= $taux;
    }
/**
 * Get the value of taux_interet
 *
 * @return integer
 */
    public function getTaux_interets()
    {
        return $this->taux_interets;
    }

    public function setTaux_interets($taux): self 
    {
        if ($taux >= 0) {

            $this->taux_interets = $taux;
        }
        return $this;

    
    }

public function calculInterets() 
{
    $this->solde += $this->solde * $this->taux_interets / 100;
}

}
