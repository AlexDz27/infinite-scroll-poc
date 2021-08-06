<?php

require_once './php/utils/getDresses.php';

$dresses = getDresses();

echo json_encode($dresses);