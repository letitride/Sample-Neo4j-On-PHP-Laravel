<?php
require('api_login.php');
$label = $client->makeLabel('Movie');
$nodes = $label->getNodes();

foreach( $nodes as $node ){
  print("Title : " . $node->getProperty("title") . "\n" );
  print("Released : " . $node->getProperty("released") . "\n\n" );
}
