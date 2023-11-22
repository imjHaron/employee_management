<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<?php 

   if (isset($_POST["N"])){
       $N =$_POST["N"];
   }

    else $N = 0;
  
    
    $arr = [];
    for ( $i = 0 ; $i < $N; $i++ )
    {
      $arr[$i] = rand (-200,200);
    }

    function xuatMang($N, $arr){
        for ( $i = 0 ; $i < $N; $i++ )
        {
          echo $arr[$i]. "\t";
        } 
    }


    function sochan($N, $arr){
        $sochan =0;
        for ( $i = 0 ; $i < $N; $i++ )
        {
            if( $arr[$i] %2 ==0)
            {
                $sochan ++;

            }
            
        } 
        echo $sochan;

    }
    function phantunho($N, $arr){
        $pt =0;
        for ( $i = 0 ; $i < $N; $i++ )
        {
            if( $arr[$i] < 100)
            {
                $pt ++;
            }
            
        } 
        echo $pt;
    }


    function tongphantu($N, $arr){
        $tong =0;
        for ( $i = 0 ; $i < $N; $i++ )
        {
            if( $arr[$i] < 0)
            {
                $tong = $tong + $arr[$i];
            }
            
        } 
        echo $tong;
        return -1;
       
    }
    function sapxep($N, $arr){
        sort ($arr);
        for ( $i = 0 ; $i < $N; $i++ )
        {
          echo $arr[$i]. "\t";
        } 
    }

?>
<div class="container mt-5">

     <form action="" id="form1" name= "form1" method ="POST">

       
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Nhập Vào 1 số tự nhiên</label>
        <div class="col-sm-9">
            <input class="form-control"  type="text " id="" size="20"  name="N" value="<?php echo $N; ?>">
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Danh Sách các phần tử</label>
        <div class="col-sm-9">
        <input class="form-control" disabled type="text " id=""  name="b" value="<?php xuatMang($N, $arr); ?>">
       
        </div>
    </div>
   
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Danh sách các số chẳn</label>
        <div class="col-sm-9">
        <input class="form-control" disabled type="text " id="" size="20" name="na" value="<?php sochan($N, $arr); ?>">
       
        </div>
    </div>
   
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Danh sách các phần tử < 100</label>
        <div class="col-sm-9">
        <input class="form-control" disabled  type="text " id="" size="20" name="nb" value="<?php phantunho($N, $arr); ?>">
       
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Tổng các phần tử < 0</label>
        <div class="col-sm-9">
        <input class="form-control" disabled  type="text " id=""  name="chuoi_c" value="<?php tongphantu($N, $arr); ?>">
    </div>
     
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Sắp xếp các phần tử</label>
        <div class="col-sm-9">
        <input class="form-control" disabled  type="text " id="" size="20" name="" value="<?php sapxep($N,$arr); ?>">
        </div>
    </div>
    
    <div class="form-group row">
        <div class="col-sm-9 offset-3">
                <button type="submit" class="btn btn-primary px-5" name="submit">Thực Hiện</button>
                <a href="../mang_chuoi/" class="btn btn-primary">Trở về</a>
        </div>
    </div>

    </form>
    
</div>
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
