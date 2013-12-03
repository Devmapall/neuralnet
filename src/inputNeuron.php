<?php
require_once "neuron.php";
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of inputNeuron
 *
 * @author Marcel
 */
class inputNeuron implements Neuron {
    //put your code here
    private $value;
    
    public function setValue($val) {
        $this->value = $val;
    }
    
    public function calcErrorGradient($target) {
        
    }

    public function execute() {
        
    }

    public function getErrorGradient() {
        
    }

    public function getOutput() {
        return $this->value;
    }

    public function getWeightedNeuronOf(Neuron $n) {
        
    }

    public function setInputNeurons(array $in) {
        
    }

    public function setLayer(Layer $l) {
        
    }

    public function setOutputNeurons(array $out) {
        
    }

    public function updateWeights() {
        
    }
}

?>
