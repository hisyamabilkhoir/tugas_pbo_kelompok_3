<?php

include_once "Hewan.php";

class Kambing implements Hewan
{
    public function berkomunikasi(): void
    {
        echo "embee";
    }

    public function makan(): void
    {
        echo "Kambing makan rumput";
    }
}
