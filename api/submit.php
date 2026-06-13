<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
    'json' => [
        'errors' => [],
        'data' => [
            'url' => 'https://www.reddit.com/r/test/comments/abc123/hello_world/',
            'drafts_count' => 0,
            'id' => 't3_abc123',
            'name' => 't3_abc123'
        ]
    ]
];

echo json_encode($data);