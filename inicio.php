<?php

namespace Futbol;

require_once 'Role.class.php';
require_once 'Player.class.php';
require_once 'Club.class.php';

$portero = new Role(1, 'portero', 'PO');
$defensa = new Role(2, 'defensa', 'DF');
$centrocampista = new Role(3, 'mediocampista', 'MC');
$delantero = new Role(4, 'delantero', 'DL');

$jug1 = new Player('Jose Gonzalez', $portero, 37, 80);
$jug2 = new Player('Borja Sanchez', $defensa, 36, 87);
$jug3 = new Player('Daniel Barbero', $delantero, 36, 82);
$jug4 = new Player('Juanito Valderrama', $defensa, 28, 77);
$jug5 = new Player('Pepe Perez', $centrocampista, 22, 79);
$jug6 = new Player('Roberto Martinez', $delantero, 28, 90);
$jug7 = new Player('Chacho Perez', $centrocampista, 31, 65);
$jug8 = new Player('Joern Werner', $centrocampista, 34, 90);
$jug9 = new Player('Luisete Calvo', $defensa, 35, 83);
$jug10 = new Player('Joel González', $delantero, 3, 94);
$jug11 = new Player('Martinez Valero', $centrocampista, 22, 71);

$equipo1 = new Club('Gran Alacant FC', [$jug1,$jug2,$jug3,$jug4,$jug5,$jug6,$jug7,$jug8,$jug9,$jug10,$jug11]);

var_dump($equipo1);

