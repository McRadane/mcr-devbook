<?php

$gamerules = array(
  [ 'rule' => 'announceAdvancements', 'default' => true, 'tag' => 'mcr_gm_adv' ],
  [ 'rule' => 'commandBlockOutput', 'default' => true, 'tag' => 'mcr_gm_cmo' ],
  [ 'rule' => 'disableElytraMovementCheck', 'default' => false, 'tag' => 'mcr_gm_elytra' ],
  [ 'rule' => 'doDaylightCycle', 'default' => true, 'tag' => 'mcr_gm_light' ],
  [ 'rule' => 'doEntityDrops', 'default' => true, 'tag' => 'mcr_gm_entdro' ],
  [ 'rule' => 'doFireTick', 'default' => true, 'tag' => 'mcr_gm_firetick' ],
  [ 'rule' => 'doLimitedCrafting', 'default' => false, 'tag' => 'mcr_gm_limitcraf' ],
  [ 'rule' => 'doMobLoot', 'default' => true, 'tag' => 'mcr_gm_mobloot' ],
  [ 'rule' => 'doMobSpawning', 'default' => true, 'tag' => 'mcr_gm_mobspawn' ],
  [ 'rule' => 'doTileDrops', 'default' => true, 'tag' => 'mcr_gm_tiledrop' ],
  [ 'rule' => 'doWeatherCycle', 'default' => true, 'tag' => 'mcr_gm_weather' ],
  [ 'rule' => 'keepInventory', 'default' => false, 'tag' => 'mcr_gm_inventory' ],
  [ 'rule' => 'logAdminCommands', 'default' => true, 'tag' => 'mcr_gm_logadmin' ],
  [ 'rule' => 'mobGriefing', 'default' => true, 'tag' => 'mcr_gm_griefing' ],
  [ 'rule' => 'naturalRegeneration', 'default' => true, 'tag' => 'mcr_gm_regen' ],
  [ 'rule' => 'randomTickSpeed', 'type' => 'number', 'default' => 3, 'tag' => 'mcr_gm_tickspeed', 'options' => [0, 10000] ],
  [ 'rule' => 'reducedDebugInfo', 'default' => false, 'tag' => 'mcr_gm_debuginfo' ],
  [ 'rule' => 'showDeathMessages', 'default' => true, 'tag' => 'mcr_gm_deathmsg' ],
  [ 'rule' => 'spawnRadius', 'type' => 'number', 'default' => 10, 'tag' => 'mcr_gm_spawn', 'options' => [0] ],
  [ 'rule' => 'spectatorsGenerateChunks', 'default' => true, 'tag' => 'mcr_gm_spect' ]
);

$init = '';

foreach ($gamerules as $gamerule) {

    $init .= 'scoreboard objectives add '.$gamerule['tag'].' dummy' . PHP_EOL;

    mkdir('gamerule/'.strtolower($gamerule['rule']));
    if(!isset($gamerule['type'])) {
        $functionOn = 'gamerule '.$gamerule['rule'].' true
scoreboard players set @a '.$gamerule['tag'].' 1
tellraw @a ["",{"selector":"@s"},{"text":" set the gamerule '.$gamerule['rule'].' to true"}]
execute if score @s mcr_devbook matches 1 run function mcr-devbook:get_book';

        $functionOff = 'gamerule '.$gamerule['rule'].' false
scoreboard players set @a '.$gamerule['tag'].' 0
tellraw @a ["",{"selector":"@s"},{"text":" set the gamerule '.$gamerule['rule'].' to false"}]
execute if score @s mcr_devbook matches 1 run function mcr-devbook:get_book';


        file_put_contents('gamerule/'.strtolower($gamerule['rule']).'/enable.mcfunction', $functionOn);
        file_put_contents('gamerule/'.strtolower($gamerule['rule']).'/disable.mcfunction', $functionOff);
    } else {
        $functionDefault = 'gamerule '.$gamerule['rule'].' '.$gamerule['default'].'
scoreboard players set @a '.$gamerule['tag'].' '.$gamerule['default'].'
tellraw @a ["",{"selector":"@s"},{"text":" set the gamerule '.$gamerule['rule'].' to default ('.$gamerule['default'].')"}]
execute if score @s mcr_devbook matches 1 run function mcr-devbook:get_book';

        file_put_contents('gamerule/'.strtolower($gamerule['rule']).'/set_default.mcfunction', $functionDefault);

        foreach ($gamerule['options'] as $option) {
            $functionValue = 'gamerule '.$gamerule['rule'].' '.$option.'
scoreboard players set @a '.$gamerule['tag'].' '.$option.'
tellraw @a ["",{"selector":"@s"},{"text":" set the gamerule '.$gamerule['rule'].' to '.$option.'"}]
execute if score @s mcr_devbook matches 1 run function mcr-devbook:get_book';

            file_put_contents('gamerule/'.strtolower($gamerule['rule']).'/set_'.$option.'.mcfunction', $functionValue);
        }
    }

}

file_put_contents('init_gamerule.mcfunction', $init);