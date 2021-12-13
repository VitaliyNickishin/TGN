<?php

function send_form()
{
    $res = [
        'status' => 'undefined',
        'message' => 'Your request has been successfully sent. Thank you!'
    ];
    if (isset($_POST['get_cf_modal']) || isset($_POST['get_cf_footer'])) {
        if (!empty($_POST['name']) && !empty($_POST['phone'])) {
            $name = $_POST['name'];
            $tel = $_POST['phone'];
            $email_message = "Name: $name \n\n";
            $email_message .= "Whatsapp/telegram: $tel \n\n";
            if (!empty($_POST['email'])) {
                $email_message .= "Email: " . $_POST['email'] . "\n\n";
            }
            if (!empty($_POST['message'])) {
                $email_message .= "Message: " . $_POST['message'] . " \n\n";
            }
            if (!empty($_POST['utm_source'])) {
                $email_message .= "<p>utm_source: " . $_POST['utm_source'] . " </p>";
            }
            if (!empty($_POST['utm_medium'])) {
                $email_message .= "<p>utm_medium: " . $_POST['utm_medium'] . " </p>";
            }
            if (!empty($_POST['utm_campaign'])) {
                $email_message .= "<p>utm_campaign: " . $_POST['utm_campaign'] . " </p>";
            }
            if (!empty($_POST['utm_content'])) {
                $email_message .= "<p>utm_content: " . $_POST['utm_content'] . " </p>";
            }
            if (!empty($_POST['utm_term'])) {
                $email_message .= "<p>utm_term: " . $_POST['utm_term'] . " </p>";
            }

            $to = 'pivnev.vlad@gmail.com,si@icoda.io';
            // $to = 'maximus.perepel96@gmail.com,gena.test.dev@gmail.com';

            $subject = 'Contact request from digitalwsiagency.com';
            $headers = 'From: info@digitalwsiagency.com'       . "\r\n" .
                'Reply-To: info@digitalwsiagency.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

            $sended_message = mail($to, $subject, $email_message, $headers);

            try {
                require_once __DIR__ . '/PHPMailer/PHPMailerAutoload.php';

                $email_message = "<p>Name: $name </p>";
                $email_message .= "<p>Whatsapp/telegram: $tel </p>";
                if (!empty($_POST['email'])) {
                    $email_message .= "<p>Email: " . $_POST['email'] . "</p>";
                }
                if (!empty($_POST['message'])) {
                    $email_message .= "<p>Message: " . $_POST['message'] . " </p>";
                }

                if (!empty($_POST['utm_source'])) {
                    $email_message .= "<p>utm_source: " . $_POST['utm_source'] . " </p>";
                }
                if (!empty($_POST['utm_medium'])) {
                    $email_message .= "<p>utm_medium: " . $_POST['utm_medium'] . " </p>";
                }
                if (!empty($_POST['utm_campaign'])) {
                    $email_message .= "<p>utm_campaign: " . $_POST['utm_campaign'] . " </p>";
                }
                if (!empty($_POST['utm_content'])) {
                    $email_message .= "<p>utm_content: " . $_POST['utm_content'] . " </p>";
                }
                if (!empty($_POST['utm_term'])) {
                    $email_message .= "<p>utm_term: " . $_POST['utm_term'] . " </p>";
                }

                $mailer = new PHPMailer(true);
                $mailer->DKIM_private = '/root/digitalwsiagency.com.private';
                $mailer->DKIM_selector = 'mail';
                $mailer->CharSet = 'utf-8';
                $mailer->isHTML(true);
                $mailer->setFrom('info@digitalwsiagency.com');
                $mailer->FromName = 'TGN';
                $mailer->addAddress('maximus.perepel96@gmail.com');
                // $mailer->addAddress('pivnev.vlad@gmail.com');
                // $mailer->addAddress('si@icoda.io');
                $mailer->Subject = 'Contact request from TGN';
                $mailer->Body    = $email_message;
                $mailer->send();
                $sended_message = true;
            } catch (Exception $e) {
                $sended_message = false;
            }

            if (!$sended_message) {
                $res = [
                    'status' => 'error_send_email',
                    'message' => 'There was a problem with email service. Write email to this email si@icoda.io.'
                ];
            } else {
                $res = [
                    'status' => 'success_send_form',
                    'message' => 'Your request has been successfully sent. Thank you!'
                ];
            }
        } else {
            $res = [
                'status' => 'error_form_validation',
                'message' => 'There was a problem with your submission. Please review the required fields.'
            ];
        }
    }

    return $res;
}


function saveCookie()
{
    $keys = array('utm_source', 'utm_medium', 'utm_campaign', 'utm_content', 'utm_term');
    foreach ($keys as $row) {
        if (!empty($_GET[$row])) {
            $value = strval($_GET[$row]);
            $value = stripslashes($value);
            $value = htmlspecialchars_decode($value, ENT_QUOTES);
            $value = strip_tags($value);
            $value = htmlspecialchars($value, ENT_QUOTES);
            setcookie('utm-' . $row, $value, 0, '/');
        }
    }
}


saveCookie();