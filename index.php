<!--//----------------------Masyvai---------------------------->
<!--//1. Persirašykite masyvą sudarytą iš skaičių-->
<!--//2. Sekančias užduotis atlikti su naujamis masyvo kopijomis.-->
<!--//Užduotys turi būti iškviečiamuose funkcijose-->
<!--//3. Padauginti esamo masyvo narius iš 2-->
<!--//4. Pakelti masyvo narius kvadratu-->
<!--//5. Padauginti masyvo narius iš jų index'o (vietos masyve)-->
<!--//6. Atrinkti tiktai teigimų elementų masyvą-->
<!--//7. Atrinkti tiktai neigiamų elementų masyvą-->
<!--//8. Atrinkti tiktai lyginių skaičių masyvą-->
<!--//9. Atrinkti tiktai nelyginių skaičių masyvą-->
<!--//11. Visas neigiamas vertes masyve padaryti teigiamomis-->-->
<?php
//$array = [7, 2, 8, 4, 5, 7, 16, -5, -6, -7, 15.22, 1.66, -69.55, 1, 1, 5, 7, 5];
//
//for ($i = 0; $i < count($array); $i++) {
//    $arr[$i] = abs($array[$i]);
//}
//var_dump($arr);
//?>

<!--<script>-->
<!--    const array = [7, 2, 8, 4, 5, 7, 16, -5, -6, -7, 15.22, 1.66, -69.55, 1, 1, 5, 7, 5];-->
<!--    let arr = []-->
<!--    for(let i = 0; i < array.length; i++) {-->
<!--        arr[i] = Math.abs(array[i]);-->
<!--    }-->
<!--    console.log(arr);-->
<!--</script>-->
<!--//12. Pakelti visas masyvo reikšmes laipsniu 'index'-->
<?php
//$array = [7, 2, 8, 4, 5, 7, 16, -5, -6, -7, 15.22, 1.66, -69.55, 1, 1, 5, 7, 5];
//for ($i = 0; $i < count($array); $i++) {
//    $arr[$i] = $array[$i] ** $i;
//}
//var_dump($arr);
//?>
<!---->
<!--<script>-->
<!--    const array = [7, 2, 8, 4, 5, 7, 16, -5, -6, -7, 15.22, 1.66, -69.55, 1, 1, 5, 7, 5];-->
<!--    let arr = []-->
<!--    for(let i = 0; i < array.length; i++) {-->
<!--        arr[i] = array[i] ** i;-->
<!--    }-->
<!--    console.log(arr);-->
<!--</script>-->
<!--//13. Atrinkti tik natūralių skaičių masyvą-->
<?php
//$array = [7, 2, 8, 4, 5, 7, 16, -5, -6, -7, 15.22, 1.66, -69.55, 1, 1, 5, 7, 5];
//for ($i = 0; $i < count($array); $i++) {
//    gettype($array[$i]) === 'integer && gettype($array[$i]) > 0? $arr[$i] = $array[$i] : '';
//}
//var_dump($arr);

?>

<!--//14. Suapvalinti visas masyvo reikšmes iki sveikų skaičių-->
<?php
$array = [7, 2, 8, 4, 5, 7, 16, -5, -6, -7, 15.22, 1.66, -69.55, 1, 1, 5, 7, 5];
$roundArr = [];
for ($i = 0; $i < count($array); $i++) {
    $roundArr[$i] = intval(round($array[$i]));
}
var_dump($roundArr);

?>
<!--//15. Atrinkti kas antrą elementą-->
<?php
$array = [7, 2, 8, 4, 5, 7, 16, -5, -6, -7, 15.22, 1.66, -69.55, 1, 1, 5, 7, 5];
$roundArr = [];
for ($i = 0; $i < count($array); $i+=2) {
    $roundArr[$i] = $array[$i];
}
var_dump($roundArr);

?>
<!--//16. Atrinkti kas penktą elementą-->
<?php
$array = [7, 2, 8, 4, 5, 7, 16, -5, -6, -7, 15.22, 1.66, -69.55, 1, 1, 5, 7, 5];
$roundArr = [];
for ($i = 0; $i < count($array); $i+=5) {
    $roundArr[$i] = $array[$i];
}
var_dump($roundArr);

?>
<!--//----------------------Funkcijos---------------------------->
<!--//17. Sukurti funkciją, kuri ima masyvą ir atspausdina kiek--->
<!--//vieną jo reikšmę atskirai: [0] => 64.  (nieko negrąžina)-->

<!--//18. Sukurti funkciją, kuri ima masyvą ir grąžina visų-->
<!--//jo elementų sumą-->
<!--//19. Sukurti funkciją, kuri ima masyvą ir grąžina visų ele--->
<!--//mentų vidurkį-->
<!--//20. Sukurti funkciją, kuri ima masyvą ir grąžina didžiau--->
<!--//sią skaičių masyve.-->
<!--//21. Sukurti funkciją, kuri ima masyvą ir grąžina mažiau--->
<!--//sią skaičių masyve.-->
<!--//22. Sukurti funkciją, kuri ima masyvą ir išrikiuja jo ele--->
<!--//mentus nuo mažiausio iki didžiausio ir grąžina tą masyvą.-->
<!--//----------------------Asociatyvūs masyvai------------------->
<!--//24. Sukurti masyvą, kuris aprašytų knygos duomenis: title, author, year, genre-->
<!--//25. Sukurti masyvą, kurio elementai būtų masyvai aprašantys knygas-->
<!--//26. Išvesti visus knygų masyvo elementus su var_dump;-->
<!--//27. Išvesti visus knygų masyvo elementus lentele;-->
<!--//28. Išvesti visų visų knygų metų vidurkį;-->
<!--//29. Išrikiuoti masyvą pagal metus;-->
<!--//30. Išrikiuoti masyvą pagal pavadinimus-->
<!--//----------------------Kūrybinės užduotys------------------->
<!--//1. Sukurti Fibonacci seką(tai tokia seka, kuomet-->
<!--//sekantis skaičius yra sudedamas su prieš tai 2-->
<!--//einančių načių sumos. Pirmieji nariai 0 ir 1.-->
<!--//2. Parašykite funkciją, kuri mestų kauliuką iki kol iškris 5 arba 6. Visus-->
<!--//savo metimus išvestu i ekrana. (||, while)-->
<!--//Metame 2 kauliukus (arba vieną kauliuką 2 kartus). Taisyklės:-->
<!--//Jeigu kauliukų suma yra mažiau už 5 reiškia - jūs iškarto pralaimejote.-->
<!--//Jeigu kauliukų suma daugiau už 5 ir:-->
<!--//- išmesta buvo 6 ir 6, reiškia - laimėjote dviratį.-->
<!--//- abiejų kauliukų išmestas skaičius yra vienodas, bet ne 6 ir 6 - reiškia jūs-->
<!--//laimėjote bilietą į kiną.-->
<!--//- kitais atvejais – kauliukas metamas dar kartą.-->
<!--//- Žaidimas turi vykti iki kol žaidėjas laimės / pralaimės(while)-->
<!--//- Visa zaidimo eiga turėtų būti išvesta į ekraną-->
<!--//3. Turime sveikų skaičių masyvą, kur skaičius atspindi daikto svorį:-->
<!--//$things = [1, 7, 8, 1, 2, 8, 7, 4, 2, 3, 2, 4, 1, 6, 3, 7, 4, 1, 5, 6, 5, 2, 1, 12, 4];-->
<!--//$maxWeight = 8;-->
<!--//$boxes = [];-->
<!--//Parašyti algoritmą, kuris sudėtų daiktus į kuo mažiau dėžučių, įvertinant dėžutės maksimalų svorį-->