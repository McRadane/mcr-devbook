gamerule commandBlockOutput true
scoreboard players set @a mcr_gm_cmo 1
tellraw @a ["",{"selector":"@s"},{"text":" set the gamerule commandBlockOutput to true"}]
execute if score @s mcr_devbook matches 1 run function mcr-devbook:get_book