<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Marcel
 */
interface Layer {
    //put your code here
    public function addNeuron(Neuron $n);
    public function getNeurons();
    public function calc();
}

?>
