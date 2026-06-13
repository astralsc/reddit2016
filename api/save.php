<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
    'json' => [
        'errors' => [],
        'data' => []
    ]
];

echo json_encode($data);