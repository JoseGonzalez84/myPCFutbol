<?php

namespace Futbol;

require_once 'Role.class.php';

class Player
{
    private string $name;
    private Role $role;
    private int $age;
    private int $skill;
    private string $nationality;
    private bool $injured;
    
    public function __construct(
        ?string $name = null,
        ?Role $role = null,
        ?int $age = null,
        ?int $skill = null,
        ?string $nationality = null,
        ?bool $injured = null
    ) {
        $this->setName($name);
        $this->setRole($role);
        $this->setAge($age);
        $this->setSkill($skill);
        $this->setNationality($nationality);
        $this->injured = $injured ?? false;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function setName(?string $name) : void
    {
        $this->name = $name ?? 'Jugador anonimo';
    }

    public function getRole() : Role
    {
        return $this->role;
    }

    public function setRole(?Role $role) : void
    {
        $this->role = $role ?? new Role();
    }

    public function getAge() : int
    {
        return $this->age;
    }

    public function setAge(?int $age) : void
    {
        $this->age = $age ?? 0;
    }

    public function getSkill() : int
    {
        return $this->skill;
    }

    public function setSkill(?int $skill) : void
    {
        $this->skill = $skill ?? 0;
    }

    public function getNationality() : string
    {
        return $this->nationality;
    }

    public function setNationality(?string $nationality) : void
    {
        $this->nationality = $nationality ?? 'ESP';
    }

    public function getInjured() : bool
    {
        return $this->injured;
    }

    public function setInjured(?bool $injured) : void
    {
        $this->injured = $injured ?? false;
    }
}
