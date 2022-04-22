<?php

namespace Futbol;

class Role
{
    private int $id;
    private string $name;
    private string $mark;

    public function __construct(
        ?int $id = null,
        ?string $name = null,
        ?string $mark = null
    ) {
        $this->setId($id);
        $this->setName($name);
        $this->setMark($mark);
    }

    public function getId() : int
    {
        return $this->id;
    }

    public function setId(int $id) : void
    {
        $this->id = $id ?? 0;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function setName(string $name) : void
    {
        $this->name = $name ?? 'Sin determinar';
    }

    public function getMark() : string
    {
        return $this->mark;
    }

    public function setMark(string $mark) : void
    {
        $this->mark = $mark ?? '--';
    }
}
