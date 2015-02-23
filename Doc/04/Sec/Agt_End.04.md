Model.Root={Sec}

Sec={PageBreak}<br>{Witness.Sec}<br>{Sign.List}{Attach.Block}

Witness.Sec=IN WITNESS WHEREOF, the {parties} have executed {this_Agreement} as of the {Effective_Date}.

Sign.List={Sign.List.1,2,3,4,5,6}

Sign.List.1,2=<table><tr>{P1.Sign.td}<td width="100px"></td>{P2.Sign.td}</tr></table>

Sign.List.1,2,3=<table><tr>{P1.Sign.td}<td width="100px"></td>{P2.Sign.td}</tr><tr>{P3.Sign.td}</tr></table>

Sign.List.1,2,3,4=<table><tr>{P1.Sign.td}<td width="100px"></td>{P2.Sign.td}</tr><tr>{P3.Sign.td}<td></td>{P4.Sign.td}</tr></table>

Sign.List.1,2,3,4,5=<table><tr>{P1.Sign.td}<td width="100px"></td>{P2.Sign.td}</tr><tr>{P3.Sign.td}<td></td>{P4.Sign.td}</tr><tr>{P5.Sign.td}</tr></table>

Sign.List.1,2,3,4,5,6=<table><tr>{P1.Sign.td}<td width="100px"></td>{P2.Sign.td}</tr><tr>{P3.Sign.td}<td></td>{P4.Sign.td}</tr><tr>{P5.Sign.td}<td width="100px"></td>{P6.Sign.td}</tr></table>

P1.Sign.td=<td valign="top" width="300px">{P1.Sign.Block}</td>

P2.Sign.td=<td valign="top" width="300px">{P2.Sign.Block}</td>

P3.Sign.td=<td valign="top" width="300px">{P3.Sign.Block}</td>

P4.Sign.td=<td valign="top" width="300px">{P4.Sign.Block}</td>

P5.Sign.td=<td valign="top" width="300px">{P5.Sign.Block}</td>    

P6.Sign.td=<td valign="top" width="300px">{P6.Sign.Block}</td>