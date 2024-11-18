<?php
class Utilisateurs{
    public int $IdUtilisateur;
    public string $Nom;
    public string $Prenom;
    public string $Email;
    public string $MotDePasse;
    public string $NumeroTelephone;
    public int $NumeroPermis;
    public int $Age;
    public UserRoleEnum $role;

	public function getIdUtilisateur(): int {
		return $this->IdUtilisateur;
	}
    public function setIdUtilisateur(int $id_utilisateur): self
    {
        $this->IdUtilisateur = $id_utilisateur;
        return $this;
    }


    public function getNom(): string
    {
        return $this->Nom;
    }
    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;
        return $this;
    }

    public function getPrenom(): string
    {
        return $this->Prenom;
    }
    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;
        return $this;
    }
    
    public function getEmail(): string
    {
        return $this->Email;
    }
    public function setEmail(string $Email): self
    {
        $this->Email = $Email;
        return $this;
    }

    public function getMotDePasse(): string
    {
        return $this->MotDePasse;
    }
    public function setMotDePasse(string $MotDePasse): self
    {
        $this->MotDePasse = $MotDePasse;
        return $this;
    }

    public function getNumeroTelephone(): string
    {
        return $this->NumeroTelephone;
    }
    public function setNumeroTelephone(string $NumeroTelephone): self
    {
        $this->NumeroTelephone = $NumeroTelephone;
        return $this;
    }
    
    public function getNumeroPermis(): string
    {
        return $this->NumeroPermis;
    }
    public function setNumeroPermis(string $NumeroPermis): self
    {
        $this->NumeroPermis = $NumeroPermis;
        return $this;
    }

    public function getAge(): string
    {
        return $this->Age;
    }
    public function setAge(string $Age): self
    {
        $this->Age = $Age;
        return $this;
    }

    public function getRole(): UserRoleEnum
    {
        return $this->role;
    }
    public function setRole(UserRoleEnum $role):self
    {
        $this->role=$role;
        return $this;
    }



}


    