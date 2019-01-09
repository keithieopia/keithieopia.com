+++
title = "Get a File's Creation Date in Git"
date = "2017-03-09"
+++

If you want to find the creation date of a file in a git repo, you can issue
the following command. Replace <span class="mono">[FILENAME]</span> with the respective file):

<code class="shell">
git log -1 --format="%ai" --reverse [FILENAME]
</code><!--more-->

Alternatively, if you change <span class="mono">%ai</span> to <span class="mono">%ac</span> you'll get the date the file was
committed.

---

Most people will point out modern filesystems like ext4 keep track of when
files are created irregardless of git. Normally you can use <span class="mono">stat</span> to display
this, but the required system calls are [not implemented](https://lwn.net/Articles/397442/)
yet in the Linux kernel:

<code class="shell">
stat -c %w [FILENAME]
</code>

Ironically, the main reason for the lack of compatibility under Linux is all the
other systems (BSD, Unix, and Windows) are all incompatible with one another and
can't come to a consensus on what to call the "file creation date". Linus has
basically said future support isn't happening:

> all of this just convinces me that we should _not_ do any of this, since
> clearly it's all totally useless and people can't even agree on a name.
>  
> &mdash; Linus Torvalds

To be clear, <span class="mono">ext4</span> does keep track of the file creation date internally. You
can access the date using two slightly hackish methods. First is
[using debugfs](http://unix.stackexchange.com/a/50184) after getting the inode
of the file. The other way is [writing a kernel module and corresponding shell script](http://unix.stackexchange.com/a/92748).
