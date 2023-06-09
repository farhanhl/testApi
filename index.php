<?php
$response = array(
    "data" => array()
);

for ($i = 0; $i < 3; $i++) {
    $type = (rand(0, 1) === 0) ? "text" : "date";
    $response["data"][] = array(
        "label" => "Text " . ($i + 1),
        "field" => "field" . ($i + 1),
        "type" => $type,
        "options" => array(array("text" => "Option1", "value" => "1"))
    );
}

header('Content-Type: application/json');
echo json_encode($response);
?>
