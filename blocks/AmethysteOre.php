<?php

namespace endiorite\blocks;

use pocketmine\block\Block;
use pocketmine\block\BlockBreakInfo;
use pocketmine\block\BlockIdentifier;

class AmethysteOre extends Block {

    public function __construct(BlockIdentifier $idInfo, string $name, BlockBreakInfo $blockBreakInfo) {
        parent::__construct($idInfo, $name, $blockBreakInfo);
    }

}