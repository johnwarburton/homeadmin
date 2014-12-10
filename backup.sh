#!/bin/sh

# NAS true crypt -- /Volumes/Untitled
# John's off site drive -- /Volumes/NO\ NAME/truecrypt-backups
echo "Start: `date`" >> backup.log
rsync -av --modify-window=3601 --delete /Volumes/Untitled/ /Volumes/NO\ NAME/truecrypt-backups/ >> backup.log  2>&1
echo "Finish: `date`" >> backup.log
