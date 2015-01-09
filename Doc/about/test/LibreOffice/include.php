This is a suggestion of how to use Word Processing to maintain a complex document and still use it in Cmacc.<br><br>

<ol><li>Using LibreOffice, open the .doc or .docx file.

<li>Save as .html.  This is the doc you will use in LIbreOffice for editing going forward.  Keep it, you will need it.

<li>Using a text processor - open the .html file.  Remove the carriage returns - all of them - replacing each with a space.

<li>Paste the resulting string into the .md file USING THE BROWSER-based "Edit" tab (otherwise the special characters get misinterpreted).  (If you haven't already created the .md file, do that, and remember to reset privileges to allow you to edit from the browser.

<li>Add "Model.Root=" at the beginning of the string and save via the BROWSER.</ol>


To make edits - go BACK to LibreOffice and use it to edit the .html file. When done, save, and repeat steps 3, 4, 5.<br><br>

Nota bene :  I presume the special character problem is a matter of configuration (it is the same problem no matter what editor I hhave used.  The carriage return problem could be solved by making (CR)(CR) the end of key=value signal (or perhaps LibreOffice has a way of saving in .html w/o carriage returns?

