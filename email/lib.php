<?php
session_start();

class EmailTokenizer {
    private const KEY = 'email_token';

    public static function getToken(): string
    {
        $_SESSION[self::KEY] = sha1(uniqid());

        return $_SESSION[self::KEY];
    }

    public static function isTokenValid(string $token): bool
    {
        if (!isset($_SESSION[self::KEY])) {
            return false;
        }

        return $token === $_SESSION[self::KEY];
    }
}

class Request {
    public static function getData(array $names): array
    {
        $names[] = 'token';
        $data = [];

        foreach ($names as $name) {
            $data[$name] = $_POST[$name] ?? null;
        }

        return $_POST;
    }
}

class Validator {
    public const REQUIRED = 'required';
    public const EMAIL = 'email';

    public static function validate(array $data, array $rules): array
    {
        $errors = [];

        foreach ($rules as $propertyName => $constraints) {
            if (in_array(self::REQUIRED, $constraints) && empty($data[$propertyName])) {
                $errors[$propertyName][] = 'This field is required';
            }

            if (in_array(self::EMAIL, $constraints) && !filter_var($data[$propertyName], FILTER_VALIDATE_EMAIL)) {
                $errors[$propertyName][] = 'This value should be an valid email';
            }
        }

        return $errors;
    }
}

class Response {
    public static function send(int $status, ?string $message = null, ?array $data = null)
    {
        http_response_code($status);

        $response = [];

        if (null !== $message) {
            $response['message'] = $message;
        }

        if (null !== $data) {
            $response['data'] = $data;
        }

        if (!empty($response)) {
            echo json_encode($response);
        }

        die;
    }
}

class Templating {
    public static function render(string $message, array $parameters): string
    {
        $search = array_map(fn (string $propertyName) => "{{ $propertyName }}", array_keys($parameters));
        $replace = array_values($parameters);

        return str_replace($search, $replace, $message);
    }
}

class Mailer {
    public static function send(string $to, string $subject, string $message): bool
    {
        return mail($to, $subject, $message);
    }
}