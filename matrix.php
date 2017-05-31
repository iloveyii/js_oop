<?php
/**
 * Created by PhpStorm.
 * User: talha
 * Date: 2017-05-31
 * Time: 11:00
 */
class SpiralMatrix
{
    private $row, $col;
    private $minRow, $minCol;
    private $maxRow, $maxCol;
    private $number;
    private $spiral;
    private $size;
    private $format;

    public function __construct($size, $startFrom = 0)
    {
        $this->row = 0;
        $this->col = 0;

        $this->minRow = $this->minCol = 0;
        $this->maxRow = $this->maxCol = $size;
        $this->number = $startFrom;
        $this->size = $size;
        $n = strlen((string)($size * $size));
        $this->format = "%0{$n}d";
    }

    public function printMatrix()
    {
        $this->make();

        foreach($this->spiral as $row => $col) {
            foreach($col as $item) {
                echo $item . '  ';
            }

            echo PHP_EOL;
        }
    }

    private function make()
    {
        foreach(range(0, ($this->size - 1)) as $item) {
            $this->goRight();
            $this->goDown();
            $this->goLeft();
            $this->goUp();
        }

        $this->arraySort();
    }

    private function arraySort()
    {
        foreach($this->spiral as $row => $col) {
            $sortedColArray = [];
            for ($i = 0; $i < count($col); $i++) {
                $sortedColArray[] = $col[$i];
            }
            $sorted[] = $sortedColArray;
        }

        return $this->spiral = $sorted;
    }

    private function goRight()
    {
        for($col = $this->minCol; $col < $this->maxCol; $col++) {
            $this->printf($this->number++, $this->minRow, $col);
        }
        $this->minRow++;
    }

    private function goDown()
    {
        $this->maxCol--;
        for($row = $this->minRow; $row < $this->maxRow; $row++) {
            $this->printf($this->number++, $row, $this->maxCol);
        }
    }

    private function goLeft()
    {
        $this->maxRow--;
        for($col = $this->maxCol - 1; $col >= $this->minCol; $col--) {
            $this->printf($this->number++, $this->maxRow, $col);
        }
    }

    private function goUp()
    {
        for($row = $this->maxRow - 1; $row >= $this->minRow; $row--) {
            $this->printf($this->number++, $row, $this->minCol);
        }
        $this->minCol++;
    }

    private function printf($item, $row, $col)
    {
        $this->spiral[$row][$col] = sprintf($this->format, $item);
    }


}

$m = new SpiralMatrix(15, 1);
$m->printMatrix();