gamerule randomTickSpeed 0
scoreboard players set @a mcr_gm_tickspeed 0
tellraw @a ["",{"selector":"@s"},{"text":" set the gamerule randomTickSpeed to 0"}]
execute if score @s mcr_devbook matches 1 run function mcr-devbook:get_book