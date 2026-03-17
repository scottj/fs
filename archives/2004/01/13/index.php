<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" id="fullspeed">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Full Speed > Archives</title>
<!-- stylesheets -->
<link rel="stylesheet" href="http://full-speed.org/css/speed.css" type="text/css" />
<!-- xml -->
<link rel="alternate" type="application/rss+xml" title="RSS" href="http://feeds.feedburner.com/speed" />
<!-- common -->
<link rel="start" href="/" />
<link rel="search" href="/search/" />
<link rel="author" href="/about/" />
<link rel="copyright" href="http://creativecommons.org/licenses/by-nd/3.0/" />
<script type="text/javascript" src="/js/speed.js"></script>
<script src="/codepress/codepress.js" type="text/javascript"></script>
<!-- Analytics -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-134264-6']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script');
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 
        'http://www') + '.google-analytics.com/ga.js';
    ga.setAttribute('async', 'true');
    document.documentElement.firstChild.appendChild(ga);
  })();
</script>
</head>
<body> 
<div id="frame">

<div id="top">
<h1>Full Speed</h1>
</div> <!-- top -->

<div id="nav">
<ul>
<li class="first"><a href="/" accesskey="1">home</a></li>
<li id="current"><a href="/archives/" accesskey="2">archives</a></li>
<li><a href="/search/" accesskey="3">search</a></li>
<li><a href="/about/" accesskey="4">about</a></li>
<li><a href="/contact/" accesskey="5">contact</a></li>
</ul>
</div> <!-- nav -->

<div id="body">
<div id="left">

<div id="container">
<div class="blog">




<h2 class="date">
[ <a href="/archives/2004/01/">January</a> <a href="/archives/2004/01/13/">13</a>, <a href="/archives/2004/">2004</a> ]
</h2>


<div class="blogbody">
<a name="000822"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2004/01/13/automatically_closing_old_mt_entries.php">Automatically Closing Old MT Entries</a></h3>

<p>There has been quite a bit of talk about <a href="/archives/2003/11/10/ending_comment_spam.php" title="Ending Comment Spam" rel="nofollow">preventing weblog comment spam</a> lately.  <a href="http://jeremy.zawodny.com/blog/archives/001263.html" title="Auto-closing MT Comments on Old Blog Entries" rel="nofollow">Jeremy Zawodny</a> and <a href="http://www.sifry.com/alerts/archives/000323.html" title="How to limit comments to one week after posting" rel="nofollow">David Sifry</a> have each come up with similar solutions for automatically turning off comments on older posts.  While both of these solutions work perfectly well, I wanted something that was a bit more integrated with <acronym title="Movable Type">MT</acronym>.  I wanted <acronym title="Movable Type">MT</acronym> to handle the updates to the older entries.</p>

<p>So today it dawned on me that Brad Choate&#8217;s <a href="http://www.bradchoate.com/weblog/2002/07/11/sql-plugin.php#000667" title="SQL Plugin" rel="nofollow">MTSQL plugin</a> was exactly what I needed to make this happen.  Since the plugin allows the execution of arbitrary SQL statements, I can now make a template that will shut down comments and pings on my older posts.</p>

<p>Once you have MTSQL installed, create an <em>index</em> template with contents similar to the following:<br />
<pre>&lt;MTSQL query="<br />    update mt_entry<br />        set entry_allow_comments = 2,<br />            entry_allow_pings = 0<br />    where entry_created_on &lt;= date_sub(CURDATE(), interval 7 day)<br />        and entry_blog_id = 2<br />"&gt;<br />&lt;MTSQLColumn column="1"&gt;<br />&lt;/MTSQL&gt;</pre><br />
Substitute any number of days in the &#8220;interval 7 day&#8221; part.  Also, you&#8217;ll need to be sure that the <tt>entry_blog_id</tt> matches that of your blog.  Alternatively, if you either have only one blog or want the post on all of your blogs to be closed, you can simply remove the last line of the query.</p>

<p>Be sure to check the box next to &#8220;Rebuild this template automatically when rebuilding index templates&#8221;.  With this option enabled, this query will be executed each time you save an entry.</p>

<p>I prefer this method to the previously mentioned methods because I feel it is more inline with the way MT works.  Nothing happens unless it is in response to my actions.  The other solutions require a cron job to work automatically.  I have no problems with cron&#8212;I just prefer this integrated approach.</p>

<p>One problem that remains unsolved by Jeremy&#8217;s, David&#8217;s, or my solution is that closed entries will still show their comment forms.  The presence of the comment form does not allow comments, but it is misleading.  A user might type in a long rant only to be disappointed by a mesage stating that comments for the entry are closed once he clicks the Post button.</p>

<p>An entry must be rebuilt before the comment form will be removed from its page.  There are a couple of ways to make this happen.  One option is to simply rebuild your entire blog from within MT.  Another option is to use Timothy Appnel&#8217;s <a href="http://www.timaoutloud.org/archives/000238.html" title="mt-rebuild: The rebuild script to end all rebuild scripts." rel="nofollow">mt-rebuild</a> script to rebuild the blog.  This script will rebuild individual pages or the entire blog from the command line.  If you&#8217;re serious about closing down comments, I&#8217;d suggest setting up a cron job to run this script.  And if anyone knows of a way to avoid the cron job and just execute a rebuild from within an MT template, I&#8217;d love to hear about it.</p>



 <div class="posted"></div>

</div> <!-- blogbody -->


</div> <!-- blog -->
</div> <!-- container -->

</div> <!-- left -->

<div id="right">
<div id="ad">
<div class="rTitle" id="topright">Sponsored Ads</div>
<script language="JavaScript" type="text/javascript">
<!--
google_ad_channel ="1620876311";
google_ad_client = 'pub-3036646830213868';
google_ad_width = 120;
google_ad_height = 600;
google_ad_format = '120x600_as';
google_color_border = 'ffffff';
google_color_bg = 'ffffff';
google_color_link = 'bb0000';
google_color_url = '666666';
google_color_text = '333333';
// -->
</script>
<script language="JavaScript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js"
  type="text/javascript">
</script>
</div> <!-- ad -->

<div class="rightbox">
<div class="rTitle">Links</div>
<?php include("/www/full-speed.org/html/links/index.html"); ?>
</div> <!-- rightbox-->

</div> <!-- right -->
</div> <!-- body -->

<div id="bottom">
&copy; 2014 <a href="/" title="Full Speed">Scott Johnson</a> (<a href="http://scottj.info/">info</a>)<br />
&#8226; &#8226;
</div> <!-- bottom -->
</div> <!-- frame -->

<br clear="all" />
<script type="text/javascript" src="http://www.assoc-amazon.com/s/link-enhancer?tag=fullspeed-20"></script>
<noscript><img src="http://www.assoc-amazon.com/s/noscript?tag=fullspeed-20" alt="" /></noscript>
</body>
</html>