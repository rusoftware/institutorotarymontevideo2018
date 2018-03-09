function init_table(options) {

  options = options || {};
  var csv_path = options.csv_path || "";
  var el = options.element || "table-container";
  var allow_download = options.allow_download || false;
  var csv_options = options.csv_options || {};
  var datatables_options = options.datatables_options || {};
  var randomId = options.randomId || "my-table";
  
  $("#" + el).html("<table class='table table-striped table-condensed' id='"+randomId+"'></table>");

  $.when($.get(csv_path)).then(
    function(data){
      var csv_data = $.csv.toArrays(data, csv_options);

      /*if (randomId == "inscriptos") {
        var renderDistritos = '';

        var distritos = [];
        
        for (f = 0; f < csv_data.length; f++) {
          distritos.push(csv_data[f][4]);
        }

        var obj = { };
        for (var z = 1, x = distritos.length; z < x; z++) {
          obj[distritos[z]] = (obj[distritos[z]] || 0) + 1;
        }
        
        var color = 'bgyellow';
        $.each(obj, function (key, value) {
          //renderDistritos += '<div class="col-md-2 bgyellow text-center">'+key+' / '+value+'</div>';
          color = (color == 'bgyellow') ? 'bgwhite' : 'bgyellow';

          $("#recuento").append('<div class="col-md-2 '+ color +' text-center"><span>Distrito: <b>'+key+'</b></span><span class="dvalue">'+value+'</span></div>');
        });
      }*/

      var table_head = "<thead><tr>";

      var headerIndex = (csv_options.headerIndex) || 0;
      //console.log("fede", csv_data[headerIndex]);

      for (head_id = 0; head_id < csv_data[headerIndex].length; head_id++) { 
        table_head += "<th>" + csv_data[headerIndex][head_id] + "</th>";
      }

      table_head += "</tr></thead>";
      $("#"+randomId).append(table_head);
      $("#"+randomId).append("<tbody></tbody>");

      var startIndex = (csv_options.startIndex) || 1;
      //console.log("fede", startIndex);

      for (row_id = startIndex; row_id < csv_data.length; row_id++) { 
        
        /*if (csv_data[row_id][5] == 'CÓNYUGE') {
          console.log(csv_data[row_id][0]);
        }*/

        var printRow = true;

        var row_html = "<tr>";
        
        for (col_id = 0; col_id < csv_data[row_id].length; col_id++) { 
          row_html += "<td>" + csv_data[row_id][col_id] + "</td>";

          if (csv_options.requiredCol && csv_data[row_id][csv_options.requiredCol] == '') {
            printRow = false;
          }
        }
          
        row_html += "</tr>";
        
        if (printRow) {
          $("#"+randomId + ' tbody').append(row_html);
        }
      }

      $("#"+randomId).DataTable(datatables_options);

      if (allow_download)
        $("#" + el).append("<p><a class='btn btn-info' href='" + csv_path + "'><i class='glyphicon glyphicon-download'></i> Download as CSV</a></p>");

      //console.log('fede', $(".group-start").html());
      $("#inscriptos tr.group-start td, #inscriptos tr td:nth-child(5)").text(function(index, text) {
          return text.replace("00-", "").replace("01-", "").replace("02-", "").replace("03-", "").replace("04-", "").replace("05-", "").replace("06-", "").replace("07-", "").replace("08-", "").replace("09-", "");
      });
    });
}