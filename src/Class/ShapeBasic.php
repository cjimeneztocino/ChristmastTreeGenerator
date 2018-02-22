<?php

/**
 * Description of ShapeBasic
 *
 * @author cristobal
 */
class ShapeBasic {

    private $size;
    private $treegenerator;
    private $treeHeader = [];
    private $treeBody = [];

    function __construct($size) {
        $this->setSize($size);
        $this->treegenerator = new TreeGenerator($this->size);
    }

    function getSize() {
        return $this->size;
    }

    function setSize($size) {
        $this->size = $size;
    }

    public function printShapeOnBrowser() {
        $this->treeHeader = $this->treegenerator->HeaderTree();
        $this->treeBody = $this->treegenerator->BodyTree();
        echo '<h2>Shape of ' . $this->size . ' size</h2>';

        echo '<div class="bordered">';
        foreach ($this->treeHeader as $value) {
            echo '<div class="monospace">' . $value . '</div>';
        }
        echo '<br>';
        foreach ($this->treeBody as $value) {
            echo '<div class="monospace">' . $value . '</div>';
        }
        echo '</div>';
    }

}
