gamerule showDeathMessages false
scoreboard players set @a mcr_gm_deathmsg 0
execute if score @s mcr_devbook matches 1 run function mcr-devbook:get_book