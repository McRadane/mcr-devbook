gamerule randomTickSpeed 3
scoreboard players set @a mcr_gm_tickspeed 3
tellraw @a ["",{"selector":"@s"},{"text":" set the gamerule randomTickSpeed to default (3)"}]
execute if score @s mcr_devbook matches 1 run function mcr-devbook:get_book