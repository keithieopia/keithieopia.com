+++
title = "Time Needed to Crack Passwords, 2018 Edition"
date = "2017-12-13"
+++

These time ranges are valid as of 2018 for attackers that might have stolen a database from a third-party website you use.

<span style="float: right; text-align: left; width: 15em; margin-left: 1em">
    <img src="/images/password-post/dennis-nedry.png">
</span>

It assumes the attacker is using a cloud platform like [AWS](https://en.wikipedia.org/wiki/Amazon_Web_Services) and your password has been hashed and salted by the website. You, on the other hand, should assume the website's security was programmed by troglodytes like the guy on the left.

If the site in question *does* store your password securely, the time to crack will increase significantly. That means they use something like [scrypt](https://en.wikipedia.org/wiki/Scrypt), [bcrypt](https://en.wikipedia.org/wiki/Bcrypt), [PBKDF2](https://en.wikipedia.org/wiki/PBKDF2), or basically anything [OWASP recommends](https://www.owasp.org/index.php/Password_Storage_Cheat_Sheet). Run away if you hear "unsalted", MD5, or SHA-1.

## Passphrases Crack Time

<a name="crackpassphrase"></a>

A passphrase is several random words combined together, like xkcd's famous [correcthorsebatterystaple](https://www.xkcd.com/936/) suggestion.

The below chart assumes the attacker knows what dictionary you used and the dictionary has around 8000 words. 

| Number of Words | Time to Crack |
| --------------- | ------------- |
| 3 words         | 3 seconds     |
| 4 words         | 7 hours       |
| 5 words         | 8 years       |

<small style="float: right">source: [reddit](https://www.reddit.com/r/techsnap/comments/18ezb6/correct_horse_battery_staple_really_a_strong/c8ede7r/) *yeh, I know&hellip;*</small>


## Passwords Crack Time

<a name="crackpassword"></a>

Alphanumeric means the password is made up of uppercase and lowercase letters, as well as numbers. Basically *A-Z, a-z, 0-9*.

| Password Length | Time to Crack | &hellip; with special character |
| --------------- | ------------- | ---------------------- |
| 9 characters    | 2 minutes     | 2 hours                |
| 10 characters	  | 2 hours       | 1 week                 |
| 11 characters	  | 6 days        | 2 years                |
| 12 characters	  | 1 year        | 2 centuries            |
| 13 characters	  | 64 years      | &mdash;                |

<small style="float: right">source: [Jeff Atwood](https://blog.codinghorror.com/your-password-is-too-damn-short/)</small>


## Obligatory don't be an Idiot

You should assume the attacker knows a lot about you; *case and point: Facebook*. Guessable things like the following have no business being in your password:

- Your: name, birthday, anniversary, social security number, etc.
- Your parent's, friend's, spouse's, dog's: name, birthday, etc.
- Sequences like 12345

<div style="width: 25em; margin: 1em auto">
    <img src="/images/password-post/12345.gif">
</div>

- Any of the above, but combined; adding guessable things together does not make them un-guessable
- Passwords you've used before; they've [probably already been breached](https://haveibeenpwned.com)


---

**tl;dr:** ***use 13 characters or 5 random words combined***

