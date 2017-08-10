# keithieopia.com [![Codacy Badge](https://api.codacy.com/project/badge/Grade/7525dd9b5f0d4a1cb01207d9b43336f3)](https://www.codacy.com/app/timothykeith/keithieopia-com?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=keithieopia/keithieopia.com&amp;utm_campaign=Badge_Grade) ![Dependency Status](https://david-dm.org/keithieopia/keithieopia.com.svg)

> I have a website because it's an interesting tool... It's become an archive and a fairly complete on-line portfolio, as well as offering an opportunity to write a little.
>  
> &mdash; John Howe

This is the source code for my personal website, [http://keithieopia.com](https://keithieopia.com). The final HTML & CSS is excluded; the site is statically generated on the fly by [Hugo](http://gohugo.io/), a static site generator written in Go. See the Development section for details on how to do this.

The site has been online since 2006 and open-sourced since 2013. Since then, it's back end has undergone many revisions; see the [CHANGELOG.md](https://github.com/keithieopia/keithieopia.com/blob/master/CHANGELOG.md) for details.


## Development
[Make](https://en.wikipedia.org/wiki/Make_%28software%29) is used to aid development and automate all the steps required to build the site. The Makefile understands these commands:

- `make yarn` - Uses [Yarn](https://yarnpkg.com/en/) to download any site dependances or updates to them, then moves them into the correct folder
- `make build` - Runs `make yarn` and builds the site with Hugo
- `make dev` - Watch files for changes and automatically rebuild the site. Also, starts a built-in HTTP server and opens the default browser to see changes.
- `make push` - Runs both `make yarn` and `make build`, then uploads the site to my webserver

- Run [Yarn](https://yarnpkg.com/en/) to download all the updates to dependances such as Google Fonts & [Skeleton](http://getskeleton.com/).
- Copy the dependances into their proper folders
- Run Hugo to build the site
- Upload the build to my webserver


## Credits
See the [humans.txt](https://github.com/keithieopia/keithieopia.com/blob/master/humans.txt) file, which lists in detail all the third party components this site uses. Alternatively, the site's [colophon](https://keithieopia.com/colophon/) provides a high-level overview with a description of the server environment.


## Feedback
I would love your feedback! If you found any of these scripts useful, please drop me [an email](mailto:timothykeith@gmail.com). For the privacy conscious, feel free to encrypt any messages using my [PGP key](http://pgp.mit.edu/pks/lookup?op=vindex&fingerprint=on&search=0xF4F4A135C022EE12):

> 4135 C593 1D89 368E 7F32 C8ED F4F4 A135 C022 EE12

To import it into your keyring:
```console
$  gpg --keyserver pgp.mit.edu --recv-key 4135C5931D89368E7F32C8EDF4F4A135C022EE12
```

Submit bug reports via GitHub's [Issue Tracker](https://github.com/keithieopia/keithieopia.com/issues)


## Author
Copyright &copy; 2013 – 2017 Timothy Keith, except where otherwise noted.

Licensed under the [MIT license](https://github.com/keithieopia/keithieopia.com/blob/master/LICENSE).

*This is free software: you are free to change and redistribute it. There is NO WARRANTY, to the extent permitted by law.*
