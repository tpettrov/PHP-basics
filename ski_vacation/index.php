<?php
require_once 'app.php';


$data = $reservationService->getIndexViewData();
$app->loadTemplate("index_frontend", $data );