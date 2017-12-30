<?php
$user1 = ['name' => 'andy', 'age' => 42];
$user2 = ['name' => 'thomas', 'age' => 18];
$user3 = ['name' => 'john', 'age' => 28];
$user4 = ['name' => 'thomas', 'age' => 16];
$users = [
    $user1, $user2, $user3, $user4
];
for ($i = 1; $i <= 10; $i++) {
    echo $i;
    echo "\n";
}
// foreach ($users as $user) {
//     if ($user['name'] == 'thomas') {
//         // $a = $real;
//         echo $user['name'] . ' age is ' . $user['age'] . "\n" ;
//     } else {
//         // $a = $notreal;
//         echo $user['name'] . "NO\n";
//     }
//     // $a = ($user['name'] == 'thomas') ? $real : $notreal;
//     if ($user['age'] < 30) {
//         echo $user['name'] . ' age is below 30 which is ' . $user['age'];
//     }
// }

// var_dump($d);
