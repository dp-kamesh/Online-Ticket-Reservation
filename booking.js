function booking(){
    var book=document.getElementById("table1").value;
    
    document.getElementById('info').innerHTML = "";
    var myTab = document.getElementById('empTable');

    // LOOP THROUGH EACH ROW OF THE TABLE AFTER HEADER.
    for (i = 1; i < myTab.rows.length; i++) {

        // GET THE CELLS COLLECTION OF THE CURRENT ROW.
        var objCells = myTab.rows.item(i).cells;

        // LOOP THROUGH EACH CELL OF THE CURENT ROW TO READ CELL VALUES.
        for (var j = 0; j < objCells.length; j++) {
            info = info.innerHTML + ' ' + objCells.item(j).innerHTML;
        }
        info = info.innerHTML + '<br />';
    }
    
}