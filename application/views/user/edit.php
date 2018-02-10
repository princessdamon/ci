<form action="/user/update/<?php echo $user->user_id ?>" method="post">
<div class="row">
<div class="col-8">
    <form action="/user/update/" method="post">
        <label>ชื่อ - นามสกุล</label>
        <div class="form-row">
            <div class="col">
                <input  value = "<?php echo $user->fullname ?>"name="fullname" type="text" class="form-control" placeholder="Name">
            </div>
            
        </div>
        <div class="form-group">
            <label>อีเมล์</label>
            <input value = "<?php echo $user->email ?>" name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-row align-items-center">
            <div class="col-auto my-1">
                <label>อายุ</label>
                <input  value="<?php echo $user->age ?>" name="age" type="number" class="form-control" placeholder="กรอกอายุ">
            </div>

        </div>
        <hr>
        <button type="submit" class="btn btn-primary">บันทึก</button>
        <hr>
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