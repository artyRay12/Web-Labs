<?php
header("Content-Type: text/plain");
echo (!empty($_GET['name'])) ? 'Hello Dear ' . $_GET['name'] : 'Enter the name';