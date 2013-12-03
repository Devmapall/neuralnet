<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Marcel
 */
interface Neuron {
    //put your code here
    public function setLayer(Layer $l);
    public function setInputNeurons(array $in);
    public function setOutputNeurons(array $out);
    public function getWeightedNeuronOf(Neuron $n);
    public function getErrorGradient();
    public function getOutput();
    public function execute();
    public function calcErrorGradient($target);
    public function updateWeights();
}

?>
