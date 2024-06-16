<?php


namespace App\Marketplace\Utility;


class UUID
{
   
   
   private static function base_convert_custom(string $value, int $initialBase, int $newBase): string
{
    $baseChars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $value = str_split($value);

    $result = 0;
    $sourceBase = strlen($baseChars);

    foreach ($value as $char) {
        $charValue = strpos($baseChars, $char);
        $result = $result * $initialBase + $charValue;
    }

    $converted = '';
    while ($result > 0) {
        $remainder = $result % $newBase;
        $converted = $baseChars[$remainder] . $converted;
        $result = (int)($result / $newBase); // Explicitly cast to int
    }

    return $converted === '' ? '0' : $converted;
}

   
  
public static function encode(string $uuid): string
{
    return self::base_convert_custom(str_replace('-', '', $uuid), 16, 62);
}

public static function decode(string $hashid): string
{
    $uuidHex = self::base_convert_custom($hashid, 62, 16);
    return implode('-', str_split(str_pad($uuidHex, 32, '0', STR_PAD_LEFT), 4));
}
}