<?php

namespace endiorite\commands;

use endiorite\Main;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;

class SpawnCmd extends Command {

    public function __construct() {
        parent::__construct("spawn", "Spawn du serveur.", "/spawn", ["hub", "lobby"]);
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args) {
        if($sender instanceof Player) {
            Main::$instance->utils->goToSpawn($sender);
        }
    }

}