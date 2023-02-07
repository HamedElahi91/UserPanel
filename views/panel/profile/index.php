<div class="col-md-12">

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">پروفایل کاربر</h5>
            <form action="" method="post">
                <div class="form-group">
                    <label for="InputFullName">نام و نام خانوادگی </label>
                    <input type="text" class="form-control" id="InputFullName" name="InputFullName" placeholder="نام و نام خانوادگی خود را وارد نمایید" value="<?php echo $current_user->display_name; ?>">
                </div>
                <div class="form-group">
                    <label for="InputEmail">آدرس ایمیل</label>
                    <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="ایمیل خود را وارد نمایید" disabled value="<?php echo $current_user->user_email; ?>">
                </div>
                <div class="form-group">
                    <label for="InputPassword">رمزعبور</label>
                    <input type="password" class="form-control" id="InputPassword" placeholder="رمزعبور">
                </div>
                <button type="submit" name="saveData" class="btn btn-primary">ثبت اطلاعات</button>
            </form>
        </div>
    </div>

</div>