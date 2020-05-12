<?php 
$manager=new\MongoDB\Driver\Manager("mongodb://localhost:27017");

$up=new \MongoDB\Driver\BulkWrite;

$up->update(['nome'=>'Afronesio'],['nome'=>'Afronesio','idade'=>45]);

$manager->executeBulkWrite('raiz.academicos',$up);

