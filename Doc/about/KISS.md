P1.Handle=Company

P2.Handle=Investor

Ti={Heading}

0.Sec={H.1.Sec}<br>{H.2.Sec}<br>{H.3.Sec}<br>{H.4.Sec}<br>{H.5.Sec}

Heading=<span style="text-transform: uppercase">THIS INSTRUMENT AND THE SECURITIES ISSUABLE UPON THE CONVERSION HEREOF HAVE NOT BEEN REGISTERED UNDER THE SECURITIES ACT OF 1933, AS AMENDED. THEY MAY NOT BE SOLD, OFFERED FOR SALE, PLEDGED, HYPOTHECATED, OR OTHERWISE TRANSFERRED EXCEPT PURSUANT TO AN EFFECTIVE REGISTRATION STATEMENT UNDER THE SECURITIES ACT OF 1933, AS AMENDED, OR AN OPINION OF COUNSEL SATISFACTORY TO {the_Company} THAT REGISTRATION IS NOT REQUIRED UNDER SUCH ACT OR UNLESS SOLD PURSUANT TO RULE 144 UNDER SUCH ACT.</span>


H.1.Sec=<b>SERIES {m-}{Series.#}{-m}</b>

H.2.Sec=<b>{KISS}</b>
    
H.3.Sec={Purchase_Price}: {m-}{PurchasePrice.$}{-m}

H.4.Sec={m-}{Date}{-m}

H.5.Sec=FOR VALUE RECEIVED, {m-}{P1.N,E,A}{-m} (the “<b>{Company}</b>”), hereby promises to pay to the order of {m-}{P2.N,E,A}{-m} (the “<b>{Investor}</b>”), the principal sum of the {Purchase_Price}, together with interest thereon from the {Date_of_Issuance}.  Interest shall accrue at the {Interest_Rate}.  Unless earlier converted into {Conversion_Shares} pursuant to Section 2, the principal and accrued interest shall be due and payable by {the_Company} on demand by the {Majority_in_Interest} at any time after the {Maturity_Date}.  This {KISS} is one of a series of Series {m-}{Series.#}{-m} {KISSes} issued by {the_Company} to investors with identical terms and on the same form as set forth herein (except that {the_Investor}, {Purchase_Price} and {Date_of_Issuance} may differ in each {KISS}) (collectively, the “{Series}”).

1.=[02/Sec/KISS_Sec_Definition.01.md]

2.Ti=Conversion of the {KISS}

2.1.Ti={Next_Equity_Financing}

2.1.sec=Upon the closing of the {Next_Equity_Financing}, this {KISS} will be automatically converted into that number of {Conversion_Shares} equal to the quotient obtained by dividing the {Purchase_Price} and unpaid accrued interest on this {KISS} by the {Conversion_Price}.  Notwithstanding the foregoing, accrued interest on this {KISS} may be paid in cash at the option of {the_Company}.  At least five (5) days prior to the closing of the {Next_Equity_Financing}, {the_Company} shall notify {the_Investor} in writing of the terms under which the {Preferred_Stock} will be sold in such financing.  The issuance of {Conversion_Shares} pursuant to the conversion of this {KISS} shall be upon and subject to the same terms and conditions applicable to the {Preferred_Stock} sold in the {Next_Equity_Financing} (or the {Shadow_Series}, as applicable).

2.2.Ti={Corporate_Transaction}

2.2.sec=In the event of a {Corporate_Transaction} prior to the conversion of this {KISS} pursuant to Section 2.1 or 2.3, at Investor’s election, (i) this {KISS} shall be converted into that number of {Conversion_Shares} equal to the quotient obtained by dividing the {Purchase_Price} and unpaid accrued interest on this {KISS} by the {Conversion_Price}; or (ii) {the_Investor} shall be paid the {Corporate_Transaction_Payment}.  At least ten (10) days prior to the closing of the {Corporate_Transaction}, {the_Company} shall notify {the_Investor} in writing of the terms of the {Corporate_Transaction}.

2.3.Ti=Maturity Conversion

2.3.sec=Unless earlier converted to {Conversion_Shares} or paid pursuant to Section 2.1 or 2.2, at the election of the {Majority_in_Interest} at any time on or after the {Maturity_Date}, this {KISS} shall be converted into that number of {Conversion_Shares} equal to the quotient obtained by dividing the {Purchase_Price} and unpaid accrued interest on this {KISS} by the {Conversion_Price}.

2.4.Ti=No Fractional Shares

2.4.sec=Upon the conversion of this {KISS} into {Conversion_Shares}, in lieu of any fractional shares to which the holder of this {KISS} would otherwise be entitled, {the_Company} shall pay the holder cash equal to such fraction multiplied by the {Conversion_Price}.

2.5.Ti=Mechanics of Conversion

2.5.sec=As promptly as practicable after the conversion of this {KISS}, {the_Company} at its expense will issue and deliver to {the_Investor}, upon surrender of this {KISS}, a certificate or certificates for the number of {Conversion_Shares}.  Conversion of this {KISS} may be made contingent upon the closing of the {Next_Equity_Financing} or {Corporate_Transaction}.

2.=[01/Agt/Bit/Secs/06]
 

3.Ti=Representations and Warranties of {the_Company}

3.0.Sec=In connection with the transactions provided for herein, {the_Company} hereby represents and warrants to {the_Investor} that:

3.1.Ti=Organization, Good Standing and Qualification

3.1.sec={3.1.1.Sec}  {3.1.2.Sec}

3.1.1.Sec={The_Company} is a corporation duly organized, validly existing, and in good standing under the laws of the State of Delaware and has all requisite corporate power and authority to carry on its business as now conducted.

3.1.2.Sec={The_Company} is duly qualified to transact business and is in good standing in each jurisdiction in which the failure to so qualify would have a material adverse effect on its business or properties.

3.2.Ti=Authorization

3.2.sec=Except for the authorization and issuance of the {Conversion_Shares} issuable in connection with the {Next_Equity_Financing}, a {Corporate_Transaction} or an optional conversion on or after the {Maturity_Date}, all corporate action has been taken on the part of {the_Company}, its officers, directors and stockholders necessary for the authorization, execution and delivery of this {KISS}.  {The_Company} has taken all corporate action required to make all of the obligations of {the_Company} reflected in the provisions of this {KISS} the valid and enforceable obligations they purport to be, and this {KISS}, when executed and delivered by {the_Company}, shall constitute the valid and legally binding obligation of {the_Company}, enforceable against {the_Company} in accordance with its terms.

3.3.Ti=Offering

3.3.sec=Subject in part to the truth and accuracy of {the_Investor}’s representations set forth herein, the offer, sale and issuance of this {KISS} are exempt from the registration requirements of any applicable state and federal securities laws, and neither {the_Company} nor any authorized agent acting on its behalf will take any action hereafter that would cause the loss of such exemption.

3.4.Ti=Compliance with Other Instruments

3.4.sec=The execution, delivery and performance of this {KISS}, and the consummation of the transactions contemplated hereby, will not constitute or result in a default, violation, conflict or breach in any material respect of any provision of {the_Company}’s current Certificate of Incorporation or bylaws, or in any material respect of any instrument, judgment, order, writ, decree, privacy policy or contract to which it is a party or by which it is bound, or, to its knowledge, of any provision of any federal or state statute, rule or regulation applicable to {the_Company}.

3.5.Ti=Valid Issuance of Stock

3.5.sec=The {Conversion_Shares}, when issued, sold and delivered upon conversion of this {KISS}, will be duly authorized and validly issued, fully paid and nonassessable, will be free of restrictions on transfer other than restrictions on transfer set forth herein and pursuant to applicable state and federal securities laws and, based in part upon the representations and warranties of {the_Investor} herein, will be issued in compliance with all applicable federal and state securities laws.  

3.6.Ti=Intellectual Property

3.6.sec=To its knowledge, {the_Company} owns or possesses or believes it can acquire on commercially reasonable terms sufficient legal rights to all patents, patent applications, trademarks, trademark applications, service marks, tradenames, copyrights, trade secrets, licenses, domain names, mask works, information and proprietary rights and processes as are necessary to the conduct of its business as now conducted and as presently proposed to be conducted without any known conflict with, or infringement of, the rights of others.  {The_Company} has not received any communications alleging that {the_Company} has violated or, by conducting its business, would violate any of the patents, trademarks, service marks, tradenames, copyrights, trade secrets, mask works or other proprietary rights or processes of any other person.

3.7.Ti=Litigation

3.7.sec=To {the_Company}’s knowledge, there is no private or governmental action, suit, proceeding, claim, arbitration or investigation pending before any agency, court or tribunal, foreign or domestic, or threatened against {the_Company} or any of its properties or any of its officers or managers (in their capacities as such).  There is no judgment, decree or order against {the_Company}, or, to the knowledge of {the_Company}, any of its directors or managers (in their capacities as such), that could prevent, enjoin, or materially alter or delay any of the transactions contemplated by this {KISS}, or that could reasonably be expected to have a material adverse effect on {the_Company}.


3.=[01/Agt/Bit/Secs/07]


4.Ti=Representations and Warranties of {the_Investor}

4.0.Sec=In connection with the transactions provided for herein, {the_Investor} hereby represents and warrants to {the_Company} that:

4.1.Ti=Authorization

4.1.sec=This {KISS} constitutes Investor’s valid and legally binding obligation, enforceable in accordance with its terms, except as may be limited by (i) applicable bankruptcy, insolvency, reorganization, or similar laws relating to or affecting the enforcement of creditor’s rights and (ii) laws relating to the availability of specific performance, injunctive relief or other equitable remedies. 

4.2.Ti=Purchase Entirely for Own Account

4.2.sec=Investor acknowledges that this {KISS} is issued to Investor in reliance upon Investor’s representation to {the_Company} that the {KISS} will be acquired for investment for Investor’s own account, not as a nominee or agent, and not with a view to the resale or distribution of any part thereof, and that such Investor has no present intention of selling, granting any participation in, or otherwise distributing the same. 

4.3.Ti=Investment Experience

4.3.sec=Investor is an investor in securities of companies in the development stage and acknowledges that it is able to fend for itself, can bear the economic risk of its investment, and has such knowledge and experience in financial or business matters that it is capable of evaluating the merits and risks of the investment in this {KISS}. Investor also represents it has not been organized solely for the purpose of acquiring this {KISS}.

4.4.Ti=Accredited Investor

4.4.sec=Investor is an “accredited investor” within the meaning of Rule 501 of Regulation D, as presently in effect, as promulgated by the Securities and Exchange Commission (the “SEC”) under the Securities Act of 1933, as amended (the “Act”).

4.5.Ti=Restricted Security

4.5.sec=Investor understands that this {KISS} is characterized as a “restricted security” under the federal securities laws inasmuch as it is being acquired from {the_Company} in a transaction not involving a public offering and that under such laws and applicable regulations such securities may be resold without registration under the Act, only in certain limited circumstances.


4.=[01/Agt/Bit/Secs/05]
 

5.Ti=Miscellaneous

5.1.Ti=Most Favored Nation

5.1.sec=In the event {the_Company} sells or issues any convertible instruments (other than the issuance of stock options to service providers of {the_Company}) at any time prior to the earlier of (a) conversion of this {KISS}, (b) a {Corporate_Transaction} or (c) payment in full of all outstanding principal and accrued interest in accordance with this {KISS}, {the_Company} shall provide {the_Investor} with written notice of such sale or issuance no later than five (5) days after the closing date thereof, including the price and terms of such convertible instruments (the “Subsequent Instruments”).  In the event {the_Investor} determines, in its sole and absolute discretion, that any Subsequent Instrument contains terms more favorable to the holder(s) thereof than the terms set forth in this {KISS}, {the_Investor} may elect to exchange this {KISS} for a Subsequent Instrument.


5.2.Ti={Major_Investor} Rights

5.2.0.sec=In the event {the_Investor}, together with its affiliates, purchases one or more {KISSes} with an aggregate {Purchase_Price} equal to or exceeding $50,000 (a “{Major_Investor}”), {the_Company} shall provide such {Major_Investor} with the following rights:

5.2.1.Ti=Information Rights

5.2.1.sec=To the extent that {the_Company} prepares {Financial_Statements}, {the_Company} shall deliver to the {Major_Investor} such {Financial_Statements} upon request, as soon as practicable, but in any event within thirty (30) days after the end of each of the first three (3) quarters of each fiscal year of {the_Company} and within ninety (90) days after the end of each fiscal year of {the_Company}.  Such {Financial_Statements} shall be in reasonable detail and prepared on a consistent basis.  Additionally, regardless of whether {the_Company} prepares {Financial_Statements}, {the_Company} shall deliver to the {Major_Investor} such information relating to the financial condition, business or corporate affairs of {the_Company} as such {Major_Investor} may from time to time reasonably request.  Notwithstanding anything to the contrary in this Section 5.2(a), {the_Company} shall not be obligated under this Section 5.2(a) to provide information that (x) it deems in good faith to be a trade secret or highly confidential information or (y) the disclosure of which would adversely affect the attorney-client privilege between {the_Company} and its counsel; and {the_Investor} agrees to maintain the confidentiality of all of the information provided to {the_Investor} under this Section 5.2(a) and agrees not to use such information other than for a purpose reasonably related to {the_Investor}’s investment in {the_Company}.

5.2.2.Ti=Participation Rights

5.2.2.sec=Each time {the_Company} proposes to offer any {Equity_Securities} at any time through and including the closing of the {Next_Equity_Financing}, {the_Company} shall provide the {Major_Investor} with at least ten (10) business days prior written notice of such offering, including the price and terms thereof.  The {Major_Investor} shall have a right of first offer to participate in such offering(s), on the same terms and for the same price as all other investors in such offering(s), by purchasing an aggregate number of {Equity_Securities} (whether in one offering or across multiple offerings) valued at up to the {Participation_Amount}.  The {Major_Investor}’s right of first offer set forth in this Section 5.2(b) shall be subject to compliance with applicable federal and state securities laws.

5.2.3.Ti=“{Major_Investor}” Rights

5.2.3.sec={The_Company} shall ensure that the {Major_Investor} shall be deemed to be a “{Major_Investor}” (or such similar term) for all purposes, including, without limitation, rights of first offer and information rights, in relevant financing documents related to all subsequent sales of {Equity_Securities}, to the extent such concept exists.

5.2.=[01/Agt/Bit/Secs/03]
 

5.3.Ti=Payment

5.3.sec=All payments, if any, shall be made in lawful money of the United States of America.  Payment shall be credited first to Costs (as defined below), if any, then to accrued interest due and payable and any remainder applied to principal or the {Corporate_Transaction_Payment}, as applicable.  Prepayment of principal, together with accrued interest, may not be made without the prior written consent of {the_Investor}.  {The_Company} hereby waives demand, notice, presentment, protest and notice of dishonor.

5.4.Ti=Costs, Expenses and Attorney’s Fees; Indemnity

5.4.secs={The_Company} hereby agrees, subject only to any limitation imposed by applicable law, to pay all expenses, including reasonable attorney’s fees and legal expenses, incurred by the holder of this {KISS} in endeavoring to collect any amounts payable hereunder which are not paid when due, whether by declaration or otherwise (“Costs”).  {The_Company} agrees that any delay on the part of the holder in exercising any rights hereunder will not operate as a waiver of such rights.  The holder of this {KISS} shall not by any act, delay, omission or otherwise be deemed to have waived any of its rights or remedies, and no waiver of any kind shall be valid unless in writing and signed by the party or parties waiving such rights or remedies.  If any action at law or in equity is necessary to enforce or interpret the terms of this {KISS}, the prevailing party shall be entitled to reasonable attorney’s fees, costs and necessary disbursements in addition to any other relief to which such party may be entitled.  {The_Company} shall indemnify and hold {the_Investor} harmless from any loss, cost, liability and legal or other expense, including attorney’s fees of {the_Investor}’s counsel, which {the_Investor} may directly or indirectly suffer or incur by reason of the failure of {the_Company} to perform any of its obligations under this {KISS} or any agreement executed in connection herewith; provided, however, that the indemnity agreement contained in this {Misc.Costs.Xref} shall not apply to liabilities which {the_Investor} may directly or indirectly suffer or incur by reason of {the_Investor}’s own gross negligence or willful misconduct.

5.5.Ti=Security

5.5.sec=This {KISS} is a general unsecured obligation of {the_Company}.

5.6.Ti=Successors and Assigns

5.6.secs=The terms and conditions of this {KISS} shall inure to the benefit of and be binding upon the respective successors and assigns of the parties hereto; provided, however, that {the_Company} may not assign its obligations under this {KISS} without the prior written consent of {the_Investor}.

5.7.Ti=Governing Law

5.7.sec=This {KISS} shall be governed by and construed under the laws of the State of California as applied to other instruments made by California residents to be performed entirely within the State of California, regardless of the laws that might otherwise govern under applicable principles of conflicts of law.

5.8.Ti=Notices

5.8.sec=All notices and other communications given or made pursuant to this {KISS} shall be in writing and shall be deemed effectively given upon the earlier of actual receipt or:  (a) personal delivery to the party to be notified, (b) when sent, if sent by electronic mail or facsimile during normal business hours of the recipient, and if not sent during normal business hours, then on the recipient’s next business day, (c) five (5) days after having been sent by registered or certified mail, return receipt requested, postage prepaid, or (d) one (1) business day after deposit with a nationally recognized overnight courier, freight prepaid, specifying next business day delivery, with written verification of receipt.

5.9.Ti=Financing Agreements

5.9.sec={The_Investor} understands and agrees that the conversion of the {KISS} into {Conversion_Shares} may require {the_Investor}’s execution of certain agreements relating to the purchase and sale of such securities as well as registration, co sale, rights of first refusal, rights of first offer and voting rights, if any, relating to such securities.  {The_Investor} agrees to execute all such agreements in connection with the conversion so long as the issuance of {Conversion_Shares} issued pursuant to the conversion of this {KISS} are subject to the same terms and conditions applicable to the {Preferred_Stock} sold in the {Next_Equity_Financing} (or the {Shadow_Series} or {Series_Seed_Preferred_Stock}, as applicable).

5.10.Ti=Severability

5.10.sec=If one or more provisions of this {KISS} are held to be unenforceable under applicable law, such provision shall be excluded from this {KISS} and the balance of the {KISS} shall be interpreted as if such provision were so excluded and shall be enforceable in accordance with its terms.

5.11.Ti=Acknowledgement

5.11.sec=For the avoidance of doubt, it is acknowledged that {the_Investor} shall be entitled to the benefit of all adjustments in the number of shares of {Common_Stock} issuable upon conversion of the {Preferred_Stock} or as a result of any splits, recapitalizations, combinations or other similar transaction affecting the {Common_Stock_or_Preferred_Stock} underlying the {Conversion_Shares} that occur prior to the conversion of the {KISS}.

5.12.Ti=Further Assurance

5.12.sec=From time to time, {the_Company} shall execute and deliver to {the_Investor} such additional documents and shall provide such additional information to {the_Investor} as {the_Investor} may reasonably require to carry out the terms of this {KISS} and to be informed of the financial and business conditions and prospects of {the_Company}.

5.13.Ti=Transfer of a {KISS}

5.13.sec=Subject to compliance with applicable federal and state securities laws, this {KISS} and all rights hereunder are transferable in whole or in part by {the_Investor} to any person or entity upon written notice to {the_Company}.

5.14.Ti=Entire Agreement; Amendments and Waivers

5.14.sec=This {KISS} and the other {KISSes} in the {Series} constitute the full and entire understanding and agreement between the parties with regard to the subjects hereof.  {The_Company}’s agreements with each {Holder} are separate agreements, and the sales of the {KISSes} to each {Holder} are separate sales.  Nonetheless, any term of the {KISSes} in the {Series} may be amended and the observance of any term of the {KISSes} in the {Series} may be waived (either generally or in a particular instance and either retroactively or prospectively), with the written consent of {the_Company} and the {Majority_in_Interest}; provided, however, that Sections 2.2, 5.2 (if and only if {the_Investor} is a {Major_Investor}), 5.3, 5.6, 5.13 and 5.14 may not be amended or waived without the written consent of {the_Investor}.  Any waiver or amendment effected in accordance with this {Misc.Entire.Xref} shall be binding upon {the_Company} and each current and future member of the {KISS_Group}.

Misc.Entire.Xref={Misc.Xref}.14

5.15.Ti=Exculpation Among {Holders}

5.15.sec=Each {Holder} acknowledges that it is not relying upon any person, firm, corporation or stockholder, other than {the_Company} and its officers and directors in their capacities as such, in making its investment or decision to invest in {the_Company}.  Each {Holder} agrees that no other {Holder} nor the respective controlling persons, officers, directors, partners, agents, stockholders or employees of any other {Holder} shall be liable for any action heretofore or hereafter taken or omitted to be taken by any of them in connection with the purchase and sale of the {KISSes}.

5.=[01/Agt/Bit/Secs/15]


6.Ti=Approval

6.sec={The_Company} hereby represents that its Board of Directors, in the exercise of its fiduciary duty, has approved {the_Company}’s execution of this {KISS} based upon a reasonable belief that the {Purchase_Price} provided hereunder is appropriate for {the_Company} after reasonable inquiry concerning {the_Company}’s financing objectives and financial situation.  In addition, {the_Company} hereby represents that it intends to use the {Purchase_Price} primarily for the operations of its business, and not for any personal, family or household purpose.

90.Sec=<table><tr><td valign="top">{P1.Sign.Block}</td></tr><tr><td valign="top">ACKNOWLEDGED AND AGREED:<br>{P2.Sign.Block}</td></tr></table>

=[01/Agt/Bit/Secs/06]

=[02/Sec/KISS_DT.01.md]

m-=<font color="{mcolor}">
-m=</font>
mcolor=magenta