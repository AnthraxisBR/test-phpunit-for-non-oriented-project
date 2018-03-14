<?php

include 'vendor/autoload.php';
include 'src/funcaoComDependencias.php';


class CoamDependenciasTest extends PHPUnit_Framework_TestCase {
    
     public function testNumber()
    {
        $n = (int) 5;
        $this->assertInternalType("int", dobrar_valor($n));
        return $n;
    }

    /**
     * @depends testNumber
     */
    public function testEqualiyng($n)
    {        
        $this->assertNotEmpty($n);
        return $n;
    }

    /**
     * @depends testEqualiyng
     */
    public function testLess($n)
    {
        $this->assertLessThan(10, $n);
        $this->assertNotEmpty($n);
        return $n;
    }
}
