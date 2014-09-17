function PrintElem(elem)
    {
        Popup($(elem).html());
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'div', 'height=400,width=600');
        mywindow.document.write('<html><head><title>CCMAC | Agreements</title>');
        mywindow.document.write('<link rel="stylesheet" href="./assets/bootstrap.min.css" type="text/css" />');
        mywindow.document.write('</head><body style="padding:5%" >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');
        mywindow.print();
        mywindow.close();

        return true;
    }