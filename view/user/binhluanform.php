<?php
    session_start();
    include "../../model/pdo.php";
    include "../../model/admin/binhluan.php";
    $idpro=$_REQUEST['idpro'];
    $dsbl=loadall_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="view/user/asset/css/css.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
       /* danh sách bình luận */
      .binhluan table{
      width: 90%;
      margin-left: 5%;
      }
      .binhluan table td:nth-child(1){
      width: 50%;
      }

      .binhluan table td:nth-child(2){
      width: 20%;
      }

      .binhluan table td:nth-child(3){
      width: 30%;
      }

      td{
        font-size: 25px;
      }
      th{
        font-size: 25px;
      }
    </style>
</head>
<body>
    

<div class="mb">
              
              <div class="box_content2 binhluan" >
              <table >
              <tr>
                <!-- <th></th> -->
                <th style="width: 50%;">Nội dung</th>
                <th style="width: 20%;">id user</th>
                <th style="width: 30%;">ngày bình luận</th>
                <br>
                <!-- <th></th> -->
            </tr>
               <?php
               
                  foreach ($dsbl as $bl) {
                     extract($bl);
                     echo '<tr><td>'.$noidung.'</td>';
                     echo '<td>'.$iduser.'</td>';
                     echo '<td>'.$ngaybinhluan.'</td></tr>';
                  }
               ?>
              </table>
              </div>
              <div class="bg-white">
                <form action="<?=$_SERVER['PHP_SELF'];?>" class="form-group" method="POST">
                    <input type="hidden" name="idpro" value="<?=$idpro?>">
                    <input type="text" class="submitButton" name="noidung">
                    <input type="submit" name="guibinhluan"  class="btn btn-primary" value="GỬI BÌNH LUẬN">
                </form>
              </div>

                  <?php
                  if (isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])) {
                    $noidung=$_POST['noidung'];
                    $idpro=$_POST['idpro'];
                    $iduser=$_SESSION['user']['id'];
                    $ngaybinhluan=date('h:i:sa d/m/Y');
                    insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan);
                    header("Location: ".$_SERVER['HTTP_REFERER']);
                  }
                    
                  ?>

           </div>
</body>
</html>