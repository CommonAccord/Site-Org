

# Overview of this IAuth and CommonAccord Collaboration

**Generic Use Case Use of Authorized by Agreement Protected Data Sharing by Business with City Government.  OpenID Connect for Tightly Integrated Business, Legal and Technical Transaction Between Two Parties.**

## Boston Business Hub The basic Use Case is:

USE CASE is that a Business Shares Data Only ONCE and Releases Data Already Shared by Permission for Re-Use.  This is a ReStore Data ReUse Demo!

## Data Elements:

1. First a business owner files an Inquiry Form:
Use the data of the inquiry form http://businesshub.boston.gov/apex/SubmitCase

2. Then the business owner completes an Intake Form:
Use Data from Inquiry Form To pre-populate some fields of the “CLIENT/BUSINESS INTAKE FORM”

3. Finally, the business owner applies for a grant, called the ReStore Grant.
Use the data of the inquiry and CLIENT/BIZ FORM to prepopulate the ReStore Boston – Storefront Improvement Grant Application.


____________________

General Notes - Use Case 



* More Background is Here:
https://github.com/HumanDynamics/commonaccord/blob/master/Doc/IAuth/Scratch/BostonDataShareDemo-SequenceOverview.md

* The Data we are working with is here: 

https://github.com/HumanDynamics/commonaccord/blob/master/Doc/IAuth/Scratch/BusinessProtectedDataSharing-DemoDataFields.xml

* The InTake Form (the middle step) has already been encoded as key values according to the CMACC (CommonAccord) structure, here:

http://commonaccord.org/index.php?action=source&file=./me/Boston/Doc/Intake_Session_1

**More Notes from City of Boston business requirements elicitation:**

1. Business Files Inquiry Form (Case Object)
a. Authorize data from Inquiry Form
2. Intake 
b. Authorize above to autofill # 3
3. Restore Application Filled and used 


==================
A. First Business Intake
1. Inquiry (CaseObject)
- Assignment Rules Apply based on 
> business type, business location (routing to NBM), business need.
2. Followup

B. Business Shares Existing Data (Reuse of Data)
* Example: After first inquiry, in reality the business contact has a personal relationship with an NBM.  The online interaction also needs to be well supported as a method of seeking additional services.)
* Two forms: No outstanding debt to city.  Second is “agreement to participate in the program” that is a reimbursement etc)
Business wants a grant
* 
——
Wish List / Vision:

* Ideally there would be a one business profile with a bunch of info about the business 
* The outcome would be a current statement of the needs of the business so that it can be matched with city resources.
* We need an agreement for the sharing of data

——

