<html>
    <head>
        <link rel="stylesheet" href="../component/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../component/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="../component/jquery-confirm-master/css/jquery-confirm.css">
    </head>
    <body>
        

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
                            <button type="button" class="btn btn-info" id="save" onclick="addCategory();">Add</button>
                            <button type="button" class="btn btn-warning" id="reset" onclick="">Reset</button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-8">
                
                </div>
            </div>
        </div>

        <script src="../component/jquery/dist/jquery.js"></script>
        <script src="../component/jquery.validate.min.js"></script>
        <script src="../component/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="../component/jquery-confirm-master/js/jquery-confirm.js"></script>

        <script>
            var isnew = true;
            function addCategory(){
                if($("#frmCategory").valid()){
                    
                    var _url = '';
                    var _date = '';
                    var _method;

                    if(isnew == true){
                        _url ='../php/addCategory.php';
                        _data = $("#frmCategory").serialize();
                        _method = 'POST';
                    }else{
                        
                    }
                    
                    $.ajax({
                        type : _method,
                        data : _data,
                        url : _url,
                        dataType : 'JSON',
                        success : function(data){
                            var msg;
                            if(isnew){
                                msg = "Category Created"
                            }
                            else{

                            }
                            $.alert({
                                title: 'Success',
                                content:msg,
                                type: 'GREEN',
                                boxWidth: '400px',
                                theme:'light',
                                useBootstrap: false,
                                autoClose: 'ok|2000'
                            });
                        }

                    });
                },

                error: function(xhr,status,error){
                    alert(xhr);
                    console.log(xhr.responseText);

                    $.alert({
                        title: 'Fail!',
                        type: 'red',
                        autoClose: 'ok|2000'
                    });
                    
                    $('#save').prop('disabled',false);
                    $('#save').html('');
                    $('#save').append('Save');
                }
            }
        </script>
    </body>
</html>