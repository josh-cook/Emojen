<?php


final class RandomEmojiGenerator
{
    const UNICODE_RANGES =  [
        [0x1f600, 0x1f64e],
        [0x1f910, 0x1f91e],
        [0x1f920, 0x1f927],
        [0x1f300, 0x1f5ff],
        [0x1f680, 0x1f6c1],
        [0x1f950, 0x1f95e],
        [0x1f980, 0x1f991]
    ];

    // 🎋 emoji
    const LGTM = 0x1f38b;

    /**
     * @return string
     */
    public static function generateRandomEmoji(): string
    {
        // 10% chance for a LGTM emoji.
        if(rand(1, 10) === 10) {
            return html_entity_decode('&#'.self::LGTM.';', 0, 'UTF-8');
        }

        $randArray = rand(0, count(self::UNICODE_RANGES) - 1);
        $randUnicode = rand(0, count(self::UNICODE_RANGES[$randArray]) - 1);
        $unicodeChar = self::UNICODE_RANGES[$randArray][$randUnicode];

        $output = html_entity_decode('&#'.$unicodeChar.';', 0, 'UTF-8');;
        return $output;
    }
}