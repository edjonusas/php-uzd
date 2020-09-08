<?php
include 'utils/teamHelperFunctions.php';

//$teams_with_1_C = filter_teams_by_player_position_count($teams, 'C', 1);
//$teams_with_2_C = filter_teams_by_player_position_count($teams, 'C', 2);
//$teams_with_3_C = filter_teams_by_player_position_count($teams, 'C', 3);
//$teams_with_4_C = filter_teams_by_player_position_count($teams, 'C', 4);
?>
<!--<div>Komandos su 1 C posizijos žaidėju: --><?//= count($teams_with_1_C)?><!--</div>-->
<!--<div>Komandos su 2 C posizijos žaidėju: --><?//= count($teams_with_2_C)?><!--</div>-->
<!--<div>Komandos su 3 C posizijos žaidėju: --><?//= count($teams_with_3_C)?><!--</div>-->
<!--<div>Komandos su 4 C posizijos žaidėju: --><?//= count($teams_with_4_C)?><!--</div>-->

<!--
 Visų šių užduočių  rezultatus reikia pateikti skaitomu HTML formatu:
 1. Sukurkite 8 komandas -->
 <?php

$teams = create_teams(8);

?>
<!-- 2. Susiskaičiuokite šių komandų visų žaidėjų skaičių -->
<div class="players">
    Iš viso žaidėjų: <?= count_all_teams_players($teams); ?>
</div>
<!-- 3. Suskaičiuokite visų komandų vidutinį žaidėjų skaičių vienoje komandoje -->
<div class="players">
    Vidutinis žaidėjų komandoje skaičius: <?= average_players_num($teams); ?>
</div>
 <!-- 4. Suskaičiuokite kiek yra komandų su 11, 12, ir 13 žaidėjų. -->
<div class="players">
    Komandų, kuriose yra daugiau nei 12 žaidėjų skaičius: <?= teams_more_than_eleven_players($teams); ?>
</div>
 <!-- 5. Suskaičiuokite kiek šiose komandose yra 'C' pozicijos žaidėju -->
<div class="players">
    'C' pozicijos žaidėjų skaičius: <?= count_players_pos_center($teams, 'C'); ?>
</div>
 <!-- 6. Suskaičiuokite kiek šiose komandose yra NE 'C' žaidėju -->
<div class="players">
    Visų, išskyrus 'C' pozicijos žaidėjų skaičius: <?= count_players_not_center($teams, 'C'); ?>
</div>
 <!-- 7. Atfiltruokite komandas, kurios turi po 2 'LF' žaidėjus -->
<div class="players">
    Atfiltruotų komandų skaičius, kurios turi po 2 'LF' pozicijos žaidėjus: <?= filter_teams_two_lf($teams, 'LF', 2); ?>
</div>
 <!-- 8. Išsiaiškinkite kurios pozicijos žaidėjų yra daugiausiai tarp šių 8 komandų -->
<div class="players">
    Šios pozicijos žaidėjų yra daugiausiai tarp šių 8 komandų: <?= count_most_positions($teams); ?>
</div>
 <!-- 9. Išsiaiškinkite kurios pozicijos žaidėjų yra mažiausiai  tarp šių 8 komandų -->
<div class="players">
    Šios pozicijos žaidėjų yra mažiausiai tarp šių 8 komandų: <?= count_lowest_positions($teams); ?>
</div>
<!-- 10. Sudarykite lentelę, kurioje būtų pateikta kiekvienos komandos žaidėjų kiekis pagal poziciją procentais -->
