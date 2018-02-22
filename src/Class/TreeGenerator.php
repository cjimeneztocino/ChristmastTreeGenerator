<?php

/**
 * Description of TreeGenerator
 *
 * @author cristobal
 */
class TreeGenerator {

    private $size;
    private $mainCharacter = 'X';

    const INCREMENT = 2;
    const WHITE_SPACE = '&nbsp;';

    function __construct($size) {
        $this->size = $size;
    }

    function getSize() {
        return $this->size;
    }

    function getMainCharacter() {
        return $this->mainCharacter;
    }

    function setSize($size) {
        $this->size = $size;
    }

    function setMainCharacter($mainCharacter) {
        $this->mainCharacter = $mainCharacter;
    }

    public function HeaderTree() {
        $timestoprint = 1;
        $whitetoprint = $this->size - TreeGenerator::INCREMENT;
        $headerString = [];
        for ($i = 1; $i < $this->size; $i++) {
            if ($i === 1) {
                $headerString[$i] = $this->printFirstLast();
            } elseif ($i < $this->getCenterPosition()) {
                $headerString[$i] = $this->printWhiteSpaceTimes($whitetoprint) . $this->printShapeTimes($timestoprint) . $this->printWhiteSpaceTimes($whitetoprint);

                $timestoprint = $timestoprint + (2 * TreeGenerator::INCREMENT);
                $whitetoprint = $whitetoprint - TreeGenerator::INCREMENT;
            } elseif ($i === $this->getCenterPosition()) {
                $headerString[$i] = '+' . $this->printShapeTimes($timestoprint) . '+';

                $timestoprint = $timestoprint - (2 * TreeGenerator::INCREMENT);
                $whitetoprint = $whitetoprint + TreeGenerator::INCREMENT;
            } else {
                $headerString[$i] = $this->printWhiteSpaceTimes($whitetoprint) . $this->printShapeTimes($timestoprint) . $this->printWhiteSpaceTimes($whitetoprint);
                
                $timestoprint = $timestoprint - (2 * TreeGenerator::INCREMENT);
                $whitetoprint = $whitetoprint + TreeGenerator::INCREMENT;
            }
        }
        $headerString[$i] = $this->printFirstLast();
        return $headerString;
    }

    public function BodyTree() {
        $timestoprint = 1;
        $whitetoprint = $this->size - TreeGenerator::INCREMENT;
        $bodyString = [];

        for ($i = 1; $i <= $this->size; $i++) {
            if ($i === 1) {
                $bodyString[$i] = $this->printWhiteSpaceTimes($whitetoprint) . '+' . $this->printWhiteSpaceTimes($whitetoprint);
            } else {
                $bodyString[$i] = $this->printWhiteSpaceTimes($whitetoprint) . $this->printShapeTimes($timestoprint) . $this->printWhiteSpaceTimes($whitetoprint);

                $timestoprint = $timestoprint + TreeGenerator::INCREMENT;
                $whitetoprint--;
            }
        }
        return $bodyString;
    }

    private function printShapeTimes($times) {
        return str_repeat($this->mainCharacter, $times);
    }

    private function printWhiteSpaceTimes($times) {
        return str_repeat(TreeGenerator::WHITE_SPACE, $times);
    }

    private function getCenterPosition() {
        return intdiv($this->size, 2) + 1;
    }

    private function printFirstLast() {
        return str_repeat(TreeGenerator::WHITE_SPACE, $this->size - TreeGenerator::INCREMENT) . '+' . str_repeat(TreeGenerator::WHITE_SPACE, $this->size - TreeGenerator::INCREMENT);
    }

}
