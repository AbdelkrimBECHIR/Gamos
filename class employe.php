<?php

class Employe{
    public int $id_employe;
    public int $id_utilisateur;
    public bool $role;
    public string $id_utilisateur;
    public UserTypeEnum $type;
 
public function setIdEmploye(int $id_employe) : self
{
     $this->setIdEmploye = $id_employe;
     return $this;
}

public function getEmploye() : int
{
    return $this->employe;
}

public function getIdUtilisateur() : int
{
    return $this->IdUtilisateur;
}

public function setIdUtilisateur(int $id_utilisateur) : self
{
    $this->setIdUtilisateur = $id_utilisateur;
return $this; 

}

public function setRole(int $role) : self
{
    $this->role = $role;
    return $this; 
}

public function getRole() : bool
{
    return $this->Role;
}

public function getEmployeType() : 
{
    return $this->employeType;
}

public function setEmployeType( string $employeTypeEnum) : EmployeTypeEnum
{
    $this->employeTypeEnum = $employeTypeEnum;
    return $this;
}

}
 
?>