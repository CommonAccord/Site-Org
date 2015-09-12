#Cmacc Object Model:

"Cmacc" is a name for the object model (data model?) used by CommonAccord.  It's current implementation is in the <a href="https://github.com/CommonAccord/Cmacc-Bare/blob/master/vendor/CommonAccord/cmacc/library/parser.pl">perl parser</a> done by Primavera De Filippi.

##Purpose:

This page has the purpose of allowing others to implement the Cmacc object model in whatever language or context they wish.  It is also intended to serve as a base for extending Cmacc.  For instance, we think that it could very usefully be implemented as a client-side parser, and as a part of P2P transacting systems, including on the blockchain.

##Background:

The object model was independently created by yours truly, in the course of a lot of experimentation.  In 2009 it was lists that could include other lists, implemented by Andrew Fitzpatrick as an extension to MediaWiki.  In 2010, in the XWiki version, it gained the notion of recursive inclusion and of optional "prefixing" the name space of included lists. Ludovic Dubost also coded an astonishing, useful "view" that makes document review and editing very easy, <a href="https://www.youtube.com/watch?v=4ZfsyTPYFIA">nearly Wysiwyg</a>.  In 2012, Lun Yuen reimplemented with <a href="http://lun-sandbox-cma-concept1.appspot.com/document/CMA_Home">integrating some of the aspects of the two prior implementations, and some additional versioning</a>.  In 2014, Primavera implemented it for use with flat files, and with lazy evaluation, a stricter priority of properties, and recursive de-prefixing.

The Cmacc object model is adequate for our core mission - codifying legal documents.  But it could be much more powerful.  The two things we most urgently lack are:

1. the XWiki-like, Wysiwyg-ish view where each snippet can be pop-up or collapse for editing and review, and 
2. a client side version.

##Cmacc Objects:

###Prototype Inheritance

Cmacc appears to be "prototype inheritance" - at least as that term is used in JavaScript - with a few additions.  First the overlap:  the notion of an object as list of properties that inherits from another object, recursively til there are no more objects.  When queried, the object returns the named property by searching itself and if not found by searching the object from which it inherits, recursively.  Like a bunch of Post-its stuck on on top of one another.

### Multiple Prototype Inheritance

Cmacc differs (I think) in that an object can inherit from multiple objects.  The object must expressly name its parents and can name as many parents as it wants.  The parents are evaluated (recursively, depth-first), in the order in which they appear in the list (top -> down is a design decision, it could have been bottom -> up).  The notation for another object is<br> =[Name_Of_Other_Object]

### Prefixed, Multiple Protype Inheritance

Cmacc also differs (I think) in that the reference to another object can be "prefixed."  So a reference to <code>P1.=[Acme_Incorporated]</code> would be the same as pasting the properties of that other object at the bottom of the current list of properties - but with "P1." preceding each name of a property and each variable in any of the properties.  E.g. If in Acme there is <code>Address={Street}, {City}, {ST}  {Zip}</code>, then it would be evaluated as if we had pasted: <code>P1.Address={P1.Street}, {P1.City}, {P1.ST}  {P1.Zip}</code>.  This is recursive.  E.g., if Acme_Incorporated referenced its CEO as <code>CEO.=[Alice_Alto]</code> and Alice had a similar address entry, it would be evaluated in our object as <code>P1.CEO.Address={P1.CEO.Street}, {P1.CEO.City}, {P1.CEO.ST}  {P1.CEO.Zip}</code>. In this age of liberation, a child object can claim as many parents as it wants, and can assign them roles. 

If a prefixed property is not found, the system will "deprefix," remove the most nested part of the prefix and look again.  In the example, if there is no "City" in Alice, the property will be evaluatated as {P1.City} (which might be "<code>P1.City=Boston</code>" in the top object or might be "<code>City=Boston</code>" in Acme_Incorporated), and if still not found then re-evaluate as {City}.  In each case, it searches the entire name space of the object that is being evaluated (pure prototype inheritance).  Deprefixing happens only with prefixing.

##Rendering Documents:

These objects can be used in a number of ways.  The most common in CommonAccord is to render a text (our focus is legal documents, but any text is fine).  We render by starting with the name of one property (by ugly default it is called "Model.Root").  So a value of <code>Model.Root={A}, {B} and {C}</code> is evaluated by looking for A=, B=, and C=.  If those values contain any variables, those variables are also expanded, until all variables have been substituted or determined to be not available.  (The order of expansion makes no difference.)

Of course one can use an object for some of its properties, such as in the example of Acme_Incorporate and Alice_Alto. Objects can be collections of other objects, such as a shareholder list, and intended as a name space rather than for direct rendering. Properties can also be included that serve a computing purpose.


##Current flat file format:

The flat file format is spare and easily worked as text, is the same way that software code is worked.  It is, of course, possible to encode key/value properties on other formats, such as JSON or XML, and we expect that scaling will require this in many uses.  Ideally, a new parser would modularize this aspect, so that users had their choice.

The current format treats as a property (key/value) any line of text that has an equals sign in it.  It treats the text to the left of the first equals sign as the key and the text to the right as the value (the value can contain equals signs and there is no need to escape them).

If the value begins with "[" and ends with "]" it will treat the value as the name of another object and try to find it.
 
It ignores everything else. So you can put comments, extra lines, whatever into the file. 

(The one change that I would recommend is to require two carriage returns to end a property, instead of one.  This would permit convenient breaking up of long values and should permit tools such as LibreOffice to directly edit long blocks of html.)

##HTML Values:

The values of properties are expressed as HTML.  HTML is the lingua franca of web pages, and it natively nests outline components correctly.  We have lots of experience with MediaWiki markup and XWiki markup.  For a number of reasons, it appears best to transform the markup into HTML before rendering.  Despite our frequent use of the .md suffix for files, there is no support in the current parser for markup.  We use .md so that files present better on GitHub.

##Using Exogenous Sources:

The current system has only two places that it looks for objects.  The basic is that it looks in a common directory (Doc/) for a file with exactly that name.  Of course there is no reason to limit itself this way and it is imagined that objects could be anywhere

Currently, in a rudimentary way, the system will look for a file based on a URL, signalled by a question mark.  So, P1.=[?http://acme.com/alice_alto] would evaluate the file there.  The file can be hosted at any URL, on any platform, so long as it delivers a relative simple text file with the characteristic <code>key=value</code> wrapped in carriage returns.  

There is no facility so far for relative name spaces for objects, so it will evaluate the name of a parent in the context of the top object. <a href="https://github.com/CommonAccord/Site-DataShare/issues/1#issuecomment-108514277">Some thoughts on relative name spaces.</a>.

##Use in Transacting Systems

We anticipate that most use will be in connection with transacting systems such as blockchain, but also incumbent systems and in a pure CommonAccord model (see the article by Marc Dangeard on use at Be-Bound). 

We expect that each of these systems will copy the text to make it part of their native data model.  This may be necessary or convenient for technical reasons or for ease of proof.  We note that GitHub provides a native, hashed URL, which can serve as one means of proof.  As a practical matter, you can create your own proof by forking the site.


##Extensions:

It is important that the system remain simple.  The job of legal documentation is not technically hard, it is a matter of careful organization of the texts and accumulating legal expertise.  Any technical "improvement" should preserve this simplicity generally, and in particular retain a key feature - any object can be modified by overwriting (overriding) the undesired element, thereby creating a new object that references the existing one.  This, I believe, is called "declarative" in CS-speak.  
But there are obviously improvements that would add functionality and even a few that would complete (rather than expand) the object model.  The learning around prototype inheritance certainly has lessons and methods for us.  It would be great to  integrate with programming languages. 

##Further; Contact

Please have at us.  Pull requests welcomed, as are email requests.


