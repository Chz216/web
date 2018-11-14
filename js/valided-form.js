$(document).ready(function() {
  $('#form').submit(function() {
    var buscar = $('#search').val();
    if (buscar == '') {
      return false;
    }else {
      return true;
    }
  })
});
