+++
title = "Time Needed to Crack Passwords, 2018 Edition"
date = "2017-12-13"
+++

These time ranges are valid as of 2018 for attackers that might have stolen a database from a third-party website you use.


<img src="/images/password-post/dennis-nedry.png">


It assumes the attacker is using a cloud platform like [AWS](https://en.wikipedia.org/wiki/Amazon_Web_Services) and your password has been hashed and salted by the website. You, on the other hand, should assume the website's security was programmed by troglodytes like the guy on the right ⟶

If the site in question *does* store your password securely, the time to crack will increase significantly. That means they use something like [scrypt](https://en.wikipedia.org/wiki/Scrypt), [bcrypt](https://en.wikipedia.org/wiki/Bcrypt), [PBKDF2](https://en.wikipedia.org/wiki/PBKDF2), or basically anything [OWASP recommends](https://www.owasp.org/index.php/Password_Storage_Cheat_Sheet). Run away if you hear "unsalted", MD5, or SHA-1.

## Passphrases Crack Time

<a name="crackpassphrase"></a>

A passphrase is several random words combined together, like xkcd's famous [correcthorsebatterystaple](https://www.xkcd.com/936/) suggestion.

The below chart assumes the attacker knows what dictionary you used and the dictionary has around 8000 words. 

<table>
	<caption class="cite">
        <a href="https://www.reddit.com/r/techsnap/comments/18ezb6/correct_horse_battery_staple_really_a_strong/c8ede7r/">reddit</a>
    </caption>

    <thead>
    	<th>Number of Words</th>
        <th>Time to Crack</th>
    </thead>
    <tbody>
    	<tr>
    		<td>3 words</td>
        	<td>3 seconds</td>
        </tr><tr>
    		<td>4 words</td>
        	<td>7 hours</td>
        </tr><tr>
    		<td>5 words</td>
        	<td>8 years</td>
        </tr>
    </tbody>
</table>


## Passwords Crack Time

<a name="crackpassword"></a>

Alphanumeric means the password is made up of uppercase and lowercase letters, as well as numbers. Basically *A-Z, a-z, 0-9*.

<table>
    <caption class="cite">
        <a href="https://blog.codinghorror.com/your-password-is-too-damn-short/">Jeff Atwood</a>
    </caption>

	<thead>
    	<th>Password Length</th>
        <th>Time to Crack</th>
        <th>&hellip; with special character</th>
    </thead>
    <tbody>
    	<tr>
        	<td>9 characters</td>
            <td>2 minutes</td>
            <td>2 hours</td>
        </tr><tr>
        	<td>10 characters</td>
            <td>2 hours</td>
            <td>1 week</td>
        </tr><tr>
        	<td>11 characters</td>
            <td>6 days</td>
            <td>2 years</td>
        </tr><tr>
        	<td>12 characters</td>
            <td>1 year</td>
            <td>2 centuries</td>
        </tr><tr>
        	<td>13 characters</td>
            <td>64 years</td>
            <td>&mdash;</td>
        </tr>
    </tbody>
</table>

## Obligatory don't be an Idiot

You should assume the attacker knows a lot about you; *case and point: Facebook*. Guessable things like the following have no business being in your password:

- Your: name, birthday, anniversary, social security number, etc.
- Your parent's, friend's, spouse's, dog's: name, birthday, etc.
- Sequences like 12345

<img src="/images/password-post/12345.gif" class="img-responsive rounded">

- Any of the above, but combined; adding guessable things together does not make them un-guessable
- Passwords you've used before; they've [probably already been breached](https://haveibeenpwned.com)

**tl;dr:** ***use 13 characters or 5 random words combined***

