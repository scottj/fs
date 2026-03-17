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
[ <a href="/archives/2006/05/">May</a> <a href="/archives/2006/05/24/">24</a>, <a href="/archives/2006/">2006</a> ]
</h2>


<div class="blogbody">
<a name="001115"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2006/05/24/electrons_and_leptons_meters_and_liters.php">Electrons and Leptons, Meters and Liters</a></h3>

<p><a href="http://www.google.com/reader/lens/" rel="nofollow">Google Reader</a> is down at the moment, and because I enjoy the various web outage screens, here&#8217;s Reader&#8217;s.<br />
<div class="artimg"><img src="http://full-speed.org/images/reader-down.png"/></div></p>



 <div class="posted"></div>

</div> <!-- blogbody -->





<h2 class="date">
[ <a href="/archives/2006/05/">May</a> <a href="/archives/2006/05/21/">21</a>, <a href="/archives/2006/">2006</a> ]
</h2>


<div class="blogbody">
<a name="001114"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2006/05/21/links_for_2006-05-21.php">links for 2006-05-21</a></h3>

<ul class="delicious">
  <li>
	<div class="delicious-link"><a href="http://code.whytheluckystiff.net/camping/" rel="nofollow">Camping, a Microframework</a></div>
	<div class="delicious-extended">&#8220;a little white blood cell in the vein of Rails&#8221;</div>
    <div class="delicious-tags">(tags: <a href="http://del.icio.us/scottj/webdev" rel="nofollow">webdev</a> <a href="http://del.icio.us/scottj/web" rel="nofollow">web</a> <a href="http://del.icio.us/scottj/programming" rel="nofollow">programming</a> <a href="http://del.icio.us/scottj/rails" rel="nofollow">rails</a> <a href="http://del.icio.us/scottj/rubyonrails" rel="nofollow">rubyonrails</a> <a href="http://del.icio.us/scottj/framework" rel="nofollow">framework</a>)</div>
 </li>
</ul>




 <div class="posted"></div>

</div> <!-- blogbody -->





<h2 class="date">
[ <a href="/archives/2006/05/">May</a> <a href="/archives/2006/05/17/">17</a>, <a href="/archives/2006/">2006</a> ]
</h2>


<div class="blogbody">
<a name="001113"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2006/05/17/new_feature_related_entries.php">New Feature: Related Entries</a></h3>

<p>There&#8217;s a new Related Entries feature here at Full Speed today, courtesy of <a href="http://kalsey.com/blog/2003/05/related_entries_revisited/index.html" title="Related Entries Revisited" rel="nofollow">Adam Kalsey</a>.  You can see it in action below.  It&#8217;s a quick, simple hack that uses MySQL&#8217;s fulltext queries and Brad Choate&#8217;s eternally useful <a href="http://www.bradchoate.com/weblog/2002/07/11/mtsql" rel="nofollow">MTSQL</a> plugin.  For the sake of documenting the way things work on this site, I will document the basic steps here.</p>

<p>1) Add a fulltext index to the mt_entry table:<br />
<textarea rows="3" id="codepress1" class="codepress sql linenumbers-off readonly-on">ALTER TABLE mt_entry ADD FULLTEXT ( entry_keywords, entry_title, entry_excerpt );</textarea><br />
2) Add the query to the individual entry archive template in MT:<br />
<pre>&lt;MTSQLEntries query="<br/>   SELECT entry_id, MATCH (entry_keywords, entry_title, entry_excerpt)<br/>      AGAINST ('[MTEntryKeywords encode_php='q'] [MTEntryTitle encode_php='q']')<br/>      AS score<br/>   FROM mt_entry<br/>   WHERE MATCH (entry_keywords, entry_title, entry_excerpt)<br/>      AGAINST ('[MTEntryKeywords encode_php='q'] [MTEntryTitle encode_php='q']')<br/>      AND entry_id != '[MTEntryID]'<br/>   AND entry_blog_id = [MTBlogID]<br/>      ORDER BY score DESC<br/>      LIMIT 0 , 4"&gt;&lt;li&gt;&lt;a href="&lt;MTEntryLink&gt;"&gt;<br/>&lt;MTEntryTitle&gt;&lt;/a&gt;&lt;/li&gt;&lt;/MTSQLEntries&gt;</pre></p>



 <div class="posted"></div>

</div> <!-- blogbody -->





<h2 class="date">
[ <a href="/archives/2006/05/">May</a> <a href="/archives/2006/05/13/">13</a>, <a href="/archives/2006/">2006</a> ]
</h2>


<div class="blogbody">
<a name="001112"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2006/05/13/schneier_on_nsa_wiretapping.php">Schneier on NSA Wiretapping</a></h3>

<blockquote>This is the line that&#8217;s done best for me on the radio: &#8220;The NSA would like to remind everyone to call their mothers this Sunday. They need to calibrate their system.&#8221;<div class="bqsource"><a href="http://www.schneier.com/blog/archives/2006/05/nsa_eavesdroppi.html" rel="nofollow">Bruce Schneier</a></div></blockquote>



 <div class="posted"></div>

</div> <!-- blogbody -->





<h2 class="date">
[ <a href="/archives/2006/05/">May</a> <a href="/archives/2006/05/12/">12</a>, <a href="/archives/2006/">2006</a> ]
</h2>


<div class="blogbody">
<a name="001111"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2006/05/12/links_for_2006-05-12.php">links for 2006-05-12</a></h3>

<ul class="delicious">
  <li>
	<div class="delicious-link"><a href="http://www.airlinepilotcentral.com/video-content/current-videos/fedex-thunderstorm-deviations-20060508233.htm" rel="nofollow">Airline Pilot Central - FedEx arrivals during Thunderstorms</a></div>
   <div class="delicious-extended">&#8220;Time lapse radar track of FedEx aircraft arriving into the Memphis hub during area thunderstorms.&#8221;</div>
   <div class="delicious-tags">(tags: <a href="http://del.icio.us/scottj/flying" rel="nofollow">flying</a> <a href="http://del.icio.us/scottj/video" rel="nofollow">video</a> <a href="http://del.icio.us/scottj/fedex" rel="nofollow">fedex</a>)</div>
 </li>
</ul>




 <div class="posted"></div>

</div> <!-- blogbody -->





<h2 class="date">
[ <a href="/archives/2006/05/">May</a> <a href="/archives/2006/05/04/"> 4</a>, <a href="/archives/2006/">2006</a> ]
</h2>


<div class="blogbody">
<a name="001110"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2006/05/04/links_for_2006-05-04.php">links for 2006-05-04</a></h3>

<ul class="delicious">
  <li>
	<div class="delicious-link"><a href="http://pixelfonts.style-force.net/" rel="nofollow">Style-Force Semplice Pixelfonts</a></div>
	<div class="delicious-tags">(tags: <a href="http://del.icio.us/scottj/fonts" rel="nofollow">fonts</a> <a href="http://del.icio.us/scottj/free" rel="nofollow">free</a> <a href="http://del.icio.us/scottj/pixelfonts" rel="nofollow">pixelfonts</a> <a href="http://del.icio.us/scottj/design" rel="nofollow">design</a>)</div>
 </li>
</ul>




 <div class="posted"></div>

</div> <!-- blogbody -->





<h2 class="date">
[ <a href="/archives/2006/05/">May</a> <a href="/archives/2006/05/03/"> 3</a>, <a href="/archives/2006/">2006</a> ]
</h2>


<div class="blogbody">
<a name="001109"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2006/05/03/links_for_2006-05-03.php">links for 2006-05-03</a></h3>

<ul class="delicious">
  <li>
	<div class="delicious-link"><a href="http://www.snook.ca/archives/design/the_money_look/" rel="nofollow">The Money Look - snook.ca</a></div>
	  <div class="delicious-extended">&#8220;I call it the money look as it reminds me of those fine lines often found on paper money.&#8221;</div>
	<div class="delicious-tags">(tags: <a href="http://del.icio.us/scottj/design" rel="nofollow">design</a> <a href="http://del.icio.us/scottj/webdesign" rel="nofollow">webdesign</a>)</div>
 </li>
</ul>




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