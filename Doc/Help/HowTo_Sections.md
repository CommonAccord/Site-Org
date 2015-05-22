Ti=Sections

0.1.sec=From the top down: sections.  This is very systematic.  It is quite intricate, but (i) in practice you mostly just need to use basic names for the parts of sections and (ii) it is ALL based on substitutions - scissors and tape.

0.2.sec=The base is a "Section," which can be either "Sec" for a section with a title or "sec" for a section without a title.

0.Sec={0.sec}

0.=[Z/paras/s2]

1.Ti=Sec

1.sec="Sec" is for a full Section, with section title.  It consists of a section title (Ti) and a body of the section (sec).  

2.Ti=sec

2.sec="sec" is a section without a title.  You can make it just a block of text (sec=My section text.), or it can be a list of subsections "xlist".  The list of subsections can have an introductory block of text ("0.sec") and can have a trailing block of text ("90.sec").

3.Ti=xlist

3.0.sec="xlist" is the place for the list of subsections.  It is filled with one of the HTML start list tags and a place for a list:

3.1.sec=xlist=&#123;Olist} is the default.  It starts and ends the text with the HTML code for an numbered outline: &lt;ol>&lt;li> and finished with &lt;/li>&lt;/ol>  In between is a place for the list of sections "Secs".  The "Sec" looks for Sections with titles.  &#123;1.Sec}&lt;/li>&#123;2.Sec} etc.

3.2.sec=xlist=&#123;olist} is also a ordered list, but looks for sections w/o titles &#123;1.sec}&lt;/li>&#123;2.sec} etc.

3.3.sec=There are a number of variations. xlist=Ulist is an "unordered" list of subsections with titles, - i.e., bullet points instead of numbered list.  xlist=ulist is an "unordered" list of subsections.  Nlist is Sec(s) w/out numbers or bullets (odd) and nlist is sec(s) without numbers or bullets. Blist is Sec(s) without numbering or bullets, and pulled to the margin - e.g. it is paragraphs.  blist has only the section texts and not the titles. 

3.=[Z/Sec/s3]

4.Ti=The number of Subsections

4.1.sec=The subsections range from 0 - a simple block of text, to 1 a block indented and with a leading number or bullet, and up to 40, which is &#123;1.Sec}&lt;li>&#123;2.Sec}&lt;li>&#123;3.Sec}...&#123;39.Sec}&lt;li>&#123;40.Sec}  (We can make more if needed) or &#123;1.sec}&lt;li>&#123;2.sec}&lt;li>&#123;3.sec}...&#123;39.sec}&lt;li>&#123;40.sec}, depending on whether you chose an xlist with upper case (Olist) or lower case (olist).

4.2.sec=This looks like madness, but turns out to be easy to use about 95% of the time.  It gets you out of all kinds of custom formatting, and allows good reuse.  It is easy to take a word processing doc and turn it into Cmacc format quickly. 

4.3.sec=These are done with with little texts in the format 4.=[Z/Sec/3] where 4 provides 4.Sec= and where 3 provides three Subsections.  If you want subsections (&#123;1.sec}&lt;li>&#123;2.sec}...) then say 4.=[Z/Sec/s3].  This adds xlist=&#123;olist} to override the default xlist=&#123;Olist}

4.=[Z/paras/s3]

=[Z/Sec/4]
