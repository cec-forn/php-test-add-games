<?php

class ErrorCode
{
    public const INVALID_CREDENTIALS = 2;
    public const LOGIN_FIELDS_REQUIRED = 3;

    public static function getErrorMessage(int $errorCode): string
    {
        switch ($errorCode) {
            case self::INVALID_CREDENTIALS:
                $result = "Email or password doesn't match database infos.";
                break;
            case self::LOGIN_FIELDS_REQUIRED:
                $result = "All fields are required.";
                break;
            default:
                $result = "An error has occured.";
        }

        return $result;
    }
}