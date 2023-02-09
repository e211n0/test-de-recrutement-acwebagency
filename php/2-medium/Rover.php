<?php

declare(strict_types=1);

namespace App;

class Rover
{
    private string $direction;
    private int $y;
    private int $x;

    public function __construct(int $x, int $y, string $direction)
    {
        $this->direction = $direction;
        $this->y = $y;
        $this->x = $x;
    }

    public function receive(string $commandsSequence): void
    {
        $commandsSequenceLenght = strlen($commandsSequence);
        for ($i = 0; $i < $commandsSequenceLenght; ++$i) {
            $command = substr($commandsSequence, $i, 1);
            if ($command === "l" || $command === "r") {
                // Rotate Rover
                // un switch case permet de + facilement identifier les différents cas en + de préovir un cas par défaut si nécessaire
                // pour la clarté du code, un test ternaire simplifie l'écriture
                switch ($this->direction) {
                    case 'N':
                        $this->direction = $command === "r" ? "E" : "W";
                        break;
                    
                    case 'S':
                        $this->direction = $command === "r" ? "W" : "E";
                        break;
                    
                    case 'W':
                        $this->direction = $command === "r" ? "N" : "S";
                        break;
                    
                    case 'E':
                        $this->direction = $command === "r" ? "S" : "N";
                        break;
                    
                    default:
                    // traitement par défaut si la direction ne correspond pas à N,S,E ou W et donc qu'on rencontre un bug
                        break;
                }
            } else {
                // Displace Rover
                $displacement = $command === "f" ? 1 : -1;

                switch ($this->direction) {
                    case 'N':
                        $this->y += $displacement;
                        break;
                    
                    case 'S':
                        $this->y -= $displacement;
                        break;
                    
                    case 'W':
                        $this->x -= $displacement;
                        break;
                    
                    case 'E':
                        $this->x += $displacement;
                        break;
                    
                    default:
                        // traitement par défaut si la direction ne correspond pas à N,S,E ou W et donc qu'on rencontre un bug
                        break;
                }
            }
        }
    }
}