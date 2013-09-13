<?php

class Problem {

    private $n;
    private $m;
    private $lines;

    private static $problemCounter = 0;

    public function __construct($n, $m) {
        $this->n = $n;
        $this->m = $m;
        $this->lines = array();
        self::$problemCounter++;
    }

    public function newLine($line) {
        $theLine = array();
        for ($p = 0; $p < $this->m; $p++) {
            $theLine []= $line[$p];
        }
        $this->lines []= $theLine;
    }

    public function solve() {
        for ($i = 0; $i < $this->n; $i++) {
            for ($j = 0; $j < $this->m; $j++) {
                if ($this->lines[$i][$j] != "*") {
                    $count = 0;
                    foreach (array(
                            array(-1, -1),
                            array(-1, 0),
                            array(-1, 1),
                            array(0, -1),
                            array(0, 1),
                            array(1, -1),
                            array(1, 0),
                            array(1, 1)
                        ) as $coords
                    ) {
                        $neighbour_x = $i + $coords[0];
                        $neighbour_y = $j + $coords[1];
                        if ($neighbour_x >= 0 && $neighbour_x < $this->n
                            && $neighbour_y >= 0 && $neighbour_y < $this->m) {
                            if ($this->lines[$neighbour_x][$neighbour_y] === '*') {
                                $count++;
                            }
                        }
                    }
                    $this->lines[$i][$j] = $count;
                }
            }
        }
        return $this->formatSolution($this->lines);
    }

    private function formatSolution($lines) {
        $result = "Field #".self::$problemCounter.":\n";
        foreach ($lines as $line) {
            foreach ($line as $cell) {
                $result .= $cell;
            }
            $result .= "\n";
        }
        return $result."\n";
    }

}

class MineSweeper {

    public function process($input) {
        $lines = explode("\n", $input);
        $end = false;
        $result = "";
        while (!$end) {
            list($n, $m) = explode(" ", array_shift($lines));
            if ($n == 0 && $m == 0) {
                $end = true;
            } else {
                $problem = new Problem($n, $m);
                for ($i = 0; $i < $n; $i++) {
                    $problem->newLine(array_shift($lines));
                }
                $result .= $problem->solve();
            }
        }
        return $result;
    }

}
