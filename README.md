Alpha
=====

This is a repository of legal documents organized as source texts, and "Deal" docs that use them. 

To get going, you need to pull this repository and then launch a command line, go to your folder, then run the perl script.  

E.g.:

perl parser2.pl Doc/Test/Render_Me.txt > Doc/Test/Output.html

With your browser, view that output file:  {YourRoot}/Doc/Test/Output.html.  

To render different docs, edit Render_Me.txt - putting a line like the following near the top of the file:

=[Path/Name_of_Doc]

and comment out Model.Root= by eliminating the = or adding an x to the name ... Parsing starts by looking for the first "Model.Root=".  


This parser is totally rudimentary and has a few known bugs.  But it let's us write legal forms in their source format and start on the job of making a form book for everyone. 


