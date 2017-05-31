<?php
/**
 * Created by PhpStorm.
 * User: talha
 * Date: 2017-05-31
 * Time: 11:00
 */
class MatrixSpiral
{
    private $row, $col;
    private $minRow, $minCol;
    private $maxRow, $maxCol;
    private $number;
    private $spiral;
    private $size;

    public function __construct($size)
    {
        $this->row = 0;
        $this->col = 0;

        $this->minRow = $this->minCol = 0;
        $this->maxRow = $this->maxCol = $size;
        $this->number = 0;
        $this->size = $size;
    }

    public function printMatrix()
    {
        foreach(range(0, ($this->size - 1)) as $item) {
            $this->goRight();
            $this->goDown();
            $this->goLeft();
            $this->goUp();
        }

        foreach($this->spiral as $row => $col) {
            $sorted[] = $this->arraySort($col);
        }

        print_r($sorted);
    }

    private function arraySort($a)
    {
        for($i = 0; $i < count($a); $i++) {
            $sorted[] = $a[$i];
        }

        return $sorted;
    }
    private function goRight()
    {
        for($col = $this->minCol; $col < $this->maxCol; ++$col) {
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
        $this->spiral[$row][$col] = sprintf("%02d", $item);
    }


}

$m = new MatrixSpiral(5);
$m->printMatrix();