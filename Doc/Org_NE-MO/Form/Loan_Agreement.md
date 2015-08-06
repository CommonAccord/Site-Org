Doc.Title=Loan Agreement

0.0.sec=This Loan Agreement complies with national and international standards of ethics including the ICOM Code of Ethics and the UNESCO Convention on the Means of Prohibiting and Preventing Illicit Import, Export und Transfer of Cultural Property.

0.1.0.sec=It is made and entered into on the attached Loan Conditions by

0.1.1.sec=Lender’s name: {Lender.Name}

0.1.2.sec=Address: {Lender.Address}

0.1.90.sec=and

0.1.=[Z/ol-none/s2]

0.2.1.sec=Borrower’s name: {Borrower.Name}

0.2.2.sec=Address: {Borrower.Address}

0.2.=[Z/ol-none/s2]

0.=[Z/ol-none/s2]

0.Ti=</i>

1.Ti=Exhibition

1.1.sec=Title: 	{Exhibition.Title}

1.2.sec=Dates: 	{Exhibition.Start.Date} to {Exhibition.Stop.Date}

1.3.sec=Tour venues: {Tour.Venues} (with dates)

1.=[Z/ol/s3]

2.Ti=Duration of Loan(s)

2.sec=Dates: {Loan.Start.Date} to {Loan.Stop.Date}

Item.Ti=Loan(s)

Note=One line per loan

Item.1.=[Org_NE-MO/Sec/Cover_Loan_Item.md]

Item.=[Z/ol/s1]

3.Sec={Item.Sec}

4.Ti=Insurance

4.0.sec=Insurance value

4.1.sec={Insurance.Indemnity.Amount} to be covered by {Insurance.Indemnity.Provider} indemnity<br>(insert name of state/country)

4.2.sec={Insurance.Borrower.Amount} insurance to be taken out by Borrower

4.3.sec={Insurance.Lender.Amount} insurance to be taken out by Lender

4.=[Z/ol/s3]

5.Ti=Costs

5.1.sec=Insurance premium: 	{Cost.Insurance} (if covered by Lender)

5.2.sec=Administration costs:  {Cost.Administrative}

5.3.sec=Framing/Glazing/Preparation: 	{Cost.Framing}

5.4.sec=Other costs: {Cost.Other} 		

5.=[Z/ol/s4]

6.Ti=Special requirements

6.sec={Special.Requirements} (packing and shipping, couriers, barriers, stanchions, etc.)

7.Ti=Pick up and return address

7.sec={Pickup.Address}

8.Ti=Contact person(s):

8.1.sec=Name: {Lender.Contact.Name}<br>Telephone: {Lender.Contact.Telephone}<br>Fax: {Lender.Contact.Fax}<br>Email: {Lender.Contact.Email}		

8.2.sec=Name: {Borrower.Contact.Name}<br>Telephone: {Borrower.Contact.Telephone}<br>Fax: {Borrower.Contact.Fax}<br>Email: {Borrower.Contact.Email}		

8.=[Z/ol/s2]

90.sec=<br>{Borrower.Sign.Block}<br><br>{Lender.Sign.Block}<br><br>{Attach.Doc}

Lender.Sign.Block=<b>Lender: {Lender.Name}</b><br><br>___________________<br>By: {Lender.Sign.Title}<br>Date: {Lender.Sign.Date}

Borrower.Sign.Block=<b>Lender: {Borrower.Name}</b><br><br>___________________<br>By: {Borrower.Sign.Title}<br>Date: {Borrower.Sign.Date}

=[Z/ol-a/8]

DocBody={Doc}