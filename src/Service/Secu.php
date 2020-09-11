<?php

namespace SecuCli\Service;

/**
 * Class SecuCli\Service\Secu
 * 
 * @category SecuCli\Service
 * @package  SecuCli\Service
 * @author   Christian Shungu <christianshungu@lanteas.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     https://lanteas.com/
 * 
*/

class Secu
{
    /**
     * Numéro
     * 
     * @var string|null
     */
    private $_numero;

    /**
     * Construct
     * 
     * @param string $numero - N
     * 
     * @return void
     */
    public function __construct(string $numero="185057800608436")
    {
        $this->_numero = $numero;
    }

    /**
     * Get numéro
     *
     * @return string|null
     */ 
    public function getNumero(): ?string
    {
        return $this->_numero;
    }

    /**
     * Set numéro
     *
     * @param string|null $numero  Numéro
     *
     * @return self
     */ 
    public function setNumero(string $numero): self
    {
        $this->_numero = $numero;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return  string|null
     */ 
    public function getSexe(): ?string
    {
        $statut = "Inconnu";
        if (!is_null($this->_numero)) {
            $sexe   = substr($this->_numero, 0, 1);
            switch ($sexe) {
            case '1':
                $statut = "Monsieur";
                break;
            case '2':
                $statut = "Madame";
                break;
            }
            return $statut;
        }
        return $statut;
    }

    /**
     * Get Annee de naissance
     *
     * @return  int|null
     */ 
    public function getAnneeNaissance(): ?int
    {
        $annee = 0000;
        if (!is_null($this->_numero)) {
            $annee  = intval(substr($this->_numero, 1, 2));
            $annee = $annee + 1900;
            
            return $annee;
        }
        return $annee;
    }
    /**
     * Get Mois
     *
     * @return  string|null
     */ 
    public function getMois(): ?string
    {
        $mois = "Inconnu";
        if (!is_null($this->_numero)) {
            $val = $mois = intval(substr($this->_numero, 3, 2));
            switch ($val) {
            case 1 : 
                $mois = "Janvier";
                break;
            case 2 : 
                $mois = "Février";
                break;
            case 3 : 
                $mois = "Mars";
                break;
            case 4 : 
                $mois = "Avril";
                break;
            case 5 : 
                $mois = "Juin";
                break;
            case 6 : 
                $mois = "Juillet";
                break;
            case 7 : 
                $mois = "Juillet";
                break;
            case 8 : 
                $mois = "Aout";
                break;
            case 9 : 
                $mois = "Septembre";
                break;
            case 10 : 
                $mois = "Octobre";
                break;
            case 11 : 
                $mois = "Novembre";
                break;
            case 12 : 
                $mois = "Décembre";
                break;
            }
            return $mois;
        }
        return $mois;
    }

    /**
     * Get Département
     *
     * @return  string|null
     */ 
    public function getDepartement (): ?string
    {
        $departement = "99";
        if (!is_null($this->_numero)) {
            $departement  = substr($this->_numero, 5, 2);
            return $departement;
        }
        return $departement;
    }

     /**
     * Get Commune
     *
     * @return  string|null
     */ 
    public function getCommune(): ?string
    {
        $commune = "99312";
        if (!is_null($this->_numero)) {
            $commune  = substr($this->_numero, 5, 5);
            return $commune;
        }
        return $commune;
    }

    /**
     * Get Numéro  d'ordre
     *
     * @return  int|null
     */ 
    public function getOrdre(): ?int
    {
        $order = 00;
        if (!is_null($this->_numero)) {
            $order = intval(substr($this->_numero, 10, 3));
            return $order;
        }
        return $order;
    }

    /**
     * Get Clé de sécurite
     *
     * @return  int|null
     */ 
    public function getCle(): ?int
    {
        $cle = 00;
        if (!is_null($this->_numero)) {
            $cle = intval(substr($this->_numero, 13));
            return  $cle;
        }
        return $cle;
    }

    /**
     * Get Info numéro de sécurite social
     *
     * @return  string|null
     */ 
    public function getInfo(): void
    {
        echo "".PHP_EOL;
        echo "\tLe numéro de sécurite social  : " .$this->getNumero().PHP_EOL;
        echo "\t-----------------------------------------------------" .PHP_EOL;
        echo "".PHP_EOL;
        echo "\tBonjour                       ".$this->getSexe().PHP_EOL;
        echo "\tVous êtes né                : ".$this->getAnneeNaissance().PHP_EOL;
        echo "\tAu mois de                  : ".$this->getMois().PHP_EOL;
        echo "\tDans le département         : ".$this->getDepartement().PHP_EOL;
        echo "\tDans la commune             : ".$this->getCommune().PHP_EOL;
        echo "\tL'ordre d'enregistrement    : ".$this->getOrdre().PHP_EOL;
        echo "".PHP_EOL;
        echo "".PHP_EOL;
    }
}