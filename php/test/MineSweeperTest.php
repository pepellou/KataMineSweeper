<?php

require_once dirname(__FILE__).'/../src/MineSweeper.php';

define(VALID_INPUT, <<<EOD
4 4
*...
....
.*..
....
3 5
**...
.....
.*...
0 0
EOD
);

define(EXPECTED_OUTPUT, <<<EOD
Field #1:
*100
2210
1*10
1110

Field #2:
**100
33200
1*100


EOD
);

class MineSweeperTest extends PHPUnit_Framework_TestCase {

	public function test_aceptacion() {
        $mineSweeper = new MineSweeper();
        $this->assertEquals(EXPECTED_OUTPUT, $mineSweeper->process(VALID_INPUT));
    }

}
