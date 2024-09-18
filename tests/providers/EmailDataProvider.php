<?php

namespace App\Tests\Providers;

final class EmailDataProvider
{
    public static function validEmailProvider(): array
    {
        return [
            'one letter before @ character' => [
                'b@example.com',
                'N@example.com',
            ],
            'at least two letters before @ character' => [
                'ab@example.com',
                'test@example.com',
            ],
            'domain name containing one letter in second-level domain' => [
                'test@a.com',
                'test@A.com',
            ],
            'domain name containing at least two letters in second-level domain' => [
                'test@ab.com',
                'test@dEv.com',
                'test@example.com',
            ],
            'domain name containing letters and digits in second-level domain' => [
                'test@a1.com',
                'test@C70.com',
                'test@vrFA123.com',
                'test@a526hC.com',
                'test@hsva8C.com',
                'test@rhqzH3.net',
            ],
            'domain name containing at least two letters in top-level domain' => [
                'test@example.PL',
                'test@example.com',
                'test@example.net',
                'test@example.NETWORK',
            ],
            'third-level domain' => [
                'test@example.com.PL',
                'abc@sub.domain.com',
            ],
            'five-level domain' => [
                'test@example.sub.domain.com.pl',
            ],
        ];
    }

    public static function invalidEmailProvider(): array
    {
        return [
            'without any letter before @ character' => [
                '@example.com',
                ' @example.com',
                '*@example.com',
                '4@example.com',
            ],
            'without @ character' => [
                'test#example.com',
                'test.example.com',
                'testexample.com',
            ],
            'multiple @ characters' => [
                'test@@example.com',
                'test@example@.com',
                'test@example.@com',
                'test@example.com@',
                'test@example@mple.com',
            ],
            'domain name starting with digit' => [
                'test@0example.com',
            ],
            'domain name starting with special character' => [
                'test@ example.com',
                'test@&example.com',
                'test@-example.com',
            ],
            'domain name without dot (.) character before top-level domain' => [
                'test@examplecom',
                'test@example,com',
                'test@1example/com',
                'test@example com',
                'test@example',
            ],
            'domain name containing multiple consecutive dot (.) characters' => [
                'test@.example.com',
                'test@example..com',
                'test@example.....com',
            ],
            'domain name containing one letter in top-level domain' => [
                'test@example.a',
            ],
            'domain name containing digits in top-level domain' => [
                'test@example.com2',
                'test@example.c6om',
                'test@example.1com',
                'test@example.123',
            ],
            'domain name containing special characters in top-level domain' => [
                'test@example.#com',
                'test@example. com',
                'test@example.com*',
                'test@example.com?',
                'test@example.com.',
            ],
        ];
    }
}