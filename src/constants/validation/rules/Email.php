<?php

namespace App\Constants\Validation\Rules;

final readonly class Email
{
    public const PATTERN        = '/^[a-z]{1,}@{1}' . self::DOMAIN_NAME . '$/i';

    private const DOMAIN_NAME   = '[a-z]{1,}[a-z\d]{0,}([.]{1}[a-z]{2,}){1,}';
}
