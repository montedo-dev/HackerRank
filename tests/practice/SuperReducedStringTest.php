<?php

namespace HackerRank\Tests\Practice;

use HackerRank\Solutions\Practice\SuperReducedString;
use PHPUnit\Framework\TestCase;

class SuperReducedStringTest extends TestCase 
{
    private $superReducedString;

    function setUp(): void
    {
        $this->superReducedString = new SuperReducedString();
    }

    /**
     * @dataProvider cases
     */
    
    public function testFirstSolution(string $string, string $expected)
    {
        $this->assertEquals($expected, $this->superReducedString->firstSolution($string));
    }

     /**
     * @dataProvider cases
     */

    public function testSecondSolution(string $string, string $expected)
    {
        $this->assertEquals($expected, $this->superReducedString->secondSolution($string));
    }

    public function cases()
    {
        return [
            ['aa','Empty String'],
            ['aaabccddd','abd'],
            ['baab','Empty String'],
            [
                'zztqooauhujtmxnsbzpykwlvpfyqijvdhuhiroodmuxiobyvwwxupqwydkpeebxmfvxhgicuzdealkgxlfmjiucasokrdznmtlwh',
                'tqauhujtmxnsbzpykwlvpfyqijvdhuhirdmuxiobyvxupqwydkpbxmfvxhgicuzdealkgxlfmjiucasokrdznmtlwh'
            ],
            [
                'ppffccmmssnnhhbbmmggxxaaooeeqqeennffzzaaeeyyaaggggeessvvssggbbccnnrrjjxxuuzzbbjjrruuaaccaaoommkkkkxx',
                'Empty String'
            ],
            [
                'ggppppuurrjjooddwwyyllmmvvffddmmppxxaabbddddooppxxgghhhhvvnneeqqyyttbbffvvjjiiaammmmddddhhyywwqqiijj',
                'Empty String'
            ],
            [
                'aaanadbsadbaqwpekqpepqkpkpppppqewqekwqkeqksadmmmmmmdsadsndsndansdnsadnadna',
                'anadbsadbaqwpekqpepqkpkpqewqekwqkeqksasadsndsndansdnsadnadna'
            ],
            [
                'oagciicgaoyjmahhamjymmwjnnjwmmvpxhpphxpvlikappakilyygvkkvgyymlpfddfplmhiodvvdoihfxpkggkpxfuevvuuvveu',
                'Empty String'
            ]
        ];
    }

}
