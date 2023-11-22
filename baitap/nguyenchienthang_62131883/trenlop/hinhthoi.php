<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>tinh dien tich HCN</title>
</head>
<body>
   
<body>
<?php 
	if(isset($_POST['bankinh']))  
	    $bankinh=trim($_POST['bankinh']); 
	else $bankinh=0;
    define("Pi",3.14);
	if(isset($_POST['tinh']))
        if (is_numeric($bankinh))  
	       $dientich=pow($bankinh,2) * Pi;
        else {
                echo "<font color='red'>Vui lòng nhập vào số! </font>"; 
                $dientich="";
            }
    else $dientich=0;

    
    $chu_vi=2*Pi*$bankinh;
?>






<form align='center' action="" method="post">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Bán kính</label>
        <div class="col-sm-9">
            <input class="form-control"  type="text " name="bankinh" id="" size="20"  value="<?php  echo $bankinh;?> "/>
        </div>
    </div>
    
  
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Diện tích</label>
        <div class="col-sm-9">
        <input class="form-control" disabled  type="text " name="dientich" id="" size="20" value="<?php  echo $dientich;?> "/>
       
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Chu vi</label>
        <div class="col-sm-9">
        <input class="form-control" name="chuvi" disabled  type="text " value="<?php  echo $chu_vi;?> "/>
       
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-9 offset-3">
                <button type="submit" class="btn btn-danger px-5" name="tinh">Tính Toán</button>
        </div>
    </div>
</form>
</body>
</html>