<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Kevin Davis has written a series of articles on using XML and XSLT templates with Movable Type. (Thanks Simon!) In the initial sample, Kevin had some problems with the HTML inside an entry body being rendered in Mozilla. That problem..." />
<meta name="author" content="Scott Johnson" />
<title>XSLT for your Movable Type ~ Full Speed</title>
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
<Work rdf:about="http://full-speed.org/archives/2003/08/15/xslt_for_your_movable_type.php">
<dc:title>XSLT for your Movable Type</dc:title>
<dc:description>Kevin Davis has written a series of articles on using XML and XSLT templates with Movable Type. (Thanks Simon!) In the initial sample, Kevin had some problems with the HTML inside an entry body being rendered in Mozilla. That problem...</dc:description>
<dc:creator>Scott Johnson</dc:creator>
<dc:date>2003-08-15T14:44:36-06:00</dc:date>
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
[ <a href="/archives/2003/08/">August</a> <a href="/archives/2003/08/15/">15</a>, <a href="/archives/2003/">2003</a> ]
</h2>
<div class="blogbody">
<!-- google_ad_section_start -->
<h3 class="title">XSLT for your Movable Type</h3>
<p>Kevin Davis <a href="http://alazanto.org/weblog/cat_mt_carbon.php" title="MT Carbon">has written</a> a series of articles on using XML and XSLT templates with Movable Type. (Thanks <a href="http://simon.incutio.com/archive/2003/08/11/MTxslt" title="Simon Willison: Moveably Type with XSLT">Simon</a>!)  In the initial sample, Kevin had some problems with the HTML inside an entry body being rendered in Mozilla.  That problem has since been <a href="http://alazanto.org/weblog/cat_mt_carbon.php#000037" title="Embedded Formatting for Mozilla">solved</a>.  Check out this <a href="http://alazanto.org/xml/style2.xml" title="MT Carbon Sample">great sample</a>!</p>
<a name="more"></a>

<!-- google_ad_section_end -->

<h2 class="sectionHead">Possibly Related:</h2>
<div class="sectionBody">
<ul>

<li><a href="http://full-speed.org/archives/2003/10/30/lindows_to_develop_web_editor.php">Lindows to Develop Web Editor</a> - October 30, 2003</li>

<li><a href="http://full-speed.org/archives/2003/07/09/bookmarklets_rock.php">Bookmarklets Rock!</a> - July  9, 2003</li>

<li><a href="http://full-speed.org/archives/2003/10/06/better_date_entry.php">Better Date Entry</a> - October  6, 2003</li>

<li><a href="http://full-speed.org/archives/2003/09/24/auto-complete_meets_javascript.php">Auto-Complete Meets JavaScript</a> - September 24, 2003</li>

<li><a href="http://full-speed.org/archives/2003/08/15/javascript_for_long_forms.php">JavaScript for Long Forms</a> - August 15, 2003</li>

</ul>
</div> <!-- sectionBody -->
</div> <!-- blogbody -->

</div> <!-- blog -->
</div> <!-- left -->

<div id="right">
<div class="rightbox">
<div class="rTitle" id="topright">Elsewhere</div>
<ul>
<li><a href="http://full-speed.org/archives/2003/08/15/">Up</a></li>

<li><a href="http://full-speed.org/archives/2003/08/15/javascript_for_long_forms.php" title="JavaScript for Long Forms">Previous</a></li>


<li><a href="http://full-speed.org/archives/2003/08/18/cybershot_8_megapixel_marvel.php" title="Cybershot 8 MegaPixel Marvel">Next</a></li>

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