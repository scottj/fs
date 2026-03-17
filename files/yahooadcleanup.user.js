// ==UserScript==
// @name            Hide Yahoo Ads
// @namespace       http://speed.insane.com/files
// @description     Hides ads on various Yahoo sites
// @include         *yahoo.com*
// ==/UserScript==

function addGlobalStyle(css) {
	var head, style;
	head = document.getElementsByTagName('head')[0];
	if (!head) { return; }
	style = document.createElement('style');
	style.type = 'text/css';
	style.innerHTML = css;
	head.appendChild(style);
}

addGlobalStyle('.banner,.yschspns,#yschsec,#em,#flash5clickTAG,#leftnavad,#maincontentad,#swads,#ygrp-sponsor-box,#ygrp-sponsored-links,#ymadbn {display:none;visibility:hidden;}');
