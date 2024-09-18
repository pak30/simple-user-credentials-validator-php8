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

        if (! $this->hasDigits($password)) {
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
        $pattern = Password::HAS_LOWERCASE;

        return preg_match($pattern, $password) === 1;
    }
    
    private function hasUppercaseLetter(string $password): bool
    {
        $pattern = Password::HAS_UPPERCASE;

        return preg_match($pattern, $password) === 1;
    }

    private function hasDigits(string $password): bool
    {
        $pattern = Password::HAS_DIGITS;

        return preg_match($pattern, $password) === 1;
    }

    private function hasSpecialCharacters(string $password): bool
    {
        $pattern = Password::HAS_SPECIAL_CHARACTERS;

        return preg_match($pattern, $password) === 1;
    }
}
