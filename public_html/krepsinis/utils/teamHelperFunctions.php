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

function randArrEl($arr)
{
    return $arr[rand(0, count($arr) - 1)];
}

function createRandomPlayer()
{
    $player = [];
    $player['name'] = randArrEl(NAMES);
    $player['surname'] = randArrEl(SURNAMES);
    $player['number'] = rand(0, 99);
    $player['age'] = rand(18, 36);
    $player['height'] = rand(175, 230);
    $player['weight'] = round($player['height'] / (rand(18, 22) / 10));
    $player['position'] = randArrEl(POSITION_TYPES);
    return $player;
}

function arr_unique_values($array)
{
    for ($i = 0; $i < count($array) - 1; $i++) {
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$i] === $array[$j]) return false;
        }
    }
    return true;
}

function arr_map($array, $map_function)
{
    $mapped_arr = [];
    foreach ($array as $el) {
        $mapped_arr[] = $map_function($el);
    }
    return $mapped_arr;
}

function map_player_num($player)
{
    return $player['number'];
}

function createTeam()
{
    $team = ['players' => []];
    $team['name'] = ucfirst(randArrEl(TEAM_ADJECTIVES)) . ' ' . ucfirst(randArrEl(TEAM_NOUNS));
    $team['coach'] = ucfirst(randArrEl(NAMES)) . ' ' . ucfirst(randArrEl(SURNAMES));
    for ($i = 0; $i < rand(11, 13); $i++) {
        $team['players'][] = createRandomPlayer();
    }

    //  1. Patikrinti ir ištaisyti, jeigu yra žaidėjų su tais pačiais
    $team_numbers = arr_map($team['players'],'map_player_num');
    if (arr_unique_values($team_numbers)) {
        print "visi zaidejai unikalus";
    } else {
        print "yra neunikaliu zaideju";
    }
        //  2. Patikrinti ar komandoje yra bent po 2, kiekvienos pozicijos žaidėjai. Jeigu ne, klaidą ištaisyti
        // kažkokiam kitos rolės žaidėjui pakeitus rolę į trūkstamą.
        // 3. Parašyti funkciją, kuri pagal kažkokią "smart logiką" suskirsto VISUS komandos žaidėjus rolėmis.
        return $team;
}


