<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Main extends BaseController
{
    public function index()
    {
        echo "<h1>index</h1>";
    }

    public function pagina_1()
    {
        echo "<h1>página 1</h1>";
    }

    public function pagina_2()
    {
        echo "<h1>página 2</h1>";
    }
}
