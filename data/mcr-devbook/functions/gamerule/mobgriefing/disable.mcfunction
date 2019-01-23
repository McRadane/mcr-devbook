gamerule mobGriefing false
scoreboard players set @a mcr_gm_griefing 0
tellraw @a ["",{"selector":"@s"},{"text":" set the gamerule mobGriefing to false"}]
execute if score @s mcr_devbook matches 1 run function mcr-devbook:get_book