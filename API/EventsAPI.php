<?php

namespace endiorite\API;

use endiorite\events\items\HangGliderEvents;
use endiorite\events\MineralLoots;
use endiorite\events\PlayerManager;
use endiorite\Main;
use pocketmine\Server;

class EventsAPI {

    public function __construct() {
        $list = [
            new PlayerManager(), new HangGliderEvents()/*, new MineralLoots() */
        ];
        foreach($list as $events) {
            Main::$instance->getServer()->getPluginManager()->registerEvents($events, Main::$instance);
        }

        foreach(array_diff(scandir(Server::getInstance()->getDataPath() . "worlds"), ["..", "."]) as $level) {
            Server::getInstance()->getWorldManager()->loadWorld($level);
        }
    }

}