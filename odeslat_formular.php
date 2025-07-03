<?php
// Použijeme nástroje z nahrané složky PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

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
        // --- NASTAVENÍ SERVERU (přihlašovací údaje) ---
        // $mail->SMTPDebug = 2;
        
        $mail->isSMTP();
        $mail->Host       = 'wes1-smtp.wedos.net'; 
        $mail->SMTPAuth   = true;
        $mail->Username   = 'formular@evermo.cz';
        $mail->Password   = 'z.!*3A!-Ng7MLMCvnCb@'; // !!! STÁLE ZDE MUSÍ BÝT VAŠE HESLO !!!
        
        // !!! ZDE JE ZMĚNA: Zkoušíme druhou metodu šifrování a jiný port !!!
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587; 
        
        $mail->CharSet    = 'UTF-8';

        // --- NASTAVENÍ E-MAILU (odesílatel a příjemce) ---
        $mail->setFrom('formular@evermo.cz', $jmeno_navstevnika);
        $mail->addAddress('vit.olsak@fourbros.cz');
        $mail->addReplyTo($email_navstevnika, $jmeno_navstevnika);

        // --- OBSAH E-MAILU ---
        $mail->isHTML(false);
        $mail->Subject = 'Nová zpráva z webu Laboratoires.cz od ' . $jmeno_navstevnika;
        $mail->Body    = "Jméno: " . $jmeno_navstevnika . "\n" .
                         "E-mail: " . $email_navstevnika . "\n\n" .
                         "Zpráva:\n" . $zprava;

        $mail->send();
        $response['success'] = true;
        $response['message'] = 'Zpráva byla úspěšně odeslána.';

    } catch (Exception $e) {
        $response['message'] = "Zprávu se nepodařilo odeslat. Chyba: {$mail->ErrorInfo}";
    }
} else {
    $response['message'] = 'Neplatný požadavek.';
}

echo json_encode($response);
?>