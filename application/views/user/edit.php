<form action="/user/update/<?php echo $user->user_id ?>" method="post">
<div class="row">
<div class="col-8">
<form action="/user/update/<?php echo $user->user_id ?>" method="post">
                   <div class="form-group">
                       <label>ชื่อผู้ใช้</label>
                       <input  value="<?php echo $user->username ?>"  name="username" type="text" class="form-control" placeholder="กรอกชื่อผู้ใช้">
                   </div>
                   <div class="form-group">
                       <label>รหัสผ่าน</label>
                       <input  value="<?php echo $user->password ?>"  name="password" type="password" class="form-control" placeholder="กรอกรหัสผ่าน">
                   </div>
                   <div class="form-group">
                       <label>ชื่อ</label>
                       <input value="<?php echo $user->fullname ?>" name="fullname" type="text" class="form-control" placeholder="กรอกชื่อ สกุล">
                   </div>
                   <div class="form-group">
                       <label>อีเมล์</label>
                       <input  value="<?php echo $user->email ?>" name="email" type="email" class="form-control" placeholder="กรอกอีเมล์">
                   </div>
                   <div class="form-group">
                       <label>อายุ</label>
                       <input  value="<?php echo $user->age ?>" name="age" type="number" class="form-control" placeholder="กรอกอายุ">
                   </div>
                   <button type="submit" class="btn btn-primary">บันทึก</button>
           </form>
</div>
<div class="col-4">
    <ul class="list-group">
        <li class="list-group-item">หมีปลูกป่าชายเลน</li>
        <li class="list-group-item">หมีทำปาการัง</li>
        <li class="list-group-item">หมีทำฝาย</li>
        <li class="list-group-item">หมีไปดอย</li>
        <li class="list-group-item">หมีกอดน้อง</li>
    </ul>
</div>
</div>