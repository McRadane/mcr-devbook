gamerule spawnRadius 10
scoreboard players set @a mcr_gm_spawn 10
tellraw @a ["",{"selector":"@s"},{"text":" set the gamerule spawnRadius to default (10)"}]
execute if score @s mcr_devbook matches 1 run function mcr-devbook:get_book