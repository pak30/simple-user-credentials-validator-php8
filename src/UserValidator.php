<?php

namespace App;

use App\Constants\Validation\Rules\Email;
use App\Constants\Validation\Rules\Password;

class UserValidator
{
    public function validateEmail(string $email): bool
    {
        return preg_match(Email::PATTERN, $email) === 1;
    }

    public function validatePassword(string $password): bool
    {
        if (! $this->hasMinLength($password)) {
            return false;
        }

        if (! $this->hasLowercaseLetter($password)) {
            return false;
        }

        if (! $this->hasUppercaseLetter($password)) {
            return false;
        }

        if (! $this->hasDigit($password)) {
            return false;
        }

        return $this->hasSpecialCharacter($password);
    }

    private function hasMinLength(string $password): bool
    {
        $minLength = Password::MIN_LENTH;

        return strlen($password) >= $minLength;
    }

    private function hasLowercaseLetter(string $password): bool
    {
        $pattern = Password::HAS_LOWERCASE_LETTER;

        return preg_match($pattern, $password) === 1;
    }
    
    private function hasUppercaseLetter(string $password): bool
    {
        $pattern = Password::HAS_UPPERCASE_LETTER;

        return preg_match($pattern, $password) === 1;
    }

    private function hasDigit(string $password): bool
    {
        $pattern = Password::HAS_DIGIT;

        return preg_match($pattern, $password) === 1;
    }

    private function hasSpecialCharacter(string $password): bool
    {
        $pattern = Password::HAS_SPECIAL_CHARACTER;

        return preg_match($pattern, $password) === 1;
    }
}
