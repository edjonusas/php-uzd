<?php

/**
 * convert array to json and write to file
 *
 * @param $array
 * @param $file_name
 * @return bool
 */
function array_to_file(array $array, string $file_name): bool
{
    $array_json = json_encode($array);
    return file_put_contents($file_name, $array_json) !== false;
}