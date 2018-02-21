<?php

/**
 * Description of ShapeBasic
 *
 * @author cristobal
 */

class ShapeBasic {
    
    private $size;
    
    private $increment = 2;
    
    function __construct() {
        
    }

    function getSize() {
        return $this->size;
    }

    function setSize($size) {
        $this->size = $size;
    }
    
    public function PrintHeaderTree(){
       $timestoprint = 1;
       $whitetoprint = $this->size-$this->increment;
       
        for ($i = 1; $i <= $this->size; $i++) {
            if ($i === 1 || $i === $this->size) {
                $this->printFirstLast();
            } elseif ($i < $this->getCenterPosition()) {
                echo '<div class="monospace">';
                $this->printWhiteSpaceTimes($whitetoprint);
                $this->printShapeTimes($timestoprint);
                $this->printWhiteSpaceTimes($whitetoprint);
                echo '</div>';
                $timestoprint = $timestoprint + (2*$this->increment);
                $whitetoprint = $whitetoprint - $this->increment;
            } elseif ($i === $this->getCenterPosition()) {
                echo '<div class="monospace">+';
                $this->printShapeTimes($timestoprint);
                echo '+</div>';
                $timestoprint = $timestoprint - (2*$this->increment);
                $whitetoprint = $whitetoprint + $this->increment;
            } else {
                echo '<div class="monospace">';
                $this->printWhiteSpaceTimes($whitetoprint);
                $this->printShapeTimes($timestoprint);
                $this->printWhiteSpaceTimes($whitetoprint);
                echo '</div>';
                $timestoprint = $timestoprint - (2*$this->increment);
                $whitetoprint = $whitetoprint + $this->increment;
            }
        }
    }
    
    public function printBodyTree(){
       $timestoprint = 1;
       $whitetoprint = $this->size-$this->increment;
       echo '<br>';
       for ($i = 1; $i <= $this->size; $i++) {
           if ($i === 1) {
                echo '<div class="monospace">';
                $this->printWhiteSpaceTimes($whitetoprint);
                echo '+';
                $this->printWhiteSpaceTimes($whitetoprint);
                echo '</div>';
           }
           else {
                echo '<div class="monospace">';
                $this->printWhiteSpaceTimes($whitetoprint);
                $this->printShapeTimes($timestoprint);
                $this->printWhiteSpaceTimes($whitetoprint);
                echo '</div>';
                $timestoprint = $timestoprint + $this->increment;
                $whitetoprint--;
               
           }
       }
    }
    
    private function printShapeTimes($times){
        for ($i = 0; $i< $times; $i++) {
            echo 'X';
        }
    }
    
    private function printWhiteSpaceTimes($times){
        for ($i = 0; $i< $times; $i++) {
            echo '&nbsp;';
        }
    }
    
    public function getCenterPosition() {
        return intdiv($this->size, 2) + 1;
    }
    
    private function printFirstLast(){
         echo '<div class="monospace">'.str_repeat('&nbsp;', $this->size-$this->increment).'+'.str_repeat('&nbsp;', $this->size-$this->increment).'</div>';
        
    }
}