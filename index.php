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
]
?>

<!-- 1. Sudarykite masyvą, kuriame būtų aprašyta Vilniaus:
  "mayor" meras, string
  "address" savivaldybės adresas, string
  "number" numeris, string
  "area" plotas kvadratiniais kilometrais, int
  "elderships" seniunijų masyvas [] - BENT 3 SENIŪNIJOS -->
<!-- 2. Kiekviena seniunija turi turėti:
    title: pavadinimą, string
    elder: seniunas, string
    population: gyventojų skaičių, number -->

<!-- 3. Atspausdinkite visų seniunijų pavadinimus -->

<!-- 4. Atspaudinkite vienos iš seniunijų duomenis -->
<?php
//foreach ($vilnius["elderships"][0] as $info) {
//    print $info;
//}
?>
<!-- 5. Atspausdinkite visų seniunijų duomenis lentele -->
<!--<table>-->
<!--    <thead>-->
<!--        <tr>-->
<!--            <td>title</td>-->
<!--            <td>adress</td>-->
<!--            <td>elder</td>-->
<!--            <td>population</td>-->
<!--        </tr>-->
<!--    </thead>-->
<!--    <tbody>-->
<!--    --><?php //foreach ($vilnius["elderships"] as $eldership) : ?><!-- {-->
<!--        <tr>-->
<!--            <td>--><? //= $eldership['title']; ?><!--</td>-->
<!--            <td>--><? //= $eldership['address']; ?><!--</td>-->
<!--            <td>--><? //= $eldership['elder']; ?><!--</td>-->
<!--            <td>--><? //= $eldership['population']; ?><!--</td>-->
<!--        </tr>-->
<!--    --><?php //endforeach ?>
<!--    </tbody>-->
<!--</table>-->
<!-- 6. Atspausdinkite tik tų seniunijų duomenis kur gyventojų kiekis yra iki 20 tūkst. -->
<?php //foreach ($vilnius["elderships"] as $eldership) {
//    if ($eldership['population'] > 20000) {
//        $eldership['title'];
//        $eldership['address'];
//        $eldership['elder'];
//        $eldership['population'];
//    }
//
//}
//?>
<!---->
<!--<table>-->
<!--    <thead>-->
<!--    <tr>-->
<!--        <td>title</td>-->
<!--        <td>adress</td>-->
<!--        <td>elder</td>-->
<!--        <td>population</td>-->
<!--    </tr>-->
<!--    </thead>-->
<!--    <tbody>-->
<!--    --><?php //foreach ($vilnius["elderships"] as $eldership) : ?><!-- {-->
<!--        --><?php //if ($eldership['population'] > 20000) : ?>
<!--            <tr>-->
<!--                <td>--><? //= $eldership['title']; ?><!--</td>-->
<!--                <td>--><? //= $eldership['address']; ?><!--</td>-->
<!--                <td>--><? //= $eldership['elder']; ?><!--</td>-->
<!--                <td>--><? //= $eldership['population']; ?><!--</td>-->
<!--            </tr>-->
<!--        --><?php //endif; ?>
<!--    --><?php //endforeach; ?>
<!--    </tbody>-->
<!--</table>-->
<!-- 7. Atspausdinkite tik tų seniunijų duomenis kur gyventojų kiekis yra virš 50 tūkst. -->

<!--<table>-->
<!--    <thead>-->
<!--    <tr>-->
<!--        <td>title</td>-->
<!--        <td>adress</td>-->
<!--        <td>elder</td>-->
<!--        <td>population</td>-->
<!--    </tr>-->
<!--    </thead>-->
<!--    <tbody>-->
<!--    --><?php //foreach ($vilnius["elderships"] as $eldership) : ?>
<!--        --><?php //if ($eldership['population'] > 50000) : ?>
<!--            <tr>-->
<!--                <td>--><? //= $eldership['title']; ?><!--</td>-->
<!--                <td>--><? //= $eldership['address']; ?><!--</td>-->
<!--                <td>--><? //= $eldership['elder']; ?><!--</td>-->
<!--                <td>--><? //= $eldership['population']; ?><!--</td>-->
<!--            </tr>-->
<!--        --><?php //endif; ?>
<!--    --><?php //endforeach; ?>
<!--    </tbody>-->
<!--</table>-->

<!-- 8. Atspausdinkite tik tų seniunijų duomenis
   kur gyventojų kiekis yra nuo 30 iki 40 tūktstančių -->
<!--<table>-->
<!--    <thead>-->
<!--    <tr>-->
<!--        <td>title</td>-->
<!--        <td>adress</td>-->
<!--        <td>elder</td>-->
<!--        <td>population</td>-->
<!--    </tr>-->
<!--    </thead>-->
<!--    <tbody>-->
<!--    --><?php //foreach ($vilnius["elderships"] as $eldership) : ?>
<!--        --><?php //if ($eldership['population'] > 30000 && $eldership['population'] < 40000) : ?>
<!--            <tr>-->
<!--                <td>--><? //= $eldership['title']; ?><!--</td>-->
<!--                <td>--><? //= $eldership['address']; ?><!--</td>-->
<!--                <td>--><? //= $eldership['elder']; ?><!--</td>-->
<!--                <td>--><? //= $eldership['population']; ?><!--</td>-->
<!--            </tr>-->
<!--        --><?php //endif; ?>
<!--    --><?php //endforeach; ?>
<!--    </tbody>-->
<!--</table>-->
<!-- 9. Stulpeliu atspausdinkite kiekvienos seniūnijos gyventojų skaičių -->
<!--<table>-->
<!--    <thead>-->
<!--    <tr>-->
<!--        <td>population</td>-->
<!--    </tr>-->
<!--    </thead>-->
<!--    <tbody>-->
<!--    --><?php //foreach ($vilnius["elderships"] as $eldership) : ?>
<!--            <tr>-->
<!--                <td>--><? //= $eldership['population']; ?><!--</td>-->
<!--            </tr>-->
<!--    --><?php //endforeach; ?>
<!--    </tbody>-->
<!--</table>-->
<!-- 10. Stulpeliu atspausdinkite kiekvienos seniūnijos gyventojų skaičių, išrikiavus mažėjimo tvarka -->
<?php
// Sort the multidimensional array
//usort($vilnius["elderships"],"custom_sort");
//// Define the custom sort function
//function custom_sort($a,$b) {
//    return $a['population']<$b['population'];
//}
//?>
<!--<table>-->
<!--    <thead>-->
<!--    <tr>-->
<!--        <td>population</td>-->
<!--    </tr>-->
<!--    </thead>-->
<!--    <tbody>-->
<!--    --><?php //foreach ($vilnius["elderships"] as $eldership) : ?>
<!--        <tr>-->
<!--            <td>--><? //= $eldership['population']; ?><!--</td>-->
<!--        </tr>-->
<!--    --><?php //endforeach; ?>
<!--    </tbody>-->
<!--</table>-->
<!-- 11. Susumuokite visų seniūnijos gyventojų skaičių -->
<?php
//$sum = 0;
//    foreach ($vilnius["elderships"] as $eldership) {
//        $sum += $eldership['population'];
//    }
//    print $sum;
//?>
<!-- 12. Suskaičiuokite vidutinį gyventojų skaičių vienoje seniūnijoje -->
<?php
//usort($vilnius["elderships"], "custom_sort");
////// Define the custom sort function
//function custom_sort($a, $b)
//{
//    return $a['population'] < $b['population'];
//}
//
////?>
<?php
//$sum = 0;
//foreach ($vilnius["elderships"] as $eldership) {
//    $sum += $eldership['population'];
//}
//print $sum / count($vilnius["elderships"]);
//
//?>
<!-- 13. Suskaičiuokite vidutinį gyventojų skaičių vienoje seniūnijoje atmetus didžiausią ir mažiausią seniuniją -->
<?php
usort($vilnius["elderships"], "custom_sort");
// Define the custom sort function
function custom_sort($a, $b)
{
    return $a['population'] < $b['population'];
}

//?>