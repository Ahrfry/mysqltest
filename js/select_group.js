$(function() {
  populateTable();

});

function populateTable() {

  $.ajax({
    url: '../srv/delete.php',     
    success: function(data, textStatus, jqXHR) {
      var groups = $.parseJSON(data);
      for(var i=0; i<groups.length; i++){
          var group = groups[i];
          var id = group.id;
          var creator = group.creator;
          var startDate = group.startDate;
          var name = group.name;
          
          var row = "";
          var idx = '<td>'+id+'</td>';        
          var creatorx = '<td>'+creator+'</td>';
          var startDatex = '<td>'+startDate+'</td>';
          var namex = '<td>'+name+'</td>';
          
          row += '<tr>';
          row += idx + creatorx + startDatex + namex;
          row += '</tr>';

          $('#groups').append(row);
      }
    },
    error: function() {
      alert("problem");
    }
  })

};
