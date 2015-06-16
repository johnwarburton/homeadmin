#!/bin/sh

# NAS true crypt -- /Volumes/truecrypt
# John's off site drive -- /Volumes/NO\ NAME/truecrypt-backups

NAS="/Volumes/truecrypt"
EXTERNAL="/Volumes/Untitled 1"
EXTERNAL="/Volumes/NO\ NAME/truecrypt-backups"
ITUNES="/Volumes/NAS/iTunes"
EXT_ITUNES="/Volumes/NO\ NAME/iTunes"

echo "Start: `date`" >> backup.log
#rsync -av --modify-window=3601 --delete /Volumes/Untitled/ /Volumes/NO\ NAME/truecrypt-backups/ >> backup.log  2>&1

rsync -av --modify-window=3601 --delete $NAS/ "$EXTERNAL"/ >> backup.log  2>&1
rsync -av --modify-window=3601 --delete $ITUNES/ "$EXT_ITUNES"/ >> backup.log  2>&1

echo "Finish: `date`" >> backup.log

