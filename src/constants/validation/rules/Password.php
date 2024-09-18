<?php

namespace App\Constants\Validation\Rules;

final readonly class Password
{
    public const MIN_LENTH             = 8;

    public const HAS_LOWERCASE_LETTER  = '/([[:lower:]]{1})/';
    public const HAS_UPPERCASE_LETTER  = '/([[:upper:]]{1})/';
    public const HAS_DIGIT             = '/[[:digit:]]{1}/';
    public const HAS_SPECIAL_CHARACTER = '/[[:punct:]]{1}/';
}
