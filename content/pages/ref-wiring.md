Category 5
==========
Category 5 cable uses 4 twisted-pair cables, for a total of 8 individual wires. The cable supports a maximum distance of
100 meters (328 feet), although that distance may be extended if a repeater is used (in computer networking: a router or
switch). The cable should not be bent more than 4 times the diameter of the cable and bundled with no more than 100 other
Cat-5 cables. The maximum safe operating temperature is 45&deg;C (113&deg;F).

Cat-5 is common use is for ethernet computer networks, commonly transmitting at 10mbit/s (10BASE-T / 1.25MB/sec), 100mbit/s
(100BASE-TX / 12.5MB/sec), and 1000mbit/s (1000BASE-T / 125MB/sec) megabits per second. 10BASE-T and 100BASE-TX use only
2 twisted pair cables (4 wires), leaving 4 wires unused. While it would be against the written standards, these spare wires
can be used for a second network connection, 2 phone lines, or Power over Ethernet if a special adapter is used.
1000BASE-T on the other hand, uses all 8 wires.

As previously mentioned, Cat-5 can be used for purposes other than computer networking including phones or even security
systems including transmitting video data from security cameras in some instances. Cat-5 uses 24 guage wire which safely
carries direct current at 360mA at 50V (36W DC voltage). Anything below these limits theoretically could transmit
successfully over Cat-5.


Patch Cables
------------
T568A is the recommended format for networks by the TIA/EIA-568 standard and is required by the U.S. government for all
federal government work. T568B use to be the traditional format for networks in the U.S. because it matched the legacy
AT&T 258A wiring scheme.


<table style="text-align: center">
    <tr>
        <th colspan="8">T568A</th>
        <th rowspan="3">&nbsp;</th>
        <th colspan="8">T568B</th>
    </tr><tr style="font-size: .5em; text-align: center">
        <!-- T568A -->
        <td>White<br>Green</td>
        <td>Green</td>
        <td>White<br>Orange</td>
        <td>Blue</td>
        <td>White<br>Blue</td>
        <td>Orange</td>
        <td>White<br>Brown</td>
        <td>Brown</td>

        <!-- T568B -->
        <td>White<br>Orange</td>
        <td>Orange</td>
        <td>White<br>Green</td>
        <td>Blue</td>
        <td>White<br>Blue</td>
        <td>Green</td>
        <td>White<br>Brown</td>
        <td>Brown</td>
    </tr><tr>

        <!-- T568A -->
        <td>
            <!-- White / Green -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFFFFF">&nbsp;</span><span style="background-color: #00FF00">&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;</span>
            </span>
        </td><td>
            <!-- Green -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #00FF00">&nbsp;&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- White / Orange -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFFFFF">&nbsp;</span><span style="background-color: #FFA500">&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;</span>
            </span>
        </td><td>
            <!-- Blue -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #0000FF">&nbsp;&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- White / Blue -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFFFFF">&nbsp;</span><span style="background-color: #0000FF">&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;</span>
            </span>
        </td><td>
            <!-- Orange -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFA500">&nbsp;&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- White / Brown -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFFFFF">&nbsp;</span><span style="background-color: #A52A2A">&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;</span>
            </span>
        </td><td>
            <!-- Brown -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #A52A2A">&nbsp;&nbsp;&nbsp;</span>
            </span>
        </td>

        <!-- T568B -->
        <td>
            <!-- White / Orange -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFFFFF">&nbsp;</span><span style="background-color: #FFA500">&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;</span>
            </span>
        </td><td>
            <!-- Orange -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFA500">&nbsp;&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- White / Green -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFFFFF">&nbsp;</span><span style="background-color: #00FF00">&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;</span>
            </span>
        </td><td>
            <!-- Blue -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #0000FF">&nbsp;&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- White / Blue -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFFFFF">&nbsp;</span><span style="background-color: #0000FF">&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;</span>
            </span>
        </td><td>
            <!-- Green -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #00FF00">&nbsp;&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- White / Brown -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFFFFF">&nbsp;</span><span style="background-color: #A52A2A">&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;</span>
            </span>
        </td><td>
            <!-- Brown -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #A52A2A">&nbsp;&nbsp;&nbsp;</span>
            </span>
        </td>
    </tr>
</table>


Crossover Cables
----------------
In the rare event an ethernet cable is needed to directly connect two computers, a special crossover cable must be used.
Crossover cables have a T568A (or T568B) on one end and the other end has the twisted pairs swapped. Best practice is to
cross all 4 twisted pairs so that the crossover cable can be used with 10BASE-T, 100BASE-TX, and 1000BASE-T. However,
since 10BASE-T and 100BASE-TX only use 2 of the 4 twisted pairs, it is only necessary to cross the used ones if the cable
will never be used for gigabit ethernet.

### T568A Crossover
<table style="text-align: center">
    <tr>
        <th colspan="8">4 Pairs Crossed<br>All Standards</th>
        <th rowspan="3">&nbsp;</th>
        <th colspan="8">2 Pairs Crossed<br>Only 10BASE-T &amp; 100BASE-TX</td>
    </tr>
    <tr style="font-size: .5em; text-align: center">
        <!-- Gigabit -->
        <td>White<br>Orange</td>
        <td>Orange</td>
        <td>White<br>Green</td>
        <td>White<br>Brown</td>
        <td>Brown</td>
        <td>Green</td>
        <td>Blue</td>
        <td>White<br>Blue</td>

        <!-- 10BASE-T and 100BASE-TX -->
        <td>White<br>Green</td>
        <td>Green</td>
        <td>White<br>Orange</td>
        <td>Blue</td>
        <td>White<br>Blue</td>
        <td>Orange</td>
        <td>White<br>Brown</td>
        <td>Brown</td>
    </tr><tr>
        <!-- Gigabit -->
        <td>
            <!-- White / Orange -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFFFFF">&nbsp;</span><span style="background-color: #FFA500">&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;</span>
            </span>
        </td><td>
            <!-- Orange -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFA500">&nbsp;&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- White / Green -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFFFFF">&nbsp;</span><span style="background-color: #00FF00">&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;</span>
            </span>
        </td><td>
            <!-- White / Brown -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFFFFF">&nbsp;</span><span style="background-color: #A52A2A">&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;</span>
            </span>
        </td><td>
            <!-- Brown -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #A52A2A">&nbsp;&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- Green -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #00FF00">&nbsp;&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- Blue -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #0000FF">&nbsp;&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- White / Blue -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFFFFF">&nbsp;</span><span style="background-color: #0000FF">&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;</span>
            </span>
        </td>

        <!-- 10BASE-T or 100BASE-TX -->
        <td>
            <!-- White / Green -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFFFFF">&nbsp;</span><span style="background-color: #00FF00">&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;</span>
            </span>
        </td><td>
            <!-- Green -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #00FF00">&nbsp;&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- White / Orange -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFFFFF">&nbsp;</span><span style="background-color: #FFA500">&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;</span>
            </span>
        </td><td>
            <!-- Blue -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #0000FF">&nbsp;&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- White / Blue -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFFFFF">&nbsp;</span><span style="background-color: #0000FF">&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;</span>
            </span>
        </td><td>
            <!-- Orange -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFA500">&nbsp;&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- White / Brown -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFFFFF">&nbsp;</span><span style="background-color: #A52A2A">&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;</span>
            </span>
        </td><td>
            <!-- Brown -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #A52A2A">&nbsp;&nbsp;&nbsp;</span>
            </span>
        </td>
    </tr>
</table>


### T568B Crossover

<table style="text-align: center">
    <tr>
        <th colspan="8">4 Pairs Crossed<br>All Standards</th>
        <th rowspan="3">&nbsp;</th>
        <th colspan="8">2 Pairs Crossed<br>Only 10BASE-T &amp; 100BASE-TX</td>
    </tr>
    <tr style="font-size: .5em; text-align: center">
        <!-- Gigabit -->
        <td>White<br>Green</td>
        <td>Green</td>
        <td>White<br>Orange</td>
        <td>White<br>Brown</td>
        <td>Brown</td>
        <td>Orange</td>
        <td>Blue</td>
        <td>White<br>Blue</td>

        <!-- 10BASE-T and 100BASE-TX -->
        <td>White<br>Orange</td>
        <td>Orange</td>
        <td>White<br>Green</td>
        <td>Blue</td>
        <td>White<br>Blue</td>
        <td>Green</td>
        <td>White<br>Brown</td>
        <td>Brown</td>
    </tr><tr>
        <!-- Gigabit -->
        <td>
            <!-- White / Green -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFFFFF">&nbsp;</span><span style="background-color: #00FF00">&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;</span>
            </span>
        </td><td>
            <!-- Green -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #00FF00">&nbsp;&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- White / Orange -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFFFFF">&nbsp;</span><span style="background-color: #FFA500">&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;</span>
            </span>
        </td><td>
            <!-- White / Brown -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFFFFF">&nbsp;</span><span style="background-color: #A52A2A">&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;</span>
            </span>
        </td><td>
            <!-- Brown -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #A52A2A">&nbsp;&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- Orange -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFA500">&nbsp;&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- Blue -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #0000FF">&nbsp;&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- White / Blue -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFFFFF">&nbsp;</span><span style="background-color: #0000FF">&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;</span>
            </span>
        </td>

        <!-- 10BASE-T or 100BASE-TX -->
        <td>
            <!-- White / Orange -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFFFFF">&nbsp;</span><span style="background-color: #FFA500">&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;</span>
            </span>
        </td><td>
            <!-- Orange -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFA500">&nbsp;&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- White / Green -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFFFFF">&nbsp;</span><span style="background-color: #00FF00">&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;</span>
            </span>
        </td><td>
            <!-- Blue -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #0000FF">&nbsp;&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- White / Blue -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFFFFF">&nbsp;</span><span style="background-color: #0000FF">&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;</span>
            </span>
        </td><td>
            <!-- Green -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #00FF00">&nbsp;&nbsp;&nbsp;</span>
            </span>
        </td><td>
            <!-- White / Brown -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #FFFFFF">&nbsp;</span><span style="background-color: #A52A2A">&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;</span>
            </span>
        </td><td>
            <!-- Brown -->
            <span style="border: 1px solid #000000">
            <span style="background-color: #A52A2A">&nbsp;&nbsp;&nbsp;</span>
            </span>
        </td>
    </tr>
</table>

RJ31X
-----

A RJ31X is a specially wired RJ45 plug that allows a security system to share the telephone line with standard household
phones versus paying for an additional telephone line just for the security system. In the event of an alarm if the phone
is in use or off the hook, the RJ31X disconnects the house phones temporarily so the the security system can take over the
phone line and make the call to the alarm company.

A standard 8P8C/RJ45 connector (same as ethernet) plugs into the RJ31X jack to connect the security system. Usually, Cat-5
cable is used, however a 4 conductor telephone line can be used as a substitute providing it terminates with a RJ45
connector and not the typical RJ11.

Two standard telephone lines are wired to the RJ31X, one from the phone company and one to the rest of the phone system.
Both transmit conductors are spliced togather, as well as both receives. The individual transmit and recieve conductors
are then also spliced to their respective pins in the RJ31X jack.

<table>
    <tr>
        <th>To Security<br>System</th>
        <th></th>
        <th colspan="2">Phone<br>Wire<sup>*</sup></th>
        <th colspan="2">Cat-5<br>Cable<sup>*</sup></th>
        <th rowspan="9" style="vertical-align: middle; padding: 0px 10px">R<br>J<br>4<br>5<br><br>P<br>l<br>u<br>g</th>
        <th colspan="5">Wiring in RJ31X</th>
        <th>External cables entering<br>and leaving RJ31X</th>
    </tr><tr>
        <td>Receive 1</td>
        <td>&larr;</td>

        <!-- Telephone Line -->
        <td style="font-size: .5em; text-align: center">Yellow</td>
        <td><span style="border: 1px solid #000000"><span style="background-color: #FFFF00">&nbsp;&nbsp;&nbsp;</span></span></td>

        <!-- Cat-5 Cable -->
        <td><span style="border: 1px solid #000000"><span style="background-color: #FFFFFF">&nbsp;</span><span style="background-color: #00FF00">&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;</span></span></td>
        <td style="font-size: .5em; text-align: center">White<br>Green</td>
        <td>Pin 1</td>

        <!-- Wiring -->
        <td>&larr;</td>
        <td>&#9516;</td>
        <td>&#9472;</td>
        <td>&rarr;</td>
        <td>to House Phones</td>
    </tr><tr>
        <td colspan="4"></td>

        <!-- Cat-5 Cable -->
        <td><span style="border: 1px solid #000000"><span style="background-color: #00FF00">&nbsp;&nbsp;&nbsp;</span></span></td>
        <td style="font-size: .5em; text-align: center">Green</td>
        <td>Pin 2</td>

        <!-- Wiring -->
        <td></td>
        <td>&#9474;</td>
        <td colspan="3"></td>
    </tr><tr>
        <td colspan="4"></td>

        <!-- Cat-5 Cable -->
        <td><span style="border: 1px solid #000000"><span style="background-color: #FFFFFF">&nbsp;</span><span style="background-color: #FFA500">&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;</span></span></td>
        <td style="font-size: .5em; text-align: center">White<br>Orange</td>
        <td>Pin 3</td>

        <!-- Wiring -->
        <td></td>
        <td>&#9474;</td>
        <td colspan="3"></td>
    </tr><tr>
        <td>Recieve</td>
        <td>&larr;</td>

        <!-- Telephone Line -->
        <td style="font-size: .5em; text-align: center">Red</td>
        <td><span style="border: 1px solid #000000"><span style="background-color: #FF0000">&nbsp;&nbsp;&nbsp;</span><span></td>

        <!-- Cat-5 Cable -->
        <td><span style="border: 1px solid #000000"><span style="background-color: #0000FF">&nbsp;&nbsp;&nbsp;</span></span></td>
        <td style="font-size: .5em; text-align: center">Blue</td>
        <td>Pin 4</td>

        <!-- Wiring -->
        <td>&larr;</td>
        <td>&#9524;</td>
        <td>&#9472;</td>
        <td>&#9472;</td>
        <td>from Telephone Company</td>
    </tr><tr>
        <td>Transmit</td>
        <td>&larr;</td>

        <!-- Telephone Line -->
        <td style="font-size: .5em; text-align: center">Green</td>
        <td><span style="border: 1px solid #000000"><span style="background-color: #00FF00">&nbsp;&nbsp;&nbsp;</span></span></td>

        <!-- Cat-5 Cable -->
        <td><span style="border: 1px solid #000000"><span style="background-color: #FFFFFF">&nbsp;</span><span style="background-color: #0000FF">&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;</span></span></td>
        <td style="font-size: .5em; text-align: center">White<br>Blue</td>
        <td>Pin 5</td>

        <!-- Wiring -->
        <td>&larr;</td>
        <td>&#9516;</td>
        <td>&#9472;</td>
        <td>&#9472;</td>
        <td>from Telephone Company</td>
    </tr><tr>
        <td colspan="4"></td>

        <!-- Cat-5 Cable -->
        <td><span style="border: 1px solid #000000"><span style="background-color: #FFA500">&nbsp;&nbsp;&nbsp;</span></span></td>
        <td style="font-size: .5em; text-align: center">Orange</td>
        <td>Pin 6</td>

        <!-- Wiring -->
        <td></td>
        <td>&#9474;</td>
        <td colspan="3"></td>
    </tr><tr>
        <td colspan="4"></td>

        <!-- Cat-5 Cable -->
        <td><span style="border: 1px solid #000000"><span style="background-color: #FFFFFF">&nbsp;</span><span style="background-color: #A52A2A">&nbsp;</span><span style="background-color: #FFFFFF">&nbsp;</span></span></td>
        <td style="font-size: .5em; text-align: center">White<br>Brown</td>
        <td>Pin 7</td>

        <!-- Wiring -->
        <td></td>
        <td>&#9474;</td>
        <td colspan="3"></td>
    </tr><tr>
        <td>Transmit 1</td>
        <td>&larr;</td>

        <!-- Telephone Line -->
        <td style="font-size: .5em; text-align: center">Black</td>
        <td><span style="border: 1px solid #000000"><span style="background-color: #000000">&nbsp;&nbsp;&nbsp;</span></span></td>

        <!-- Cat-5 Cable -->
        <td><span style="border: 1px solid #000000"><span style="background-color: #A52A2A">&nbsp;&nbsp;&nbsp;</span></span></td>
        <td style="font-size: .5em; text-align: center">Brown</td>
        <td>Pin 8</td>

        <!-- Wiring -->
        <td>&larr;</td>
        <td>&#9524;</td>
        <td>&#9472;</td>
        <td>&rarr;</td>
        <td>to House Phones</td>
    </tr>
</table>

<sup>*</sup><em>4 conductor telephone line or Cat-5 cable can be used. Both are shown to demonstrate the proper wiring
to the pins on the RJ31X</em>
