# keithieopia.com [![Codacy Badge](https://api.codacy.com/project/badge/Grade/7525dd9b5f0d4a1cb01207d9b43336f3)](https://www.codacy.com/app/timothykeith/keithieopia-com?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=keithieopia/keithieopia.com&amp;utm_campaign=Badge_Grade) [![Dependency Status](https://gemnasium.com/badges/github.com/keithieopia/keithieopia.com.svg)](https://gemnasium.com/github.com/keithieopia/keithieopia.com)

> I have a website because it's an interesting tool... It's become an archive 
> and a fairly complete on-line portfolio, as well as offering an opportunity to 
> write a little.
>
> &mdash; John Howe

This is the source code for my personal website, [https://keithieopia.com](https://keithieopia.com).
The final HTML & CSS is excluded; the site is statically generated on the fly by 
[Jekyll](https://jekyllrb.com/), a static site generator written in Ruby. See
the Development section for details on how to do this.

The site has been online since 2006 and open-sourced since 2013. Since then, 
it's back end has undergone many revisions; see the [CHANGELOG.md](https://github.com/keithieopia/keithieopia.com/blob/master/CHANGELOG.md)
for details.


## Development
[Rake](https://ruby.github.io/rake/) is used to aid development and automate 
building the site, in a similar fashion to a Makefile or using Grunt.

### To build the site
Uses Jekyll to build the site and store output in the `_site` sub directory. 

```console
$ rake build
```

### Build and start a developmental web server
Jekyll includes a built-in HTTP server for development. The site is 
automatically regenerated if a file is added or edited.
```console
$ rake serve
```

### Upload the site
Uploads the site using `rsync` over SSH, deleting any old data on the server. 
You must run `rake build` or `rake serve` to generate the site beforehand.
```console
$ rake upload
```


## Credits
Developers make use of the [humans.txt](https://github.com/keithieopia/keithieopia.com/blob/master/humans.txt) 
file, which lists in detail the third party components. Alternatively, the 
site's [colophon](https://keithieopia.com/colophon/) is a friendlier high-level 
overview with a description of the server environment.


## Feedback
I would love your feedback! If you found any of these scripts useful, please
drop me [an email](mailto:timothykeith@gmail.com). For the privacy conscious,
feel free to encrypt any messages using my [PGP key](http://pgp.mit.edu/pks/lookup?op=vindex&fingerprint=on&search=0xF4F4A135C022EE12):

> 4135 C593 1D89 368E 7F32 C8ED F4F4 A135 C022 EE12

To import it into your keyring:
```console
$  gpg --keyserver pgp.mit.edu --recv-key 4135C5931D89368E7F32C8EDF4F4A135C022EE12
```

Submit bug reports via GitHub's [Issue Tracker](https://github.com/keithieopia/keithieopia.com/issues)


## Author
Copyright &copy; 2013 - 2017 Timothy Keith, except where otherwise noted.

Licensed under the [MIT license](https://github.com/keithieopia/keithieopia.com/blob/master/LICENSE).

*This is free software: you are free to change and redistribute it. There is NO
WARRANTY, to the extent permitted by law.*
