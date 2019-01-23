gamerule doMobLoot false
scoreboard players set @a mcr_gm_mobloot 0
tellraw @a ["",{"selector":"@s"},{"text":" set the gamerule doMobLoot to false"}]
execute if score @s mcr_devbook matches 1 run function mcr-devbook:get_book