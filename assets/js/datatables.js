$(document).ready(function () {
    var datatable = $("#mytable").DataTable({
      ajax: "data.php",
      columns: [{ data: "name" }, { data: "lastname" }, { data: "city" }, { data: "gender" }],
    });
  });