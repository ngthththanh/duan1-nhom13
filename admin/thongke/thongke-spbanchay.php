<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<style>
    .bt_kt {
        max-width: 500px;
        margin: 10px;
        padding: 10px;
        border-radius: 5px;

    }

    .bt_kt form {
        display: flex;
        flex-direction: row;
        align-items: center;
    }

    .bt_kt input[type="date"] {
        flex: 1;
        padding: 5px;
        margin-right: 10px;
        box-sizing: border-box;
    }

    .bt_kt input[type="submit"] {
        background-color: #2961ca;
        color: white;
        padding: 5px 20px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    .bt_kt input[type="submit"]:hover {
        background-color: #2961ca;
    }
</style>


<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">THỐNG KÊ SẢN PHẨM BÁN CHẠY</h1>
            <div class="bt_kt">
            <form  action="index.php?act=thongkesp" method="post"  >
               
                <input type="date" name="bd" id=""><br>
                    <input type="date" name="kt" id=""><br>
                    <a href="index.php?act=thongkesp"><input type="submit" value="GỬI" name="check">  </a>
              
            </form>
            </div> 
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>Danh sách đơn hàng
                </div>
               
                <form action="#" method="post">
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>STT</th>
                                    <th>TÊN SẢN PHẨM</th>
                                  
                                    <th>IMG</th>
                                    <th>GIÁ</th>
                                    <th>SỐ LƯỢNG</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th>STT</th>
                                    <th>TÊN SẢN PHẨM</th>
                                  
                                    <th>IMG</th>
                                    <th>GIÁ</th>
                                    <th>SỐ LƯỢNG</th>
                                    <th></th>
                                </tr>
                            </tfoot>
                            <tbody>
                              <?php if(!empty( $dsthongkesp)) :?>
                                <?php foreach (   $dsthongkesp as $key=> $bill) {
                                       extract($bill);
                                         $hinhpath = "../uploads/".$hinh;
                                        if(is_file($hinhpath)) {
                                             $img= "<img src='".$hinhpath."'hei6ght=100'>";

                                        } else {
                                             $img= "no photo";
                                        }
                                ?>
                                    <tr>
                                        <td></td>
                                        <td><?= ++$key?></td>
                                        <td><?= $ten_sp?></td>
                                        <td>
                                            <?php echo  $img?>
                                        </td>
                                        <td>
                                       <?php $gia_sp ?>
                                        </td>
                                        <td><?= $soluong?></td>
                                       
                                        <td></td>
                                    </tr>
                                <?php } ?>
                                <?php endif;?>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </main>
    
