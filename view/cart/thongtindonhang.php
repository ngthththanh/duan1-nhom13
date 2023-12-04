<section>
<?php  if(isset($_SESSION['iddh'])&&($_SESSION['iddh']>0)){
                        $getorderinfor=getorderinfor($_SESSION['iddh']);
                        if(count($getorderinfor)>0){
                        
                        ?>
    <h1>Lịch sử đơn hàng</h1>
        <table>
            <thead>
                <tr>
                    <th>ID đơn hàng:</th>
                    <th>Tên sản phẩm :</th>
                    <th>Hình</th>
                    <th>Số lượng:</th>
                    <th>Đơn Giá</th>
                    <th>Trạng thái</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach ($loadallbill as $bill) :?>
                
              <tr>
                <td><?php echo $bill['iddh'] ?></td>
                <td><?php echo $bill['tensp'] ?></td>
                <td><img src="../uploads/<?php echo $bill['img'] ?>" alt="" width="80"></td>
                <td><?php echo $bill['soluong'] ?></td>
                <td><?php echo $bill['dongia'] ?></td>
                <td>Đang xử lí</td>
              </tr>
              <?php endforeach ?>
                <!-- Thêm các dòng dữ liệu khác tại đây -->
            </tbody>
        </table>
       
                                  

                                    
    </section>
    <?php 
          
}
                                                                  
} ?>
                        