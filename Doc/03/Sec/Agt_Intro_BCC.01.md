1.1.0.Sec=BY AND BETWEEN:

1.1.1.sec={P1.N,E,A} (“{P1.Handle}” and a “{party}”)

1.1.2.sec={P2.N,E,A} (“{P2.Handle}” and a “{party}”)

1.1.=[02/Bit/Sec_02]

1.1.xlist={1.1.ulist}

1.2.sec=EFFECTIVE DATE: (the “{Effective_Date}”): {Agt.Effective.YMD}

1.sec={1.blist}<br>

1.=[02/Bit/Ssec_02]


2.sec={2.1.sec}  {2.2.sec}<br><br>

2.1.sec=This {Ti} (the “{Agreement}”) is made as of the {Effective_Date} by and between the {parties}.

2.2.sec=The {parties} appoint {Smart.N,E,A} (the “{Smart_Contract}”) as their agent.

3.sec=In consideration of the mutual promises contained in {this_Agreement} and other good and valuable consideration, the receipt and sufficiency of which is hereby acknowledged, the {parties} agree as follows:
  
Sec={blist}

=[02/Bit/Ssec_03]