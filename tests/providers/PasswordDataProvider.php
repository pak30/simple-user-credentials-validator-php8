<?php

namespace App\Tests\Providers;

final class PasswordDataProvider
{
    public static function validPasswordProvider(): array
    {
        return [
            '8 characters containing digits, letters and special characters, without spaces' => [
                'abCD12!@',
                'FDvg46@#',
                'bf84VI#$',
                'AB53nh$%',
                '74vjHY%^',
                '74CUza^&',
                '93!@caHG',
                '81@#XJcq',
                '94#!XUcg',
                '73#%xfHW',
                'j5C6$C&g',
                '67gd%4xa',
            ], 
            '8 characters containing digits, letters and special characters, including spaces' => [
                ' aG34%@D',
                ' aC@5FD ',
                '4Ax5# !d',
                '  1Hj52&',
                '   4^aFG',
            ],
            '8 characters containing digits, letters and spaces only' => [
                'aCvG123 ',
                '72fAS  4',
                'dgHG62  ',
            ],
            'more than 8 characters containing digits, letters and special characters, without spaces' => [
                'FDvg46@#G',
                '543iDv%@!',
                'Dc2^f@c%^',
            ],
            'more than 8 characters containing digits, letters and special characters, including spaces' => [
                ' aCG4%14F',
                ' aV$!234$',
                ' j52@&sG ',
                ' 1F6$ af ',
                '8FGx@J23 ',
                ' 82RQ&$x@ ^H1',
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
            ],
            '8 characters containing only special characters' => [
                '        ',
                '& ^$@#.%',
                '>@#!*$.?',
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
            '8 characters containing only digits and letters' => [
                'h74g2sFv',
                'N7d98cAX',
                '6HD4BVxa',
                '75dD3CaK',
                'BaHx1627',
                'aHjN1892',
            ],
            '8 characters containing only letters and special characters' => [
                'Gds%df$x',
                'a v%A^NA',
                'KJq#$x!^',
                ' Jxa*hr&',
                ' av%C@NH',
                ' Ux(!Xqg',                
                '  fs%!@F',
                '$G%$^d# ',
                'Xs&#fIN ',
                'aB^!#$  ',
            ],
            '8 characters containing only digits and special characters' => [
                '%76 ^&17',
                ' 82#^7@&',
                '$^14*@7 ',
                '52^@81*#',
            ],
            '8 characters containing only digits, special characters and uppercase letters' => [
                'H7%@G A2',
                '7*(1FS7H',
                '0GD&12&^',
                '^23HF(*1',
                '&*6 SJH ',
                ' JHO46#^',
            ],
            '8 characters containing only digits, special characters and lowercase letters' => [
                'an63&@g7',
                '71 egh^k',
                'z&3(jq*!',
                ' 2hs*(gx',
                ')n7^@j&@',
            ],
        ];
    }
}

