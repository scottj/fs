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
[ <a href="/archives/2008/11/">November</a> <a href="/archives/2008/11/21/">21</a>, <a href="/archives/2008/">2008</a> ]
</h2>


<div class="blogbody">
<a name="001298"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2008/11/21/iphone_22_update_image_issue.php">iPhone 2.2 Update Image Issue</a></h3>

<p>There&#8217;s a problem with the iPhone 2.2 update that&#8217;s giving me serious headaches.  My wife and I often take photos with our iPhone cameras and email them to each other.  This has always worked well up until the 2.2 update.  After installing the update, I noticed that every saved photo on my phone that I had received from her seemed corrupted.</p>

<p>I&#8217;ll walk you through what I&#8217;m seeing now.  The following image is a screenshot of the Mail app.  The image looks great.  It&#8217;s exactly how I would expect it to look.</p>

<div class="artimg"><img src="http://full-speed.org/images/2008/noblur.jpg" alt="No blur here." /></div>

<p>If I save this image and then go to the Photos app to view it, I see the blurred image below.</p>

<div class="artimg"><img src="http://full-speed.org/images/2008/blur.jpg" alt="Blurry!" /></div>

<p>It appears slightly worse if I use it as my wallpaper image.</p>

<div class="artimg"><img src="http://full-speed.org/images/2008/back.jpg" alt="Background" /></div>

<p>If I upload the image to a web server, the image appears normally in Mobile Safari.  Note that the resolution displayed is 600x800.</p>

<div class="artimg"><img src="http://full-speed.org/images/2008/safari.jpg" alt="Safari" /></div>

<p>Saving that picture and going back to Photos, I see the same result as before.</p>

<div class="artimg"><img src="http://full-speed.org/images/2008/sorry.jpg" alt="Sorry" /></div>

<p>It looks like the image file has been downsized and then stretched to fit the screen.  So I emailed this seemingly bad image from the iPhone back out to my work email.  I received the following image.</p>

<div class="artimg"><img src="http://full-speed.org/images/2008/tiny.jpg" alt="Tiny! " /></div>

<p>It&#8217;s not the 600x800 that we saw above and that I would expect from an iPhone camera image.  The resolution is now 90x120.  And it&#8217;s not that the originating iPhone is emailing these photos as thumbnails &#8212; the photos are only being <em>displayed</em> at this resolution.  Photos are still emailed at the 600x800 resolution, as seen in the image below, scaled to fit this column.</p>

<div class="artimg"><img src="http://full-speed.org/images/2008/blue.jpg" width="320" alt="Full res." /></div>

<p>As a further test to see if I could figure out why this was happening, I opened the original photo above in the excellent app <a href="http://www.nevercenter.com/camerabag/" rel="nofollow">CameraBag</a>.  To my surprise, it appeared at full resolution.</p>

<div class="artimg"><img src="http://full-speed.org/images/2008/camerabag.jpg" width="320" alt="Full res." /></div>

<p>So this leads us to the final test.  I went to Gmail and saved the photo from the original email that my wife had sent.  I then dropped this into an image folder that&#8217;s synced via iTunes.  Once the image makes the trip back to the iPhone in this manner, it is displayed at full resolution.  Naturally, it is resized to fit the iPhone&#8217;s screen, but it is significantly larger than the thumbnail above.</p>

<div class="artimg"><img src="http://full-speed.org/images/2008/straw.jpg" alt="Straw" /></div>

<p>Based on these findings, the following appear to be true:</p>

<ol><li>There seems to be a bug that limits the display of images saved from Mail and Safari.</li><li>These images are being stored on the iPhone at full resolution, so this was not an intentional move to save disk space.</li><li>Emailing of photos from the iPhone that created them still happens at full resolution, so this was not an intentional move to conserve bandwidth.</li></ol>

<p>This process of emailing photos back and forth has been my way around the lack of MMS on the iPhone.  I actually didn&#8217;t miss MMS at all once the image saving feature was introduced, but this has ruined it for me.  What was once a simple, <strong>daily</strong> function on my iPhone is now something for which I must involve my PC.  Honestly, I somehow don&#8217;t think this was intentional.  When you click a button that says &#8220;Save Image&#8221;, you expect to see a saved copy of that image.  When a thumbnail is displayed instead, something is broken.  I just hope Apple fixes this one soon.  I really don&#8217;t want to wait a few months to get this back.</p>

<p><b id="update">Update</b>:  Via <a href="http://daringfireball.net/linked/2008/11/21/photo-resizing-bug" rel="nofollow">Gruber</a>, <a href="http://flickr.com/photos/brandoniain/3048755866/" rel="nofollow">Brandon Iain</a> seems to be seeing the same issue:</p>

<div class="artimg"><a href="http://flickr.com/photos/brandoniain/3048755866/" rel="nofollow"><img src="http://farm4.static.flickr.com/3019/3048755866_be6d5f5132.jpg" /></a></div>

<p>Also, Takayuki Fukatsu, author of the iPhone app &#8216;<a href="http://blog.artandmobile.com/2008/10/toy-camera/" rel="nofollow">Toy Camera</a>&#8217;, wrote in to let me know that his app is having trouble displaying pics.  Based on his experimentation, he is under the impression that the bug is seen when any app attempts to display an image that is 600x800 or 800x600.  Brandon&#8217;s test image above, however, shows that the problem is also present with images that are 640px high.</p>



 <div class="posted"></div>

</div> <!-- blogbody -->





<h2 class="date">
[ <a href="/archives/2008/11/">November</a> <a href="/archives/2008/11/13/">13</a>, <a href="/archives/2008/">2008</a> ]
</h2>


<div class="blogbody">
<a name="001297"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2008/11/13/the_closest_book.php">The Closest Book</a></h3>

<p>Instructions:<br />
<ul><li>Grab the nearest book.</li><li>Open it to page 56.</li><li>Find the fifth sentence.</li><li>Post the text of the sentence in your journal along with these instructions.</li><li>Don&#8217;t dig for your favorite book, the cool book, or the intellectual one: pick the CLOSEST.</li></ul>Here&#8217;s mine:<br />
<blockquote>Following this is information about the document itself.</blockquote>The book is <i>Writing Apache Modules with Perl and C</i> by Lincoln Stein and Doug MacEachern. [ <a href="http://www.eflorenzano.com/blog/post/book-meme/" rel="nofollow">via</a> ]</p>



 <div class="posted"></div>

</div> <!-- blogbody -->





<h2 class="date">
[ <a href="/archives/2008/11/">November</a> <a href="/archives/2008/11/08/"> 8</a>, <a href="/archives/2008/">2008</a> ]
</h2>


<div class="blogbody">
<a name="001296"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2008/11/08/links_for_2008-11-08.php">links for 2008-11-08</a></h3>

<ul class="delicious"><li>
                <div class="delicious-link"><a href="http://www.speaknspell.co.uk/speaknspell.html" rel="nofollow">Speak &amp; Spell Texas Instruments simulator</a></div>
                
                <div class="delicious-tags">(tags: speak&amp;spell simulator kids retro)</div>
            </li><li>
                <div class="delicious-link"><a href="http://answers.google.com/answers/threadview?id=419588" rel="nofollow">Google Answers: whistling</a></div>
                <div class="delicious-extended">&quot;How do I whistle with my fingers in my mouth really loudly (or at all)?&quot;</div>
                <div class="delicious-tags">(tags: whistling howto)</div>
            </li></ul>



 <div class="posted"></div>

</div> <!-- blogbody -->





<h2 class="date">
[ <a href="/archives/2008/11/">November</a> <a href="/archives/2008/11/05/"> 5</a>, <a href="/archives/2008/">2008</a> ]
</h2>


<div class="blogbody">
<a name="001295"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2008/11/05/links_for_2008-11-05.php">links for 2008-11-05</a></h3>

<ul class="delicious"><li>
                <div class="delicious-link"><a href="http://ouseful.wordpress.com/2008/10/14/data-scraping-wikipedia-with-google-spreadsheets/" rel="nofollow">Data Scraping Wikipedia with Google Spreadsheets</a></div>
                
                <div class="delicious-tags">(tags: mashup howto google pipes maps)</div>
            </li><li>
                <div class="delicious-link"><a href="http://ericmiraglia.com/inlink/" rel="nofollow">Page Inlink Analyzer</a></div>
                
                <div class="delicious-tags">(tags: link analyzer yui jsonp statistics)</div>
            </li></ul>



 <div class="posted"></div>

</div> <!-- blogbody -->





<h2 class="date">
[ <a href="/archives/2008/11/">November</a> <a href="/archives/2008/11/04/"> 4</a>, <a href="/archives/2008/">2008</a> ]
</h2>


<div class="blogbody">
<a name="001294"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2008/11/04/links_for_2008-11-04.php">links for 2008-11-04</a></h3>

<ul class="delicious"><li>
                <div class="delicious-link"><a href="http://kingdesk.com/projects/wp-hyphenate/" rel="nofollow">wp-Hyphenate</a></div>
                
                <div class="delicious-tags">(tags: wordpress plugins)</div>
            </li></ul>



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