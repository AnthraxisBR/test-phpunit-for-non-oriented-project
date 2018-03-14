<?php

include 'vendor/autoload.php';
include 'src/funcaoString.php';

use PHPUnit\Framework\TestCase;

final class StringTest extends TestCase {
    
    public function test_receber() {

        $this->assertEquals("algo", receber('algo'));   
    }
    

}
