<?php
// === Autoload Composeru pro PHPMailer ===
require __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// === Funkce pro načtení .env souboru ===
function loadEnv($path) {
    if (!file_exists($path)) {
        return;
    }
    foreach (file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
        $line = trim($line);
        if ($line === '' || $line[0] === '#') {
            continue;
        }
        list($name, $value) = explode('=', $line, 2);
        $name  = trim($name);
        // Sundáme uvozovky i bílé znaky okolo
        $value = trim($value, " \t\n\r\0\x0B\"'");
        $_ENV[$name] = $value;
    }
}

// Načteme proměnné ze souboru .env
loadEnv(__DIR__ . '/.env');

// Odpověď budeme vracet jako JSON
header('Content-Type: application/json');
$response = [
    'success' => false,
    'message' => 'Neznámá chyba.'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Načtení a validace dat z formuláře
    $jmeno   = trim($_POST['name'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $zprava  = trim($_POST['message'] ?? '');

    if ($jmeno === '' || $zprava === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['message'] = 'Prosím, vyplňte všechna pole správně.';
        echo json_encode($response);
        exit;
    }

    $mail = new PHPMailer(true);
    try {
        // === Nastavení SMTP podle .env ===
        $mail->isSMTP();
        $mail->Host       = $_ENV['SMTP_HOST'];
        $mail->SMTPAuth   = true;
        $mail->Username   = $_ENV['SMTP_USERNAME'];
        $mail->Password   = $_ENV['SMTP_PASSWORD'];
        $mail->SMTPSecure = $_ENV['SMTP_SECURE'] === 'tls'
                            ? PHPMailer::ENCRYPTION_STARTTLS
                            : PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = (int) $_ENV['SMTP_PORT'];
        $mail->CharSet    = 'UTF-8';

        // Pokud narazíš na problémy s certifikátem, můžeš odkomentovat:
        /*
        $mail->SMTPOptions = [
            'ssl' => [
                'verify_peer'       => false,
                'verify_peer_name'  => false,
                'allow_self_signed' => true,
            ],
        ];
        */

        // === Nastavení e-mailu ===
        $mail->setFrom($_ENV['SMTP_USERNAME'], $jmeno);
        $mail->addAddress($_ENV['RECIPIENT_EMAIL']);
        $mail->addReplyTo($email, $jmeno);

        $mail->isHTML(false);
        $mail->Subject = 'Nová zpráva z webu od ' . $jmeno;
        $mail->Body    = "Jméno: $jmeno\n"
                       . "E-mail: $email\n\n"
                       . "Zpráva:\n$zprava";

        // --- Volitelný debug (po odladění zakomentuj) ---
        // $mail->SMTPDebug   = PHPMailer::DEBUG_SERVER;
        // $mail->Debugoutput = 'error_log';

        // Pošleme
        $mail->send();
        $response['success'] = true;
        $response['message'] = 'Děkujeme. Zpráva byla úspěšně odeslána.';
    } catch (Exception $e) {
        // Pro ladění si můžeš nechat error_log($mail->ErrorInfo);
        error_log('PHPMailer Error: ' . $mail->ErrorInfo);
        $response['message'] = 'Zprávu se nepodařilo odeslat. Zkuste to prosím později.';
    }
} else {
    $response['message'] = 'Neplatný požadavek.';
}

// Vrátíme JSON odpověď
echo json_encode($response);
