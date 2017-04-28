function PrintElem()
{
    console.log('hola mama!!');
    var divToPrint=document.getElementById('userDiv');

    var newWin=window.open('','Print-Window');
    newWin.document.open();
    newWin.document.write('<html><head></head><body onload="window.print()">' + divToPrint.innerHTML + '</body></html>');
    newWin.document.close();
    setTimeout(function(){newWin.close();},10);

}
