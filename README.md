# keithieopia.com [![Codacy Badge](https://api.codacy.com/project/badge/Grade/7525dd9b5f0d4a1cb01207d9b43336f3)](https://www.codacy.com/app/timothykeith/keithieopia-com?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=keithieopia/keithieopia.com&amp;utm_campaign=Badge_Grade)


> I have a website because it's an interesting tool... It's become an archive and a fairly complete on-line portfolio, as well as offering an opportunity to write a little.
>  
> &mdash; John Howe

This is the source code for my personal website, [http://keithieopia.com](https://keithieopia.com). The final HTML & CSS is excluded; the site is statically generated on the fly by [Hugo](http://gohugo.io/), a static site generator written in Go. See the Development section for details on how to do this.

The site has been online since 2006 and open-sourced since 2013. Since then, it's back end has undergone many revisions; see the [CHANGELOG.md](https://gitlab.com/keithieopia/keithieopia.com/blob/master/CHANGELOG.md) for details.


## Development
[Make](https://en.wikipedia.org/wiki/Make_%28software%29) is used to aid development and automate all the steps required to build the site. The Makefile understands these commands:

- `make yarn` - Uses [Yarn](https://yarnpkg.com/en/) to download any site dependances or updates to them, then moves them into the correct folder
- `make build` - Runs `make yarn` and builds the site with Hugo
- `make dev` - Watch files for changes and automatically rebuild the site. Also, starts a built-in HTTP server and opens the default browser to see changes.
- `make push` - Runs both `make yarn` and `make build`, then uploads the site to my webserver


## Credits
See the [humans.txt](https://gitlab.com/keithieopia/keithieopia.com/blob/master/static/humans.txt) file, which lists in detail all the third party components this site uses. Alternatively, the site's [colophon](https://keithieopia.com/colophon/) provides a high-level overview with a description of the server environment.



## Feedback
I would love your feedback! If you found any of these code useful, please drop me [an email](mailto:timothykeith@gmail.com). For the privacy conscious, feel free to encrypt any messages using my [PGP key](https://gist.githubusercontent.com/keithieopia/434f3575ec1f020d6589a4c01dc0847e/raw/2e0749f2966ff501ee28797a926229c081f7e652/timothykeith.pub.asc):

> 46E6 9F69 90C1 DE8C 9791 88EE 94A4 E2D4 *6B32 AA11*

To import it into your keyring:
```console
$ curl https://gitlab.com/snippets/1720975/raw | gpg --import -
```

**NOTE:** SKS Public Key Servers (such as pgp.mit.edu) don't support Curve25519 keys yet. In the meantime, consider using [Keybase.io](https://keybase.io/); my username is [timothykeith](https://keybase.io/timothykeith).

### Bug Reports
Submit bug reports via GitLab's [Issue Tracker](https://gitlab.com/keithieopia/keithieopia.com/issues/new)


## Author
Copyright &copy; 2013 – 2017 Timothy Keith, except where otherwise noted.

Licensed under the [MIT license](https://gitlab.com/keithieopia/keithieopia.com/blob/master/LICENSE).

*This is free software: you are free to change and redistribute it. There is NO WARRANTY, to the extent permitted by law.*
