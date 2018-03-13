<?php

declare(strict_types = 1);

include 'vendor/autoload.php';
include 'src/funcaoString.php';

use PHPUnit\Framework\TestCase;

final class StringTest extends TestCase {

    public function test_receber() {

        $this->assertEquals("algo", receber('algo'));
        $this->assertEquals("algo", receber('algo2'));
        $this->assertSame("4", receber((int)4));
    }

}
