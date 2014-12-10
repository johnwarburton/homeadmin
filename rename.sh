#!/bin/bash
#dir='/Volumes/video/TV\ Shows/Sex\ and\ the\ City/Season\ 3/'
dir='/Volumes/video/TV Shows/Sex and the City/Season 4/'

cd "$dir"
for i in 0 1 2 3 4 5 ; do
let ep=$i+12
ep=`printf "%02d" $ep`

mv title0${i}.mkv "Sex and the City - s04e${ep}.mkv"
done

