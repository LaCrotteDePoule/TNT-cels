// The module pattern
var common = (function() {

    // Private variables and functions
    var $body = $('body');

    var dislayExcelGrid = function() {
      var data = [];

      var my_spreadsheet = jspreadsheet(document.getElementById('spreadsheet'), {
          data:data,
          minDimensions:[9,5],
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
              }
           ]
      });

      checkMyLabels(my_spreadsheet);
    }

    var checkMyLabels = function(my_spreadsheet){
      $body.find('#check-my-labels').off('click').on('click',function(){
          $.ajax({
              type: "POST",
              url: "/ajax/check-my-labels",
              data: {my_datas: my_spreadsheet.getData()},
              success: function(response) {
                $custom_modal.modal('show');
                $custom_modal.find('.modal-dialog').addClass('modal-xxl');
                $custom_modal.find('.modal-title').text('Catalogues');
                //$custom_modal.find('.modal-body').html(response);
              }
          });
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
