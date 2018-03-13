<?php

declare(strict_types = 1);

include 'vendor/autoload.php';
include 'src/funcaoSum.php';
use PHPUnit\Framework\TestCase;


final class SumTest extends TestCase {

    public function test_sum() {
        
        $this->assertTrue(sum(4,3) == true);
    }

}
