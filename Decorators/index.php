<?php
ini_set("display_errors","1");
ERROR_REPORTING(E_ALL);

require('Document.php');
require('DocumentClass.php');
require('DocumentDecorator.php');
require('StrongDecorator.php');
require('EmDecorator.php');

$document = new EmDecorator(new StrongDecorator(new DocumentClass('MyDocument', 'Hello world')));
?>

<h2>Title</h2>
<pre><?=htmlentities($document->getTitle()) ?></pre>

<h2>Body</h2>
<pre><?=htmlentities($document->getBody()) ?></pre>


