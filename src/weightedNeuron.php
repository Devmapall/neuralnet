<?php
require_once("neuron.php");
require_once("weight.php");
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of weightedNeuron
 *
 * @author Marcel
 */
class WeightedNeuron {
    //put your code here
    private $neuron;
    private $weight;
    
    function __construct() {
        
    }

    public function getNeuron() {
        return $this->neuron;
    }

    public function setNeuron(Neuron $neuron) {
        $this->neuron = $neuron;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function setWeight(Weight $weight) {
        $this->weight = $weight;
    }


}

?>
