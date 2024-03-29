<?php


namespace App;

class Game
{
    public object $player1;
    public object $player2;
    public int $flips = 0;
    
    function __construct(Player $player1, Player $player2)
    {
        $this->player1 = $player1;
        $this->player2 = $player2;
    }

    
    function Flips(): string // подбрасывание монет, путем рандома
    {
        return rand(0,1) ? "Орел" : "Решка";
    }

    function Winner(): Player // возвращает победителя
    {
        if($this->player1->Bank() > $this->player2->Bank())
        {
            return $this->player1;
        }
        else
        {
            return $this->player2;
        }

    }


    function GameOver(): void
    {


        echo <<< EOF
        

        Поздравляем {$this->Winner()->name} вы победили,
        Вы совершили {$this->flips} броска.

        Очки {$this->player1->name}: {$this->player1->Bank()}
        Очки {$this->player2->name}: {$this->player2->Bank()}

        EOF;
    }


    function Start() //метод запуска
    {
        while(true)
        {
            if ($this->Flips() == "Орел")
            {
                $this->player1->Point($this->player2);
            }
            else
            {
                $this->player2->Point($this->player1);
            }

            if ($this->player1->Bankrupt() || $this->player2->Bankrupt())
            {
                return $this->flips;
            }

            $this->flips++;

        }
    }

    
 
}