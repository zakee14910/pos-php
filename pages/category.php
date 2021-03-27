<html>
    <head>
        <link rel="stylesheet" href="../component/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../component/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="../component/bootstrap/dist/css/jquery-confirm.css">
    </head>
    <body>
        <script src="../component/jquery/dist/jquery.js"></script>
        <script src="../component/jquery.validate.min.js"></script>
        <script src="../component/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="../component/jquery-confirm-master/js/jquery-confirm.js"></script>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                    <form id="frmCategory" class="form-horizontal">
                        <div class="form-group">
                            <label for="">Category</label>
                            <input type="text" name="catname" id="catname" class="form-control" placeholder="Category" required>
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="">Please select</option>
                                <option value="1">Active</option>
                                <option value="2">Deactive</option>
                            </select>
                        </div>
                        <div align="right">
                            <button type="button" class="btn btn-info" id="save" onclick="">Add</button>
                            <button type="button" class="btn btn-warning" id="reset" onclick="">Reset</button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-8">
                
                </div>
            </div>
        </div>
    </body>
</html>