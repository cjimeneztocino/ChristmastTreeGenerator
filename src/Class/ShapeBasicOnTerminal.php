<?php

/**
 * Description of ShapeBasicOnTerminal
 *
 * @author cristobal
 */
class ShapeBasicOnTerminal {
    
    private $size;
    private $mainCharacter = 'X';
    private $increment = 2;

    function __construct() {
        
    }

    function getSize() {
        return $this->size;
    }

    function setSize($size) {
        $this->size = $size;
    }

    public function printShapeOnTerminal() {
        print("Halluchen Terminal \n");
        print_r("Size selected: " . $this->size . " \n");
        $this->printHeaderTreeOnTerminal();
        $this->printBodyTreeOnTerminal();
    }

    public function printHeaderTreeOnTerminal() {
        $timestoprint = 1;
        $whitetoprint = $this->size - $this->increment;

        for ($i = 1; $i < $this->size; $i++) {
            if ($i === 1) {
                $this->prinFirstLastOnTerminal();
            } elseif ($i < $this->getCenterPosition()) {
                $this->printWhiteSpaceTimesOnTerminal($whitetoprint);
                $this->printShapeTimesOnTerminal($timestoprint);
                $this->printWhiteSpaceTimesOnTerminal($whitetoprint);
                print ("\n");

                $timestoprint = $timestoprint + (2 * $this->increment);
                $whitetoprint = $whitetoprint - $this->increment;
            } elseif ($i === $this->getCenterPosition()) {
                print('+');
                $this->printShapeTimesOnTerminal($timestoprint);
                print('+');
                print ("\n");

                $timestoprint = $timestoprint - (2 * $this->increment);
                $whitetoprint = $whitetoprint + $this->increment;
            } else {
                $this->printWhiteSpaceTimesOnTerminal($whitetoprint);
                $this->printShapeTimesOnTerminal($timestoprint);
                $this->printWhiteSpaceTimesOnTerminal($whitetoprint);
                print ("\n");

                $timestoprint = $timestoprint - (2 * $this->increment);
                $whitetoprint = $whitetoprint + $this->increment;
            }
        }
        $this->prinFirstLastOnTerminal();
    }

    public function printBodyTreeOnTerminal() {
        $timestoprint = 1;
        $whitetoprint = $this->size - $this->increment;
        print ("\n");
        for ($i = 1; $i <= $this->size; $i++) {
            if ($i === 1) {
                $this->printWhiteSpaceTimesOnTerminal($whitetoprint);
                print ("+");
                $this->printWhiteSpaceTimesOnTerminal($whitetoprint);
                print ("\n");
            } else {
                $this->printWhiteSpaceTimesOnTerminal($whitetoprint);
                $this->printShapeTimesOnTerminal($timestoprint);
                $this->printWhiteSpaceTimesOnTerminal($whitetoprint);
                print ("\n");

                $timestoprint = $timestoprint + $this->increment;
                $whitetoprint--;
            }
        }
    }

    private function getCenterPosition() {
        return intdiv($this->size, 2) + 1;
    }

    public function prinFirstLastOnTerminal() {
        print(str_repeat(' ', $this->size - $this->increment) . '+' . str_repeat(' ', $this->size - $this->increment));
        print("\n");
    }

    private function printShapeTimesOnTerminal($times) {
        for ($i = 0; $i < $times; $i++) {
            print_r($this->mainCharacter);
        }
    }

    private function printWhiteSpaceTimesOnTerminal($times) {
        for ($i = 0; $i < $times; $i++) {
            print (" ");
        }
    }

}
