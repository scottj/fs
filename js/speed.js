function setCookie (name, value, expires, path, domain, secure) {
    var curCookie = name + "=" + encodeURIComponent(value) + (expires ? "; expires=" + expires : "") +
        (path ? "; path=" + path : "") + (domain ? "; domain=" + domain : "") + (secure ? "secure" : "");
    document.cookie = curCookie;
}
function getCookie (name) {
    var prefix = name + '=';
    var c = document.cookie;
    var nullstring = '';
    var cookieStartIndex = c.indexOf(prefix);
    if (cookieStartIndex == -1)
        return nullstring;
    var cookieEndIndex = c.indexOf(";", cookieStartIndex + prefix.length);
    if (cookieEndIndex == -1)
        cookieEndIndex = c.length;
    return decodeURIComponent(c.substring(cookieStartIndex + prefix.length, cookieEndIndex));
}
function deleteCookie (name, path, domain) {
    if (getCookie(name))
        document.cookie = name + "=" + ((path) ? "; path=" + path : "") +
            ((domain) ? "; domain=" + domain : "") + "; expires=Thu, 01-Jan-70 00:00:01 GMT";
}
function popUp(URL,NAME) {
	amznwin= window.open(URL, NAME, 'location=yes,scrollbars=yes,status=yes,toolbar=yes,resizable=yes,width=380,height=450,screenX=10,screenY=10,top=10,left=10');
	amznwin.focus();
}
