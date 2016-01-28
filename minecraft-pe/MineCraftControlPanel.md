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
  - Online?
    - /usrinfo <player>
  - List generated from minecraft-pe/plugins/SimpleAuth/players/d/dad.yml
  and minecraft-pe/players
  
- Add user
  - add to whitelist
  - preregister user password (check for password >= 6 chars)
- Delete User
- Reset password
  - resetpwd <user>
  - preregister user password (check for password >= 6 chars)
  

## config.ini
  - Edit everything?
  - have a restore from defaults
  - maybe save to cloud? config.init and users?


