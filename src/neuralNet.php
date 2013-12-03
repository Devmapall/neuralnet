<?php
require_once "activeRecord.php";
require_once "inputLayer.php";
require_once "hiddenLayer.php";
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of neuralNet
 *
 * @author Marcel
 */
class NeuralNet extends CI_Model implements Serializable, activeRecord {
    //put your code here
    private $layers = array();
    private $nrInput;
    private $nrOutput;
    
    public function __construct($input, $output) {
        $this->nrInput = $input;
        $this->nrOutput = $output;
        
        $inputLayer = new InputLayer(); 
        $this->layers[0] = $inputLayer;
        $bias = new Bias();
        $inputLayer->addNeuron($bias);
        
        for($i=0; $i < $this->nrInput; $i++) {
            $inputNeuron = new InputNeuron();
            $inputLayer->addNeuron($inputNeuron);
        }
        
    }
    
    public function addLayer($nrNeurons) {
        $last = $this->layers[count($this->layers)-1];
        $layer = new HiddenLayer($last);
        $bias = new Bias();
        $layer->addNeuron($bias);
        
        for($i=0; $i < $nrNeurons; $i++) {
            $perceptron = new Perceptron();
            $layer->addNeuron($perceptron);
        }
        
        $this->layers[] = $layer;
        $this->connectLayer($layer,$last);
    }
    
    public function createOutputLayer() {
        $last = $this->layers[count($this->layers)-1];
        $layer = new OutputLayer($last);
        $bias = new Bias();
        $layer->addNeuron($bias);
        
        for($i=0; $i < $this->nrOutput; $i++) {
            $out = new OutputNeuron();
            $layer->addNeuron($out);
        }
        
        $this->layers[] = $layer;
        $this->connectLayer($layer,$last);
    }
    
    public function classify(array $values) {
        $layer = $this->layer[0];
        $neurons = $layer->getNeurons();
        
        if(count($neurons) == count($values)) {
            foreach($neurons as $key => $neuron) {
                $neuron->setValue($values[$key]);
            }
        } else {
            throw new Exception("Number of values must be as high as number of input neurons");
        }
        
        foreach($this->layers as $layer) {
            $layer->calc();
        }
    }
    
    public function backpropagate(array $values, $layer=null) {
        $layer = $this->layers[count($this->layers)-1+$layer];
        if(count($output) == count($values)) {
            $neurons = $output->getNeurons();
            foreach($neurons as $neuron) {
                if($neuron instanceof Perceptron) {
                    $out = $neuron->getOutput();
                    
                }
            }
            
        } else {
            throw new Exception("Number as values must be as high as number of output neurons");
        }
    }
    
    public function serialize() {
        
    }

    public function unserialize($serialized) {
        
    }

    public function create() {
        
    }

    public function delete() {
        
    }

    public function read($id) {
        
    }

    public function update() {
        
    }
}

?>
