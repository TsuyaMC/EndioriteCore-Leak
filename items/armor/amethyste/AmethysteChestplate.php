<?php

namespace endiorite\items\armor\amethyste;

use customiesdevs\customies\item\CreativeInventoryInfo;
use customiesdevs\customies\item\ItemComponents;
use customiesdevs\customies\item\ItemComponentsTrait;
use endiorite\Main;
use pocketmine\item\Armor;
use pocketmine\item\ArmorTypeInfo;
use pocketmine\item\ItemIdentifier;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\inventory\ArmorInventory;

class AmethysteChestplate extends Armor implements ItemComponents {

    use ItemComponentsTrait;

    public function __construct(ItemIdentifier $identifier, string $name = "Unknown") {
        parent::__construct($identifier, $name, new ArmorTypeInfo(5, Main::$instance->utils::AMETHYSTE_TOOLS_DURABILITY, ArmorInventory::SLOT_CHEST));
        $this->initComponent("amethiste_chestplate", 1, new CreativeInventoryInfo("equipment", "itemGroup.name.chestplate"));
        $this->addComponent("minecraft:wearable", CompoundTag::create()->setString("slot", "slot.armor.chest"));
        $this->addComponent("minecraft:armor", CompoundTag::create()->setInt("protection", 5));
        $this->addComponent("minecraft:durability", CompoundTag::create()->setInt("max_durability", Main::$instance->utils::AMETHYSTE_TOOLS_DURABILITY));
    }

}