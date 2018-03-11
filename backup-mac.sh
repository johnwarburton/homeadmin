#!/bin/sh

TC="/Applications/TrueCrypt.app/Contents/MacOS/TrueCrypt --text"
VOL=`$TC --list 2>/dev/null | awk '{print $NF}'`

if [ "$VOL" == "" ] ; then
    echo "True Crypt volume not mounted - exiting"
    exit 1
fi

if [ ! -d $VOL ] ; then
    echo "True Crypt Volume \"$VOL\" is not a directory. Exiting"
    exit 1
fi

echo "Start: `date`" >> backup.log

caffeinate -is rsync --delete --exclude '*Library/Caches*' --delete-excluded -av Pictures Library Documents ScotsCollege /Volumes/truecrypt/new-backups/jacqueline/
caffeinate -is rsync --delete -av /Volumes/home/MobileSync /Volumes/truecrypt/new-backups/jacqueline/

sync ; sleep 1 ; sync
$TC --dismount
echo "Finish: `date`" >> backup.log
