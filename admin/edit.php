<?php
  session_start();
if(!isset($_SESSION['login'])){
    header("Location: ./index.php");
}
  ?>
<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Serial Report</title>
  <link rel="stylesheet" href="dist/bootstrap.min.css" type="text/css" media="all">
  <link href="dist/jquery.bootgrid.css" rel="stylesheet" />
  <script src="dist/jquery-1.11.1.min.js"></script>
  <script src="dist/bootstrap.min.js"></script>
  <script src="dist/jquery.bootgrid.min.js"></script>
  <style>
      a{text-decoration: none;}
    </style>
</head>
  <body>
    <a class="logout" href="./logout.php">
      <i class="fa fa-sign-out float-end p-1" aria-hidden="true">sign out</i>
    </a>


<body>
  <div class="container">
    <div class="">
      <h1>Entries</h1>
      <div class="col">
        <div class="well clearfix">
          <div class="pull-right"><button type="button" class="btn btn-xs btn-primary" id="command-add" data-row-id="0">
              <span class="glyphicon glyphicon-plus"></span> Record</button></div>
        </div>
        
        <table id="employee_grid" class="table table-condensed table-hover table-striped" width="60%" cellspacing="0" data-toggle="bootgrid">
          <thead>
            <tr>
              <th data-column-id="id" data-type="numeric" data-identifier="true">Empid</th>
              <!--<th data-column-id="employee_name">Name</th>-->
              <!--<th data-column-id="employee_salary">Salary</th>-->
              <!--<th data-column-id="employee_age">Age</th>-->
              <th data-column-id="name">Name</th>
              <th data-column-id="firm_name">Firm Name</th>
              <th data-column-id="address">Address</th>
              <th data-column-id="pincode">Pincode</th>
              <th data-column-id="number">Number</th>
              <th data-column-id="whatsapp">Whatsapp</th>
              <th data-column-id="subhead">Tagline</th>
              <th data-column-id="link">Link</th>
              <th data-column-id="location_link">Location</th>
              <th data-column-id="remark">Remark</th>
              <th data-column-id="commands" data-formatter="commands" data-sortable="false">Commands</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>

  <div id="add_model" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Add Entry</h4>
        </div>
        <div class="modal-body">
          <form method="post" id="frm_add">
            <input type="hidden" value="add" name="action" id="action">
            <div class="form-group">
              <label for="name" class="control-label">Name:</label>
              <input type="text" class="form-control" id="name" name="name" />
            </div>
            <div class="form-group">
              <label for="firm_name" class="control-label">Firm Name:</label>
              <input type="text" class="form-control" id="firm_name" name="firm_name" />
            </div>
            <div class="form-group">
              <label for="address" class="control-label">address:</label>
              <input type="text" class="form-control" id="address" name="address" />
            </div>
            <div class="form-group">
              <label for="pincode" class="control-label">pincode:</label>
              <input type="text" class="form-control" id="pincode" name="pincode" />
            </div>
            <div class="form-group">
              <label for="whatsapp" class="control-label">Whatsapp:</label>
              <input type="text" class="form-control" id="whatsapp" name="whatsapp" />
            </div>
            <div class="form-group">
              <label for="number" class="control-label">Number:</label>
              <input type="text" class="form-control" id="number" name="number" />
            </div>
            <div class="form-group">
              <label for="subhead" class="control-label">Tagline:</label>
              <input type="text" class="form-control" id="subhead" name="subhead" />
            </div>
            <div class="form-group">
              <label for="link" class="control-label">link:</label>
              <input type="text" class="form-control" id="link" name="link" />
            </div>
            <div class="form-group">
              <label for="location_link" class="control-label">location Link:</label>
              <input type="text" class="form-control" id="location_link" name="location_link" />
            </div>
            <div class="form-group">
              <label for="remark" class="control-label">Remark:</label>
              <input type="text" class="form-control" id="remark" name="remark" />
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" id="btn_add" class="btn btn-primary">Save</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <div id="edit_model" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Edit Entry</h4>
        </div>
        <div class="modal-body">
          <form method="post" id="frm_edit">
            <input type="hidden" value="edit" name="action" id="action">
            <input type="hidden"  name="edit_id" id="edit_id">
            <div class="form-group">
              <label for="name" class="control-label">Name:</label>
              <input type="text" class="form-control" id="edit_name" name="edit_name" />
            </div>
            <div class="form-group">
              <label for="edit_firm_name" class="control-label">Firm Name:</label>
              <input type="text" class="form-control" id="edit_firm_name" name="edit_firm_name" />
            </div>
            <div class="form-group">
              <label for="edit_address" class="control-label">Address:</label>
              <input type="text" class="form-control" id="edit_address" name="edit_address" />
            </div>
            <div class="form-group">
              <label for="edit_pincode" class="control-label">Pincode:</label>
              <input type="text" class="form-control" id="edit_pincode" name="edit_pincode" />
            </div>
            <div class="form-group">
              <label for="edit_number" class="control-label">Number:</label>
              <input type="text" class="form-control" id="edit_number" name="edit_number" />
            </div>
            <div class="form-group">
              <label for="edit_whatsapp" class="control-label">whatsapp:</label>
              <input type="text" class="form-control" id="edit_whatsapp" name="edit_whatsapp" />
            </div>
            <div class="form-group">
              <label for="edit_subhead" class="control-label">Tagline:</label>
              <input type="text" class="form-control" id="edit_subhead" name="edit_subhead" />
            </div>
            <div class="form-group">
              <label for="edit_link" class="control-label">Link:</label>
              <input type="text" class="form-control" id="edit_link" name="edit_link" />
            </div>
            <div class="form-group">
              <label for="edit_location_link" class="control-label">location Link:</label>
              <input type="text" class="form-control" id="edit_location_link" name="edit_location_link" />
            </div>
            <div class="form-group">
              <label for="edit_remark" class="control-label">Remark:</label>
              <input type="text" class="form-control" id="edit_remark" name="edit_remark" />
            </div>
            

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" id="btn_edit" class="btn btn-primary">Save</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>
<script type="text/javascript">
  $(document).ready(function() {
    var grid = $("#employee_grid").bootgrid({
      ajax: true,
      rowSelect: true,
      post: function() {
        /* To accumulate custom parameter with the request object */
        return {
          id: "b0df282a-0d67-40e5-8558-c9e93b7befed"
        };
      },

      url: "response.php",
      formatters: {
        "commands": function(column, row) {
          return "<button type=\"button\" class=\"btn btn-xs btn-default command-edit\" data-row-id=\"" + row.id + "\"><span class=\"glyphicon glyphicon-edit\"></span></button> " +
            "<button type=\"button\" class=\"btn btn-xs btn-default command-delete\" data-row-id=\"" + row.id + "\"><span class=\"glyphicon glyphicon-trash\"></span></button>";
        }
      }
    }).on("loaded.rs.jquery.bootgrid", function() {
      /* Executes after data is loaded and rendered */
      grid.find(".command-edit").on("click", function(e) {
        //alert("You pressed edit on row: " + $(this).data("row-id"));
        var ele = $(this).parent();
        var g_id = $(this).parent().siblings(':first').html();
        var g_name = $(this).parent().siblings(':nth-of-type(2)').html();
        console.log(g_id);
        console.log(g_name);

        //console.log(grid.data());//
        $('#edit_model').modal('show');
        if ($(this).data("row-id") > 0) {

          // collect the data
          $('#edit_id').val(ele.siblings(':first').html()); // in case we're changing the key
          $('#edit_name').val(ele.siblings(':nth-of-type(2)').html());
          $('#edit_firm_name').val(ele.siblings(':nth-of-type(3)').html());
          $('#edit_address').val(ele.siblings(':nth-of-type(4)').html());
          $('#edit_pincode').val(ele.siblings(':nth-of-type(5)').html());
          $('#edit_number').val(ele.siblings(':nth-of-type(6)').html());
          $('#edit_whatsapp').val(ele.siblings(':nth-of-type(7)').html());
          $('#edit_subhead').val(ele.siblings(':nth-of-type(8)').html());
          $('#edit_link').val(ele.siblings(':nth-of-type(9)').html());
          $('#edit_location_link').val(ele.siblings(':nth-of-type(10)').html());
          $('#edit_remark').val(ele.siblings(':nth-of-type(11)').html());
        } else {
          alert('Now row selected! First select row, then click edit button');
        }
      }).end().find(".command-delete").on("click", function(e) {

        var conf = confirm('Delete ' + $(this).data("row-id") + ' items?');
        alert(conf);
        if (conf) {
          $.post('response.php', {
            id: $(this).data("row-id"),
            action: 'delete'
          }, function() {
            // when ajax returns (callback), 
            $("#employee_grid").bootgrid('reload');
          });
          //$(this).parent('tr').remove();
          //$("#employee_grid").bootgrid('remove', $(this).data("row-id"))
        }
      });
    });

    function ajaxAction(action) {
      data = $("#frm_" + action).serializeArray();
      $.ajax({
        type: "POST",
        url: "response.php",
        data: data,
        dataType: "json",
        success: function(response) {
          $('#' + action + '_model').modal('hide');
          $("#employee_grid").bootgrid('reload');
        }
      });
    }

    $("#command-add").click(function() {
      $('#add_model').modal('show');
    });
    $("#btn_add").click(function() {
      ajaxAction('add');
    });
    $("#btn_edit").click(function() {
      ajaxAction('edit');
    });
  });
</script>