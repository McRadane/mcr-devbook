gamerule doMobSpawning false
scoreboard players set @a mcr_gm_mobspawn 0
tellraw @a ["",{"selector":"@s"},{"text":" set the gamerule doMobSpawning to false"}]
execute if score @s mcr_devbook matches 1 run function mcr-devbook:get_book