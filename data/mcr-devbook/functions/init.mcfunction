scoreboard objectives add mcr_devbook dummy
scoreboard objectives add mcr_gamemode dummy
scoreboard objectives add mcr_difficulty dummy
scoreboard objectives add mcr_creaspect dummy

team add red_marker
team add blue_marker
team add yellow_marker
team add purple_marker

team modify red_marker color red
team modify blue_marker color blue
team modify yellow_marker color yellow
team modify purple_marker color light_purple

execute as @a unless score @s mcr_devbook matches 1 run tellraw @s ["",{"text":"Get the DevBook : ["},{"text":"click","color":"yellow","clickEvent":{"action":"run_command","value":"/function mcr-devbook:get_book"}},{"text":"]"}]