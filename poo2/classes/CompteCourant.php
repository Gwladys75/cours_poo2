<?php

class CompteCourant extends Compte

{
    private $decouvert;
  /**
   * Constructeur de compte courant
   * 
   * @param string $nom Nom du titulaire
   * @param float $montant Montant du solde à l'ouverture 
   * @param integer $decouvert Découvert autorisé
   */
    public function __construct(string $nom, float $montant, int $decouvert)
    {
        // ont transfert les informations necessaires au conctructeur de Compte = "le parent"
        parent::__construct($nom, $montant);
       $this->decouvert= $decouvert; 
    }

    public function getDecouvert() : int {
        return $this->decouvert;
    }

    public function setDecouvert(int $montant) : self
    {
        if ($montant >= 0) {
            $this->decouvert = $montant;
        }
        return $this;
    }
    
    public function retirer(float $montant)

    {
        // On vérifie si le decouvert perrmet de retirer 
        if ($montant > 0 && $this->solde - $montant >= $this->decouvert) {

            $this->solde -= $montant;
        }else {
            echo 'solde insuffisant';
        }

        }
    }

