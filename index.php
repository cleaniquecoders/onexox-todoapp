<?php

require_once 'bootstrap/app.php';

use App\Http\Request;

if (Request::isGet()) {
    echo 'hello world of oop';
}
