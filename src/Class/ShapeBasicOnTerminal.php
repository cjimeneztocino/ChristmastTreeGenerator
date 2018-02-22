<?php

/**
 * Description of ShapeBasicOnTerminal
 *
 * @author cristobal
 */
class ShapeBasicOnTerminal {
    
    private $size;
    private $treegenerator;
    private $treeHeader = [];
    private $treeBody = [];

    function __construct($size) {
        $this->size=$size;
        $this->treegenerator =  new TreeGenerator($this->size);
        $arvg =  new ArrayObject();
    }

    function getSize() {
        return $this->size;
    }

    function setSize($size) {
        $this->size = $size;
    }

    public function printShapeOnTerminal() {
        $this->treeHeader = $this->treegenerator->HeaderTree();
        $this->treeBody = $this->treegenerator->BodyTree();
        $treeheader = str_replace(TreeGenerator::WHITE_SPACE, ' ', $this->treeHeader);
        $treebody = str_replace(TreeGenerator::WHITE_SPACE, ' ', $this->treeBody);
        
        print("Hallo Terminal \n");
        print_r("Size selected: " . $this->size . " \n");
        foreach ($treeheader as $value) {
             print ($value."\n");
        }
        print("\n");
        foreach ($treebody as $value) {
             print ($value."\n");
        }
    }
    
    
}
