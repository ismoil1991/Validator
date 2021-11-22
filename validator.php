<?php
session_start();

/**
 * Parametrs:
 * string - $email
 * string - $password
 *
 * Description: авторизовать пользователя
 *
 * Return value: boolean
 */

function validate($data, $type)
{
    if ($type == 'email') {
        $filter  =filter_var($data, FILTER_VALIDATE_EMAIL);
        if(!is_string($filter)){
            return 'Введите корректный email';
        }
    } elseif ($type == 'password') {
        if (!is_string($data) ||
            $data == '' ||
            strlen($data) < 8 ||
            strlen($data) > 64
        )
            return 'Введите корректный password';
    } else {
        if(!preg_match('^[A-Za-z]+\s[A-Za-z]+\s[A-Za-z]+$', $data)){
            return 'Введите корректный full_name';
        }
    }

}

?>