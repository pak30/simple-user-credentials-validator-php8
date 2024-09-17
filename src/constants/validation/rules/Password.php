<?php

namespace App\Constants\Validation\Rules;

final readonly class Password
{
    public const MIN_LENTH              = 8;

    public const HAS_LOWERCASE          = '/([[:lower:]]{1})/';
    public const HAS_UPPERCASE          = '/([[:upper:]]{1})/';
    public const HAS_DIGITS             = '/[[:digit:]]{1}/';
    public const HAS_SPECIAL_CHARACTERS = '/[[:punct:]]{1}/';
    public const HAS_WHITESPACES        = '/[[:space:]]{1}/';
}
