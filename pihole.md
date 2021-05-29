

$ sqlite3 "/etc/pihole/pihole-FTL.db" "SELECT domain FROM queries WHERE client = '192.168.1.219' and timestamp > 1622253549"

$ sqlite3 "/etc/pihole/pihole-FTL.db" "SELECT domain FROM queries WHERE client = '192.168.1.219' and timestamp > 1522153549"|sort | uniq -c | sort -rn | egrep  'roblox|rbx|epicgames|discord|minecraft.net|minecraftservices.com|mojang.com|api.steampowered.com|wynncraft.com|hypixel.net|gaijinent.com'| egrep -v 'microsoft|google|tsc|spotify|youtube|gvt2|gstatic|epochcapital|live.com|windows' >> lachlan-blacklist.txt
