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

    const LGTM = 0x1f38b;

    /**
     * @return string
     */
    public static function generateRandomEmoji(): string
    {
        // 25% chance for a LGTM emote. 🎋
        if(rand(1, 4) === 4) {
            return html_entity_decode('&#'.self::LGTM.';', 0, 'UTF-8');
        }

        $output = [];
        foreach(self::UNICODE_RANGES as $range){
            for($unicode = $range[0]; $unicode <= $range[1]; $unicode++){
                $output[] = html_entity_decode('&#'.$unicode.';', 0, 'UTF-8');
            }
        }

        $rand = rand(1, count($output));

        return $output[$rand];
    }
}