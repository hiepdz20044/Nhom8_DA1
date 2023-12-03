<div class="row2">
         <div class="row2 font_title">
          <h1>DANH SÁCH TÀI KHOẢN</h1>
         </div>
         <div class="row2 form_content ">
          <form action="#" method="POST">
           <div class="row2 mb10 formds_loai">
           <table>
            <tr>
                <th></th>
                <th>MÃ TÀI KHOẢN</th>
                <th>TÊN ĐĂNG NHẬP</th>
                <th>MẬT KHẨU</th>
                <th>SĐT</th>
                <th>EMAIL</th>
                <th>ĐỊA CHỈ</th>
                <th>ROLE</th>
                <th></th>
            </tr>

            <?php
                foreach ($listtk as $tk) {
                    extract($tk);
                    $suatk="index.php?act=suatk&id_khachhang=".$id_khachhang;
                    $xoatk="index.php?act=xoatk&id_khachhang=".$id_khachhang;
                    echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id_khachhang.'</td>
                            <td>'.$ho_ten.'</td>
                            <td>'.$mat_khau.'</td>
                            <td>'.$sdt.'</td>
                            <td>'.$email.'</td>
                            <td>'.$dia_chi.'</td>
                            <td>'.$vai_tro.'</td>
                            <td><a href="'.$suatk.'"><input type="button" value="Sửa"></a>   <a href="'.$xoatk.'"><input type="button" value="Xóa"></a></td>
                        </tr>';
                }
            ?>

           
           </table>
           </div>
           <div class="row mb10 ">
         <input class="mr20" type="button" value="CHỌN TẤT CẢ">
         <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
<a href="index.php?act=adddm"> <input  class="mr20" type="button" value="NHẬP THÊM"></a>
           </div>
          </form>
         </div>
        </div>