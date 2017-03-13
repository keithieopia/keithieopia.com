---
layout: page
title: Privacy
date: 2017-02-24
categories: meta
permalink: /privacy/
---

This is a informal guide on how I try to protect visitor's privacy while on this
site. There are no legal agreements or contracts here since we
[we all lie](http://www.biggestlie.com/) about reading those anyway...


## VPS: Lowest Common Denominator
This website is hosted on a virtual private server provided by
[Linode](https://www.linode.com/). As the service provider, they can access
any data stored on their computers as well as information that passes through
their network. See their [Privacy Policy](https://www.linode.com/privacy) for
details.

## Server Logging
This site uses the [nginx](https://nginx.org/) web server. Like most web
servers, nginx by default keeps a log of visitors. This log typically includes
what page was accessed, at what time, and from what IP Address, among other
things. However, I have modified nginx's settings to afford a basic level
privacy for visitors:

* Scrub the last byte of the IP Address, e.g.: 192.168.0.*x*
* Delete logs automatically after 4 weeks

## Secure Communication
This site only loads over an encrypted connection (HTTPS). This helps protect
against surveillance and interference by third‐parties. Certificates are
provided by [Let's Encrypt](https://letsencrypt.org/) and great care has been
taken to disable weak and insecure settings typically found on other sites.

* Qualys' SSL Server Test: [A+ Grade](https://www.ssllabs.com/ssltest/analyze.html?d=keithieopia.com
) (as of Feb 23, 2017).

## Website Analytics
Third-party analytics track users across websites to build a profile which can
contain an alarming amount of personal details. Instead, this site using
[Piwik](https://piwik.org) which is self-hosted and respects visitor privacy.

This Piwik install has been configured to:

* Support the *Do Not Track* preference if set by not recording the user's visit
* Scrub the last byte of the IP Address in reports, e.g.: 192.168.0.*x*
* Also scrub the last byte given to the Geolocation API

As noted above, Piwik has been configured to geolocate visitors based on IP
Address, with the exception of not providing last byte. [MaxMind's *GeoLite2 City*](https://dev.maxmind.com/geoip/geoip2/geolite2/) database is used, which
is downloaded locally so no third-party websites are involved.

### Opt-out of Analytics
If your browser has the *Do Not Track* preference set, you're automatically
opted out of the analytics by default. Otherwise, you can specifically opt out
below:

<iframe style="border: 0; height: 200px; width: 600px;" src="http://piwik.keithieopia.com/index.php?module=CoreAdminHome&action=optOut&language=en"></iframe>
