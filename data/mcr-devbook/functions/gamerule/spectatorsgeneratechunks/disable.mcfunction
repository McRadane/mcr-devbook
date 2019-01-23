gamerule spectatorsGenerateChunks false
scoreboard players set @a mcr_gm_spect 0
tellraw @a ["",{"selector":"@s"},{"text":" set the gamerule spectatorsGenerateChunks to false"}]
execute if score @s mcr_devbook matches 1 run function mcr-devbook:get_book