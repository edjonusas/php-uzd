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

/**
 * convert json file to array
 *
 * @param $file_name
 * @return false|mixed
 */
function file_to_array(string $file_name)
{
    if (file_exists($file_name)) {
        $data = file_get_contents($file_name);
        $decoded = json_decode($data, true);

        return is_array($decoded) ? $decoded : [];
    } else {
        return false;
    }
}