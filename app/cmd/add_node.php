<?php
require "api_login.php";

$startNode = $client->makeNode();
$startNode->setProperty("name", "start node")
  ->setProperty("created", "2015-08")
  ->save();
$startLabel = $client->makeLabel("START");
$startNode->addLabels([$startLabel]);

$props = [
  "name" => "end node",
  "created" => "2015-08"
];

$endNode = $client->makeNode($props)
  ->save();
$endLabel = $client->makeLabel("END");
$endNode->addLabels([$endLabel]);

$startNode->relateTo($endNode, "HAS_RELATION")
  ->setProperty("created", "2015-08")
  ->save();
