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
[ <a href="/archives/2008/05/">May</a> <a href="/archives/2008/05/17/">17</a>, <a href="/archives/2008/">2008</a> ]
</h2>


<div class="blogbody">
<a name="001270"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2008/05/17/links_for_2008-05-17.php">links for 2008-05-17</a></h3>

<ul class="delicious">
	<li>
		<div class="delicious-link"><a href="http://mdp.cti.depaul.edu/AlterEgo/default/show/101" rel="nofollow">from Django to web2py</a></div>
		<div class="delicious-extended">&#8220;In the case of web2py most of the ORM functionality will work as is on the [Google] app engine.&#8221;</div>
		<div class="delicious-tags">(tags: <a href="http://del.icio.us/scottj/python" rel="nofollow">python</a> <a href="http://del.icio.us/scottj/framework" rel="nofollow">framework</a> <a href="http://del.icio.us/scottj/django" rel="nofollow">django</a> <a href="http://del.icio.us/scottj/web2py" rel="nofollow">web2py</a> <a href="http://del.icio.us/scottj/webdev" rel="nofollow">webdev</a>)</div>
	</li>
</ul>




 <div class="posted"></div>

</div> <!-- blogbody -->





<h2 class="date">
[ <a href="/archives/2008/05/">May</a> <a href="/archives/2008/05/09/"> 9</a>, <a href="/archives/2008/">2008</a> ]
</h2>


<div class="blogbody">
<a name="001269"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2008/05/09/links_for_2008-05-09.php">links for 2008-05-09</a></h3>

<ul class="delicious">
	<li>
		<div class="delicious-link"><a href="http://ejohn.org/blog/processingjs/" rel="nofollow">Processing.js</a></div>
		<div class="delicious-tags">(tags: <a href="http://del.icio.us/scottj/processing" rel="nofollow">processing</a> <a href="http://del.icio.us/scottj/javascript" rel="nofollow">javascript</a> <a href="http://del.icio.us/scottj/canvas" rel="nofollow">canvas</a> <a href="http://del.icio.us/scottj/visualization" rel="nofollow">visualization</a>)</div>
	</li>
</ul>




 <div class="posted"></div>

</div> <!-- blogbody -->





<h2 class="date">
[ <a href="/archives/2008/05/">May</a> <a href="/archives/2008/05/02/"> 2</a>, <a href="/archives/2008/">2008</a> ]
</h2>


<div class="blogbody">
<a name="001268"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2008/05/02/google_reader_favicon_disappearing.php">Google Reader Favicon Disappearing</a></h3>

<div class="rightimg"><img src="http://full-speed.org/images/reader-favicon.png" alt="This is how my bookmarks look with the SBB extension--icons only." /></div>I have been having problems with Google Reader&#8217;s favicon disappearing from my bookmarks bar lately.  And since I use the <a href="https://addons.mozilla.org/en-US/firefox/addon/4072" rel="nofollow">Smart Bookmarks Bar</a> extension in Firefox, this icon is essential when it comes to knowing which bookmark is which.

<p>Back when I was using Firefox 2, this wasn&#8217;t such a big deal.  I would just manually edit bookmarks.html and insert a base64-encoded data: URI that contained the favicon image.  I did this twice and was quite satisfied with the result.</p>

<p>But now, I have upgraded to the beta of Firefox 3.  It is so much better that I just can&#8217;t bring myself to use FF2 any longer.  And with the upgrade, the bookmarks are now stored in a SQLite database.  Sure, I could update the data in this database file, but I didn&#8217;t want to be constantly editing favicons just to get the desired result.</p>

<p>A bit of googling turned up <a href="http://groups.google.com/group/google-reader-troubleshoot/browse_thread/thread/144cab763890a7ca/e2a8a75bd0604baf?lnk=gst&q=" rel="nofollow">a thread on the Google Reader Troubleshooting group</a> covering this exact topic.  Following the suggestions in that thread, I bookmarked the following URL, and my favicon now appears every time:</p>

<p><a href="http://www.google.com/reader/view/# " rel="nofollow">http://www.google.com/reader/view/# </a></p>

<p>It even seems to work with the https variation of the URL:</p>

<p><a href="https://www.google.com/reader/view/# " rel="nofollow">https://www.google.com/reader/view/# </a></p>

<p>The troubleshooting thread lists a few links that should work.  Apparently, you can build your own as well.  For example, the following URL appears to have a working favicon.  It links directly to my &#8220;finance&#8221; label.</p>

<p><a href="https://www.google.com/reader/view/user/-/label/finance#" rel="nofollow">https://www.google.com/reader/view/user/-/label/finance#</a></p>

<p>It&#8217;s disappointing that you can&#8217;t simply bookmark reader.google.com or www.google.com/reader and get a favicon to show up in Firefox, but until somebody fixes things, this will do.</p>



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