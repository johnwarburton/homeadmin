

$ sqlite3 "/etc/pihole/pihole-FTL.db" "SELECT domain FROM queries WHERE client = '192.168.1.219' and timestamp > 1622253549"
