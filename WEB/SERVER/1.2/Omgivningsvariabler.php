<?php

$path = $_SERVER['PATH'];
$script_url = getenv("SCRIPT_URI");
$script_uri = $_SERVER["SCRIPT_URI"];
$https = $_SERVER["HTTPS"];
$ssl_tls_sni = $_SERVER["SSL_TLS_SNI"];
$http_host = $_SERVER["HTTP_HOST"];
$http_connection = $_SERVER["HTTP_CONNECTION"];
$http_uppgrade = $_SERVER["HTTP_UPPGRADE_INSECURE_REQUESTS"];
$http_user_agent = $_SERVER["HTTP_USER_AGENT"];
$http_accept = $_SERVER["HTTP_ACCEPT"];
$http_referer = $_SERVER["HTTP_REFERER"];
$http_accept_encoding= $_SERVER["HTTP_ACCEPT_ENCODING"];
$http_accept_language= $_SERVER["HTTP_ACCEPT_LANGUAGE"];
$http_cookie = $_SERVER["HTTP_COOKIE"];
$server_signature = $_SERVER["SERVER_SIGNATURE"];


$server_software = $_SERVER["SERVER_SOFTWARE"];
$server_name = $_SERVER["SERVER_NAME"];
$server_addr = $_SERVER["SERVER_ADDR"];
$server_port = $_SERVER["SERVER_PORT"];
$remote_addr = $_SERVER['REMOTE_ADDR'];
$document_root = $_SERVER["DOCUMENT_ROOT"];
$request_scheme = $_SERVER["REQUEST_SCHEME"];
$content_prefix = $_SERVER["CONTEXT_PREFIX"];
$context_document_root = $_SERVER["CONTEXT_DOCUMENT_ROOT"];
$server_admin = $_SERVER["SERVER_ADMIN"];
$script_filename = $_SERVER["SCRIPT_FILENAME"];
$remote_port = $_SERVER["REMOTE_PORT"];
$gateway_interface = $_SERVER["GATEWAY_INTERFACE"];
$server_protocol = $_SERVER["SERVER_PROTOCOL"];
$request_method = $_SERVER["REQUEST_METHOD"];
$query_string = $_SERVER["QUERY_STRING"];
$request_uri = $_SERVER["REQUEST_URI"];
$script_name = $_SERVER["SCRIPT_NAME"];
$php_self = $_SERVER["PHP_SELF"];
$request_time_float = $_SERVER["REQUEST_TIME_FLOAT"];
$request_time = $_SERVER["REQUEST_TIME"];

header('Content-type: text/plain');

echo "PATH: " . $path . "\n";
echo "SCRIPT_URL: " . $script_url . "\n";
echo "SCRIPT_URI: " . $script_uri . "\n";
echo "HTTPS: " . $https . "\n";
echo "SSL_TLS_SNI: " . $ssl_tls_sni . "\n";
echo "HTTP_HOST: " . $http_host . "\n";
echo "HTTP_CONNECTION: " . $http_connection . "\n";
echo "HTTP_UPGRADE_INSECURE_REQUESTS: " . $http_uppgrade . "\n";
echo "HTTP_USER_AGENT: " . $http_user_agent . "\n";
echo "HTTP_ACCEPT: " . $http_accept . "\n";
echo "HTTP_REFERER: " . $http_referer . "\n";
echo "HTTP_ACCEPT_ENCODING: " . $http_accept_encoding . "\n";
echo "HTTP_ACCEPT_LANGUAGE: " . $http_accept_language . "\n";
echo "HTTP_COOKIE: " . $http_cookie . "\n";
echo "SERVER_SIGNATURE: " . $server_signature . "\n"."\n";

echo "SERVER_SOFTWARE: " . $server_software . "\n";
echo "SERVER_NAME: " . $server_name . "\n";
echo "SERVER_ADDR: " . $server_addr . "\n";
echo "SERVER_PORT: " . $server_port . "\n";
echo "REMOTE_ADDR: " . $remote_addr . "\n";
echo "DOCUMENT_ROOT: " . $document_root . "\n";
echo "REQUEST_SCHEME: " . $request_scheme . "\n";
echo "CONTEXT_PREFIX: " . $content_prefix . "\n";
echo "CONTEXT_DOCUMENT_ROOT: " . $context_document_root . "\n";
echo "SERVER_ADMIN: " . $server_admin . "\n";
echo "SCRIPT_FILENAME: " . $script_filename . "\n";
echo "REMOTE_PORT: " . $remote_port . "\n";
echo "GATEWAY_INTERFACE: " . $gateway_interface . "\n";
echo "SERVER_PROTOCOL " . $server_protocol . "\n";
echo "REQUEST_METHOD: " . $request_method . "\n";
echo "QUERY_STRING: " . $query_string . "\n";
echo "REQUEST_URI: " . $request_uri . "\n";
echo "SCRIPT_NAME: " . $script_name . "\n";
echo "PHP_SELF: " . $php_self . "\n";
echo "REQUEST_TIME_FLOAT: " . $request_time_float . "\n";
echo "REQUEST_TIME: " . $request_time . "\n";


