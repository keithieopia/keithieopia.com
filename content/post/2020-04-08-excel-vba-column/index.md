+++
title = "Excel VBA: Get Column by it's Name"
date = "2020-04-08"
image = ['vba.png']
+++

You have a Excel sheet that has column headers in the first row, similar to a [CSV](https://en.wikipedia.org/wiki/Comma-separated_values). 
Using [VBA](https://en.wikipedia.org/wiki/Microsoft_Excel#VBA_programming), grab a column of data given a specific column header. 
Should be easy right?<!--more-->

The problem isn't so much the headache of anything VBA... it's all the weeding through the monetized blog
posts, Excel Howto book advertisements, and generally poor search results. So here's the solution
without all that garbage:

<code class="vba">
Dim ColumnNumber As Integer  
ColumnNumber = WorksheetFunction.Match("Column Header", ActiveWorkbook.Sheets("Sheet Name").Range("1:1"), 0)
</code>

Replace "Column Header" with the exact data in the Column you need to grab. Replace "Sheet Name" with the Worksheet's name, 
"Sheet1" if it's a new Workbook.

Annoyingly, the above code returns a column **number**, which is not the standard Excel **letter** and number reference you 
may be used to, like **A1**. Making matters worse, the solution to use column numbers instead of letters is called using 
reversed notation (row, column), so basically 1A, but really 1,1 since we're not allowed letters. Highly intuitive! </sarcasm> 

To grab a cell's content using the above code:

<code class="vba">
Sheets("Sheet Name").Cells(1, ColumnNumber).Value
</code>

Replace the \\1\\ with whatever row you need. ColumnNumber is a variable that was defined in the previous code, don't replace it. 
A final word of advice, if you're new to Excel VBA, ```Debug.Print("Whatever")``` is your friend. You'll also probably want to work 
on a Excel Macro-enabled spreadsheet ```.xlsm``` file and not a standard ```.xlsx```.