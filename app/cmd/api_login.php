<?php
require ('../vendor/autoload.php');
$client = new Everyman\Neo4j\Client("neo4j", 7474);
$client->getTransport()->setAuth("neo4j", "testtest");

