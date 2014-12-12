=[core/class/Doc_Table]

Model.Root={_Table}

_Table=<table rules='rows'>{tr25%-}{Heading._row}{-tr-}{Founders._row}{-tr-}{ExistingPreferred._row}{-tr-}{NoShop._row}{-tr-}{Expire._row}{-tr}</table>

Heading._row=<p style="text-align:center" align="center">OTHER MATTERS</p>

Founders._row=Founders' Stock:{-td-}All Founders to own stock outright subject to Company right to buyback at cost.  {Founders.Buyback} 

Founders.Buyback=Buyback right for {Founders.Buyback.%} for first {Founders.Buyback.Period} after Closing; thereafter, right lapses in equal {Founders.Buyback.Decrement}.

Founders.Buyback.Period={m-}12 months{-m}

Founders.Buyback.Decrement=monthly increments over following 12 months

ExistingPreferred._row=Existing Preferred Stock:{-td-}The terms set forth above for the Series {Round} Preferred Stock are subject to a review of the rights, preferences and restrictions for the existing Preferred Stock.  Any changes necessary to conform the existing Preferred Stock to this term sheet will be made at the Closing.

NoShop._row=No Shop/Confidentiality:{-td-}The Company agrees to work in good faith expeditiously towards a closing.  The Company and the Founders agree that they will not, for a period of {NoShop.weeks} from the date these terms are accepted, take any action to solicit, initiate, encourage or assist the submission of any proposal, negotiation or offer from any person or entity other than the Investors relating to the sale or issuance, of any of the capital stock of the Company {NoShop.Acquisition} and shall notify the Investors promptly of any inquiries by any third parties in regards to the foregoing.  {NoShop.LiqDamages} The Company will not disclose the terms of this Term Sheet to any person other than officers, members of the Board of Directors and the Company's accountants and attorneys and other potential Investors acceptable to {P1.Name.Full}, as lead Investor, without the written consent of the Investors.

NoShop.Acquisition=or the acquisition, sale, lease, license or other disposition of the Company or any material part of the stock or assets of the Company

NoShop.LiqDamages=In the event that the Company breaches this no-shop obligation and, prior to {NoShop.Begin.YMD}, closes any of the above-referenced transactions {NoShop.LiqDamages.Unless.Offers}, then the Company shall pay to the Investors {NoShop.LiqDam.$} upon the closing of any such transaction as liquidated damages.

Expire._row=Expiration:{-td-}This Term Sheet expires on {TS.Expire.Fixed.YMD} if not accepted by the Company by that date.