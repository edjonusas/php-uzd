<?php
$vilnius = [
    "mayor" => 'Remigijus Šimašius',
    "number" => '+370 35 654 84',
    "area" => 401,
    "elderships" => [
        [
            "title" => "Antakalnio seniūnija",
            "address" => "Antakalnio g. 17, 10312 Vilnius",
            "elder" => "Taurintas Rudys",
            "population" => 52369
        ],
        [
            "title" => "Fabijoniškių",
            "address" => "S. Stanevičiaus g. 24, LT-07102 Vilnius",
            "elder" => "Jonas Novikevičius",
            "population" => 22369
        ],
        [
            "title" => "Grigiškių",
            "address" => "Vilniaus g. 6, LT-27101 Grigiškės, Vilniaus m. sav.",
            "elder" => "Leonard Klimovič",
            "population" => 32111
        ],
        [
            "title" => "Naujininkų Seniūnija",
            "address" => "Dariaus ir Girėno g. 11, LT-02170 Vilnius",
            "elder" => "Raimondas Lingys",
            "population" => 37001
        ],
        [
            "title" => "Senamiesčio seniūnija",
            "address" => "Odminių g. 3, LT-01122 Vilnius",
            "elder" => "Irena Paukštytė",
            "population" => 19423
        ],
    ]
];

//function print_array($array)
//{
//    $string = '';
//    foreach ($array as $key => $value) {
//        gettype($key) === 'string' ? $string .= $key . ' : ' : '';
//        gettype($value) === 'string' ? $string .= $value . ', ' : '';
//        foreach ($value as $k => $v) {
//            gettype($k) === 'string' ? $string .= $k . ' : ' : '';
//            gettype($v) === 'string' ? $string .= $v . ', ' : '';
//        }
//    }
//    return $string;
//}
//
//var_dump(print_array($vilnius));

//function array_keys_val(array $array)
//{
//    $arr = [];
//
//    foreach ($array as $key => $value) {
//        $arr[] = $key;
//        $arr[] = $value;
//        if (is_array($value)) {
//            $arr = array_merge($arr, array_keys_val($value));
//        }
//    }
//
//    return $arr;
//}
//
//var_dump(array_keys_val($vilnius));

 //matrix
function generate_matrix($num1, $num2)
{
    $arr = [];
    $arr_row = [];
    for ($i = 0; $i < $num1; $i++) {
        for ($x = 0; $x < $num2; $x++) {
            $arr_row[] = rand(0, 1);
        }
        $arr[$i] = $arr_row;
        $arr_row = [];
    }
    return $arr;
}

$matrix = generate_matrix(5, 3);
var_dump($matrix);


//$array = ['b', 'a', 'b', 'e', 'a', 'i'];
//
//function replace_values(&$array, $from, $to)
//{
//    foreach ($array as $key => $item) {
//        $item === $from ? $array[$key] = $to : '';
//    }
//}
//
//replace_values($array, 'b', 'cool');
//
//var_dump($array);
