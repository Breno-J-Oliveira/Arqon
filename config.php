<?php
/**
 * ARQON - THE VAULT | Global Configuration Center
 */

declare(strict_types=1);

define('ENVIRONMENT', 'development'); 

if (ENVIRONMENT === 'development') {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
} else {
    error_reporting(0);
    ini_set('display_errors', '0');
}

// 2. CREDENCIAIS DO BANCO DE DADOS
define('DB_HOST', 'localhost');
define('DB_NAME', 'arqon');
define('DB_USER', 'root');
define('DB_PASS', 'Senai@118'); // ⚠️ Certifique-se de que a senha do seu MySQL local é essa mesmo!
define('DB_CHARSET', 'utf8mb4');

// 3. IDENTIDADES MESTRES
define('ADMIN_EMAIL', 'admin@arqon.com');
define('SYSTEM_NAME', 'ARQON - THE VAULT');

// 4. SEGURANÇA E CRIPTOGRAFIA
define('JWT_SECRET_KEY', 'arqon_vault_secure_key_2024_!@#'); 
define('JWT_EXPIRATION', 7200); 
define('HASH_ALGO', PASSWORD_ARGON2ID); 

// 5. CONFIGURAÇÕES DE API / CORS
define('ALLOWED_ORIGIN', (ENVIRONMENT === 'development') 
    ? 'http://localhost/PROJETO-ARQUON/' 
    : 'https://www.arqon.com.br'
);

// 6. CAMINHOS E URLS
define('BASE_URL', 'http://localhost/PROJETO-ARQUON/'); 
define('UPLOAD_PATH', __DIR__ . '/public/uploads/');