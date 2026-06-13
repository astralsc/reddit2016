<?php
$redirect_uri = $_POST['redirect_uri'] ?? $_GET['redirect_uri'] ?? 'reddit://callback';
$state = $_POST['state'] ?? $_GET['state'] ?? '';

$code = 'STUB_AUTH_CODE_123456';

header("Location: {$redirect_uri}?code={$code}&state={$state}");
exit;