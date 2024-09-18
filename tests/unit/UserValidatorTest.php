<?php

namespace App\Tests\Unit;

use App\Tests\Providers\EmailDataProvider;
use App\Tests\Providers\PasswordDataProvider;
use App\UserValidator;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProviderExternal;

final class UserValidatorTest extends TestCase
{
    private static UserValidator $userValidator;

    public static function setUpBeforeClass(): void
    {
        self::$userValidator = new UserValidator();
    }

    #[DataProviderExternal(EmailDataProvider::class, 'validEmailProvider')]
    public function test_email_can_be_set(string $email)
    {
        $result = self::$userValidator->validateEmail($email);

        $this->assertTrue($result);
    }

    #[DataProviderExternal(EmailDataProvider::class, 'invalidEmailProvider')]
    public function test_email_can_not_be_set(string $email)
    {
        $result = self::$userValidator->validateEmail($email);

        $this->assertFalse($result);
    }

    #[DataProviderExternal(PasswordDataProvider::class, 'validPasswordProvider')]
    public function test_password_can_be_set(string $password)
    {
        $result = self::$userValidator->validatePassword($password);

        $this->assertTrue($result);
    }

    #[DataProviderExternal(PasswordDataProvider::class, 'invalidPasswordProvider')]
    public function test_password_can_not_be_set(string $password)
    {
        $result = self::$userValidator->validatePassword($password);

        $this->assertFalse($result);
    }
}
