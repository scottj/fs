#!/usr/bin/perl

use strict;
use warnings;
use CGI qw(header param -no_debug);
use Net::Akismet;
use Net::SMTP;

my $name = param('name') || '';
my $email = param('email') || '';
my $comments = param('comments') || '';
my $taint = 0;

if ($name =~ /^([-\w.]+)$/) {
  $name = $1;
} else {
  $taint = 1;
}
if ($email =~ /^([-\@\w.\_\+]+)$/) {
  $email = $1;
} else {
  $taint = 1;
}

if ($name eq '' || $email eq '' || $comments eq '') {
  print header, qq(All fields are required.  Please try again.<br>)
      . qq(<input type="button" value="Back" onclick="history.back();" />);
  exit;
}

my $akismet = Net::Akismet->new(
    KEY => '39b7c30c812c',
    URL => 'http://full-speed.org/',
) or die('Key verification failure!');

my $verdict = $akismet->check(
    USER_IP		  => $ENV{'REMOTE_ADDR'},
    COMMENT_USER_AGENT	  => $ENV{'HTTP_USER_AGENT'},
    COMMENT_CONTENT	  => $comments,
    COMMENT_AUTHOR	  => $name,
    COMMENT_AUTHOR_EMAIL  => $email,
    REFERER		  => $ENV{'HTTP_REFERER'},
) or die('Is the server here?');

if ($verdict eq 'false') {
  my $s = Net::SMTP->new('localhost') || die;
  $s->mail('scott.johnson@gmail.com');
  $s->to('scott.johnson@gmail.com');
  $s->data();
  $s->datasend(qq(From: Scott Johnson <scott.johnson\@gmail.com>\n));
  $s->datasend(qq(To: Scott Johnson <scott.johnson\@gmail.com>\n));
  $s->datasend(qq(Subject: Full Speed Comment\n\n));
  $s->datasend(qq(Name: $name\n));
  $s->datasend(qq(Email: $email\n));
  $s->datasend(qq(Comment:\n));
  $s->datasend(qq($comments\n));
  $s->dataend();
  $s->quit();
  print qq(Location: sent.html\n\n);
} else {
  print header, qq(Akismet says your comment was spam.  If it's not, please try again.);
}
