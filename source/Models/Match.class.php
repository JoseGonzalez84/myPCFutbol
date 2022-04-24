<?php

namespace PCFutbol\Models;

class Match
{
    private Club $teamLocal;
    private Club $teamVisitor;
    private int $goalsLocal;
    private int $goalsVisitor;
    private Stadium $stadium;
    private int $assistance;
    private array $matchInfo;
    private int $time;

    public function __construct(
        Club $local,
        Club $visitor
    ) {
        $this->teamLocal = $local;
        $this->teamVisitor = $visitor;
        // Match ever is player in local stadium.
        $this->stadium = $local->getStadium();
        // The other parameters will be setted later.
        $this->goalsLocal = 0;
        $this->goalsVisitor = 0;
        $this->assistance = 0;
        $this->matchInfo = [];
        $this->time = 0;
    }

    private function start() : void
    {

    }

    private function game() : void
    {

    }

    private function stop() : void
    {

    }

    private function setAssistance() : int
    {
        $stadium

    }
}