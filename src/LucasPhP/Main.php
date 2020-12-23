<?php

namespace LucasPhP;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener {

    public static $instance;

    public function onEnable() {

        self::$instance = $this;

        $this->getLogger()->info("Â§7Le plugin de soupe pour zMityxx de la Exoteam a etais charger ! ");

        $this->getServer()->getPluginManager()->registerEvents(new Items\Soup(), $this);
    }
}