<?php

require_once ('LuasLingkaran.php'); //Cara manggil file

use App\Math\LuasLingkaran; //cara manggil class

$lingkaran = new LuasLingkaran(12);
// $lingkaran->jari = 12;
$lingkaran->tampil('roda'); //panggil method tampil

LuasLingkaran::testing(); //panggil static method