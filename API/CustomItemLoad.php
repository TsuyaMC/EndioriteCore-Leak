<?php

namespace endiorite\API;

use customiesdevs\customies\item\CustomiesItemFactory;
use endiorite\items\AmethysteIngot;
use endiorite\items\armor\amethyste\AmethysteBoots;
use endiorite\items\armor\amethyste\AmethysteChestplate;
use endiorite\items\armor\amethyste\AmethysteHelmet;
use endiorite\items\armor\amethyste\AmethysteLeggings;
use endiorite\items\armor\endiorite\EndioriteBoots;
use endiorite\items\armor\endiorite\EndioriteChestplate;
use endiorite\items\armor\endiorite\EndioriteHelmet;
use endiorite\items\armor\endiorite\EndioriteLeggings;
use endiorite\items\armor\palladium\PalladiumBoots;
use endiorite\items\armor\palladium\PalladiumChestplate;
use endiorite\items\armor\palladium\PalladiumHelmet;
use endiorite\items\armor\palladium\PalladiumLeggings;
use endiorite\items\armor\titane\TitaneBoots;
use endiorite\items\armor\titane\TitaneChestplate;
use endiorite\items\armor\titane\TitaneHelmet;
use endiorite\items\armor\titane\TitaneLeggings;
use endiorite\items\armor\travel\TravelBoots;
use endiorite\items\armor\travel\TravelChestplate;
use endiorite\items\armor\travel\TravelHelmet;
use endiorite\items\armor\travel\TravelLeggings;
use endiorite\items\EndioriteIngot;
use endiorite\items\EndiumNugget;
use endiorite\items\FortuneModifier;
use endiorite\items\HammerSocket;
use endiorite\items\HangGlider;
use endiorite\items\HeadHammer;
use endiorite\items\HealStick;
use endiorite\items\PaladiumStick;
use endiorite\items\PalladiumIngot;
use endiorite\items\PotionLauncher;
use endiorite\items\Rings;
use endiorite\items\SmeltModifier;
use endiorite\items\SocketPatern;
use endiorite\items\SpeedModifier;
use endiorite\items\SpeedStick;
use endiorite\items\StickOfGod;
use endiorite\items\StrengthStick;
use endiorite\items\TitaneIngot;
use endiorite\items\tools\amethyste\AmethysteAxe;
use endiorite\items\tools\amethyste\AmethysteHammeur;
use endiorite\items\tools\amethyste\AmethystePickaxe;
use endiorite\items\tools\amethyste\AmethysteShovel;
use endiorite\items\tools\amethyste\AmethysteSword;
use endiorite\items\tools\endiorite\EndioritePickaxe;
use endiorite\items\tools\endiorite\EndioriteSword;
use endiorite\items\tools\palladium\PalladiumAxe;
use endiorite\items\tools\palladium\PalladiumHammer;
use endiorite\items\tools\palladium\PalladiumPickaxe;
use endiorite\items\tools\palladium\PalladiumShovel;
use endiorite\items\tools\palladium\PalladiumSword;
use endiorite\items\tools\titane\TitaneAxe;
use endiorite\items\tools\titane\TitaneHammer;
use endiorite\items\tools\titane\TitanePickaxe;
use endiorite\items\tools\titane\TitaneShovel;
use endiorite\items\tools\titane\TitaneSword;
use endiorite\items\UnclaimFinder;

class CustomItemLoad {

    public function __construct() {
        CustomiesItemFactory::getInstance()->registerItem(TitaneIngot::class, "minecraft:titane_ingot", "Titane Ingot");
        CustomiesItemFactory::getInstance()->registerItem(PalladiumIngot::class, "minecraft:paladium_ingot", "Palladium Ingot");
        CustomiesItemFactory::getInstance()->registerItem(EndioriteIngot::class, "minecraft:azurite_ingot", "Endiorite Ingot");
        CustomiesItemFactory::getInstance()->registerItem(AmethysteIngot::class, "minecraft:amethiste_ingot", "Amethyste Ingot");

        CustomiesItemFactory::getInstance()->registerItem(AmethysteSword::class, "minecraft:amethiste_sword", "Amethyste Sword");
        CustomiesItemFactory::getInstance()->registerItem(AmethystePickaxe::class, "minecraft:amethiste_pickaxe", "Amethyste Pickaxe");
        CustomiesItemFactory::getInstance()->registerItem(AmethysteShovel::class, "minecraft:amethiste_hovel", "Amethyste Shovel");
        CustomiesItemFactory::getInstance()->registerItem(AmethysteAxe::class, "minecraft:amethiste_axe", "Amethyste Axe");

        CustomiesItemFactory::getInstance()->registerItem(TitaneSword::class, "minecraft:titane_sword", "Titane Sword");
        CustomiesItemFactory::getInstance()->registerItem(TitanePickaxe::class, "minecraft:titane_pickaxe", "Titane Pickaxe");
        CustomiesItemFactory::getInstance()->registerItem(TitaneShovel::class, "minecraft:titane_hovel", "Titane Shovel");
        CustomiesItemFactory::getInstance()->registerItem(TitaneAxe::class, "minecraft:titane_axe", "Titane Axe");

        CustomiesItemFactory::getInstance()->registerItem(PalladiumSword::class, "minecraft:paladium_sword", "Palladium Sword");
        CustomiesItemFactory::getInstance()->registerItem(PalladiumPickaxe::class, "minecraft:paladium_pickaxe", "Palladium Pickaxe");
        CustomiesItemFactory::getInstance()->registerItem(PalladiumShovel::class, "minecraft:paladium_hovel", "Palladium Shovel");
        CustomiesItemFactory::getInstance()->registerItem(PalladiumAxe::class, "minecraft:paladium_axe", "Palladium Axe");

        CustomiesItemFactory::getInstance()->registerItem(EndioriteSword::class, "minecraft:azurite_sword", "Endiorite Sword");
        CustomiesItemFactory::getInstance()->registerItem(EndioritePickaxe::class, "minecraft:azurite_pickaxe", "Endiorite Pickaxe");

        CustomiesItemFactory::getInstance()->registerItem(HealStick::class, "minecraft:heal_stick", "Heal Stick");
        CustomiesItemFactory::getInstance()->registerItem(SpeedStick::class, "minecraft:speed_stick", "Speed Stick");
        CustomiesItemFactory::getInstance()->registerItem(StrengthStick::class, "minecraft:strength_stick", "Strength Stick");
        CustomiesItemFactory::getInstance()->registerItem(StickOfGod::class, "minecraft:stick_of_god", "Stick Of God");

        CustomiesItemFactory::getInstance()->registerItem(AmethysteHelmet::class, "minecraft:amethiste_helmet", "Amethyste Helmet");
        CustomiesItemFactory::getInstance()->registerItem(AmethysteChestplate::class, "minecraft:amethiste_chestplate", "Amethyste Chestplate");
        CustomiesItemFactory::getInstance()->registerItem(AmethysteLeggings::class, "minecraft:amethiste_leggings", "Amethyste Leggings");
        CustomiesItemFactory::getInstance()->registerItem(AmethysteBoots::class, "minecraft:amethiste_boots", "Amethyste Boots");

        CustomiesItemFactory::getInstance()->registerItem(TitaneHelmet::class, "minecraft:titane_helmet", "Titane Helmet");
        CustomiesItemFactory::getInstance()->registerItem(TitaneChestplate::class, "minecraft:titane_chestplate", "Titane Chestplate");
        CustomiesItemFactory::getInstance()->registerItem(TitaneLeggings::class, "minecraft:titane_leggings", "Titane Leggings");
        CustomiesItemFactory::getInstance()->registerItem(TitaneBoots::class, "minecraft:titane_boots", "Titane Boots");

        CustomiesItemFactory::getInstance()->registerItem(PalladiumHelmet::class, "minecraft:paladium_helmet", "Palladium Helmet");
        CustomiesItemFactory::getInstance()->registerItem(PalladiumChestplate::class, "minecraft:paladium_chestplate", "Palladium Chestplate");
        CustomiesItemFactory::getInstance()->registerItem(PalladiumLeggings::class, "minecraft:paladium_leggings", "Palladium Leggings");
        CustomiesItemFactory::getInstance()->registerItem(PalladiumBoots::class, "minecraft:paladium_boots", "Palladium Boots");

        CustomiesItemFactory::getInstance()->registerItem(TravelHelmet::class, "minecraft:travel_helmet", "Travel Helmet");
        CustomiesItemFactory::getInstance()->registerItem(TravelChestplate::class, "minecraft:travel_chestplate", "Travel Chestplate");
        CustomiesItemFactory::getInstance()->registerItem(TravelLeggings::class, "minecraft:travel_leggings", "Travel Leggings");
        CustomiesItemFactory::getInstance()->registerItem(TravelBoots::class, "minecraft:travel_boots", "Travel Boots");

        CustomiesItemFactory::getInstance()->registerItem(EndioriteHelmet::class, "minecraft:azurite_helmet", "Endiorite Helmet");
        CustomiesItemFactory::getInstance()->registerItem(EndioriteChestplate::class, "minecraft:azurite_chestplate", "Endiorite Chestplate");
        CustomiesItemFactory::getInstance()->registerItem(EndioriteLeggings::class, "minecraft:azurite_leggings", "Endiorite Leggings");
        CustomiesItemFactory::getInstance()->registerItem(EndioriteBoots::class, "minecraft:azurite_boots", "Endiorite Boots");

        CustomiesItemFactory::getInstance()->registerItem(UnclaimFinder::class, "minecraft:unclaim_finder", "Unclaim Finder");
        CustomiesItemFactory::getInstance()->registerItem(HangGlider::class, "minecraft:hang_glider", "Hang Glider");
        CustomiesItemFactory::getInstance()->registerItem(PotionLauncher::class, "minecraft:potion_launcher", "Potion Launcher");

        CustomiesItemFactory::getInstance()->registerItem(Rings::class, "minecraft:rings", "Rings");
        CustomiesItemFactory::getInstance()->registerItem(PaladiumStick::class, "minecraft:palladium_stick", "Palladium Stick");
        CustomiesItemFactory::getInstance()->registerItem(EndiumNugget::class, "minecraft:endium_nugget", "Endium Nuggets");
        CustomiesItemFactory::getInstance()->registerItem(HammerSocket::class, "minecraft:hammer_patern", "Hammer Socket");
        CustomiesItemFactory::getInstance()->registerItem(SocketPatern::class, "minecraft:socket_patern", "Socket");

        CustomiesItemFactory::getInstance()->registerItem(TitaneHammer::class, "minecraft:titane_hammer", "Hammeur");
        CustomiesItemFactory::getInstance()->registerItem(PalladiumHammer::class, "minecraft:paladium_hammer", "Hammeur");
        CustomiesItemFactory::getInstance()->registerItem(AmethysteHammeur::class, "minecraft:amethyst_hammer", "Hammeur");

        CustomiesItemFactory::getInstance()->registerItem(FortuneModifier::class, "minecraft:fortune_modifier", "Modifier");
        CustomiesItemFactory::getInstance()->registerItem(SmeltModifier::class, "minecraft:smelt_modifier", "Modifier");
        CustomiesItemFactory::getInstance()->registerItem(SpeedModifier::class, "minecraft:speed_modifier", "Modifier");

        CustomiesItemFactory::getInstance()->registerItem(HeadHammer::class, "minecraft:head_hammer", "Head hammeur");
    }

}