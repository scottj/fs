#!/usr/bin/perl -I/perl

use betools;
use CGI qw(-no_debug :standard);

my $id = param('id');

if ($id) {
    my $db = new betools::db;
    my $cooked = 0;
    my $cookie1 = $id.'-one';
    my $cookie2 = $id.'-day';
    my $first = cookie($cookie1);
    my $day = cookie($cookie2);
    my ($c, $cook1, $cook2, $count, $d, $sql);

    if (!$first) {
	$first = 1;
    } else {
	$first = 0;
    }
    if (!$day) {
	$day = 1;
    } else {
	$day = 0;
    }

    if ($first == 1) {
        $cook1 = cookie(-name=>"$cookie1",
		-value=>$id,
		-expires=>'+10y',
		-path=>'/counter',
		-domain=>'speed.insane.com',
		-secure=>0);
    }
    if ($day == 1) {
	my ($hour) = (localtime(time))[2];
	my $dayexp = 24 - $hour;
	$dayexp = '+'.$dayexp.'h';
	$cook2 = cookie(-name=>$cookie2,
		-value=>$id,
		-expires=>$dayexp,
		-path=>'/counter',
		-domain=>'speed.insane.com',
		-secure=>0);
    }
    if ($first == 1 || $day == 1) {
	$sql = qq(SELECT counter_first, counter_day )
             . qq(FROM counter )
             . qq(WHERE counter_id='$id';);
	$c = $db->prepare($sql);
	$d = $c->execute;
	if ($d > 0) {
	    $d = $c->fetchrow_arrayref;
	    $first += $d->[0];
	    $day += $d->[1];
	    $c->finish;
	    $sql = qq(UPDATE counter SET )
                 . qq(counter_first=$first, )
                 . qq(counter_day=$day )
		 . qq(WHERE counter_id='$id';);
	} else {
	    $c->finish;
	    $sql = qq(INSERT INTO counter VALUES('$id',1,1););
	}
	$db->lock('counter');
        $db->do($sql);
        $db->unlock;
	print header(-cookie=>[$cook1,$cook2],
		-type=>'image/gif',
		-expires=>'+1s');
    } else {
	print header(-type=>'image/gif',-expires=>'+1s');
    }
    $db->disconnect;
} else {
    print header(-type=>'image/gif',-expires=>'+1s');
}

print $betools::constants::pixel;

