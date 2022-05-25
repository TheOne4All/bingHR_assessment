<?php
echo csrf_field();
if (isset($employee->id)): echo method_field('PUT');endif;
?>
<div class="card">
    <div class="card-body">
        <?php if (isset($employee->id)) {echo '<input type="hidden" name="id" value="' . $employee->id . '">';}?>
        <div class="row form-group">
            <div class="col-sm-12">
                <div class="form-group form-group-default required">
                    <input type="text" class="form-control" name="employee_id" placeholder="Employee ID *" value="<?php if (isset($employee->employee_id)) {
    echo $employee->employee_id;
}
?>" required>
                </div>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-sm-6">
                <div class="form-group form-group-default required">
                    <input type="text" class="form-control" name="lastname" placeholder="Last Name *" value="<?php if (isset($employee->lastname)) {
    echo $employee->lastname;
}
?>" required>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group form-group-default required">
                    <input type="text" class="form-control" name="firstname" placeholder="First Name *" value="<?php if (isset($employee->firstname)) {
    echo $employee->firstname;
}
?>" required>
                </div>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-sm-4">
                <div class="form-group form-group-default input-group required">
                    <input type="email" class="form-control" name="email" placeholder="Email *" value="<?php if (isset($employee->email)) {
    echo $employee->email;
}
?>" required>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group form-group-default input-group">
                    <input type="text" class="form-control" name="phone" placeholder="Mobile No" value="<?php if (isset($employee->phone)) {
    echo $employee->phone;
}
?>">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <select name="role" class="form-control" data-style="btn btn-link" required>
                        <option value='0'>Select Role Typle</option>
                        <option value="Team Lead"
                            <?php if (isset($employee->role) && $employee->role == 'Team Lead') {echo 'selected';}?>>
                            Team Lead
                        </option>
                        <option value="HR"
                            <?php if (isset($employee->role) && $employee->role == 'HR') {echo 'selected';}?>>HR
                        </option>
                        <option value="CEO and Founder"
                            <?php if (isset($employee->role) && $employee->role == 'CEO and Founder') {echo 'selected';}?>>
                            CEO
                            and Founder</option>
                        <option value="Web Designer"
                            <?php if (isset($employee->role) && $employee->role == 'Web Designer') {echo 'selected';}?>>
                            Web
                            Designer</option>
                        <option value="App Designer"
                            <?php if (isset($employee->role) && $employee->role == 'App Designer') {echo 'selected';}?>>
                            App
                            Designer</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-sm-4">
                <div class="form-group form-group-default required">
                    <input type="text" class="form-control" name="username" placeholder="Username *" value="<?php if (isset($employee->username)) {
    echo $employee->username;
}
?>" required>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group form-group-default required">
                    <input type="password" class="form-control" name="password" placeholder="Password *" value="<?php if (isset($employee->password)) {
    echo $employee->password;
}
?>" required>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group form-group-default required">
                    <input type="password" class="form-control" name="confirm" placeholder="Confirm Password *" value="<?php if (isset($employee->password)) {
    echo $employee->password;
}
?>" required>
                </div>
            </div>
        </div>
        <div class="row form-group pt-3 pb-3" style="background-color: #eeeeee;">
            <div class="col-sm-6 bold">Module Permission</div>
            <div class="col-sm-2 bold">Read</div>
            <div class="col-sm-2 bold">Write</div>
            <div class="col-sm-2 bold">Delete</div>
        </div>
        <div class="row form-group">
            <div class="col-sm-6">Super-Admin <input class="ml-3" name="permission[]" type="radio" value="1" checked />
            </div>
            <div class="col-sm-2"><input class="" name="access[]" type="checkbox" value="1" checked
                    onclick="return false;" />
            </div>
            <div class="col-sm-2"><input class="" name="access[]" type="checkbox" value="1" checked
                    onclick="return false;" />
            </div>
            <div class="col-sm-2"><input class="" name="access[]" type="checkbox" value="1" checked
                    onclick="return false;" />
            </div>
        </div>
        <div class="row form-group">
            <div class="col-sm-6">Admin <input class="ml-3" name="permission[]" type="radio" value="2" /></div>
            <div class="col-sm-2"><input class="" name="access[]" type="checkbox" value="1" checked
                    onclick="return false;" />
            </div>
            <div class="col-sm-2"><input class="" name="access[]" type="checkbox" value="1" onclick="return false;" />
            </div>
            <div class="col-sm-2"><input class="" name="access[]" type="checkbox" value="1" onclick="return false;" />
            </div>
        </div>
        <div class="row form-group">
            <div class="col-sm-6">Employee <input class="ml-3" name="permission[]" type="radio" value="3" /></div>
            <div class="col-sm-2"><input class="" name="access[]" type="checkbox" value="1" checked
                    onclick="return false;" />
            </div>
            <div class="col-sm-2"><input class="" name="access[]" type="checkbox" value="1" onclick="return false;" />
            </div>
            <div class="col-sm-2"><input class="" name="access[]" type="checkbox" value="1" onclick="return false;" />
            </div>
        </div>
        <div class="row form-group">
            <div class="col-sm-6">HR Admin <input class="ml-3" name="permission[]" type="radio" value="4" /></div>
            <div class="col-sm-2"><input class="" name="access[]" type="checkbox" value="1" checked
                    onclick="return false;" />
            </div>
            <div class="col-sm-2"><input class="" name="access[]" type="checkbox" value="1" checked
                    onclick="return false;" />
            </div>
            <div class="col-sm-2"><input class="" name="access[]" type="checkbox" value="1" checked
                    onclick="return false;" />
                </d iv>
            </div>

        </div>

        <!-- /.card-body -->
    </div>

    <!-- /.card -->