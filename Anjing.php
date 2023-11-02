<?php

include_once "Hewan.php";

class Anjing implements Hewan
{
    public function berkomunikasi(): void
    {
        echo "gukguk";
    }

    public function makan(): void
    {
        echo "Anjing makan daging";
    }
}
