<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Live Add Edit Delete DataTable</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap.min.js"></script>
    <script src="js/ajax.js"></script>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Live Add, Edit, Delete DataTable</h2>
        <table id="recordListing" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Skills</th>
                    <th>Address</th>
                    <th>Designation</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
        </table>
    </div>

    <!-- Modal for Add/Edit Record -->
    <div id="recordModal" class="modal fade">
        <div class="modal-dialog">
            <form method="post" id="recordForm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">×</button>
                        <h4 class="modal-title"><i class="fa fa-plus"></i> Add Record</h4>
                    </div>
                    <div class="modal-body">
                        <!-- Form Fields -->
                        <div class="form-group">
                            <label for="name" class="control-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="age" class="control-label">Age</label>
                            <input type="number" class="form-control" id="age" name="age">
                        </div>
                        <div class="form-group">
                            <label for="skills" class="control-label">Skills</label>
                            <input type="text" class="form-control" id="skills" name="skills" required>
                        </div>
                        <div class="form-group">
                            <label for="address" class="control-label">Address</label>
                            <textarea class="form-control" rows="5" id="address" name="address"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="designation" class="control-label">Designation</label>
                            <input type="text" class="form-control" id="designation" name="designation">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="id" id="id" />
                        <input type="hidden" name="action" id="action" value="" />
                        <input type="submit" name="save" id="save" class="btn btn-info" value="Save" />
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
