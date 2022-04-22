<?php

namespace Futbol;

require_once 'Player.class.php';
require_once 'Stadium.class.php';

class Club
{
    /**
     * Name of the team.
     * @var string $name;
     */
    private string $name;

    /**
     * List of players.
     * @var array $players.
     */
    private array $players;
    
    /**
     * List of former players.
     * @var array $formerPlayers.
     */
    private array $formerPlayers;
    
    /**
     * Where the team plays football.
     * @var Stadium $stadium.
     */
    private Stadium $stadium;
    
    /**
     * Cash of the club.
     * @var int $cash.
     */
    private int $cash;

    /**
     * Constructor.
     */
    public function __construct(
        string $name,
        ?array $players = null,
        ?Stadium $stadium = null,
        ?int $cash = null
    ) {
        if (empty($players) === true) {
            $this->players = [];
        } else {
            foreach ($players as $player) {
                $this->addPlayer($player);
            }
        }

        $this->setName($name);
        // The stadium is setted at start and is not changeable.
        $this->stadium = $stadium ?? new Stadium(sprintf('%s Stadium', $this->getName()), rand('10000', '60000'));
        // Initialize former players list.
        $this->formerPlayers = [];
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function setName(?string $name) : void
    {
        $this->name = $name ?? 'Anon Team';
    }

    public function addPlayer(Player $player) : void
    {
        $this->players[$player->getName()] = $player;
    }

    public function removePlayer(Player $player) : void
    {
        // Include the player in the list of former players in the team.
        $this->formerPlayers[] = $this->players[$player->getName()];
        // Put out of the list of players.
        unset($this->players[$player->getName()]);
    }

    public function getPlayer(string $name) : ?Player
    {
        return $this->players[$name];
    }
}
