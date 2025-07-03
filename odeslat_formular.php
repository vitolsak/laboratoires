<?php
// Použijeme nástroje z nahrané složky PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// ---- Funkce pro načtení .env souboru ----
function loadEnv($path) {
    if (!file_exists($path)) {
        return;
    }
    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) {
            continue;
        }
        list($name, $value) = explode('=', $line, 2);
        $name = trim($name);
        $value = trim($value, '"');
        $_ENV[$name] = $value;
    }
}
// Načteme proměnné ze souboru .env
loadEnv(__DIR__ . '/.env');
// ---- Konec funkce pro načtení ----


header('Content-Type: application/json');
$response = ['success' => false, 'message' => 'Neznámá chyba.'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Načtení dat z formuláře
    $jmeno_navstevnika = trim($_POST['name']);
    $email_navstevnika = trim($_POST['email']);
    $zprava = trim($_POST['message']);

    // Validace dat
    if (empty($jmeno_navstevnika) || empty($zprava) || !filter_var($email_navstevnika, FILTER_VALIDATE_EMAIL)) {
        $response['message'] = 'Prosím, vyplňte všechna pole správně.';
        echo json_encode($response);
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // --- NASTAVENÍ SERVERU (načteno z .env) ---
        $mail->isSMTP();
        $mail->Host       = $_ENV['SMTP_HOST']; 
        $mail->SMTPAuth   = true;
        $mail->Username   = $_ENV['SMTP_USERNAME'];
        $mail->Password   = $_ENV['SMTP_PASSWORD']; // BEZPEČNĚ NAČTENO
        $mail->SMTPSecure = $_ENV['SMTP_SECURE'] === 'tls' ? PHPMailer::ENCRYPTION_STARTTLS : PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = (int)$_ENV['SMTP_PORT'];

        $mail->CharSet    = 'UTF-8';

        // --- NASTAVENÍ E-MAILU (odesílatel a příjemce) ---
        $mail->setFrom($_ENV['SMTP_USERNAME'], $jmeno_navstevnika);
        $mail->addAddress($_ENV['RECIPIENT_EMAIL']);
        $mail->addReplyTo($email_navstevnika, $jmeno_navstevnika);

        // --- OBSAH E-MAILU ---
        $mail->isHTML(false);
        $mail->Subject = 'Nová zpráva z webu Laboratoires.cz od ' . $jmeno_navstevnika;
        $mail->Body    = "Jméno: " . $jmeno_navstevnika . "\n" .
                         "E-mail: " . $email_navstevnika . "\n\n" .
                         "Zpráva:\n" . $zprava;

        $mail->send();
        $response['success'] = true;
        $response['message'] = 'Děkujeme. Zpráva byla úspěšně odeslána.';

    } catch (Exception $e) {
        // Chybu neukazujeme uživateli, ale můžeme si ji zalogovat
        // error_log("Mailer Error: " . $mail->ErrorInfo);
        $response['message'] = "Zprávu se nepodařilo odeslat. Zkuste to prosím později.";
    }
} else {
    $response['message'] = 'Neplatný požadavek.';
}

echo json_encode($response);
?>