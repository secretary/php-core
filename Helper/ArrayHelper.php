<?php

declare(strict_types=1);

/*
 * @author    Aaron Scherer <aequasi@gmail.com>
 * @date      2019
 * @license   https://opensource.org/licenses/MIT
 */

namespace Secretary\Helper;

/**
 * @package Secretary\Helper
 */
abstract class ArrayHelper
{
    /**
     * @param string ...$keys
     */
    public static function without(array $array, ...$keys): array
    {
        $newArray = $array;
        foreach ($keys as $key) {
            if (!empty($newArray[$key])) {
                unset($newArray[$key]);
            }
        }

        return $newArray;
    }

    /**
     * Remove elements from an array based on a list of keys and return a new array with the removed elements.
     *
     * @param string ...$keys
     */
    public static function remove(array $array, ...$keys): array
    {
        $newArray = [];

        foreach ($keys as $key) {
            $newArray[$key] = $array[$key] ?? null;

            if (!empty($array[$key])) {
                unset($array[$key]);
            }
        }

        return $newArray;
    }
}
