<?php

include 'vendor/autoload.php';
include 'src/funcaoComDependencias.php';

class CoamDependenciasTest extends PHPUnit_Framework_TestCase {
    
     public function testNumber()
    {
        $n = dobrar_valor(5);
        $this->assertInternalType("int", $n);
        return $n;
    }

    /**
     * @depends testNumber
     */
    public function testEqualiyng($n)
    {        
        $this->assertSame(25,$n);
        return $n;
    }

    /**
     * @depends testEqualiyng
     */
    public function testLessThan50($n)
    {
        $this->assertLessThan(50, $n);
        $this->assertNotEmpty($n);
    }
}
