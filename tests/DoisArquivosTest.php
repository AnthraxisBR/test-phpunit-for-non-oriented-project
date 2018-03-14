<?php

include 'vendor/autoload.php';
include 'src/funcaoArquivo2.php';

class DoisArquivosTest extends PHPUnit_Framework_TestCase {

    public function testPossuiValor() {
        $data = make_data();
        $this->assertNotEmpty($data);
        return $data;
    }

    /**
     * @depends testPossuiValor
     */
    public function testTabelaComMaisDe2Linhas($data) {
        $this->assertGreaterThan(2, count($data));
        return $data;
    }

    /**
     * @depends testTabelaComMaisDe2Linhas
     */
    public function testTodasAsLinhasPossuem5Colunas($data) {
        foreach ($data as $row) {
            $c = count($row);
            $this->assertEquals(5, $c);
        }
        return $data;
    }

    /**
     * @depends testTodasAsLinhasPossuem5Colunas
     */
    public function testLinha2Coluna1Igual6($data) {
        $n = $data[1][1];
        $this->assertEquals(6, $n);
        return $data;
    }

    /**
     * @depends testLinha2Coluna1Igual6
     */
    public function testTabelaGeradaHTML($data) {
        $table = make_table($data);
        $c = (bool) preg_match("/<[^<]+>/", $table);
        $this->assertTrue($c);
    }

}
