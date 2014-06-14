#!/opt/local/bin/perl
use strict;
use warnings;
$|++;

#
#
# PoC HandBrakeCLI script to use
# presets on any .ts file that 
# does not have a mp4 file
#

my ($ts);

my $PeppaDir='/Volumes/video/TV\ Shows/Peppa\ Pig';


my @TS=glob("$PeppaDir/*ts");
foreach $ts (@TS) {
    print "$ts\n";
}
