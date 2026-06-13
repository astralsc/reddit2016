<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
    'access_token' => 'test',
    'token_type' => 'bearer',
    'expires_in' => 3600,
    'refresh_token' => 'test',
    'scope' => 'identity read vote report submit edit history flair modconfig modflair modlog modposts modwiki save mysubreddits privatemessages subscribe wikiedit wikiread account creddits',
    'device_id' => 'aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa' // 36 char
];

echo json_encode($data);