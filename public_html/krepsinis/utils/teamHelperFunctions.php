<?php
const POSITION_TYPES = ['SG', 'PG', 'LF', 'HF', 'C'];
const NAMES = [
    'James',
    'John',
    'Robert',
    'Michael',
    'William',
    'David',
    'Richard',
    'Joseph',
    'Thomas',
    'Charles',
    'Christopher',
    'Daniel',
    'Matthew',
    'Anthony',
    'Donald',
    'Mark',
    'Paul',
    'Steven',
    'Andrew',
    'Kenneth',
    'Joshua',
    'George',
    'Kevin',
    'Brian',
    'Edward',
    'Ronald',
    'Timothy',
    'Jason',
    'Jeffrey',
    'Ryan',
    'Jacob',
    'Gary',
    'Nicholas',
    'Eric',
    'Stephen',
    'Jonathan',
    'Larry',
    'Justin',
    'Scott',
    'Brandon',
    'Frank',
    'Benjamin',
    'Gregory',
    'Samuel',
    'Raymond',
    'Patrick',
    'Alexander',
    'Jack',
    'Dennis',
    'Jerry',
    'Tyler',
    'Aaron',
    'Jose',
    'Henry',
    'Douglas',
    'Adam',
    'Peter',
    'Nathan',
    'Zachary',
    'Walter',
    'Kyle',
    'Harold',
    'Carl',
    'Jeremy',
    'Keith',
    'Roger',
    'Gerald',
    'Ethan',
    'Arthur',
    'Terry',
    'Christian',
    'Sean',
    'Lawrence',
    'Austin',
    'Joe',
    'Noah',
    'Jesse',
    'Albert',
    'Bryan',
    'Billy',
    'Bruce',
    'Willie',
    'Jordan',
    'Dylan',
    'Alan',
    'Ralph',
    'Gabriel',
    'Roy',
    'Juan',
    'Wayne',
    'Eugene',
    'Logan',
    'Randy',
    'Louis',
    'Russell',
    'Vincent',
    'Philip',
    'Bobby',
    'Johnny',
    'Bradley'
];
const SURNAMES = [
    'Jamesson',
    'Johnson',
    'Robertson',
    'Michaelson',
    'Williamson',
    'Davidson',
    'Richardson',
    'Josephson',
    'Thomasson',
    'Charlesson',
    'Christopherson',
    'Danielson',
    'Matthewson',
    'Anthonyson',
    'Donaldson',
    'Markson',
    'Paulson',
    'Stevenson',
    'Andrewson',
    'Kennethson',
    'Joshuason',
    'Georgeson',
    'Kevinson',
    'Brianson',
    'Edwardson',
    'Ronaldson',
    'Timothyson',
    'Jasonson',
    'Jeffreyson',
    'Ryanson',
    'Jacobson',
    'Garyson',
    'Nicholasson',
    'Ericson',
    'Stephenson',
    'Jonathanson',
    'Larryson',
    'Justinson',
    'Scottson',
    'Brandonson',
    'Frankson',
    'Benjaminson',
    'Gregoryson',
    'Samuelson',
    'Raymondson',
    'Patrickson',
    'Alexanderson',
    'Jackson',
    'Dennisson',
    'Jerryson',
    'Tylerson',
    'Aaronson',
    'Joseson',
    'Henryson',
    'Douglasson',
    'Adamson',
    'Peterson',
    'Nathanson',
    'Zacharyson',
    'Walterson',
    'Kyleson',
    'Haroldson',
    'Carlson',
    'Jeremyson',
    'Keithson',
    'Rogerson',
    'Geraldson',
    'Ethanson',
    'Arthurson',
    'Terryson',
    'Christianson',
    'Seanson',
    'Lawrenceson',
    'Austinson',
    'Joeson',
    'Noahson',
    'Jesseson',
    'Albertson',
    'Bryanson',
    'Billyson',
    'Bruceson',
    'Willieson',
    'Jordanson',
    'Dylanson',
    'Alanson',
    'Ralphson',
    'Gabrielson',
    'Royson',
    'Juanson',
    'Wayneson',
    'Eugeneson',
    'Loganson',
    'Randyson',
    'Louisson',
    'Russellson',
    'Vincentson',
    'Philipson',
    'Bobbyson',
    'Johnnyson',
    'Bradleyson'
];
const TEAM_ADJECTIVES = [
    'attractive',
    'bald',
    'beautiful',
    'chubby',
    'clean',
    'dazzling',
    'drab',
    'elegant',
    'fancy',
    'fit',
    'flabby',
    'glamorous',
    'gorgeous',
    'handsome',
    'long',
    'magnificent',
    'muscular',
    'plain',
    'plump',
    'quaint',
    'scruffy',
    'shapely',
    'short',
    'skinny',
    'stocky',
    'ugly',
    'unkempt',
    'unsightly',
    'ashy',
    'black',
    'blue',
    'gray',
    'green',
    'icy',
    'lemon',
    'mango',
    'orange',
    'purple',
    'red',
    'salmon',
    'white',
    'yellow'
];
const TEAM_NOUNS = [
    'statuses',
    'moose',
    'crises',
    'fishes',
    'series',
    'appendixes',
    'Misters',
    'sheep',
    'buses',
    'lives',
    'apparatuses',
    'deer',
    'oxen',
    'focuses',
    'bases',
    'platypuses',
    'cactuses',
    'sheep',
    'analyses',
    'women',
    'equipment',
    'dice',
    'leaves',
    'lives',
    'phenomena',
    'staff',
    'alumni',
    'geniuses',
    'radiuses',
    'staff',
    'alumni',
    'software',
    'data',
    'addenda',
    'viruses',
    'synopses',
    'mongooses',
    'genera',
    'formulas',
    'roofs',
    'phenomena',
    'mediums',
    'businesses',
    'data',
    'chassis',
    'crises',
    'heroes',
    'axes'
];

function rand_arr_el($arr)
{
    return $arr[rand(0, count($arr) - 1)];
}

function create_random_player()
{
    $player = [];
    $player['name'] = rand_arr_el(NAMES);
    $player['surname'] = rand_arr_el(SURNAMES);
    $player['number'] = rand(0, 99);
    $player['age'] = rand(18, 36);
    $player['height'] = rand(175, 230);
    $player['weight'] = round($player['height'] / (rand(18, 22) / 10));
    $player['position'] = rand_arr_el(POSITION_TYPES);
    return $player;
}

function map_player_num($player)
{
    return $player['number'];
}


function validate_uniq_team_numbers($team)
{
    $team_numbers = arr_map($team['players'], 'map_player_num');
    //1.2 keičiame tik tą reikšmę, kuri pasikartoja
    while (($rep_i = find_repetitive_value($team_numbers)) >= 0) {
        do $potencial_replacement = rand(0, 99);
        while (find_value($team_numbers, $potencial_replacement) === -1);
        $team_numbers[$rep_i] = $potencial_replacement;
        $team['players'][$rep_i]['number'] = $team_numbers[$rep_i];
    }
}

function validate_player_position(&$team, $min_pos_count)
{
    //duomenu paruosimas
    $player_position_count = [];
    foreach (POSITION_TYPES as $position_type) {
        $player_position_count = 0;
        }

    foreach ($team['players'] as $player) {
        $player_position_count[$player['position']]++;
    }
    //problemos indentifikavimas
    //sprendimas
    foreach ($team['players'] as $player) {
        $position_type = $player['position'];
        if($player_position_count[$position_type] < $min_pos_count ) {

        }
    }
    //sprendimo patikrinimas
    //rezultatu issaugojimas
}

function createTeam()
{
    $team = ['players' => []];
    $team['name'] = ucfirst(rand_Arr_El(TEAM_ADJECTIVES)) . ' ' . ucfirst(rand_Arr_El(TEAM_NOUNS));
    $team['coach'] = ucfirst(rand_Arr_El(NAMES)) . ' ' . ucfirst(rand_Arr_El(SURNAMES));
    for ($i = 0; $i < rand(11, 13); $i++)
        $team['players'][] = create_Random_Player();
    //  1. Patikrinti ir ištaisyti, jeigu yra žaidėjų su tais pačiais numeriais
    validate_uniq_team_numbers($team);
    //  2. Patikrinti ar komandoje yra bent po 2, kiekvienos pozicijos žaidėjai. Jeigu ne, klaidą ištaisyti
    // kažkokiam kitos rolės žaidėjui pakeitus rolę į trūkstamą.
    validate_player_position($team, 2);
    // 3. Parašyti funkciją, kuri pagal kažkokią "smart logiką" suskirsto VISUS komandos žaidėjus rolėmis.
    return $team;
}

