gamerule reducedDebugInfo true
scoreboard players set @a mcr_gm_debuginfo 1
tellraw @a ["",{"selector":"@s"},{"text":" set the gamerule reducedDebugInfo to true"}]
execute if score @s mcr_devbook matches 1 run function mcr-devbook:get_book