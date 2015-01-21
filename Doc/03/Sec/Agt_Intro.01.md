Sec={Agt.Start}{Agt.Intro}

Agt.Start={Agt.By.Sec} {Agt.Effective.Sec}<br><br>

Agt.Intro={Agt.ThisAgreement.Sec} {Agt.Parties.Sec} {Agt.Purpose/Whereas.Sec} {Agt.NowTherefore.Sec}


Agt.By.Sec=BY AND BETWEEN: <ul><li>{P1.Name.Full} (“{P1.Handle}”) and<li> {P2.Name.Full} (“{P2.Handle}”)</ul>

Agt.ByRepresented.Sec=BY AND BETWEEN: <ul><li>{P1.Represented.Cl}; and<li>{P2.Represented.Cl}</ul> 

P1.Represented.Cl={P1.Name.Full} as {P1.Handle}<br>Represented by: {P1.Sign.Name.Full}

P2.Represented.Cl={P2.Name.Full} as {P2.Handle}<br>Represented by: {P1.Sign.Name.Full}

Agt.Effective.Sec=EFFECTIVE DATE: ("{Effective_Date}"): {Agt.Effective.YMDT}

Agt.ThisAgreement.Sec=This {Ti} (the “{Agreement}”) is made as of the {Effective_Date} set forth above by and between {P1.N,E,A} (“{P1.Handle}”) and {P2.N,E,A} (“{P2.Handle}”).

Agt.Parties.Sec={P1.Handle} and {P2.Handle} are each sometimes referred to as a “{party}” and collectively as the “{parties}.”

Agt.Purpose/Whereas.Sec={Agt.Purpose.Sec}

Agt.Purpose.Sec=<br><br>

Agt.Whereas.Sec<ul type="none"><li>{Whereas.1.Sec}</ul>

Agt.NowTherefore.Sec=In consideration of the mutual promises contained in {this_Agreement} and other good and valuable consideration, the receipt and sufficiency of which is hereby acknowledged, the {parties} agree as follows:

Model.Root={Sec}