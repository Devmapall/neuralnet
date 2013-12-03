<?php
require_once 'layer.php';
require_once 'neuron.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of inputLayer
 *
 * @author Marcel
 */
class InputLayer implements Layer {
    //put your code here
    private $neurons = array();
    
    public function addNeuron(Neuron $n) {
        $this->neurons[] = $n;
        $n->setLayer($this);
    }

    public function calc() {
        
    }

    public function getNeurons() {
        return $this->neurons;
    }
}

?>
