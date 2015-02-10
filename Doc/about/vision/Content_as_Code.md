Co:
	Name=Acme
	Address=1 Main St. {City}
	City=Cambrige

Client:
	Name=Quake

etc.  

Ti=Extending Content as Code

1.sec=The basic proposition of Cmacc is that both lawyers and engineers type text and engineers do it with better tools than lawyers. 

2.sec=From the engineers' side there sometimes arises an objection that legal text is content, not code and therefore it should be formatted in JSON, XML or the like.  Whatever the theoretical merits of that argument, it obscures similarities.  With that as prelude, let's get to business.

3.sec=CommonAccord currently uses a very spare format for key/values.  A key/value is a string bounded by single carriage returns that has at least one equal sign (xx=yy) in it.  In the current version, the equals sign can't be at the end of the string.

4.sec=This is great.  Simple, easy to type and to copy and paste.  No cruft.  Sometimes one has to be careful about trailing spaces, which can be a little hard to spot, depending on your editor.  Care is, generally speaking, a good thing.

5.sec=It would, I think, be better if instead of a single carriage return, we used two carriage returns.  That would allow us to format the value to show parts of it more readably and to use an editor like LibreOffice on large blocks of text (editors tend to put lots of "helpful" carriage returns into html text).  It also makes the list of key/values more readable, including in Github's .md format.  So, no downside, I think, and good upside.  There may be some files in the current repo that have only single returns, but not very many and we can treat those as mistakes. 

6.sec=Next, and here is where we really see that the "content" is code-ish.

7.0.sec=Sometimes we have a series of fields with keys that all start the same, e.g. 

7.1.sec=Co.Name=x

7.2.sec=Co.Address=y

7.90.sec=etc.  It would be easier to read if these could be presented in a format that reflected the notion Co. (Name=x, Address=y ).  The correct way of formatting this seems to me to be like in Python (you'll have to switch to Edit to see this), it's at the top of the file. 

7.=[02/Bit/Ssec_02]

=[02/Bit/Ssec_07]