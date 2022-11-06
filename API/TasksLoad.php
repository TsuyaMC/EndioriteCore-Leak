<?php

namespace endiorite\API;

use endiorite\Main;
use endiorite\tasks\SayTask;
use endiorite\tasks\ScoreboardTask;

class TasksLoad {

    public function __construct() {
        Main::$instance->getScheduler()->scheduleRepeatingTask(new SayTask(), 20 * 900);
        Main::$instance->getScheduler()->scheduleRepeatingTask(new ScoreboardTask(), 20 * 10);
    }

}