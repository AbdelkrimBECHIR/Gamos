<?php
class Categorie {
    private string $idCategorie;
    private string $marque;
    private string $modele;
    private string $annee;
    private suit $transmission;
    private int $nombreSieges;
    private cat $typeCarburant;
    private float $prixJour;

    public function getIdCategorie(): string {
        return $this->idCategorie;
    }
    public function setIdCategorie(string $idCategorie): self {
        $this->idCategorie = $idCategorie;
        return $this;
    }

        public function getMarque(): string {
            return $this->marque;
        }
        public function setMarque(string $marque): self {
            $this->marque = $marque;
            return $this;
        }

        public function getModel(): string {
            return $this->modele;
        }
        public function setModel(string $modele): self {
            $this->modele = $modele;
            return $this;
        }
        public function getAnnee(): string {
            return $this->annee;
        }
        public function setAnnee(string $annee): self {
            $this->annee = $annee;
            return $this;
        }

        public function getTransmission(): suit {
            return $this->transmission;
        }
        public function setTransmission(suit $transmission): self {
            $this->transmission = $transmission;
            return $this;
        }

        public function getNombreSieges(): int {
            return $this->nombreSieges;
        }
        public function setNombreSieges(int $nombreSieges): self {
            $this->nombreSieges = $nombreSieges;
            return $this;
        }

        public function getTypeCarburant(): cat {
            return $this->typeCarburant;
        }
        public function setTypeCarburant(cat $typeCarburant): self {
            $this->typeCarburant = $typeCarburant;
            return $this;
        }

        public function getPrixjour(): float {
            return $this->prixJour;
        }
        public function setPrixJour(string $prixJour): self {
            $this->prixJour = $prixJour;
            return $this;
        }

}
