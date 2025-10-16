<?php

require __DIR__ . '/../vendor/autoload.php';

GibberishAES::size(256);
$encrypted_string = GibberishAES::enc('Hello', 'world');
echo $encrypted_string;
