gamerule randomTickSpeed 10000
scoreboard players set @a mcr_gm_tickspeed 10000
tellraw @a ["",{"selector":"@s"},{"text":" set the gamerule randomTickSpeed to 10000"}]
execute if score @s mcr_devbook matches 1 run function mcr-devbook:get_book