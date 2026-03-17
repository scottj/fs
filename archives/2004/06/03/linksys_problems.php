<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Wi-Fi Net News made me aware of a security hole in the Linksys WRT54G wireless router yesterday. They say that the admin website can be accessed remotely even if remote admin is disabled. Through my personal testing, I have not..." />
<meta name="author" content="Scott Johnson" />
<title>Linksys Problems ~ Full Speed</title>
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
<Work rdf:about="http://full-speed.org/archives/2004/06/03/linksys_problems.php">
<dc:title>Linksys Problems</dc:title>
<dc:description>Wi-Fi Net News made me aware of a security hole in the Linksys WRT54G wireless router yesterday. They say that the admin website can be accessed remotely even if remote admin is disabled. Through my personal testing, I have not...</dc:description>
<dc:creator>Scott Johnson</dc:creator>
<dc:date>2004-06-03T10:02:07-06:00</dc:date>
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
[ <a href="/archives/2004/06/">June</a> <a href="/archives/2004/06/03/"> 3</a>, <a href="/archives/2004/">2004</a> ]
</h2>
<div class="blogbody">
<!-- google_ad_section_start -->
<h3 class="title">Linksys Problems</h3>
<p><a href="http://wifinetnews.com/archives/003408.html" title="Change Your Linksys WRT54G Admin Password Right Now!">Wi-Fi Net News</a> made me aware of a <a href="http://www.internetnews.com/infra/article.php/3362321" title="Security Bug in Linksys Wireless-G Router">security hole</a> in the Linksys WRT54G wireless router yesterday.  They say that the admin website can be accessed remotely even if remote admin is disabled.</p>

<p>Through my personal testing, I have not been able to access the admin page remotely except through the use of an ssh tunnel via a FreeBSD box behind the router.  But since there may be something I&#8217;m missing here, I decided to go ahead and change my admin password anyway.  And besides, default passwords are really <em>stupid</em> anyway.  I should have changed it long ago.</p>

<p>An interesting piece of code came into my browser while I was changing my password.  This is one that I haven&#8217;t seen mentioned elsewhere.  It seems that Linksys is using unpublished proprietary javascript code that belongs to another company in their interface.  Here&#8217;s the license that was included:<br />
<code><br />
&lt;!--<br />*********************************************************<br />*&#160;&#160; Copyright 2003, CyberTAN&#160;&#160;Inc.&#160;&#160;All Rights Reserved *<br />*********************************************************<br /><br />This is UNPUBLISHED PROPRIETARY SOURCE CODE of CyberTAN Inc.<br />the contents of this file may not be disclosed to third parties,<br />copied or duplicated in any form without the prior written<br />permission of CyberTAN Inc.<br /><br />This software should be used as a reference only, and it not<br />intended for production use!<br /><br /><br />THIS SOFTWARE IS OFFERED "AS IS", AND CYBERTAN GRANTS NO WARRANTIES OF ANY<br />KIND, EXPRESS OR IMPLIED, BY STATUTE, COMMUNICATION OR OTHERWISE.&#160;&#160;CYBERTAN<br />SPECIFICALLY DISCLAIMS ANY IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS<br />FOR A SPECIFIC PURPOSE OR NONINFRINGEMENT CONCERNING THIS SOFTWARE<br />--&gt;<br />
</code></p>

<p>Now we&#8217;ve all heard the stories about <a href="http://yro.slashdot.org/yro/03/06/08/1749217.shtml" title="Is Linksys Violating The GPL?">Linksys violating the GPL</a>, but they&#8217;ve cleared that issue up and released the source.  This has led to great projects such as <a href="http://www.portless.net/ewrt/index.html" title="Portless Networks : EWRT">EWRT</a>.  But this violation goes way beyond the GPL violation.  Not only are they using code that isn&#8217;t theirs, but they include the license that says that they don&#8217;t have a right to use it.  And if that were not bad enough, the license states that the code is not intended for production use.</p>

<p>Now I <em>can&#8217;t wait</em> to get EWRT installed on my WRT54G.  I&#8217;d really rather not run Linksys&#8217;s shoddy software any longer.</p>

<p><b>Update:</b> The remote admin vulnerability on the WRT54G only occurs when the firewall is disabled.  By default, the firewall is enabled.  This is not a big deal.  If somebody disables the firewall on their router, they probably deserve to be exploited.</p>
<a name="more"></a>

<!-- google_ad_section_end -->

<h2 class="sectionHead">Possibly Related:</h2>
<div class="sectionBody">
<ul>

<li><a href="http://full-speed.org/archives/2003/07/18/linksys_linux_maybe.php">Linksys Linux (maybe?)</a> - July 18, 2003</li>

<li><a href="http://full-speed.org/archives/2003/10/01/wireless_vpn_appliance_from_linksys.php">Wireless VPN Appliance from Linksys</a> - October  1, 2003</li>

<li><a href="http://full-speed.org/archives/2005/07/14/links_for_2005-07-14.php">links for 2005-07-14</a> - July 14, 2005</li>

<li><a href="http://full-speed.org/archives/2003/08/14/calendar_fix.php">Calendar Fix</a> - August 14, 2003</li>

<li><a href="http://full-speed.org/archives/2005/07/30/links_for_2005-07-30.php">links for 2005-07-30</a> - July 30, 2005</li>

</ul>
</div> <!-- sectionBody -->
</div> <!-- blogbody -->

</div> <!-- blog -->
</div> <!-- left -->

<div id="right">
<div class="rightbox">
<div class="rTitle" id="topright">Elsewhere</div>
<ul>
<li><a href="http://full-speed.org/archives/2004/06/03/">Up</a></li>

<li><a href="http://full-speed.org/archives/2004/06/03/t-mobile_hotspot.php" title="T-Mobile Hotspot">Previous</a></li>


<li><a href="http://full-speed.org/archives/2004/06/03/six_apart_developer_perks.php" title="Six Apart Developer Perks">Next</a></li>

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