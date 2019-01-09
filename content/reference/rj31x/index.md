+++
title = "Wiring a RJ31X Jack for a Home Alarm System"
date = "2014-09-02"
hidefromhome = "true"
+++

A RJ31X is nothing more than a specially wired RJ45 plug that allows a security system to share the telephone line with standard household phones instead of paying for an additional telephone line just for the security system. In the event of an alarm, if the phone is in use or off the hook, the RJ31X disconnects the house phones
temporarily so the the security system can take over the phone line and make the call to the alarm company.

A standard 8P8C/RJ45 connector (same as Ethernet) plugs into the RJ31X jack to connect the security system. Usually, Cat-5 cable is used, however a 4 conductor telephone line can be used as a substitute providing it terminates with a RJ45 connector and not the typical RJ11.

Two standard telephone lines are wired to the RJ31X, one from the phone company and one to the rest of the phone system. Both transmit conductors are spliced together, as well as both receives. The individual transmit and receive conductors are then also spliced to their respective pins in the RJ31X jack.

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
