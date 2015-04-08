Model.Root={Sec}

Sec=<ul type="none" style="padding-left: 0"><li>{Persons.sec}<li>{YMD.sec}</ul>{Agree.sec}

Persons.sec={Parties.Sec}

Parties.Sec=<b>{Parties.Ti}</b>{Parties.xlist}

Parties.xlist=<ul type="none"><li>{Parties.List}<li>{Parties.Def.sec}</ul>

Parties.Def.sec=Each a "{party}" and collectively the "{parties}."

Parties.List={Parties.List.1-2}

Parties.List.1-2={P1.sec}<li>{P2.sec}

Parties.List.1-3={P1.sec}<li>{P2.sec}<li>{P3.sec}

Parties.List.1-4={P1.sec}<li>{P2.sec}<li>{P3.sec}<li>{P4.sec}

Parties.List.1-5={P1.sec}<li>{P2.sec}<li>{P3.sec}<li>{P4.sec}<li>{P5.sec}

Parties.List.1-6={P1.sec}<li>{P2.sec}<li>{P3.sec}<li>{P4.sec}<li>{P5.sec}<li>{P6.sec}

Parties.Ti=BY AND BETWEEN:

P1.sec={P1.N,E,A} ("{P1.Handle}") 

P2.sec={P2.N,E,A} ("{P2.Handle}") 

P3.sec={P3.N,E,A} ("{P3.Handle}") 

P4.sec={P4.N,E,A} ("{P4.Handle}") 

P5.sec={P5.N,E,A} ("{P5.Handle}") 

P6.sec={P6.N,E,A} ("{P6.Handle}") 
 


Friends.Sec=<b>{Friends.Ti}</b>{Friends.xlist}

Friends.xlist=<ul type="none"><li>{Friends.List}<li>Each a "{Named_Third_Party}" and collectively the "{Named_Third_Parties}."</ul>

Friends.List={Friends.List.1,2,3,4,5,6}

Friends.List.1,2={F1.sec}<li>{F2.sec}

Friends.List.1,2,3={F1.sec}<li>{F2.sec}<li>{F3.sec}

Friends.List.1,2,3,4={F1.sec}<li>{F2.sec}<li>{F3.sec}<li>{F4.sec}

Friends.List.1,2,3,4,5={F1.sec}<li>{F2.sec}<li>{F3.sec}<li>{F4.sec}<li>{F5.sec}

Friends.List.1,2,3,4,5,6={F1.sec}<li>{F2.sec}<li>{F3.sec}<li>{F4.sec}<li>{F5.sec}<li>{F6.sec}

Friends.Ti=Third Parties referenced but not party to this {Agreement}:

F1.sec={F1.N,E,A} ("{F1.Handle}") 

F2.sec={F2.N,E,A} ("{F2.Handle}") 

F3.sec={F3.N,E,A} ("{F3.Handle}") 

F4.sec={F4.N,E,A} ("{F4.Handle}") 

F5.sec={F5.N,E,A} ("{F5.Handle}") 

F6.sec={F6.N,E,A} ("{F6.Handle}") 
 

YMD.sec=EFFECTIVE DATE: {Agt.Effective.YMDT} (the "{Effective_Date}")

/Note=Default to just the day - backward compatibility

Agt.Effective.YMDT={Agt.Effective.YMD}


Agree.sec={Agree.This.sec} {Agree.Whereas.ul}{Agree.AsFollows.sec}

Agree.This.sec=This {Ti} (the "{Agreement}") is made as of the {Effective_Date} by and between the {parties}.

Agree.Whereas.ul=<ul type="none"><li>{Agree.Whereas.secs}</ul>

Agree.AsFollows.sec=In consideration of the mutual promises contained in {this_Agreement} and other good and valuable consideration, the receipt and sufficiency of which is hereby acknowledged, the {parties} agree as follows: