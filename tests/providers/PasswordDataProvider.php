<?php

namespace App\Tests\Providers;

final class PasswordDataProvider
{
    public static function validPasswordProvider(): array
    {
        return [
            '8 characters containing digits, letters and special characters' => [
                'abCD12!@',
                'FDvg46@#',
                'bf84VI#$',
                'AB53nh$%',
                '74vjHY%^',
                '-6CUza!&',
                '93!@caHG',
                '81@#XJcq',
                '94#+XUcg',
                '73#%xfHW',
                'j5C6$C&g',
                '67gd%4xa',
            ], 
            '8 characters containing digits, letters, special characters and whitespace characters' => [
                ' aG34%@D',
                ' 0C@5FD ',
                '4Ax5# !d',
                '  1Hj52&',
                '   4^aFG',
            ],
            'more than 8 characters containing digits, letters and special characters' => [
                'FDvg46@#G',
                '543iDv%@!',
                'Dc2^f@c%^',
            ],
            'more than 8 characters containing digits, letters, special characters and whitespace characters' => [
                ' aCG4%14F',
                ' aV$!234$',
                ' j52@&sG ',
                ' 1F6$ af ',
                '8FGx@J23 ',
                ' ,2RQ &$x@ ^H1',
                '4Hb64$&@  g$',
                'L2 #$ o1@& 3JQ1^AS cH%G6',
            ],
        ];
    }

    public static function invalidPasswordProvider(): array
    {
        return [
            'less than 8 characters' => [
                'gaCV16%', 
                'JCxc62@',
                'aH1^',
            ],
            '8 characters containing only special characters' => [
                '&>^$@#.%',
                '>)_!*$.?',
            ],
            '8 characters containing only whitespace characters' => [
                '        ',
            ],
            '8 characters containing only letters' => [
                'AHXHWYUD',
                'ahxehvwh',
                'dHvhyiwC',
                'HayHqwCv',
            ],
            '8 characters containing only digits' => [
                '73712727',
                '82521904',
                '00000000',
            ],
            '8 characters containing only letters and digits' => [
                'h74g2sFv',
                'N7d98cAX',
                '6HD4BVxa',
                '75dD3CaK',
                'BaHx1627',
                'aZ7jN892',
            ],
            '8 characters containing only letters and special characters' => [
                'Gds%df$x',
                'a~v%A^NX',
                'KJq#$x!^',
            ],
            '8 characters containing only letters and whitespace characters' => [
                ' Jxa hr ',
                ' av C NH',
                ' UxQ Xqg',                
                '  fs   F',
                'Xs fIN ',
            ],
            '8 characters containing only digits and special characters' => [
                '%76*^&17',
                ')82#^7@&',
                '$^14*@7!',
                '52^@81*#',
            ],
            '8 characters containing only digits and whitespace characters' => [
                '53 17 12',
                ' 214 608',
                '134534  ',
            ],
            '8 characters containing only digits, special characters and uppercase letters' => [
                'H7%@G;A2',
                '7*(1FS-H',
                '0GD&12.^',
                '^23HF(*1',
                '&*6|SJH?',
                ',JH,46[^',
            ],
            '8 characters containing only digits, special characters and lowercase letters' => [
                'an63&@g7',
                '71"egh^k',
                'z&3(jq*!',
                ':2hs*(gx',
                ')n7^@j&e',
            ],
            '8 characters containing only digits, whitespace characters and lowercase letters' => [
                'a vy123 ',
                'd7 c 2  ',
                '21g 62j ',
            ],
            '8 characters containing only digits, whitespace characters and uppercase letters' => [
                '72 AS D4',
                ' 26 89AH',
                ' BJT3452',
                'HFVT18  ',
                '  QR425 ',
            ],
        ];
    }
}

