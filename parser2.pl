#!/usr/bin/perl -wl

use warnings;
use strict;

my @missing;
my $path = "./Doc/";
my $orig;

sub parse {
	
	my($file,$root,$part) = @_; my $f;

	ref($file) eq "GLOB" ? $f = $file : open $f, $file or die $!;
	$orig = $f unless $orig;
	
	my $content = parse_root($f, $root, $part);
	if($content) { expand_fields($f, \$content, $part); return($content) }

	return;
}


sub parse_root { 
	
	my ($f, $field, $oldpart) = @_; my $root;

	seek($f, 0, 0);	
	while(<$f>) {
		return $root if ($root) = $_ =~ /^\Q$field\E\s*=\s*(.*?)$/;
	}
	
	
	seek($f, 0, 0);
	while(<$f>) {
		my($part,$what);	
		if( (($part, $what) = $_ =~ /^([^=]*)=\[(.+?)\]/) and ($field =~ s/^\Q$part\E//) ) {
			$part = $oldpart . $part if $oldpart;
			$root = parse($path.$what, $field, $part);
			return $root if $root;
		}
	}
	return $root;

} 

sub expand_fields  {

	my($f,$field,$part) = @_;

	foreach( $$field =~ /\{([^}]+)\}/g ) {
		my $ex = $_;
		my $ox = $part ? $part . $ex : $ex;
print "[$$field] OX -- part = $part -- ex = $ex --- ox = $ox";
		my $value = parse($orig, $ox);
		$value ? $$field =~ s/\{\Q$ex\E\}/$value/gg : push @missing, $ex;
	}
} 



print " ".parse($ARGV[0], "Model.Root");
# print "\nMissing elements: @missing";
