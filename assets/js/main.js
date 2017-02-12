function getDomain(url) {
	var prefix = /^https?:\/\//i;
	var domain = /^[^\/]+/;
    // remove any prefix
    url = url.replace(prefix, "");
    // assume any URL that starts with a / is on the current page's domain
    if (url.charAt(0) === "/") {
    	url = window.location.hostname + url;
    }
    // now extract just the domain
    var match = url.match(domain);
    if (match) {
    	return(match[0]);
    }
    return(null);
}
window.alert(getDomain());

// if (true) {
// 	$.('dashbord')

// }