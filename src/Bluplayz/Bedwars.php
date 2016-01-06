<?php

namespace Bluplayz;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

class Bedwars extends PluginBase implements Listener {

    public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);

    }



}
