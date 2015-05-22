Ti=Agreements

1.Ti=All Agreements are 5 points

1.0.sec=The text of an agreement, such as Z/Agt/Agt.md consists of sections in this order:

1.1.sec=Head.Sec

1.2.sec=Intro.Sec

1.3.sec=xlist

1.4.sec=End.Sec

1.5.sec=Foot.Sec

1.=[Z/Sec/s5]

2.Ti=This builds on "Sections"

2.sec=A section (see H/HowTo-Sections.md) has a notion of Title, 0.Sec, xlist, and 90.Sec.  We replace the 0.Sec with Intro.Sec and the 90.Sec with End.Sec.  We wrap the whole in a Header.Sec and a Footer.Sec. This gives us pretty good handles for any kind of Agreement, indeed for most kinds of documents.

3.Ti=In Detail

3.1.Ti=Header

3.1.sec=Header.Sec adds centering and format, then rolls over to Header.sec.  Header.sec provides us with an opportunity to put in other info such as an exhibit name or party names, and rolls over to Doc.Title.  So putting Doc.Title=My Agreement will give you a nicely centered title. 

3.2.Ti=Intro

3.2.0.sec=Intro.Sec usually is fulfilled by Z/Agt/Agt_Intro.md which has a full structure of:

3.2.1.sec=A place for party identification, and for identification of any non-party persons who need to be identified.  There is a large kit of resources for parties up to 6 and for "friends" up to 6, but the default is simple, it is parameterized for 2 parties only, w/out "friends." 

3.2.2.sec="This agreement...", Whereas, and Therefore the parties agree that ...."  We call them Intro.This.sec, Intro.Because.Sec and Intro.That.sec.  Intro.Because.Sec can be eliminated by defining as null, or will roll over into Intro.Because.sec, which will add spacing and intent, and roll over to "Whereas" and Intro.Because.secs.  So you can add: <br> Intro.Because.secs=Seller has a house; &lt;li>Buyer wants a house; and &lt;li>The parties agree to sell and buy on the terms of this agreement. 

3.2.=[Z/Sec/s2]

3.3.Ti=xlist

3.3.sec=this is handled by Sections - See [H/HowTo-Sections.md]

3.4.Ti=End

3.4.sec=This has the usual "Now Therefore" kind of language and hooks for signature.  Signature blocks can be largely automated, including for the differences needed for an individual signing for themself vs an individual signing for an organization.  There is also a large kit of signature blocks, up to 6, in table format. 

3.5.Ti=Foot

3.5.sec=This is ordinarily for attachments, such as Exhibits and Schedules.  This section rolls over to null, so it won't appear unless you put something in as <br>Foot.Sec= ...

3.=[Z/Sec/5]

4.Ti=Improvement

4.sec=There is a lot of experience in these, especially the Sections.  But there may still be some inconsistencies to be weeded out. Overall, once you get the idea, working with this turns out to be easy about 95% of the time.  The last 5% can sometimes be tough, but it always turns out to be doable if you override enough. 

=[Z/Sec/4]
