<?php

function tentar(array $arr){
    return $arr;
}

function gerarExcecao($arr){
    try{
        tentar('string');
    } catch (Exception $ex) {
       
        throw new Exception('string',1);
    }    
}

