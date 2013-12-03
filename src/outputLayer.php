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
class OutputLayer implements Layer {
    //put your code here
    private $neurons = array();
    private $prevLayer = null;
    
    public function __construct(Layer $prev) {
        $this->prevLayer = $prev;
    }
    
    public function addNeuron(Neuron $n) {
        $this->neurons[] = $n;
        $n->setLayer($this);
    }

    public function calc() {
        foreach($neurons as $n) {
            $n->execute();
        }
    }

    public function getNeurons() {
        return $this->neurons;
    }
}

?>
