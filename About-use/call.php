<?php
require_once 'saitama.php';
require_once 'sirakobato.php';


// エイリアス
// use asia\japan\kanto as area;
// 複数クラスのインポート
use asia\japan\kanto\saitama\
{
    pref, bird
};

$pref = new pref();
echo $pref->getPref();

$bird = new bird();
echo $bird->getBird();