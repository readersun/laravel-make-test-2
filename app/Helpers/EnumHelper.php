<?php

namespace App\Helpers;

use BenSampo\Enum\Enum;

/**
 * Laravel Enum 관련 헬퍼 클래스
 */
class EnumHelper
{
    /**
     * Enum value로 value, key, description을 모두 가진 배열을 리턴
     *
     * @param  mixed  $enumValue
     * @return array ['key', 'value', 'description']
     */
    public static function makeEnumData(string $enumClassName, $enumValue): array
    {
        if ($enumValue instanceof Enum) {
            return [
                'key' => $enumValue->key,
                'value' => $enumValue->value,
                'description' => $enumValue->description,
            ];
        }
        $data = [
            'key' => ("{$enumClassName}::getKey")($enumValue),
            'value' => $enumValue,
            'description' => ("{$enumClassName}::getDescription")($enumValue),
        ];

        return $data;
    }

    /**
     * Enum value로 value, key, description을 모두 가진 배열을 리턴
     *
     * @return array [['key', 'value', 'description']]
     */
    public static function makeFullEnumData(string $enumClassName): array
    {
        $enums = [];
        $values = ("{$enumClassName}::getValues")();
        foreach ($values as $value) {
            $enums[] = self::makeEnumData($enumClassName, $value);
        }

        return $enums;
    }
}