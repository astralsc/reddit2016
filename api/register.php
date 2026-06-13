<?php
http_response_code(200);
header('Content-Type: application/json');

setcookie(
    'reddit_session',
    'test', // og is 72 char
    [
        'expires' => time() + 15638399,
        'path' => '/',
        'domain' => '',
        'secure' => false,
        'httponly' => true,
        'samesite' => '',
    ]
);

$data = [
  'json' => [
    'errors' => [],
    'data' => [
      'modhash' => 'test',
      'cookie' => 'test'
    ]
  ]
];

echo json_encode($data);