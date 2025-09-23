<?php
namespace Helpers;

class ValidationHelper
{
    /*
     * Check, if an email is valid
     */
    public static function validateEmail($email) : bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    /*
     * Check, if a password is valid
     * At least 8 characters, 1 uppercase, 1 lowercase, 1 number, 1 special character
     */
    public static function validatePassword($password) : bool
    {
        return preg_match('/^(?=.*[A-Z])(?=.*[0-9])(?=.*[a-z])(?=.*[\W_])(?=.{8,})/', $password);
    }

    /*
     * Check, if a username is valid
     * Allowed characters: a-z, A-Z, 0-9, ., _, -
     * Length: 3-30 characters
     */
    public static function validateUsername($username) : bool {
        return preg_match('/^[\w.-]{3,30}$/', $username);
    }
}