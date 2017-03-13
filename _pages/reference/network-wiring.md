---
layout: page
title: Network Wiring
date: 2014-09-02
categories: reference
---

Category 5 cable uses 4 twisted-pair cables, for a total of 8 individual wires.
The cable supports a maximum distance of 100 meters (328 feet), although that
distance may be extended if a repeater is used (in computer networking: a router
or switch). The cable should not be bent more than 4 times the diameter of the
cable and bundled with no more than 100 other Cat-5 cables. The maximum safe
operating temperature is 45&deg;C (113&deg;F).

Cat-5 is common use is for Ethernet computer networks, commonly transmitting at
10mbit/s (10BASE-T / 1.25MB/sec), 100mbit/s (100BASE-TX / 12.5MB/sec), and
1000mbit/s (1000BASE-T / 125MB/sec) megabits per second. 10BASE-T and
100BASE-TX use only 2 twisted pair cables (4 wires), leaving 4 wires unused.
While it would be against the written standards, these spare wires can be used
for a second network connection, 2 phone lines, or Power over Ethernet if a
special adapter is used. 1000BASE-T on the other hand, uses all 8 wires.

As previously mentioned, Cat-5 can be used for purposes other than computer
networking including phones or even security systems including transmitting
video data from security cameras in some instances. Cat-5 uses 24 gauge wire
which safely carries direct current at 360mA at 50V (36W DC voltage). Anything
below these limits theoretically could transmit successfully over Cat-5.


## Patch Cables
T568A is the recommended format for networks by the TIA/EIA-568 standard and is
required by the U.S. government for all federal government work. T568B use to be
the traditional format for networks in the U.S. because it matched the legacy
AT&T 258A wiring scheme.

### T568A
<table style="text-align: center">
    <tr style="text-align: center">
        <th>White<br>Green</th>
        <th>Green</th>
        <th>White<br>Orange</th>
        <th>Blue</th>
        <th>White<br>Blue</th>
        <th>Orange</th>
        <th>White<br>Brown</th>
        <th>Brown</th>
    </tr><tr>
        <td>
            <!-- White / Green -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFFFFF">&nbsp;&nbsp;</span><span style="background-color: #00FF00">&nbsp;&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- Green -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #00FF00">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- White / Orange -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFFFFF">&nbsp;&nbsp;</span><span style="background-color: #FFA500">&nbsp;&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- Blue -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #0000FF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- White / Blue -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFFFFF">&nbsp;&nbsp;</span><span style="background-color: #0000FF">&nbsp;&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- Orange -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFA500">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- White / Brown -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFFFFF">&nbsp;&nbsp;</span><span style="background-color: #A52A2A">&nbsp;&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- Brown -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #A52A2A">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </span>
        </td>
    </tr>
</table>

### T568B
<table style="text-align: center">
    <tr style="text-align: center">
        <th>White<br>Orange</th>
        <th>Orange</th>
        <th>White<br>Green</th>
        <th>Blue</th>
        <th>White<br>Blue</th>
        <th>Green</th>
        <th>White<br>Brown</th>
        <th>Brown</th>
    </tr><tr>
        <td>
            <!-- White / Orange -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFFFFF">&nbsp;&nbsp;</span><span style="background-color: #FFA500">&nbsp;&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- Orange -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFA500">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- White / Green -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFFFFF">&nbsp;&nbsp;</span><span style="background-color: #00FF00">&nbsp;&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- Blue -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #0000FF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- White / Blue -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFFFFF">&nbsp;&nbsp;</span><span style="background-color: #0000FF">&nbsp;&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- Green -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #00FF00">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- White / Brown -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFFFFF">&nbsp;&nbsp;</span><span style="background-color: #A52A2A">&nbsp;&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- Brown -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #A52A2A">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </span>
        </td>
    </tr>
</table>



## Crossover Cables
In the rare event an Ethernet cable is needed to directly connect two computers,
a special crossover cable must be used. Crossover cables have a T568A (or T568B)
on one end and the other end has the twisted pairs swapped.

### T568A Crossover
<table style="text-align: center">
    <tr>
        <th>White<br>Orange</th>
        <th>Orange</th>
        <th>White<br>Green</th>
        <th>White<br>Brown</th>
        <th>Brown</th>
        <th>Green</th>
        <th>Blue</th>
        <th>White<br>Blue</th>
    </tr><tr>
        <td>
            <!-- White / Orange -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFFFFF">&nbsp;&nbsp;</span><span style="background-color: #FFA500">&nbsp;&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- Orange -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFA500">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- White / Green -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFFFFF">&nbsp;&nbsp;</span><span style="background-color: #00FF00">&nbsp;&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- White / Brown -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFFFFF">&nbsp;&nbsp;</span><span style="background-color: #A52A2A">&nbsp;&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- Brown -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #A52A2A">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- Green -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #00FF00">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- Blue -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #0000FF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- White / Blue -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFFFFF">&nbsp;&nbsp;</span><span style="background-color: #0000FF">&nbsp;&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;&nbsp;</span>
            </span>
        </td>
    </tr>
</table>

### T568B Crossover

<table style="text-align: center">
    <tr>
        <th>White<br>Green</th>
        <th>Green</th>
        <th>White<br>Orange</th>
        <th>White<br>Brown</th>
        <th>Brown</th>
        <th>Orange</th>
        <th>Blue</th>
        <th>White<br>Blue</th>
    </tr><tr>
        <td>
            <!-- White / Green -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFFFFF">&nbsp;&nbsp;</span><span style="background-color: #00FF00">&nbsp;&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- Green -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #00FF00">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- White / Orange -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFFFFF">&nbsp;&nbsp;</span><span style="background-color: #FFA500">&nbsp;&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- White / Brown -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFFFFF">&nbsp;&nbsp;</span><span style="background-color: #A52A2A">&nbsp;&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- Brown -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #A52A2A">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- Orange -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFA500">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- Blue -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #0000FF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- White / Blue -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFFFFF">&nbsp;&nbsp;</span><span style="background-color: #0000FF">&nbsp;&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;&nbsp;</span>
            </span>
        </td>
    </tr>
</table>


### The Lazy 2 Pair Crossover Cable
Best practice is to cross all 4 twisted pairs so that the crossover cable can be
used with 10BASE-T, 100BASE-TX, and 1000BASE-T. However, since 10BASE-T and
100BASE-TX only use 2 of the 4 twisted pairs, it is only necessary to cross the
used ones if the cable will never be used for gigabit Ethernet.



## RJ31X
A RJ31X is a specially wired RJ45 plug that allows a security system to share
the telephone line with standard household phones versus paying for an
additional telephone line just for the security system. In the event of an alarm
if the phone is in use or off the hook, the RJ31X disconnects the house phones
temporarily so the the security system can take over the phone line and make the
call to the alarm company.

A standard 8P8C/RJ45 connector (same as Ethernet) plugs into the RJ31X jack to
connect the security system. Usually, Cat-5 cable is used, however a 4 conductor
telephone line can be used as a substitute providing it terminates with a RJ45
connector and not the typical RJ11.

Two standard telephone lines are wired to the RJ31X, one from the phone company
and one to the rest of the phone system. Both transmit conductors are spliced
together, as well as both receives. The individual transmit and receive
conductors are then also spliced to their respective pins in the RJ31X jack.


<table>
    <tr>
        <th>Security System</th>
        <th><!-- used for arrows --></th>
        <th>Phone<sup><a href="#wiring">1</a></sup></th>
        <th>Cat-5<sup><a href="#wiring">1</a></sup></th>
        <th colspan="2">RJ45 Jack Internal Wiring</th>
        <th>Phone System</th>
    </tr><tr>
        <td>Receive&nbsp;1</td>
        <td style="font-family: monospace">&lt;==</td>
        <td>
            <span style="border: 1px solid #000000; background-color: #FFFF00" title="Yellow">
            &nbsp;
            <span>&nbsp;</span>
            &nbsp;
            </span>
        </td>
        <td>
            <span style="border: 1px solid #000000; background-color: #FFFFFF" title="White Green">
            &nbsp;
            <span style="background-color: #00FF00">&nbsp;</span>
            &nbsp;
            </span>
        </td>
        <td>Pin&nbsp;1</td>
        <td style="font-family: monospace">&lt;==+==&gt;</td>
        <td>House Phones</td>
    </tr><tr>
        <td></td>
        <td></td>
        <td></td>
        <td>
            <span style="border: 1px solid #000000; background-color: #00FF00" title="Green">
            &nbsp;
            <span>&nbsp;</span>
            &nbsp;
            </span>
        </td>
        <td>Pin&nbsp;2<sup><a href="#unused">2</a></sup></td>
        <td style="font-family: monospace">&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</td>
        <td></td>
    </tr><tr>
        <td></td>
        <td></td>
        <td></td>
        <td>
            <span style="border: 1px solid #000000; background-color: #FFFFFF" title="White Orange">
            &nbsp;
            <span style="background-color: #FFA500">&nbsp;</span>
            &nbsp;
            </span>
        </td>
        <td>Pin&nbsp;3<sup><a href="#unused">2</a></sup></td>
        <td style="font-family: monospace">&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</td>
        <td></td>
    </tr><tr>
        <td>Recieve</td>
        <td style="font-family: monospace">&lt;==</td>
        <td>
            <span style="border: 1px solid #000000; background-color: #FF0000" title="Red">
            &nbsp;
            <span>&nbsp;</span>
            &nbsp;
            </span>
        </td>
        <td>
            <span style="border: 1px solid #000000; background-color: #0000FF" title="Blue">
            &nbsp;
            <span>&nbsp;</span>
            &nbsp;
            </span>
        </td>
        <td>Pin&nbsp;4</td>
        <td style="font-family: monospace">&lt;==+==[</td>
        <td>Telephone Company</td>
    </tr><tr>
        <td>Transmit</td>
        <td style="font-family: monospace">&lt;==</td>
        <td>
            <span style="border: 1px solid #000000; background-color: #00FF00" title="Green">
            &nbsp;
            <span>&nbsp;</span>
            &nbsp;
            </span>
        </td><td>
            <span style="border: 1px solid #000000; background-color: #FFFFFF" title="White Blue">
            &nbsp;
            <span style="background-color: #0000FF">&nbsp;</span>
            &nbsp;
            </span>
        </td>
        <td>Pin&nbsp;5</td>
        <td style="font-family: monospace">&lt;==+==[</td>
        <td>Telephone Company</td>
    </tr><tr>
        <td></td>
        <td></td>
        <td></td>
        <td>
            <span style="border: 1px solid #000000; background-color: #FFA500" title="Orange">
            &nbsp;
            <span>&nbsp;</span>
            &nbsp;
            </span>
        </td>
        <td>Pin&nbsp;6<sup><a href="#unused">2</a></sup></td>
        <td style="font-family: monospace">&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</td>
        <td></td>
    </tr><tr>
        <td></td>
        <td></td>
        <td></td>
        <td>
            <span style="border: 1px solid #000000; background-color: #FFFFFF" title="White Brown">
            &nbsp;
            <span style="background-color: #A52A2A">&nbsp;</span>
            &nbsp;
            </span>
        </td>
        <td>Pin&nbsp;7<sup><a href="#unused">2</a></sup></td>
        <td style="font-family: monospace">&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</td>
        <td></td>
    </tr><tr>
        <td>Transmit&nbsp;1</td>
        <td style="font-family: monospace">&lt;==</td>
        <td>
            <span style="border: 1px solid #000000; background-color: #000000" title="Black">
            &nbsp;
            <span>&nbsp;</span>
            &nbsp;
            </span>
        </td>
        <td>
            <span style="border: 1px solid #000000; background-color: #A52A2A" title="Brown">
            &nbsp;
            <span>&nbsp;</span>
            &nbsp;
            </span>
        </td>
        <td>Pin&nbsp;8</td>
        <td style="font-family: monospace">&lt;==+==&gt;</td>
        <td>House Phones</td>
    </tr>
</table>


<sup><a name="wiring">1</a></sup>: <em>4 conductor telephone line or Cat-5 cable
can be used. Both are shown to demonstrate the proper wiring to the pins on the
RJ31X</em>

<sup><a name="#unused">2</a></sup>: Pins 2, 3, 6, and 7 are unused in a RJ31X
plug<em></em>
