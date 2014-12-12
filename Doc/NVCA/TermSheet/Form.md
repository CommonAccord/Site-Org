Model.Root={DocBody}

=[core/class/Doc_Table]

Co.Handle=Company

P1.Handle=Lead Investor

DocBody=<center>{Heading}</center>{secbr}{Intro}{secbr}{Summary._Table}{secbr}{Charter._Table}{secbr}{SPA._Table}{secbr}{IRA._Table}{RoFR._Table}{secbr}{Voting._Table}{secbr}{OtherMatters._Table}{secbr}{Agt.Signature}

secbr=<br><hr><br>

Heading=<h3 >TERM SHEET</h3> <h4 >FOR SERIES A PREFERRED STOCK FINANCING OF</h4> <h4 >{Co.Name.Full}</h4> <h4 >{AGT.Effective.YMD}</h4>

Intro=This Term Sheet summarizes the principal terms of the Series A Preferred Stock Financing of {Co.N,E,A} (the "Company").  In consideration of the time and expense devoted and to be devoted by the Investors with respect to this investment, the No Shop/Confidentiality {and Counsel and Expenses} provisions of this Term Sheet shall be binding obligations of the Company whether or not the financing is consummated.  No other legally binding obligations will be created until definitive agreements are executed and delivered by all parties.  This Term Sheet is not a commitment to invest, and is conditioned on the completion of due diligence, legal review and documentation that is satisfactory to the Investors.  This Term Sheet shall be governed in all respects by the laws of {Dispute.Law.State.of}.

Summary.=[NVCA/TermSheet/Sec/Summary.md]

Charter.=[NVCA/TermSheet/Sec/Charter.md]

SPA.=[NVCA/TermSheet/Sec/SPA.md]

IRA.=[NVCA/TermSheet/Sec/IRA.md]

ROFR.=[NVCA/TermSheet/Sec/ROFR.md]

Voting.=[NVCA/TermSheet/Sec/Voting.md]

OtherMatters.=[NVCA/TermSheet/Sec/OtherMatters.md]

Agt.Signature=<p >EXECUTED this {Agt.Effective.YMD}.<br><br>{Sign.Block}</p></body></html>

Sign.Block=<table width="80%"><tr><td valign='top'>{Co.Sign.Block}</td><td width='20%'></td><td valign='top'>{P1.Sign.Block}</td></tr></table>