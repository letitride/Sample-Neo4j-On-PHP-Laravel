<?php
require ('../vendor/autoload.php');
$client = new Everyman\Neo4j\Client("neo4j", 7474);
$client->getTransport()->setAuth("neo4j", "testtest");
$label = $client->makeLabel('Movie');
$nodes = $label->getNodes();
var_dump($nodes);
