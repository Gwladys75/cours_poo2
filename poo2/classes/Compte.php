<?php
abstract class Compte
{
    // Propriétés
    /**
     * Titulaire du compte
     *
     * @var string
     */
    private $titulaire;
    /**
     * Solde du compte
     *
     * @var float
     */
    protected $solde;

    // Constantes
    // const TAUX_INTERETS = 5;

    // ----------  Mèthodes -------------
    /**
     * Constructeur du compte bancaire
     *
     * @param string $nom Nom du titulaire
     * @param float $montant Montant du solde à l'ouverture
     */
    public function __construct(string $nom, float $montant = 100)
    {
        // on attribue le nom à la propriété titulaire de l'instance créée
        $this->titulaire = $nom;

        // on attribue le montant à la propriété solde de l'instance créée
        $this->solde = $montant;

        // echo $this->decouvert();
    }

    // Accesseurs
    /**
     * Getter de titulaire  - Retourne la valeur du titulaire du compte
     *
     * @return string
     */
    public function getTitulaire(): string
    {
        return $this->titulaire;
    }

    /**
     * Modifie le nom du titulaire et retourne l'objet
     *
     * @param string $nom Nom du titulaire
     * @return Compte Compte bancaire
     */
    public function setTitulaire(string $nom): self
    {
        if ($nom != "") {
            $this->titulaire = $nom;
        }

        return $this;
    }

    /**
     * Retourne le solde du compte
     *
     * @return float solde du compte
     */
    public function getSolde(): float
    {
        return $this->solde;
    }
    /**
     * Modifie le solde du compte
     *
     * @param float $montant Montant du solde
     * @return Compte Compte bancaire
     */
    public function setSolde(float $montant): self
    {
        if ($montant >= 0) {
            $this->solde = $montant;
        }

        return $this;
    }

    /**
     * Déposer de l'argent sur le compte
     *
     * @param float $montant Montant déposé
     * @return void
     */
    public function deposer(float $montant)
    {
        // on vérifie si le montant est positif
        if ($montant > 0) {
            $this->solde += $montant;
        }
    }

    /**
     * retourne une chaine de caractères affichant le solde
     *
     * @return string
     */
    public function voirSolde()
    {
        return "Le solde du compte est de $this->solde euros";
    }

    /**
     * Retirer un montant du solde du compte
     *
     * @param float $montant Montant à retirer
     * @return void
     */
    public function retirer(float $montant)
    {
        // On vérifie le montant et le solde
        if ($montant > 0 && $this->solde >= $montant) {
            $this->solde -= $montant;
        } else {
            echo 'Montant invalide ou solde insuffisant';
        }

        // echo $this->decouvert();
    }

    // private function decouvert()
    // {
    //     if ($this->solde < 0) {
    //         return "Vous êtes à découvet";
    //     } else {
    //         return "Vous n'êtes pas à découvert";
    //     }
    // }
}
