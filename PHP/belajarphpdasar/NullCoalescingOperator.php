<?php
$data = [
    "action" => "create"
];

if (isset($data["action"])) {
    $action = $data["action"];
} else {
    $action = "Nothing";
}
echo $action . PHP_EOL;

//NullColescingOperator
$action = $data['action'] ?? "Nothing";
echo $action . PHP_EOL;