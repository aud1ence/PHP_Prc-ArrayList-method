<?php
include_once "app/MyList.php";

//$test->clear();
$array = [];
for ($i = 0; $i < 100; $i++) {
    array_push($array, rand(1, 100));
}
$test = new MyList(10, $array);
//echo $test->isEmpty();
//$test->insert(20, "Hello World");
//echo "<br>";
//$test->add("Toi la Bac si Hai");
//$test->remove(33);
//$test->get(20);
echo $test->indexOf("12");
var_dump($test->addAll($array));
$test->sort();
echo $test->size();
var_dump($test->elements);
