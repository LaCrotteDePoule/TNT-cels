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
          var sending_type = $body.find('#sending-type option:selected').val();
          var sending_reference = $body.find('#sending-reference').val();
          var tnt_account = $body.find('#tnt-account option:selected').val();

          $.ajax({
              type: "POST",
              url: "/ajax/check-my-labels",
              data: {my_datas: my_spreadsheet.getData(), sending_type: sending_type, sending_reference: sending_reference, tnt_account:tnt_account},
              success: function(response) {
                var $custom_modal = $body.find('#custom-modal');

                $custom_modal.modal('show');
                $custom_modal.find('.modal-dialog').addClass('modal-xl');
                $custom_modal.find('.modal-title').text('Résumé avant impression');
                $custom_modal.find('.modal-body').html(response);

                printMyLabels($custom_modal, my_spreadsheet.getData(), sending_type, sending_reference, tnt_account);
              }
          });
      });
    }

    var printMyLabels = function($custom_modal, my_spreadsheet_datas, sending_type, sending_reference, tnt_account){
      $custom_modal.find('.print-my-labels').off('click').on('click',function(){
          $.ajax({
              type: "POST",
              url: "/ajax/print-my-labels",
              data: {my_datas: my_spreadsheet_datas, sending_type: sending_type, sending_reference: sending_reference, tnt_account:tnt_account},
              success: function(response) {

              }
          });
        });
    }

    var helpMe = function(my_spreadsheet){
      $body.find('.help-me').off('click').on('click',function(){
        var $custom_modal = $body.find('#custom-modal');

        $custom_modal.modal('show');
        $custom_modal.find('.modal-dialog').addClass('modal-xl');
        $custom_modal.find('.modal-title').text('Information');
        $custom_modal.find('.modal-body').html('');
      });
    }

    var listener = function() {
        dislayExcelGrid();
        helpMe();
    };

    return {
        listener: listener,
    };
})();

common.listener();
