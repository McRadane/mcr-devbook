gamerule spawnRadius 0
scoreboard players set @a mcr_gm_spawn 0
tellraw @a ["",{"selector":"@s"},{"text":" set the gamerule spawnRadius to 0"}]
execute if score @s mcr_devbook matches 1 run function mcr-devbook:get_book