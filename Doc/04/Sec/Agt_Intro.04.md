Model.Root={Sec}

Sec=<ul type="none" style="padding-left: 0"><li>{Persons.sec}<li>{YMD.sec}</ul>{Agree.sec}

Persons.sec={Parties.Sec}<li>{Friends.Sec}

Parties.Sec=<b>{Parties.Ti}</b>{Parties.xlist}

Parties.xlist=<ul type="none"><li>{Parties.List}<li>{Parties.Def.sec}</ul>

Parties.Def.sec=Each a “{party}&rdquo; and collectively the “{parties}.&rdquo;

Parties.List={Parties.List.1-6}

Parties.List.1-2={P1.sec}<li>{P2.sec}

Parties.List.1-3={P1.sec}<li>{P2.sec}<li>{P3.sec}

Parties.List.1-4={P1.sec}<li>{P2.sec}<li>{P3.sec}<li>{P4.sec}

Parties.List.1-5={P1.sec}<li>{P2.sec}<li>{P3.sec}<li>{P4.sec}<li>{P5.sec}

Parties.List.1-6={P1.sec}<li>{P2.sec}<li>{P3.sec}<li>{P4.sec}<li>{P5.sec}<li>{P6.sec}

Parties.Ti=BY AND BETWEEN:

P1.sec={P1.N,E,A} (“{P1.Handle}&rdquo;) 

P2.sec={P2.N,E,A} (“{P2.Handle}&rdquo;) 

P3.sec={P3.N,E,A} (“{P3.Handle}&rdquo;) 

P4.sec={P4.N,E,A} (“{P4.Handle}&rdquo;) 

P5.sec={P5.N,E,A} (“{P5.Handle}&rdquo;) 

P6.sec={P6.N,E,A} (“{P6.Handle}&rdquo;) 
 


Friends.Sec=<b>{Friends.Ti}</b>{Friends.xlist}

Friends.xlist=<ul type="none"><li>{Friends.List}<li>Each a “{Named_Third_Party}&rdquo; and collectively the “{Named_Third_Parties}.&rdquo;</ul>

Friends.List={Friends.List.1,2,3,4,5,6}

Friends.List.1,2={F1.sec}<li>{F2.sec}

Friends.List.1,2,3={F1.sec}<li>{F2.sec}<li>{F3.sec}

Friends.List.1,2,3,4={F1.sec}<li>{F2.sec}<li>{F3.sec}<li>{F4.sec}

Friends.List.1,2,3,4,5={F1.sec}<li>{F2.sec}<li>{F3.sec}<li>{F4.sec}<li>{F5.sec}

Friends.List.1,2,3,4,5,6={F1.sec}<li>{F2.sec}<li>{F3.sec}<li>{F4.sec}<li>{F5.sec}<li>{F6.sec}

Friends.Ti=Third Parties referenced but not party to this {Agreement}:

F1.sec={F1.N,E,A} (“{F1.Handle}&rdquo;) 

F2.sec={F2.N,E,A} (“{F2.Handle}&rdquo;) 

F3.sec={F3.N,E,A} (“{F3.Handle}&rdquo;) 

F4.sec={F4.N,E,A} (“{F4.Handle}&rdquo;) 

F5.sec={F5.N,E,A} (“{F5.Handle}&rdquo;) 

F6.sec={F6.N,E,A} (“{F6.Handle}&rdquo;) 
 

YMD.sec=EFFECTIVE DATE: {Agt.Effective.YMDT} (the “{Effective_Date}&rdquo;)

/Note=Default to just the day - backward compatibility

Agt.Effective.YMDT={Agt.Effective.YMD}


Agree.sec={Agree.This.sec} {Agree.Whereas.ul}{Agree.AsFollows.sec}

Agree.This.sec=This {Ti} (the “{Agreement}&rdquo;) is made as of the {Effective_Date} by and between the {parties}.

Agree.Whereas.ul=<ul type="none"><li>{Agree.Whereas.secs}</ul>

Agree.AsFollows.sec=In consideration of the mutual promises contained in {this_Agreement} and other good and valuable consideration, the receipt and sufficiency of which is hereby acknowledged, the {parties} agree as follows:
