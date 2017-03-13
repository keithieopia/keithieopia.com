---
layout: post
title: Get a File's Creation Date in Git 
date: 2017-03-09
categories: git
---

If you want to find the creation date of a file in a git repo, you can issue 
the below command. Replace `[FILENAME]` with the respective file):

{% highlight shell_session %}
$ git log -1 --format="%ai" --reverse [FILENAME]
{% endhighlight %}

Alternatively, if you change `%ai` to `%ac` you'll get the date the file was 
committed.

---

Most people will point out modern filesystems like ext4 keep track of when
files are created irregardless of git. Normally you can use `stat` to display 
this, but the required system calls are [not implemented](https://lwn.net/Articles/397442/) 
yet in the Linux kernel:

{% highlight shell_session %}
$ stat -c %w [FILENAME]
{% endhighlight %}

Ironically, the main reason for the lack of compatibility under Linux is all the 
other systems (BSD, Unix, and Windows) are all incompatible with one another and 
can't come to a consensus on what to call the "file creation date". Linus has 
basically said future support isn't happening:

> all of this just convinces me that we should _not_ do any of this, since 
> clearly it's all totally useless and people can't even agree on a name. 
>  
> &mdash; Linus Torvalds

To be clear, `ext4` does keep track of the file creation date internally. You 
can access the date using two slightly hackish methods. First is 
[using debugfs](http://unix.stackexchange.com/a/50184) after getting the inode 
of the file. The other way is [writing a kernel module and corresponding shell script](http://unix.stackexchange.com/a/92748).
