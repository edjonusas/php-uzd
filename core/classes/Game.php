<?php

namespace Core;

class Game
{
    private array $teamA = [];
    private array $teamB = [];

    public function addPlayerToTeamA($player): void
    {
        $this->teamA[] = $player;
    }

    public function addPlayerToTeamB($player): void
    {
        $this->teamB[] = $player;
    }

    public function goTeamA(): void
    {
        foreach ($this->teamA as $playerA) {
            foreach ($this->teamB as $playerB) {
                if ($playerB->spotted() && $playerB->isAlive()) {
                    $playerB->hit($playerA->attack());
                    break;
                }
            }
        }
    }

}