<?php
include 'vendor/autoload.php';
include 'src/funcaoExcecao.php';

class ExcecaoTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException        Exception
     * @expectedExceptionMessage string
     */
    public function testMensagemDaExcecao()
    {
        gerarExcecao('string');
    }


    /**
     * @expectedException     Exception
     * @expectedExceptionCode 10
     */
    public function testCodigoDaExcecao()
    {
        throw new Exception('string', 10);
    }
}