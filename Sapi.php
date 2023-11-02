<?php

include_once "Hewan.php";

class Sapi implements Hewan
{
    public function berkomunikasi(): void
    {
        echo "emoo";
    }

    public function makan(): void
    {
        echo "Sapi makan rumput";
    }
}
