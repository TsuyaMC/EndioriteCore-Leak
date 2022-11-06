<?php

namespace endiorite\items\tools\amethyste;

use customiesdevs\customies\item\CreativeInventoryInfo;
use customiesdevs\customies\item\ItemComponents;
use customiesdevs\customies\item\ItemComponentsTrait;
use endiorite\Main;
use pocketmine\block\Block;
use pocketmine\block\BlockToolType;
use pocketmine\entity\Entity;
use pocketmine\item\ItemIdentifier;
use pocketmine\item\Pickaxe;
use pocketmine\item\ToolTier;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\nbt\tag\ListTag;
use pocketmine\nbt\tag\IntTag;

class AmethystePickaxe extends Pickaxe implements ItemComponents {

    use ItemComponentsTrait;
    
    const SPEED = 6;
    
    const DURABILITY = 3200;

    public function __construct(ItemIdentifier $identifier, string $name = "Unknown") {
        parent::__construct($identifier, $name, ToolTier::DIAMOND());
        $this->initComponent("amethiste_pickaxe", 1, new CreativeInventoryInfo("equipment", "itemGroup.name.pickaxe"));
        $this->addProperty("hand_equipped", true);
        $this->addComponent("minecraft:durability", CompoundTag::create()
                    ->setTag("damage_chance", CompoundTag::create()
                        ->setTag("max", new IntTag(100))
                        ->setTag("min", new IntTag(100))
                    )
                    ->setTag("max_durability", new IntTag(self::DURABILITY))
        );
        $this->addComponent("minecraft:digger", CompoundTag::create()->setTag("destroy_speeds", new ListTag([
            CompoundTag::create()
                ->setTag("block", CompoundTag::create()->setString("tags", "query.any_tag('stone', 'metal', 'iron_pick_diggable')"))
                ->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:stone")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:cobblestone")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:coal_ore")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:iron_ore")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:gold_ore")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:lapis_ore")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:redstone_ore")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:diamond_ore")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:emerald_ore")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:cobblestone_wall")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:stone_pressure_plate")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:light_weighted_pressure_plate")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:heavy_weighted_pressure_plate")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:iron_door")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:obsidian")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:dripstone_block")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:iron_bars")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:mud_brick_slab")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:mud_brick_stairs")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:mud_brick_wall")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:mud_bricks")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:mossy_cobblestone")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:crimson_nylium")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:warped_nylium")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:netherrack")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:magma")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:bell")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:nether_brick")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:nether_brick_fence")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:nether_brick_stairs")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:red_nether_brick")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:red_nether_brick_stairs")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:concrete")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:hardened_clay")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:stained_hardened_clay")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:rail")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:golden_rail")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:detector_rail")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:activator_rail")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:end_rod")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:end_stone")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:end_bricks")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:double_stone_slab3")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:end_brick_stairs")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:purpur_block")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:purpur_stairs")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:double_stone_slab2")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:white_glazed_terracotta")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:orange_glazed_terracotta")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:magenta_glazed_terracotta")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:light_blue_glazed_terracotta")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:yellow_glazed_terracotta")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:lime_glazed_terracotta")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:pink_glazed_terracotta")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:gray_glazed_terracotta")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:silver_glazed_terracotta")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:cyan_glazed_terracotta")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:purple_glazed_terracotta")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:blue_glazed_terracotta")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:brown_glazed_terracotta")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:green_glazed_terracotta")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:red_glazed_terracotta")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:black_glazed_terracotta")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:quartz_ore")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:blast_furnace")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:furnace")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:smoker")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:stonecutter_block")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:bone_block")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:prismarine")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:prismarine_stairs")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:prismarine_bricks_stairs")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:dark_prismarine_stairs")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:lodestone")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:coal_block")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:iron_block")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:gold_block")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:lapis_block")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:redstone_block")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:emerald_block")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:netherite_block")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:grindstone")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:ender_chest")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:anvil")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:smooth_stone")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:stonebrick")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:observer")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:mob_spawner")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:iron_trapdoor")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:double_stone_slab")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:double_stone_slab2")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:double_stone_slab3")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:double_stone_slab4")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:enchanting_table")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:brewing_stand")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:shulker_box")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:undyed_shulker_box")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:hopper")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:dropper")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:dispenser")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:coral_block")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:quartz_stairs")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:stone_stairs")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:stone_brick_stairs")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:brick_stairs")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:sandstone_stairs")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:red_sandstone_stairs")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:andesite_stairs")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:diorite_stairs")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:granite_stairs")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:polished_andesite_stairs")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:polished_diorite_stairs")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:polished_granite_stairs")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:normal_stone_stairs")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:smooth_sandstone_stairs")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:smooth_quartz_stairs")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:smooth_red_sandstone_stairs")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:sandstone")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:quartz_block")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:ice")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:packed_ice")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:blue_ice")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:nether_gold_ore")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:gilded_blackstone")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:ancient_debris")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:basalt")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:smooth_basalt")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:polished_basalt")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:blackstone")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:blackstone_slab")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:blackstone_stairs")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:blackstone_wall")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:polished_blackstone")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:polished_blackstone_slab")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:polished_blackstone_stairs")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:polished_blackstone_wall")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:chiseled_polished_blackstone")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:polished_blackstone_bricks")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:polished_blackstone_brick_stairs")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:polished_blackstone_brick_wall")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:polished_blackstone_brick_slab")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:cracked_polished_blackstone_bricks")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:chiseled_nether_bricks")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:cracked_nether_bricks")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:chain")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:calcite")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:tuff")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:deepslate")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:deepslate_coal_ore")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:deepslate_copper_ore")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:deepslate_diamond_ore")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:deepslate_emerald_ore")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:deepslate_gold_ore")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:deepslate_iron_ore")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:deepslate_lapis_ore")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:deepslate_redstone_ore")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:deepslate_bricks")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:deepslate_brick_slab")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:deepslate_brick_stairs")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:deepslate_brick_wall")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:deepslate_tiles")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:cracked_deepslate_tiles")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:deepslate_tile_slab")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:deepslate_tile_stairs")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:deepslate_tile_wall")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:chiseled_deepslate")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:polished_deepslate")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:polished_deepslate_slab")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:polished_deepslate_stairs")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:polished_deepslate_wall")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:cobbled_deepslate")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:cobbled_deepslate_slab")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:cobbled_deepslate_stairs")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:cobbled_deepslate_wall")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:cracked_deepslate_bricks")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:infested_deepslate")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:copper_ore")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:copper_block")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:cut_copper")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:cut_copper_slab")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:cut_copper_stairs")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:exposed_copper")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:exposed_cut_copper")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:exposed_cut_copper_slab")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:exposed_cut_copper_stairs")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:oxidized_copper")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:waxed_oxidized_cut_copper")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:waxed_oxidized_cut_copper_slab")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:waxed_oxidized_cut_copper_stairs")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:waxed_weathered_copper")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:waxed_weathered_cut_copper")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:waxed_weathered_cut_copper_slab")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:waxed_weathered_cut_copper_stairs")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:pointed_dripstone")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:raw_copper_block")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:raw_gold_block")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:raw_iron_block")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:crying_obsidian")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:titane_ore")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:paladium_ore")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:amethyste_ore")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:amethyste_block")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:paladium_block")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:grinder")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:grinder_casing")->setInt("speed", self::SPEED),
            CompoundTag::create()->setString("block", "minecraft:grinder_frame")->setInt("speed", self::SPEED)
        ])));
    }

    public function getBlockToolType(): int {
        return BlockToolType::PICKAXE;
    }

    public function getBlockToolHarvestLevel(): int {
        return 5;
    }

    public function getMaxDurability(): int {
        return Main::$instance->utils::AMETHYSTE_TOOLS_DURABILITY;
    }

    public function onAttackEntity(Entity $victim): bool {
        return $this->applyDamage(2);
    }

    public function onDestroyBlock(Block $block): bool {
        if($block->getBreakInfo()->getHardness() > 0) {
            return $this->applyDamage(1);
        }
        return false;
    }

}