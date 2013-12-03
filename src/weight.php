<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of weight
 *
 * @author Marcel
 */
class Weight {
    //put your code here
    private $value;
    
    function __construct($value) {
        $this->value = $value;
    }
    
    public function getValue() {
        return $this->value;
    }

    public function setValue($value) {
        $this->value = $value;
    }

}

?>
