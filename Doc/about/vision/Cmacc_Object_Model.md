Cmacc Definition:

"Cmacc" is a name for the object model (data model?) used by CommonAccord.  It's current implementation is in the (perl parser)[https://github.com/CommonAccord/Cmacc-Bare/blob/master/vendor/CommonAccord/cmacc/library/parser.pl] done by Primavera De Filippi.

Purpose:

This definition has the purpose of allowing others to implement it in whatever language or context they wish.  It is also intended to serve as a base for extending Cmacc.  We think that it could very usefully be implemented as client-side parser, and as a part of P2P transacting systems, including on the blockchain.

Background:

The object model was independently created by yours truly, in the course of a lot of experimentation.  In 2009 it was lists that could include other lists, implemented as an extension to MediaWiki.  In 2010, in the Xwiki version, it gained the notion of recursive inclusion and of "prefixing" the name space of included lists. Ludovic Dubost also coded a really beautiful rendering "view" that makes the system nearly Wysiwyg.  In 2012, Lun Yuen reimplemented with versioning.  In 2014, Primavera implemented it for use with flat files (and hence nice fit GitHub), and with lazy evaluation, a stricter priority of properties, and recursive de-prefixing.

It is now very good, and the two things we most urgently lack are a client side version and the Wysiwyg-ish view where each snippet can be pop-up or collapse for editing and review.

We hadn't identified its place and precedents in computing until very recently.  Such identification is critical for further work.  

Cmacc Objects:

Cmacc appears to be "prototype inheritance" - at least as that term is used in JavaScript.  With a few additions.  First the overlap:  the notion of an object as list of properties that inherits from another object, recursively til there are no more objects.  When queried, the object returns the named property by searching itself and if not found by searching the object from which it inherits, recursively.  Like a bunch of Post-its stuck on on top of one another.

Cmacc differs (I think) in that an object can inherit from multiple objects.  The object must expressly name its parents and can name as many as it wants.  The parents are evaluated (recursively, depth-first), in the order in which they appear in the list (top -> down is a design decision, it could have been bottom -> up).  The notation is =[Name_Of_Other_Object]

Cmacc also differs (I think) in that the reference to another object can be "prefixed."  So a reference to P1.=[Acme_Incorporated] would be the same as pasting the properties of that other object at the bottom of the current list of properties - but with "P1." preceding each name of a property and each variable in any of the properties.  E.g. If in Acme there is Address={Street}, {City}, {ST}  {Zip}, then it would be evaluated as if we had pasted: P1.Address={P1.Street}, {P1.City}, {P1.ST}  {P1.Zip}.  This is recursive.  E.g., if Acme_Incorporated referenced its CEO as CEO.=[Alice_Alto] and Alice had a similar address entry, it would be evaluated in our object as P1.CEO.Address={P1.CEO.Street}, {P1.CEO.City}, {P1.CEO.ST}  {P1.CEO.Zip}. In this age of liberation, a child object not only can claim as many parents as it wants, it can assign them roles. 

If a prefixed property is not found, the system will "deprefix," remove the most nested part of the prefix and look again.  In the example, if there is no "City" in Alice, the property will be evaluatated as {P1.City} (which might be "P1.City=Boston" in the top object or might be "City=Boston" in Acme_Incorporated), and if still not found then re-evaluate as {City}.  In each case, it searches the entire name space of the object that is being evaluated (pure prototype inheritance).  Deprefixing happens only with prefixing.  

Rendering Documents:

These objects can be used in a number of ways.  The most common in CommonAccord is to render a text (our focus is legal documents, but any text is fine).  We render by starting with the name of one property (by ugly default it is called Model.Root).  So a value of Model.Root={A}, {B} and {C} is evaluated by looking for A=, B=, and C=.  If those values contain any variables, those variables are also expanded, until all variables have been substituted or determined to be not available.  (The order of expansion makes no difference.)

Of course one can use an object for some of its properties, such as in the example of Acme_Incorporate and Alice_Alto. Objects can be collections of other objects, such as a shareholder list, and intended as a name space rather than for direct rendering. Properties can also be included that serve a computing purpose.


Current flat file format:

The flat file format allows comments and other flexibility.  It is spare and easily worked as text, in the same way that software code is worked.  It is, of course, possible to encode key/value properties on other formats, such as JSON or XML, and we expect that scaling may require this.  Ideally, a new parser would modularize the chopping of an object into properties.

The current format treats as a property (key/value) any line of text that has an equals sign in it.  It treats the text to the left of the first equals sign as the key and the text to the right as the value (the value can contain equals signs and there is no need to escape them).

If the value begins with "[" and ends with "]" it will treat the value as the name of another object and try to find it.
 
It ignores everything else. So you can put comments, extra lines, whatever into the file. 

(The one change that I would recommend is to require two carriage returns to end a property, instead of one.  This would permit breaking a long section and should permit tools such as LibreOffice to directly edit long blocks of html.)

HTML:

The values of properties are expressed as HTML.  HTML is the lingua franca of web pages, and it natively nests outline components.  Of course, on can use markup - and we have experience with MediaWiki markup and slight variation used by XWiki.  It appears best to transform the markup into HTML before parsing.  In the current version, we use only HTML. 


Finding another Object:

The current system has only two places that it looks for objects.  The basic is that it looks in a common directory for a file with exactly that name.  Of course there is no reason to limit itself this way and it is imagined that objects could be anywhere.  In a rudimentary way, the system will look for an object based on a URL, signalled by a question mark.  So, P1.=[?http://acme.com/alice_alto] would evaluate the file there.  There is no facility so far for relative name spaces for objects.  


Extensions:

It is important that the system remain simple.  The job of legal documentation is not technically hard, it is a matter of connecting real legal expertise to the texts.  A feature of the current system is that any change can be made by simply overwriting (overriding) the undesired span, creating a new object that references the existing object.  Any "improvement" should retain this simplicity.

But there are obvious improvements that would actually add intellectual coherence, and enable integration with more powerful computing functions. 

Please have at us.


