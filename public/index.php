<?php



require __DIR__ . "/../vendor/autoload.php";

use App\Wcs\Hello;
use HelloWorld\SayHello;



//$test = new Hello();
//$test->talk();

$test = new SayHello();
echo $test->world();
//echo SayHello::world();
