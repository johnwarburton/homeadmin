# Control Panel
## Default page
  - # players online (/list)
  - name of server (server.properties:motd)
  - /plugins list plugins
  - current time in world  **something currently wrong**
    - http://minecraft.gamepedia.com/Pocket_Edition_level_format 14400 ticks per Minecraft day/night cycle, making the full cycle length 12 minutes.8 minutes shorter than the standard 20 minute day/night cycle
    - 14400 per day is 600 ticks/hour. 0 is 6am
	0	6:00
	600	7:00
	1200	8:00
	1800	9:00
	2400	10:00
	3000	11:00
	3600	12:00
	4200	13:00
	4800	14:00
	5400	15:00
	6000	16:00
	6600	17:00
	7200	18:00
	7800	19:00
	8400	20:00
	9000	21:00
	9600	22:00
	10200	23:00
	10800	0:00
	11400	1:00
	12000	2:00
	12600	3:00
	13200	4:00
	13800	5:00
	14400	6:00

    - (((time query % 14000) / 1000 ) + 6) mod 24

## Users
- Defaults to user list
  - Username
  - Email address (of parent)
  - Online?
    - /usrinfo <player>
  - List generated from
    - /Users/minecraft/minecraft-pe/plugins/SimpleAuth/players/d/dad.yml
    - /Users/minecraft/minecraft-pe/players/
    - /Users/minecraft/minecraft-pe/white-list.txt  
    - /Users/minecraft/pixelmon-server/whitelist.json
  
  
- Add user
  - add to whitelist
  - preregister user password (check for password >= 6 chars)
- Delete User
- Reset password
  - resetpwd <user>
  - preregister user password (check for password >= 6 chars)
  

## config.ini
  - Edit everything?
    - have an advanced button to edit some things. Flag them as advanced
  - have a restore from defaults (defaults is a hash & on disk)
  - maybe save to cloud? config.init and users?
  - Defaults (http://www.howtogeek.com/202961/how-to-run-a-local-minecraft-pe-server-for-fun-and-persistent-world-building/)
    - Creative
    - Spawn protection on
    - Whitelist
    - RCON
    - Memory
      - need to query system for available memory. The 256 Mb default should be ok for 20 people
      - These threads are good for memory usage 
      	- https://forums.pocketmine.net/threads/how-many-memory-ram-for-slot.15284/
      	- 30 player 1 Gb RAM https://forums.pocketmine.net/threads/minecraft-pe-server-requirements.5110/
      	- php.ini seems to need editing for more memory - https://forums.pocketmine.net/threads/maximum-memory.15040/
      	- 
      - 


