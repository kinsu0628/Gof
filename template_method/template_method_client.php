<?php
require_once 'ListDisplay.class.php';
require_once 'TableDisplay.class.php';
require_once 'CsvDisplay.class.php';

$data = array('Design Pattern',
              'Gang of Four',
              'Template Method Sample1',
              'Template Method Sample2');
//echo 'start';
$display1 = new ListDisplay($data);
$display2 = new TableDisplay($data);
$display3 = new CsvDisplay($data);

$display1->display();
echo '<hr>';
$display2->display();
echo '<hr>';
$display3->display();