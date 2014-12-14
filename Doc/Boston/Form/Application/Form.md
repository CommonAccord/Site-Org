=[Boston/Form/Intake/Form.md]

P1.=[Boston/ID/City_Of_Boston_DND]

Head={P1.City.Seal}<br>{P1.City/Dept/Office}<br>{Ti}

Ti=ReStore Boston - Storefront Improvement Grant Application	  

Client.Handle=Client
90.Sec={91.Sec}<br><br>{92.Sec}

91.Sec={Client.Sign.Block}

92.Sec=Completing an application is not a promise of funding.  Our Project Review Committee will review all applications.  The Project Manager assigned to your application will notify you.

Model.Root=<b>{Head}</b><br><br><ol><li>{Client.Sec}</li><li>{Project.Sec}</li><li>{Business.Sec}</li></ol>{90.Sec}
{P2.Sign.Block}
