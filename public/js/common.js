// The module pattern
var common = (function() {

    // Private variables and functions
    var $body = $('body');

    var dislayExcelGrid = function() {
      var data = [];

    jspreadsheet(document.getElementById('spreadsheet'), {
        data:data,
        minDimensions:[9,200],
        columns: [
            {
                type: 'text',
                title:'Raison Sociale',
                width:200
            },
            {
                type: 'text',
                title:'Prénom Nom',
                width:160
            },
            {
                type: 'text',
                title:'Adresse 1',
                width:200
            },
            {
                type: 'text',
                title:'Adresse 2',
                width:200
            },
            {
                type: 'text',
                title:'Adresse 3 / Téléphone',
                width:180
            },
            {
                type: 'text',
                title:'Code Postal',
                width:100
            },
            {
                type: 'text',
                title:'Ville',
                width:120
            },
            {
                type: 'text',
                title:'Nombre de carton',
                width:140
            },
            {
                type: 'text',
                title:'Poids Total',
                width:90
            },
         ]
    });
    }


    var listener = function() {
        dislayExcelGrid();
    };

    return {
        listener: listener,
    };
})();

common.listener();
