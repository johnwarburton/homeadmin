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

my ($ts, $mp4);

my $PeppaDir='/Volumes/video/TV\ Shows/Peppa\ Pig';


my @TS=glob("$PeppaDir/*ts");
foreach $ts (@TS) {
    $mp4 = $ts;
    $mp4 =~ s/\.ts$/\.mp4/;
    if (-f $mp4) {
        print "Skipping - we have $mp4\n";
    }
    else {
        print "/Applications/HandBrakeCLI --preset iPad --input $ts --output $mp4";
        `/Applications/HandBrakeCLI --preset iPad --input \"$ts\" --output \"$mp4\"`
    }
}
