Model.Root={_Table}

=[core/class/Doc_Table]

_Table=<table>{tr25%-}{Offering._row}{-tr-}{Closing._row}{-tr-}{Investors._row}{-tr-}{Round.Raise._row}{-tr-}{PricePerShare._row}{-tr-}{PreValuation._row}{-tr-}{Capitalization._row}{-tr}</table>

Offering._row=Offering Terms

Closing._row=Closing Date:{-td-}As soon as practicable following the Company's acceptance of this Term Sheet and satisfaction of the Conditions to Closing (the "Closing").  {Closing.Multiple}

Investors._row=Investors:{-td-}{P1-N.Rows}

Round.Raise._row=Amount Raised:{-td-}{Round.Raise.Total.$}{Round.Raise.BridgeLoan}
<hr>
PricePerShare._row=Price Per Share:{-td-}{Round.Price.$} per share (based on the capitalization of the Company set forth below) (the "Original Purchase Price").

<hr>
PreValuation._row=Pre-Money Valuation:{-td-}The Original Purchase Price is based upon a fully-diluted pre-money valuation of {PreR.Valuation.$} and a fully-diluted post-money valuation of {PostR.Valuation.$} (including an employee pool representing {PostR.Emp.Valuation.%} of the fully-diluted post-money capitalization).

<hr>

Capitalization._row=Capitalization:{-td-}The Company's capital structure before and after the Closing is set forth on Exhibit A.

<hr>
Closing.Multiple=<i>Provide for multiple closings if applicable.</i>
<hr>
Round.Raise.BridgeLoan=, including {Round.Raise.BridgeLoan.Amount.$} from the conversion of principal and interest on bridge notes
<hr>
P1-N.Rows={P1-2.Rows}

P1-2.Rows={P1.Row}<br>{P2.Row}
P1-3.Rows={P1-2.Rows}<br>{P3.Row}
P1-4.Rows={P1-3.Rows}<br>{P4.Row}

P1.Row=Investor No. 1:  {P1.Name.Full}, {P1.Shares.#} shares ({P1.Shares.%}), {P1.Shares.$}
<hr>
P2.Row=Investor No. 2:   {P2.Name.Full} {P2.Shares.#} shares ({P2.Shares.%}), {P2.Shares.$}
P3.Row=Investor No. 3:  {P3.Name.Full}, {P3.Shares.#} shares ({P3.Shares.%}), {P3.Shares.$}
P4.Row=Investor No. 4:  {P4.Name.Full}, {P4.Shares.#} shares ({P4.Shares.%}), {P4.Shares.$}

              