<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="code {display:inline;padding:inherit;}Gareth Simpson put together a slick little Greasemonkey user script to strike through any rel='nofollow' links on any website. I quickly found that this didn't quite work on all sites, especially WordPress sites. The default for links in WordPress..." />
<meta name="author" content="Scott Johnson" />
<title>Greasemonkey vs. nofollow ~ Full Speed</title>
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


<!--
<rdf:RDF xmlns="http://web.resource.org/cc/"
         xmlns:dc="http://purl.org/dc/elements/1.1/"
         xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
<Work rdf:about="http://full-speed.org/archives/2005/03/02/greasemonkey_vs_nofollow.php">
<dc:title>Greasemonkey vs. nofollow</dc:title>
<dc:description>code {display:inline;padding:inherit;}Gareth Simpson put together a slick little Greasemonkey user script to strike through any rel=&quot;nofollow&quot; links on any website. I quickly found that this didn&apos;t quite work on all sites, especially WordPress sites. The default for links in WordPress...</dc:description>
<dc:creator>Scott Johnson</dc:creator>
<dc:date>2005-03-02T12:11:49-06:00</dc:date>
<license rdf:resource="http://creativecommons.org/licenses/by-nd/2.5/" />
</Work>
<License rdf:about="http://creativecommons.org/licenses/by-nd/2.5/">
</License>
</rdf:RDF>
-->


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
<body onload="individualArchivesOnLoad(commenter_name)">

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
<div class="blog">

<h2 class="date">
[ <a href="/archives/2005/03/">March</a> <a href="/archives/2005/03/02/"> 2</a>, <a href="/archives/2005/">2005</a> ]
</h2>
<div class="blogbody">
<!-- google_ad_section_start -->
<h3 class="title">Greasemonkey vs. nofollow</h3>
<p><style type="text/css">code {display:inline;padding:inherit;}</style><a href="http://xurble.org/weblog" title="Gareth's Notes">Gareth Simpson</a> put together <a href="http://xurble.org/weblog/2005/03/greasemonkeying-about-with-nofollow.html" title="(Grease)monkeying about with nofollow">a slick little Greasemonkey user script</a> to strike through any <a href="/archives/2005/01/20/nofollow.php">rel=&#8221;nofollow&#8221;</a> links on any website.  I quickly found that this didn&#8217;t quite work on all sites, especially WordPress sites.</p>

<p>The default for links in WordPress 1.5 blogs is <code>rel="external nofollow"</code>.  Because Gareth&#8217;s script was dependent on the <code>rel</code> attribute having the exact text <code>nofollow</code>, it failed on the newer WordPress sites.</p>

<p>There are other uses of the <code>rel</code> attribute as well.  For example, <a href="http://www.technorati.com/tag">Technorati Tags</a> use a <code>rel="tag"</code> attribute.  And the <a href="http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">XHTML 1.0 Strict DTD</a> states that the value of the <code>rel</code> attribute should be a &#8220;space-separated list of link types.&#8221;  So you could put together something like <code>rel="tag nofollow external"</code>, and it would be perfectly valid.</p>

<p>So instead of just complaining about the minor problem with Gareth&#8217;s excellent script, I created <a href="/files/nofollow.user.js">a version</a> that works the way it should.  See <a href="http://greasemonkey.mozdev.org/using.html" title="Using Greasemonkey">the Greasemonkey site</a> for info on how to use the script.  [Found <a href="http://dunck.us/collab/GreaseMonkeyUserScripts">here</a>.]</p>
<a name="more"></a>

<!-- google_ad_section_end -->

<h2 class="sectionHead">Possibly Related:</h2>
<div class="sectionBody">
<ul>

<li><a href="http://full-speed.org/archives/2005/01/20/nofollow.php">nofollow</a> - January 20, 2005</li>

<li><a href="http://full-speed.org/archives/2004/04/22/a_browser_wish.php">A Browser Wish</a> - April 22, 2004</li>

<li><a href="http://full-speed.org/archives/2007/07/01/django_meets_google_code.php">Django meets Google Code</a> - July  1, 2007</li>

<li><a href="http://full-speed.org/archives/2003/08/14/calendar_fix.php">Calendar Fix</a> - August 14, 2003</li>

<li><a href="http://full-speed.org/archives/2006/11/03/gmail_macros.php">GMail Macros</a> - November  3, 2006</li>

</ul>
</div> <!-- sectionBody -->
</div> <!-- blogbody -->

</div> <!-- blog -->
</div> <!-- left -->

<div id="right">
<div class="rightbox">
<div class="rTitle" id="topright">Elsewhere</div>
<ul>
<li><a href="http://full-speed.org/archives/2005/03/02/">Up</a></li>

<li><a href="http://full-speed.org/archives/2005/02/17/wordpress_15_hits_15000_downloads.php" title="WordPress 1.5 Hits 15,000 Downloads">Previous</a></li>


<li><a href="http://full-speed.org/archives/2005/03/02/links_for_2005-03-02.php" title="links for 2005-03-02">Next</a></li>

</ul>
</div> <!-- rightbox -->

<div id="ad">
<div class="rTitle">Sponsored Ads</div>
<script language="JavaScript" type="text/javascript">
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
</script>
<script language="JavaScript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js"
  type="text/javascript">
</script>
</div> <!-- ad -->

<div class="rightbox">
<div class="rTitle">Links</div>
<?php include("../../../../links/index.html"); ?>
</div> <!-- rightbox-->
</div> <!-- right -->
</div> <!-- body -->

<div id="bottom">
&copy; 2014 <a href="http://scottj.info/">Scott Johnson</a><br />
&#8226; &#8226;
</div> <!-- bottom -->
</div> <!-- frame -->

<br clear="all" />
<script type="text/javascript" src="http://www.assoc-amazon.com/s/link-enhancer?tag=fullspeed-20"></script>
<noscript><img src="http://www.assoc-amazon.com/s/noscript?tag=fullspeed-20" alt="" /></noscript>
</body>
</html>