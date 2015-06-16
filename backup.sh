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

rsync -av --modify-window=3601 --exclude='Mobile Applications' --delete $ITUNES/ /Volumes/NO\ NAME/iTunes >> backup.log  2>&1
rsync -av --modify-window=3601 --delete $NAS/ /Volumes/NO\ NAME/truecrypt-backups >> backup.log  2>&1

echo "Finish: `date`" >> backup.log

