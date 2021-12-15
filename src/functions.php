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

            try {
                $email_message = "Name: $name" . "\n\n";
                $email_message .= "Whatsapp/telegram: $tel" . "\n\n";
                if (!empty($_POST['email'])) {
                    $email_message .= "Email: " . $_POST['email'] . "\n\n";
                }
                if (!empty($_POST['message'])) {
                    $email_message .= "Message: " . $_POST['message'] . "\n\n";
                }

                if (!empty($_POST['utm_source'])) {
                    $email_message .= "utm_source: " . $_POST['utm_source'] . "\n\n";
                }
                if (!empty($_POST['utm_medium'])) {
                    $email_message .= "utm_medium: " . $_POST['utm_medium'] . "\n\n";
                }
                if (!empty($_POST['utm_campaign'])) {
                    $email_message .= "utm_campaign: " . $_POST['utm_campaign'] . "\n\n";
                }
                if (!empty($_POST['utm_content'])) {
                    $email_message .= "utm_content: " . $_POST['utm_content'] . "\n\n";
                }
                if (!empty($_POST['utm_term'])) {
                    $email_message .= "utm_term: " . $_POST['utm_term'] . "\n\n";
                }

                $data = array(
                    'chat_id' => -1001617788597,
                    'text' => strip_tags($email_message),
                    'parse_mode' => 'html'
                );
                $url = 'https://api.telegram.org/bot1656470988:AAG5P9zEze3Lcv0dYSfkiVJWCU1ZAGD2-tc/sendMessage';

                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_POST, count($data));
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
                $response = curl_exec($ch);
                curl_close($ch);

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
