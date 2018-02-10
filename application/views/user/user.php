<h1>รายชื่อหมีน้อยในโครงการ</h1>
    

        <div class="alert alert-warning" role="alert">
            lovely
            <3 <3 </div>
            <a href="/user/adduser" class="btn btn-primary">เพิ่มหมี</a>
                <table class="table table-dark table-striped table-bordered">
                    <hr>
                    
                    <thead>
                        <tr>
                            <th><i class="far fa-compass "></i></th>
                            <th>ชื่อ - สกุล</th>
                            <th>อีเมล</th>
                            <th>อายุ</th>
                            <th>จัดการ</th>
                        </tr>
                    </thead>
        </div>
        </thead>
        <tbody>
        <?php foreach ($users->result() as $user){?>
            <tr>
                <td><?php echo $user->user_id ?></td>
                <td><?php echo $user->fullname ?></td>
                <td><?php echo $user->email ?></td>
                <td><?php echo $user->age ?></td>
                <td>
                    <a href="/user/show/<?php echo $user->user_id ?>" class="btn btn-info"><i class="fas fa-search"></i>แสดงข้อมูล</a>
                    <a href="/user/edit/<?php echo $user->user_id ?>" class="btn btn-warning"><i class="fas fa-edit"></i>แก้ไข</a>
                    <a onclick="javascript: return confirm('แน่ใจหรือ ?')" href="/user/delete/<?php echo $user->user_id ?>" class="btn btn-danger"><i class="fa fa-times"></i> ลบ</a>

                </td>
            </tr>
            <?php
} ?>
        </tbody>
        </table>