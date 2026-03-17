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
[ <a href="/archives/2008/12/">December</a> <a href="/archives/2008/12/05/"> 5</a>, <a href="/archives/2008/">2008</a> ]
</h2>


<div class="blogbody">
<a name="001299"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2008/12/05/links_for_2008-12-05.php">links for 2008-12-05</a></h3>

<ul class="delicious"><li>
                <div class="delicious-link"><a href="http://apitricks.blogspot.com/2008/10/geocoding-by-google-spreadsheets.html" rel="nofollow">Google Maps API tricks: Geocoding by Google Spreadsheets</a></div>
                
                <div class="delicious-tags">(tags: googlespreadsheets geocoding csv mashup)</div>
            </li></ul>



 <div class="posted"></div>

</div> <!-- blogbody -->





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





<h2 class="date">
[ <a href="/archives/2008/10/">October</a> <a href="/archives/2008/10/27/">27</a>, <a href="/archives/2008/">2008</a> ]
</h2>


<div class="blogbody">
<a name="001293"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2008/10/27/links_for_2008-10-26.php">links for 2008-10-26</a></h3>

<ul class="delicious"><li>
                <div class="delicious-link"><a href="http://mcdm.wordpress.com/2008/02/25/flip-video-vlog-codecs-and-you/" rel="nofollow">Flip Video Vlog: Codecs and You!</a></div>
                
                <div class="delicious-tags">(tags: flip video codec conversion quicktime)</div>
            </li></ul>



 <div class="posted"></div>

</div> <!-- blogbody -->





<h2 class="date">
[ <a href="/archives/2008/10/">October</a> <a href="/archives/2008/10/25/">25</a>, <a href="/archives/2008/">2008</a> ]
</h2>


<div class="blogbody">
<a name="001292"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2008/10/25/links_for_2008-10-24.php">links for 2008-10-24</a></h3>

<ul class="delicious"><li>
                <div class="delicious-link"><a href="http://rafael.adm.br/css_browser_selector/" rel="nofollow">CSS Browser Selector</a></div>
                <div class="delicious-extended">&quot;Clever technique to help you on CSS hacks.&quot;  Get rid of CSS hacks and substitute in a javascript browser sniff.</div>
                <div class="delicious-tags">(tags: javascript css hacks)</div>
            </li><li>
                <div class="delicious-link"><a href="http://jeremy.zawodny.com/blog/archives/010655.html" rel="nofollow">Kick Ass Fonts in Ubuntu: 3 Easy Steps</a></div>
                
                <div class="delicious-tags">(tags: ubuntu fonts howto)</div>
            </li></ul>



 <div class="posted"></div>

</div> <!-- blogbody -->





<h2 class="date">
[ <a href="/archives/2008/10/">October</a> <a href="/archives/2008/10/22/">22</a>, <a href="/archives/2008/">2008</a> ]
</h2>


<div class="blogbody">
<a name="001291"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2008/10/22/links_for_2008-10-21.php">links for 2008-10-21</a></h3>

<ul class="delicious"><li>
                <div class="delicious-link"><a href="http://vision.bc.edu/~dmartin/teaching/sorting/anim-html/all.html" rel="nofollow">Animated Sorting Algorithms</a></div>
                
                <div class="delicious-tags">(tags: programming algorithms visualization sorting)</div>
            </li></ul>



 <div class="posted"></div>

</div> <!-- blogbody -->





<h2 class="date">
[ <a href="/archives/2008/10/">October</a> <a href="/archives/2008/10/21/">21</a>, <a href="/archives/2008/">2008</a> ]
</h2>


<div class="blogbody">
<a name="001290"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2008/10/21/links_for_2008-10-20.php">links for 2008-10-20</a></h3>

<ul class="delicious"><li>
                <div class="delicious-link"><a href="http://www.microsoft.com/typography/TrueTypeProperty21.mspx" rel="nofollow">Microsoft Typography - Font properties extension</a></div>
                
                <div class="delicious-tags">(tags: windows utilities fonts)</div>
            </li></ul>



 <div class="posted"></div>

</div> <!-- blogbody -->





<h2 class="date">
[ <a href="/archives/2008/10/">October</a> <a href="/archives/2008/10/18/">18</a>, <a href="/archives/2008/">2008</a> ]
</h2>


<div class="blogbody">
<a name="001289"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2008/10/18/links_for_2008-10-17.php">links for 2008-10-17</a></h3>

<ul class="delicious"><li>
                <div class="delicious-link"><a href="http://www.modernlifeisrubbish.co.uk/article/howto-add-edit-custom-fills-in-illustrator" rel="nofollow">HowTo: Add and Edit Custom Fills in Illustrator</a></div>
                
                <div class="delicious-tags">(tags: illustrator charts tutorial)</div>
            </li><li>
                <div class="delicious-link"><a href="http://unixpapa.com/js/key.html" rel="nofollow">JavaScript Madness: Keyboard Events</a></div>
                <div class="delicious-extended">This was everything I needed to know to make some JS keyboard shortcuts work.</div>
                <div class="delicious-tags">(tags: javascript webdev programming keyboard)</div>
            </li></ul>



 <div class="posted"></div>

</div> <!-- blogbody -->





<h2 class="date">
[ <a href="/archives/2008/10/">October</a> <a href="/archives/2008/10/04/"> 4</a>, <a href="/archives/2008/">2008</a> ]
</h2>


<div class="blogbody">
<a name="001288"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2008/10/04/links_for_2008-10-03.php">links for 2008-10-03</a></h3>

<ul class="delicious"><li>
                <div class="delicious-link"><a href="http://www.djangosnippets.org/snippets/1098/" rel="nofollow">Django iPhoneMiddleware</a></div>
                
                <div class="delicious-tags">(tags: django iphone middleware)</div>
            </li><li>
                <div class="delicious-link"><a href="http://rob.cogit8.org/blog/2008/Sep/19/introducing-django-debug-toolbar/" rel="nofollow">Introducing the Django Debug Toolbar</a></div>
                
                <div class="delicious-tags">(tags: django development debugging)</div>
            </li></ul>



 <div class="posted"></div>

</div> <!-- blogbody -->





<h2 class="date">
[ <a href="/archives/2008/09/">September</a> <a href="/archives/2008/09/27/">27</a>, <a href="/archives/2008/">2008</a> ]
</h2>


<div class="blogbody">
<a name="001287"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2008/09/27/links_for_2008-09-26.php">links for 2008-09-26</a></h3>

<ul class="delicious"><li>
                <div class="delicious-link"><a href="http://docs.python.org/dev/howto/curses.html#curses-howto" rel="nofollow">Curses Programming with Python</a></div>
                
                <div class="delicious-tags">(tags: python curses)</div>
            </li><li>
                <div class="delicious-link"><a href="http://code.activestate.com/recipes/66012/" rel="nofollow">Fork a daemon process on Unix</a></div>
                
                <div class="delicious-tags">(tags: python fork daemon)</div>
            </li><li>
                <div class="delicious-link"><a href="http://coreygoldberg.blogspot.com/2008/09/performance-testing-load-balancer-ssl.html" rel="nofollow">Performance Testing - Load Balancer SSL Stress Testing</a></div>
                
                <div class="delicious-tags">(tags: python threading loadtesting)</div>
            </li></ul>



 <div class="posted"></div>

</div> <!-- blogbody -->





<h2 class="date">
[ <a href="/archives/2008/09/">September</a> <a href="/archives/2008/09/23/">23</a>, <a href="/archives/2008/">2008</a> ]
</h2>


<div class="blogbody">
<a name="001286"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2008/09/23/squirrelfish_extreme.php">SquirrelFish Extreme</a></h3>

<p>Last week, the fine folks who work on Safari announced their latest JavaScript engine, <a href="http://webkit.org/blog/214/introducing-squirrelfish-extreme/" rel="nofollow">SquirrelFish Extreme (SFX)</a>.  I&#8217;m not normally one to run nightly browser builds, but in light of <a href="http://full-speed.org/archives/2008/09/12/dromaeo_firefox_vs_chrome.php" rel="nofollow">my recent performance testing</a>, I decided to give this one a shot.</p>

<p>My first impression was that this is definitely not production-ready code.  The browser crashed several times on me during the process of capturing the benchmark.  But when I did get the tests to run, it was fast.  I mean visibly fast.  Much faster than anything else I have on hand.</p>

<p>As before, the testing wasn&#8217;t extensive.  I still haven&#8217;t tested Firefox 3 with <a href="https://wiki.mozilla.org/JavaScript:TraceMonkey" rel="nofollow">TraceMonkey</a>.  The only test I performed this time was running the Safari nightly through Dromaeo.  Here&#8217;s how it stacks up against the others:</p>

<div class="artimg"><img src="http://full-speed.org/images/2008/dromaeo2.png" alt="graph of results" /></div>

<p><a href="http://dromaeo.com/?id=42843" rel="nofollow">Safari with SFX</a> ran the test in 8184.6ms.  The exact build of Safari used for this test is <tt>Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/528+ (KHTML, like Gecko) Version/3.1.2 Safari/525.21</tt>.  The nighly package that I downloaded was labeled <tt>WebKit-r36647</tt>.</p>



 <div class="posted"></div>

</div> <!-- blogbody -->





<h2 class="date">
[ <a href="/archives/2008/09/">September</a> <a href="/archives/2008/09/13/">13</a>, <a href="/archives/2008/">2008</a> ]
</h2>


<div class="blogbody">
<a name="001285"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2008/09/13/links_for_2008-09-13.php">links for 2008-09-13</a></h3>

<ul class="delicious"><li>
                <div class="delicious-link"><a href="http://www.flickr.com/help/forum/en-us/69723/#reply438420" rel="nofollow">Flickr Help Forum: how do i view my pictures on att u-verse?</a></div>
                
                <div class="delicious-tags">(tags: flickr uverse at&amp;t)</div>
            </li><li>
                <div class="delicious-link"><a href="http://teethgrinder.co.uk/open-flash-chart-2/" rel="nofollow">Open Flash Chart 2</a></div>
                
                <div class="delicious-tags">(tags: webdev visualization charts flash opensource)</div>
            </li><li>
                <div class="delicious-link"><a href="http://teethgrinder.co.uk/open-flash-chart/" rel="nofollow">Open Flash Chart</a></div>
                
                <div class="delicious-tags">(tags: webdev visualization charts flash opensource)</div>
            </li></ul>



 <div class="posted"></div>

</div> <!-- blogbody -->





<h2 class="date">
[ <a href="/archives/2008/09/">September</a> <a href="/archives/2008/09/12/">12</a>, <a href="/archives/2008/">2008</a> ]
</h2>


<div class="blogbody">
<a name="001284"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2008/09/12/dromaeo_firefox_vs_chrome.php">Dromaeo: Firefox vs. Chrome</a></h3>

<p>Since the recent release of <a href="http://www.google.com/chrome" rel="nofollow">Google Chrome</a>, there has been a lot of benchmarking going on (<a href="http://ejohn.org/blog/javascript-performance-rundown/" rel="nofollow">1</a>, <a href="http://fritzthomas.com/overall/271-benchmark-and-comparison-of-v8-and-tracemonkey-javascript-engine/" rel="nofollow">2</a>).  Everyone wants faster Javascript performance, and Chrome delivers.</p>

<p>Well, that&#8217;s the impression that I got from using it for a few days anyway.  But yesterday I decided to go one step further and verify that feeling of greater performance.  Admittedly, this isn&#8217;t the most scientific approach, but I have some numbers for you.  I used one benchmarking tool, <a href="http://dromaeo.com/" rel="nofollow">Dromaeo</a>, to see how Chrome stacked up against my workhorse Firefox setup.  John Resig has already run <a href="http://ejohn.org/files/js-dromaeo.png" rel="nofollow">a similar comparison</a>, but I wanted a firsthand look at the numbers.  Here are those numbers:</p>

<div class="artimg"><img src="http://full-speed.org/images/2008/dromaeo.png" alt="graph of the results" /></div>

<p><a href="http://dromaeo.com/?id=41223" rel="nofollow">Chrome</a> ran the tests in 12658ms.  The build of Chrome used for this test is <tt>Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.2.149.29 Safari/525.13</tt>.  <a href="http://dromaeo.com/?id=41230" rel="nofollow">Firefox</a> ran the tests in 13245ms.  This was the 3.0.1 release build of Firefox, <tt>Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.1) Gecko/2008070208 Firefox/3.0.1</tt>.  The tests were run on my Core Duo 1.8GHz 4GB Windows XP SP2 system.</p>

<p>As you can see, Chrome was indeed faster.  I&#8217;m already using it more and more for Google apps, as I&#8217;m figuring that these will probably always run faster in Chrome.  Firefox still is my main browser, though, because of the extensions.  Chrome won&#8217;t be replacing that stuff any time soon.</p>



 <div class="posted"></div>

</div> <!-- blogbody -->





<h2 class="date">
[ <a href="/archives/2008/09/">September</a> <a href="/archives/2008/09/06/"> 6</a>, <a href="/archives/2008/">2008</a> ]
</h2>


<div class="blogbody">
<a name="001283"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2008/09/06/links_for_2008-09-06.php">links for 2008-09-06</a></h3>

<ul class="delicious"><li>
                <div class="delicious-link"><a href="http://zygat3r.deviantart.com/art/Dark-Wood-58266349" rel="nofollow">Dark Wood Wallpaper Pack</a></div>
                
                <div class="delicious-tags">(tags: wallpapers patterns wood)</div>
            </li></ul>



 <div class="posted"></div>

</div> <!-- blogbody -->





<h2 class="date">
[ <a href="/archives/2008/08/">August</a> <a href="/archives/2008/08/31/">31</a>, <a href="/archives/2008/">2008</a> ]
</h2>


<div class="blogbody">
<a name="001282"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2008/08/31/links_for_2008-08-30.php">links for 2008-08-30</a></h3>

<ul class="delicious"><li>
                <div class="delicious-link"><a href="http://yuiblog.com/blog/2008/08/28/ysearch-for-iphone/" rel="nofollow">Optimizing Yahoo! Search for the iPhone</a></div>
                <div class="delicious-extended">&quot;[T]he Yahoo! Exceptional Performance Team [&#8230;] discovered that Mobile Safari doesnâ€™t cache components larger than 25KB pre-gzip.&quot;</div>
                <div class="delicious-tags">(tags: yui iphone mobile webdev)</div>
            </li></ul>



 <div class="posted"></div>

</div> <!-- blogbody -->





<h2 class="date">
[ <a href="/archives/2008/08/">August</a> <a href="/archives/2008/08/29/">29</a>, <a href="/archives/2008/">2008</a> ]
</h2>


<div class="blogbody">
<a name="001281"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2008/08/29/links_for_2008-08-28.php">links for 2008-08-28</a></h3>

<ul class="delicious"><li>
                <div class="delicious-link"><a href="http://www.kessels.com/Jkdefrag/" rel="nofollow">JkDefrag</a></div>
                
                <div class="delicious-tags">(tags: defrag utility opensource free windows)</div>
            </li><li>
                <div class="delicious-link"><a href="http://www.av-comparatives.org/" rel="nofollow">AV-Comparatives</a></div>
                <div class="delicious-extended">&quot;Independent comparatives of Anti-Virus software&quot;</div>
                <div class="delicious-tags">(tags: antivirus comparison reviews)</div>
            </li></ul>



 <div class="posted"></div>

</div> <!-- blogbody -->





<h2 class="date">
[ <a href="/archives/2008/08/">August</a> <a href="/archives/2008/08/27/">27</a>, <a href="/archives/2008/">2008</a> ]
</h2>


<div class="blogbody">
<a name="001280"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2008/08/27/links_for_2008-08-27.php">links for 2008-08-27</a></h3>

<ul class="delicious"><li>
                <div class="delicious-link"><a href="http://code.activestate.com/recipes/302746/" rel="nofollow">simplest useful (I hope!) thread pool example</a></div>
                <div class="delicious-extended">This was an interesting introduction to python threading for a small project I was working on recently.</div>
                <div class="delicious-tags">(tags: python threading programming)</div>
            </li></ul>



 <div class="posted"></div>

</div> <!-- blogbody -->





<h2 class="date">
[ <a href="/archives/2008/08/">August</a> <a href="/archives/2008/08/23/">23</a>, <a href="/archives/2008/">2008</a> ]
</h2>


<div class="blogbody">
<a name="001279"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2008/08/23/links_for_2008-08-23.php">links for 2008-08-23</a></h3>

<ul class="delicious"><li>
                <div class="delicious-link"><a href="http://thomas.broxrost.com/2008/08/21/persistent-django-on-amazon-ec2-and-ebs-the-easy-way/" rel="nofollow">Persistent Django on Amazon EC2 and EBS - The easy way</a></div>
                
                <div class="delicious-tags">(tags: django ec2 ebs aws persistence)</div>
            </li></ul>



 <div class="posted"></div>

</div> <!-- blogbody -->





<h2 class="date">
[ <a href="/archives/2008/07/">July</a> <a href="/archives/2008/07/31/">31</a>, <a href="/archives/2008/">2008</a> ]
</h2>


<div class="blogbody">
<a name="001278"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2008/07/31/links_for_2008-07-31.php">links for 2008-07-31</a></h3>

<ul class="delicious">
	<li>
		<div class="delicious-link"><a href="http://cuberun.org/gz0list.php" rel="nofollow">Free Cube Runner Custom Levels Downloads</a></div>
		<div class="delicious-tags">(tags: <a href="http://del.icio.us/scottj/iPhone" rel="nofollow">iPhone</a> <a href="http://del.icio.us/scottj/games" rel="nofollow">games</a> <a href="http://del.icio.us/scottj/CubeRunner" rel="nofollow">CubeRunner</a>)</div>
	</li>
	<li>
		<div class="delicious-link"><a href="http://themorningnews.org/archives/galleries/babys_first_internet/" rel="nofollow">Babyâ€™s First Internet</a></div>
		<div class="delicious-tags">(tags: <a href="http://del.icio.us/scottj/internet" rel="nofollow">internet</a> <a href="http://del.icio.us/scottj/humor" rel="nofollow">humor</a>)</div>
	</li>
</ul>




 <div class="posted"></div>

</div> <!-- blogbody -->





<h2 class="date">
[ <a href="/archives/2008/07/">July</a> <a href="/archives/2008/07/29/">29</a>, <a href="/archives/2008/">2008</a> ]
</h2>


<div class="blogbody">
<a name="001277"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2008/07/29/links_for_2008-07-29.php">links for 2008-07-29</a></h3>

<ul class="delicious">
	<li>
		<div class="delicious-link"><a href="http://www.geardiary.com/2008/07/27/speed-up-itunes-sync-of-your-iphone-or-touch-by-only-selectively-sending-diagnostic-data-to-apple/" rel="nofollow">Speed up iTunes sync of your iPhone</a></div>
		<div class="delicious-extended">This solved the &#8220;slow sync&#8221; issue with the 2.0 firmware for me.</div>
		<div class="delicious-tags">(tags: <a href="http://del.icio.us/scottj/iPhone" rel="nofollow">iPhone</a> <a href="http://del.icio.us/scottj/sync" rel="nofollow">sync</a> <a href="http://del.icio.us/scottj/issues" rel="nofollow">issues</a>)</div>
	</li>
</ul>




 <div class="posted"></div>

</div> <!-- blogbody -->





<h2 class="date">
[ <a href="/archives/2008/07/">July</a> <a href="/archives/2008/07/28/">28</a>, <a href="/archives/2008/">2008</a> ]
</h2>


<div class="blogbody">
<a name="001276"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2008/07/28/links_for_2008-07-28.php">links for 2008-07-28</a></h3>

<ul class="delicious">
	<li>
		<div class="delicious-link"><a href="http://www.vimeo.com/blog:140" rel="nofollow">Vimeo: New upload rules</a></div>
		<div class="delicious-extended">Vimeo made the wrong decision.</div>
		<div class="delicious-tags">(tags: <a href="http://del.icio.us/scottj/vimeo" rel="nofollow">vimeo</a> <a href="http://del.icio.us/scottj/video" rel="nofollow">video</a> <a href="http://del.icio.us/scottj/community" rel="nofollow">community</a> <a href="http://del.icio.us/scottj/bandwidth" rel="nofollow">bandwidth</a>)</div>
	</li>
</ul>




 <div class="posted"></div>

</div> <!-- blogbody -->





<h2 class="date">
[ <a href="/archives/2008/07/">July</a> <a href="/archives/2008/07/25/">25</a>, <a href="/archives/2008/">2008</a> ]
</h2>


<div class="blogbody">
<a name="001275"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2008/07/25/links_for_2008-07-25.php">links for 2008-07-25</a></h3>

<ul class="delicious">
	<li>
		<div class="delicious-link"><a href="http://google-code-updates.blogspot.com/2008/07/new-feeds-for-project-hosting-on-google.html" rel="nofollow">Feeds for Project Hosting on Google Code</a></div>
		<div class="delicious-tags">(tags: <a href="http://del.icio.us/scottj/googlecode" rel="nofollow">googlecode</a> <a href="http://del.icio.us/scottj/feeds" rel="nofollow">feeds</a>)</div>
	</li>
	<li>
		<div class="delicious-link"><a href="http://support.microsoft.com/kb/325376" rel="nofollow">Verbose Windows</a></div>
		<div class="delicious-extended">&#8220;How to enable verbose startup, shutdown, logon, and logoff status Messages in the Windows Server 2003 family [and XP]&#8221;</div>
		<div class="delicious-tags">(tags: <a href="http://del.icio.us/scottj/microsoft" rel="nofollow">microsoft</a> <a href="http://del.icio.us/scottj/windows" rel="nofollow">windows</a> <a href="http://del.icio.us/scottj/verbose" rel="nofollow">verbose</a>)</div>
	</li>
</ul>




 <div class="posted"></div>

</div> <!-- blogbody -->





<h2 class="date">
[ <a href="/archives/2008/06/">June</a> <a href="/archives/2008/06/26/">26</a>, <a href="/archives/2008/">2008</a> ]
</h2>


<div class="blogbody">
<a name="001274"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2008/06/26/links_for_2008-06-26.php">links for 2008-06-26</a></h3>

<ul class="delicious">
	<li>
		<div class="delicious-link"><a href="http://ejohn.org/blog/simple-extensions-in-firefox-3/" rel="nofollow">Simple Extensions in Firefox 3</a></div>
		<div class="delicious-extended">&#8220;a JavaScript API for performing common interactions typically desired by extension developers, called: FUEL&#8221;</div>
		<div class="delicious-tags">(tags: <a href="http://del.icio.us/scottj/firefox" rel="nofollow">firefox</a> <a href="http://del.icio.us/scottj/javascript" rel="nofollow">javascript</a> <a href="http://del.icio.us/scottj/extension" rel="nofollow">extension</a> <a href="http://del.icio.us/scottj/development" rel="nofollow">development</a> <a href="http://del.icio.us/scottj/api" rel="nofollow">api</a>)</div>
	</li>
	<li>
		<div class="delicious-link"><a href="http://ryanberg.net/blog/2008/jun/24/basics-creating-tumblelog-django/" rel="nofollow">The basics of creating a tumblelog with Django</a></div>
		<div class="delicious-tags">(tags: <a href="http://del.icio.us/scottj/django" rel="nofollow">django</a> <a href="http://del.icio.us/scottj/tumblelog" rel="nofollow">tumblelog</a>)</div>
	</li>
</ul>




 <div class="posted"></div>

</div> <!-- blogbody -->





<h2 class="date">
[ <a href="/archives/2008/06/">June</a> <a href="/archives/2008/06/11/">11</a>, <a href="/archives/2008/">2008</a> ]
</h2>


<div class="blogbody">
<a name="001273"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2008/06/11/links_for_2008-06-11.php">links for 2008-06-11</a></h3>

<ul class="delicious">
	<li>
		<div class="delicious-link"><a href="http://www.learningjquery.com/2008/06/updated-jquery-bookmarklet" rel="nofollow">Updated jQuery Bookmarklet</a></div>
		<div class="delicious-extended">&#8220;jQuerify&#8221;</div>
		<div class="delicious-tags">(tags: <a href="http://del.icio.us/scottj/jquery" rel="nofollow">jquery</a> <a href="http://del.icio.us/scottj/bookmarklet" rel="nofollow">bookmarklet</a> <a href="http://del.icio.us/scottj/javascript" rel="nofollow">javascript</a> <a href="http://del.icio.us/scottj/webdev" rel="nofollow">webdev</a>)</div>
	</li>
</ul>




 <div class="posted"></div>

</div> <!-- blogbody -->





<h2 class="date">
[ <a href="/archives/2008/06/">June</a> <a href="/archives/2008/06/06/"> 6</a>, <a href="/archives/2008/">2008</a> ]
</h2>


<div class="blogbody">
<a name="001272"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2008/06/06/links_for_2008-06-06.php">links for 2008-06-06</a></h3>

<ul class="delicious">
	<li>
		<div class="delicious-link"><a href="http://entropymine.com/jason/tweakpng/" rel="nofollow">TweakPNG</a></div>
		<div class="delicious-extended">&#8220;a low-level utility for examining and modifying PNG image files&#8221;</div>
		<div class="delicious-tags">(tags: <a href="http://del.icio.us/scottj/png" rel="nofollow">png</a> <a href="http://del.icio.us/scottj/tools" rel="nofollow">tools</a> <a href="http://del.icio.us/scottj/optimize" rel="nofollow">optimize</a> <a href="http://del.icio.us/scottj/graphics" rel="nofollow">graphics</a>)</div>
	</li>
	<li>
		<div class="delicious-link"><a href="http://pmt.sourceforge.net/pngcrush/" rel="nofollow">PNGCRUSH</a></div>
		<div class="delicious-extended">&#8220;reduce[s] the size of the PNG IDAT datastream by trying various compression levels&#8221;</div>
		<div class="delicious-tags">(tags: <a href="http://del.icio.us/scottj/png" rel="nofollow">png</a> <a href="http://del.icio.us/scottj/graphics" rel="nofollow">graphics</a> <a href="http://del.icio.us/scottj/optimization" rel="nofollow">optimization</a> <a href="http://del.icio.us/scottj/compression" rel="nofollow">compression</a> <a href="http://del.icio.us/scottj/tools" rel="nofollow">tools</a>)</div>
	</li>
</ul>




 <div class="posted"></div>

</div> <!-- blogbody -->





<h2 class="date">
[ <a href="/archives/2008/06/">June</a> <a href="/archives/2008/06/05/"> 5</a>, <a href="/archives/2008/">2008</a> ]
</h2>


<div class="blogbody">
<a name="001271"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2008/06/05/links_for_2008-06-05.php">links for 2008-06-05</a></h3>

<ul class="delicious">
	<li>
		<div class="delicious-link"><a href="http://cameronmoll.com/archives/2008/06/writing_more_betterer/" rel="nofollow">On writing more betterer</a></div>
		<div class="delicious-tags">(tags: <a href="http://del.icio.us/scottj/writing" rel="nofollow">writing</a>)</div>
	</li>
</ul>




 <div class="posted"></div>

</div> <!-- blogbody -->





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





<h2 class="date">
[ <a href="/archives/2008/03/">March</a> <a href="/archives/2008/03/31/">31</a>, <a href="/archives/2008/">2008</a> ]
</h2>


<div class="blogbody">
<a name="001267"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2008/03/31/links_for_2008-03-31.php">links for 2008-03-31</a></h3>

<ul class="delicious">
	<li>
		<div class="delicious-link"><a href="http://pyside.blogspot.com/2008/03/using-pygments-with-less.html" rel="nofollow">Using Pygments with less</a></div>
		<div class="delicious-extended">excellent tips on colorizing the output of less</div>
		<div class="delicious-tags">(tags: <a href="http://del.icio.us/scottj/pygments" rel="nofollow">pygments</a> <a href="http://del.icio.us/scottj/unix" rel="nofollow">unix</a> <a href="http://del.icio.us/scottj/tips" rel="nofollow">tips</a> <a href="http://del.icio.us/scottj/less" rel="nofollow">less</a>)</div>
	</li>
</ul>




 <div class="posted"></div>

</div> <!-- blogbody -->





<h2 class="date">
[ <a href="/archives/2008/03/">March</a> <a href="/archives/2008/03/14/">14</a>, <a href="/archives/2008/">2008</a> ]
</h2>


<div class="blogbody">
<a name="001266"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2008/03/14/embedded_journalism.php">Embedded Journalism</a></h3>

<p><script src="http://www.dashes.com/anil/2008/03/embedded-journalism.js" type="text/javascript"></script></p>



 <div class="posted"></div>

</div> <!-- blogbody -->





<h2 class="date">
[ <a href="/archives/2008/03/">March</a> <a href="/archives/2008/03/11/">11</a>, <a href="/archives/2008/">2008</a> ]
</h2>


<div class="blogbody">
<a name="001265"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2008/03/11/links_for_2008-03-11.php">links for 2008-03-11</a></h3>

<ul class="delicious">
	<li>
		<div class="delicious-link"><a href="http://www.hornblasters.com/" rel="nofollow">HornBlasters Train Air Horns</a></div>
		<div class="delicious-extended">train horns for your car</div>
		<div class="delicious-tags">(tags: <a href="http://del.icio.us/scottj/horn" rel="nofollow">horn</a> <a href="http://del.icio.us/scottj/cars" rel="nofollow">cars</a> <a href="http://del.icio.us/scottj/gadgets" rel="nofollow">gadgets</a>)</div>
	</li>
</ul>




 <div class="posted"></div>

</div> <!-- blogbody -->





<h2 class="date">
[ <a href="/archives/2008/03/">March</a> <a href="/archives/2008/03/10/">10</a>, <a href="/archives/2008/">2008</a> ]
</h2>


<div class="blogbody">
<a name="001264"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2008/03/10/fixed_john_resigs_blog.php">FIXED: John Resig&#8217;s blog</a></h3>

<p>My online reading style dictates that I highlight text from time to time in order to keep track of where I&#8217;m at.  <a href="http://ejohn.org/blog/" rel="nofollow">John Resig&#8217;s blog</a> was styled in a way that prevented me from highlighting the text in a very visible way.  It seems that the background of the elements containing the text was set to transparent.  So I finally just whipped out a bit of CSS and made <a href="http://userstyles.org/styles/5657" rel="nofollow">a userstyle to override the background</a>.  <a href="https://addons.mozilla.org/en-US/firefox/addon/2108" rel="nofollow">Stylish</a> is a godsend.</p>

<div class="artimg">Before:<br><img src="http://full-speed.org/images/ejohn/ejohn-before.jpg" alt="before" /></div>

<div class="artimg">After:<br><img src="http://full-speed.org/images/ejohn/ejohn-after.jpg" alt="after" /></div>



 <div class="posted"></div>

</div> <!-- blogbody -->





<h2 class="date">
[ <a href="/archives/2008/02/">February</a> <a href="/archives/2008/02/28/">28</a>, <a href="/archives/2008/">2008</a> ]
</h2>


<div class="blogbody">
<a name="001263"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2008/02/28/links_for_2008-02-28.php">links for 2008-02-28</a></h3>

<ul class="delicious">
	<li>
		<div class="delicious-link"><a href="http://processing.org/" rel="nofollow">Processing 1.0 (BETA)</a></div>
		<div class="delicious-extended">&#8220;an open source programming language and environment for people who want to program images, animation, and interactions&#8221;</div>
		<div class="delicious-tags">(tags: <a href="http://del.icio.us/scottj/programming" rel="nofollow">programming</a> <a href="http://del.icio.us/scottj/visualization" rel="nofollow">visualization</a> <a href="http://del.icio.us/scottj/graphics" rel="nofollow">graphics</a>)</div>
	</li>
	<li>
		<div class="delicious-link"><a href="http://arduino.cc/" rel="nofollow">Arduino</a></div>
		<div class="delicious-extended">&#8220;an open-source electronics prototyping platform based on flexible, easy-to-use hardware and software&#8221;</div>
		<div class="delicious-tags">(tags: <a href="http://del.icio.us/scottj/hardware" rel="nofollow">hardware</a> <a href="http://del.icio.us/scottj/electronics" rel="nofollow">electronics</a> <a href="http://del.icio.us/scottj/diy" rel="nofollow">diy</a>)</div>
	</li>
	<li>
		<div class="delicious-link"><a href="http://www.fritzing.org/" rel="nofollow">Fritzing</a></div>
		<div class="delicious-extended">&#8220;an open-source initiative to support designers and artists to take the step from physical prototyping to actual product&#8221;</div>
		<div class="delicious-tags">(tags: <a href="http://del.icio.us/scottj/electronics" rel="nofollow">electronics</a> <a href="http://del.icio.us/scottj/prototyping" rel="nofollow">prototyping</a> <a href="http://del.icio.us/scottj/diy" rel="nofollow">diy</a>)</div>
	</li>
</ul>




 <div class="posted"></div>

</div> <!-- blogbody -->





<h2 class="date">
[ <a href="/archives/2008/02/">February</a> <a href="/archives/2008/02/27/">27</a>, <a href="/archives/2008/">2008</a> ]
</h2>


<div class="blogbody">
<a name="001262"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2008/02/27/links_for_2008-02-27.php">links for 2008-02-27</a></h3>

<ul class="delicious">
	<li>
		<div class="delicious-link"><a href="http://iwphone.contentrobot.com/2007/07/04/iwphone-wordpress-plugin-and-theme" rel="nofollow">iWPhone WordPress Plugin and Theme</a></div>
		<div class="delicious-tags">(tags: <a href="http://del.icio.us/scottj/iphone" rel="nofollow">iphone</a> <a href="http://del.icio.us/scottj/wordpress" rel="nofollow">wordpress</a> <a href="http://del.icio.us/scottj/plugin" rel="nofollow">plugin</a> <a href="http://del.icio.us/scottj/theme" rel="nofollow">theme</a>)</div>
	</li>
	<li>
		<div class="delicious-link"><a href="http://www.lifeclever.com/17-powerful-bookmarklets-for-your-iphone/" rel="nofollow">17 powerful bookmarklets for your iPhone</a></div>
		<div class="delicious-tags">(tags: <a href="http://del.icio.us/scottj/iphone" rel="nofollow">iphone</a> <a href="http://del.icio.us/scottj/bookmarklets" rel="nofollow">bookmarklets</a> <a href="http://del.icio.us/scottj/javascript" rel="nofollow">javascript</a>)</div>
	</li>
	<li>
		<div class="delicious-link"><a href="http://gadgets.inventivelabs.com.au/tabulate" rel="nofollow">Tabulate</a></div>
		<div class="delicious-extended">&#8220;brings the convenience of &#8216;open in new tab&#8217; to Safari on your iPhone&#8221;</div>
		<div class="delicious-tags">(tags: <a href="http://del.icio.us/scottj/iphone" rel="nofollow">iphone</a> <a href="http://del.icio.us/scottj/bookmarklet" rel="nofollow">bookmarklet</a> <a href="http://del.icio.us/scottj/javascript" rel="nofollow">javascript</a>)</div>
	</li>
</ul>




 <div class="posted"></div>

</div> <!-- blogbody -->





<h2 class="date">
[ <a href="/archives/2008/02/">February</a> <a href="/archives/2008/02/26/">26</a>, <a href="/archives/2008/">2008</a> ]
</h2>


<div class="blogbody">
<a name="001261"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2008/02/26/links_for_2008-02-26.php">links for 2008-02-26</a></h3>

<ul class="delicious">
	<li>
		<div class="delicious-link"><a href="http://plugins.movabletype.org/imt/" rel="nofollow">iMT - iPhone Interface for Movable Type</a></div>
		<div class="delicious-tags">(tags: <a href="http://del.icio.us/scottj/iphone" rel="nofollow">iphone</a> <a href="http://del.icio.us/scottj/movabletype" rel="nofollow">movabletype</a> <a href="http://del.icio.us/scottj/plugin" rel="nofollow">plugin</a>)</div>
	</li>
	<li>
		<div class="delicious-link"><a href="http://plugins.movabletype.org/memcached-stats/" rel="nofollow">memcached Stats</a></div>
		<div class="delicious-tags">(tags: <a href="http://del.icio.us/scottj/memcached" rel="nofollow">memcached</a> <a href="http://del.icio.us/scottj/movabletype" rel="nofollow">movabletype</a> <a href="http://del.icio.us/scottj/plugin" rel="nofollow">plugin</a>)</div>
	</li>
	<li>
		<div class="delicious-link"><a href="http://plugins.movabletype.org/mtakismet/" rel="nofollow">MT-Akismet</a></div>
		<div class="delicious-tags">(tags: <a href="http://del.icio.us/scottj/akismet" rel="nofollow">akismet</a> <a href="http://del.icio.us/scottj/movabletype" rel="nofollow">movabletype</a> <a href="http://del.icio.us/scottj/plugin" rel="nofollow">plugin</a>)</div>
	</li>
</ul>




 <div class="posted"></div>

</div> <!-- blogbody -->





<h2 class="date">
[ <a href="/archives/2008/02/">February</a> <a href="/archives/2008/02/25/">25</a>, <a href="/archives/2008/">2008</a> ]
</h2>


<div class="blogbody">
<a name="001260"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2008/02/25/links_for_2008-02-25.php">links for 2008-02-25</a></h3>

<ul class="delicious">
	<li>
		<div class="delicious-link"><a href="http://www.huddletogether.com/projects/lightbox2/" rel="nofollow">Lightbox 2</a></div>
		<div class="delicious-tags">(tags: <a href="http://del.icio.us/scottj/javascript" rel="nofollow">javascript</a> <a href="http://del.icio.us/scottj/images" rel="nofollow">images</a> <a href="http://del.icio.us/scottj/lightbox" rel="nofollow">lightbox</a>)</div>
	</li>
	<li>
		<div class="delicious-link"><a href="http://www.wait-till-i.com/2008/02/05/javascript-countdown-solution/" rel="nofollow">JavaScript countdown solution</a></div>
		<div class="delicious-tags">(tags: <a href="http://del.icio.us/scottj/javascript" rel="nofollow">javascript</a> <a href="http://del.icio.us/scottj/timer" rel="nofollow">timer</a> <a href="http://del.icio.us/scottj/countdown" rel="nofollow">countdown</a>)</div>
	</li>
</ul>




 <div class="posted"></div>

</div> <!-- blogbody -->





<h2 class="date">
[ <a href="/archives/2008/01/">January</a> <a href="/archives/2008/01/22/">22</a>, <a href="/archives/2008/">2008</a> ]
</h2>


<div class="blogbody">
<a name="001259"></a>
<h3 class="title"><a href="http://full-speed.org/archives/2008/01/22/a_simple_solution_for_ie8.php">A Simple Solution For IE8</a></h3>

<p>The web is bustling with dialog about <a href="http://www.microsoft.com/windows/products/winfamily/ie/default.mspx" rel="nofollow">IE8</a>&#8217;s <a href="http://alistapart.com/articles/beyonddoctype" rel="nofollow">proposed behaviors</a> for selecting the engine that should render a page.  Sam Ruby proposed <a href="http://www.intertwingly.net/blog/2008/01/22/Best-Standards-Support" rel="nofollow">a simple .htaccess addition</a> that would make the added complexity disappear.  And while the use of the &#8220;IE=edge&#8221; setting is strongly discouraged, I think this seems like an excellent addition to .htaccess files everywhere.   In fact, I somewhat agree with <a href="http://intertwingly.net/blog/2008/01/22/Best-Standards-Support#c1201001207" rel="nofollow">Anne</a> when he says &#8220;They should ship that with Apache.&#8221;</p>



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