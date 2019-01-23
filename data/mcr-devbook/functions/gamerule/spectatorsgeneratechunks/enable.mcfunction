gamerule spectatorsGenerateChunks true
scoreboard players set @a mcr_gm_spect 1
execute if score @s mcr_devbook matches 1 run function mcr-devbook:get_book