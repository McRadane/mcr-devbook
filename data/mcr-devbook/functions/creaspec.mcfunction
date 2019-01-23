scoreboard players set @s mcr_creaspect 4

execute at @s anchored eyes if block ^ ^ ^.4 #mcr-devbook:passthrough run scoreboard players remove @s mcr_creaspect 1
execute at @s anchored eyes if block ^ ^-1 ^.4 #mcr-devbook:passthrough run scoreboard players remove @s mcr_creaspect 1

execute if block ~ ~1 ~ #mcr-devbook:passthrough run scoreboard players remove @s mcr_creaspect 1
execute if block ~ ~ ~ #mcr-devbook:passthrough run scoreboard players remove @s mcr_creaspect 1

execute as @a if score @s mcr_creaspect matches 1.. run gamemode spectator
execute as @a if score @s mcr_creaspect matches 0 run gamemode creative