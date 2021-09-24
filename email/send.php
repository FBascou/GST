<?php
require_once __DIR__.'/lib.php';

$sendTo = 'greensmarttech.info@gmail.com';
$subject = 'Subject of a message';

$requestData = Request::getData(['name', 'email', 'message']);

if (!EmailTokenizer::isTokenValid($requestData['token'] ?? '')) {
    Response::send(400, 'Token is invalid');
}

$errors = Validator::validate(
    $requestData,
    [
        'name' => [
            Validator::REQUIRED,
        ],
        'email' => [
            Validator::REQUIRED,
            Validator::EMAIL,
        ],
        'company' => [
            Validator::COMPANY,
        ],
        'message' => [
            Validator::REQUIRED,
        ]
    ]
);

if (count($errors) > 0) {
    Response::send(400, 'Invalid form', ['violations' => $errors]);
}

$message = Templating::render(
    "To jest wiadomość ze strony:
Name: {{ name }},
Company: {{ company }}
Email: {{ email }},
Wiadomosć: {{ message }}
",
    $requestData
);

if (Mailer::send($sendTo, $subject, $message)) {
    Response::send(200, 'Message has been sent');
} else {
    Response::send(500, 'Message can not be sent.');
}