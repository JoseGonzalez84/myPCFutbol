<?php

namespace PCFutbol\Models;

class Stadium
{
    private string $name;
    private int $spectators;
    private int $foundation;
    private int $length;
    private int $heigth;

    public function __construct(
        string $name,
        int $spectators,
        ?int $foundation = null
    ) {
        $this->setName($name);
        $this->setSpectators($spectators);
        $this->setFoundation($foundation);
        $this->length = 0;
        $this->heigth = 0;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function setName(?string $name) : void
    {
        $this->name = $name ?? '';
    }

    public function getSpectators() : int
    {
        return $this->spectators;
    }

    public function setSpectators(?int $spectators) : void
    {
        $this->spectators = $spectators ?? 0;
    }

    public function getFoundation() : int
    {
        return $this->foundation;
    }

    public function setFoundation(?int $foundation) : void
    {
        $this->foundation = $foundation ?? 1900;
    }
}
