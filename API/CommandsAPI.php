<?php

namespace endiorite\API;

use endiorite\commands\EnderChestCommands;
use endiorite\commands\FeedCmd;
use endiorite\commands\HealCmd;
use endiorite\commands\IdCmd;
use endiorite\commands\LobbyCmd;
use endiorite\commands\MinageCmd;
use endiorite\commands\RtpCmd;
use endiorite\commands\SpawnCmd;
use pocketmine\Server;

class CommandsAPI {

    public function __construct() {
        Server::getInstance()->getCommandMap()->registerAll("endiorite", [
            new FeedCmd(), new HealCmd(), new IdCmd(),
            new EnderChestCommands(), new LobbyCmd()
        ]);
    }

}