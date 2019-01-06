<?php
$m = new Memcached();
$m->addServer('memcached', 11211);

$m->set('int', 99);
$m->set('string', '文字列');
$m->set('array', array(11, 12));
/* expire 'object' key in 5 minutes */
$m->set('object', new stdclass, time() + 300);

echo "int:";
var_dump($m->get('int'));
echo "<br>";
var_dump($m->get('string'));
echo "<br>";
var_dump($m->get('array'));
echo "<br>";
var_dump($m->get('object'));
echo "<br>";
?>