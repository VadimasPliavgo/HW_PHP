<?php

use HW\Task\Deeper\Deeperfile as Deeperfile;
use HW\Task\Taskfile as Taskfile;
use HW\Task2\Infinity\Firstinfinity as Firstinfinity;
use HW\Task2\Infinity\Secondinfinity as Secondinfinity;

require_once "psr4/start.php";


$first = new Taskfile();
$second = new Deeperfile();
$third = new Firstinfinity();
$Fourth = new Secondinfinity();