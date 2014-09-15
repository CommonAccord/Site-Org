// Wait for the page to load first
            window.onload = function() {

//Get a reference to the link on the page
// with an id of "exportxt"
              var a = document.getElementById("exportxt");

//Set code to run when the link is clicked
// by assigning a function to "onclick"
              a.onclick = function() {


    function downloadInnerHtml(filename, elId, mimeType) {
        var elHtml = document.getElementById(elId).innerHTML;
        var link = document.createElement('a');
        mimeType = mimeType || 'text/html';
        link.setAttribute('download', filename);
        link.setAttribute('href', 'data:' + mimeType  +  ';charset=utf-8,' + encodeURIComponent(elHtml));
        link.click(); 
    }
    var fileName =  'myexportedhtml.html'; // You can use the .txt extension if you want
    downloadInnerHtml(fileName, 'editor','text/html');
                //If you don't want the link to actually 
                // redirect the browser to another page, then
                // return false at the end of this block.
                // Note that this also prevents event bubbling,
                // which is probably what we want here, but won't 
                // always be the case.
                return false;
              }
            }



