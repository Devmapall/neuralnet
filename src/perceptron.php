<?php
require_once "neuron.php";
require_once "weightedNeuron.php";
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of perceptron
 *
 * @author Marcel
 */
class Perceptron implements Neuron {
    //put your code here
    private $output = 0.0;
    private $inputs = array();
    private $outputs = array();
    private $layer;
    private $errorGradient;
    
    public function calcErrorGradient($target) {
        $error = 0.0;
        foreach($outputs as $wn) {
            $n = $wn->getNeuron();
            $w = $wn->getWeight();
            $perror = $n->getErrorGradient();
            $error += $perror*$w->getValue();
        }
        return $error;
    }

    public function execute() {
        $x = $this->getWeightedSum();
        $this->output = 1.0/ (1.0 + exp(-1*$x));
    }

    public function getErrorGradient() {
        return $this->errorGradient;
    }

    public function getOutput() {
        return $this->output;
    }

    public function getWeightedNeuronOf(Neuron $n) {
        foreach($inputs as $wn) {
            if($wn->getNeuron() === $n) {
                return $wn;
            }
        }
    }

    public function setInputNeurons(array $in) {
        foreach($in as $n) {
            $wn = new WeightedNeuro();
            $wn->setNeuron($n);
            $wn->setWeight((float)(mt_rand(0,10)/10));
            $this->inputs[] = $wn;
        }
    }

    public function setLayer(Layer $l) {
        $this->layer = $l;
    }

    public function setOutputNeurons(array $out) {
        foreach($out as $n) {
            $wn = $n->getWeightedNeuronOf($this);
            $this->outputs[] = $wn;
        }
    }

    public function updateWeights() {
        foreach($inputs as $wn) {
            $new = $wn->getWeight().getValue() + (0.25 * $this->errorGradient * $wn->getNeuron()->getOutput());
            $wn->setWeight(new Weight($new));
        }
    }
    
    public function changeWeight(Neuron $n, Weight $w) {
        foreach($inputs as $wn) {
            if($wn->getNeuron() === $n) {
                $wn->setWeight($w);
            }
        }
    }
    
    public function getWeightedSum() {
        $sum = 0.0;
        
        foreach($inputs as $wn) {
            $sum += $wn->getValue();
        }
        
        return $sum;
    }
}

?>
