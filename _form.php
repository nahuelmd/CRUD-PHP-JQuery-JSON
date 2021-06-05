<form method="POST" action="" enctype="multipart/form-data" >
                    <div class="form-group">
                        <label for="">Name</label>
                        <input class="form-control" type="text" name="name" value="<?php echo $user['name'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Mail</label>
                        <input class="form-control" type="text" name="mail" value="<?php echo $user['mail'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Company</label>
                        <input class="form-control" type="text" name="company" value="<?php echo $user['company'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Role</label>
                        <input class="form-control" type="text" name="role" value="<?php echo $user['role'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Profile Rate</label>
                        <input class="form-control" type="text" name="profile_rate" value="<?php echo $user['profile_rate'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Last Acces</label>
                        <input class="form-control" type="text" name="last_access" value="<?php echo $user['last_access'] ?>">
                    </div>                
                    <div class="form-group">
                        <label for="">Avatar</label>

                        <input class="form-control-file" type="file" name="userfile" >
                    </div>
                    <button class="btn btn-success" >Submit</button>                     
                </form>