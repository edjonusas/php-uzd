<?php

/**
 * Patikrina ar visos vertės masyve yra unikalios
 * 
 * @param Array $array reikšmių masyvas
 * @return Bool true jeigu reikšmės unikalios, false jeigu yra pasikartojačių reikšmių
 */
function arr_unique_values($array)
{
  for ($i = 0; $i < count($array) - 1; $i++) {
    for ($j = $i + 1; $j < count($array); $j++) {
      if ($array[$i] === $array[$j]) return false;
    }
  }
  return true;
}
/**
 * Surasti tokią pačią reikšmę masyve
 *
 * @param array $array reikškių masyvas
 * @return int gražinamas indeksas, jeigu pasikartojanti reikšmė rasta, -1 jei nerasta
 */
function find_repetitive_value(array $array): int
{
  for ($i = 0; $i < count($array) - 1; $i++) {
    for ($j = $i + 1; $j < count($array); $j++) {
      if ($array[$i] === $array[$j]) return $i;
    }
  }
  return -1;
}
/**
 * Elemento paieška masyve
 * 
 * @param array $array elementų masyvas
 * @param mixed $value ieškomas elementas
 * @return int rasto elemento indeksas, arba -1 jeigu elementas nerastas
 */
function find_value($array, $value)
{
  for ($i = 0; $i < count($array); $i++)
    if ($array[$i] === $value) return $i;
  return -1;
}
/**
 * Masyvo elementų perstruktūrizavimo iteracinė funkcija
 * 
 * @param array $array elementų masyvas
 * @param function $map_function funkcija kuri formuos naujus elementus pagal $array masyvo elementus
 * @return array naujai suformuotų elementų masyvas
 */
function arr_map($array, $map_function)
{
  $mapped_arr = [];
  foreach ($array as $el) {
    $mapped_arr[] = $map_function($el);
  }
  return $mapped_arr;
}
/**
 * Grąžina didžiausią reikšmės raktą iš asociatyvaus masyvo
 * 
 * @param array $arr asociatyvus elementų masyvas
 * @return string didžiausios reikšmės raktas
 */
function arr_max_key($arr)
{
  $max_value = PHP_FLOAT_MIN;
  foreach ($arr as $key => $value) {
    if($value > $max_value) {
      $max_value = $value;
      $max_key = $key;
    }
  }
  return $max_key;
}
/**
 * Grąžina mažiausią reikšmės raktą iš asociatyvaus masyvo
 * 
 * @param array $arr asociatyvus elementų masyvas
 * @return string mažiausios reikšmės raktas
 */
function arr_min_key($arr)
{
  $min_value = PHP_FLOAT_MAX;
  foreach ($arr as $key => $value) {
    if($value < $min_value) {
      $min_value = $value;
      $min_key = $key;
    }
  }
  return $min_key;
}

