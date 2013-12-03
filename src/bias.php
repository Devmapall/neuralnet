<?php
require_once "neuron.php";
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of bias
 *
 * @author Marcel
 */
class Bias implements Neuron {
    private $layer;
    
    //put your code here
    public function calcErrorGradient($target) {
        
    }

    public function execute() {
        
    }

    public function getErrorGradient() {
        
    }

    public function getOutput() {
        return 1.0;
    }

    public function getWeightedNeuronOf(Neuron $n) {
        
    }

    public function setInputNeurons(array $in) {
        
    }

    public function setLayer(Layer $l) {
        $this->layer = $l;
    }

    public function setOutputNeurons(array $out) {
        
    }

    public function updateWeights() {
        
    }
}

?>
