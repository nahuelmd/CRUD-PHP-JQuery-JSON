<div class="container">
    <div class="card"> 
        <div class="card-header">
            <h3>
                <?php if ($user['id']):?>
                Update contact <b><?php echo $user['name']?> </b>
                <?php else: ?>
                Create new user        
                <?php endif?>
            </h3>
        </div>
        <div class="card-body">  

            <form method="POST" action="" enctype="multipart/form-data" >
                <div class="form-group">
                <label for="">Name</label>
                <input class="form-control 
                    <?php echo ($errors['name']) ? 'is-invalid' : '' ?>" 
                    type="text" name="name" value="<?php echo $user['name'] ?>">
                <div class="invalid-feedback">
                    <?php echo $errors['name'] ?>
                </div>
                </div>

                <div class="form-group">
                <label for="">Mail</label>
                <input class="form-control <?php echo ($errors['mail']) ? 'is-invalid' : '' ?>" type="text" name="mail" value="<?php echo $user['mail'] ?>">
                <div class="invalid-feedback">
                    <?php echo $errors['mail'] ?>
                </div>
                </div>

                <div class="form-group">
                <label for="">Company</label>
                <input class="form-control <?php echo ($errors['company']) ? 'is-invalid' : '' ?>" type="text" name="company" value="<?php echo $user['company'] ?>">
                <div class="invalid-feedback">
                    <?php echo $errors['company'] ?>
                </div>
                </div>

                <div class="form-group">
                <label for="">Role</label>
                <input class="form-control <?php echo ($errors['role']) ? 'is-invalid' : '' ?>" type="text" name="role" value="<?php echo $user['role'] ?>">
                <div class="invalid-feedback">
                    <?php echo $errors['role'] ?>
                </div>
                </div>
                
                <div class="form-group">
                <label for="">Profile Rate</label>
                <input class="form-control <?php echo ($errors['profile_rate']) ? 'is-invalid' : '' ?>" type="text" name="profile_rate" value="<?php echo $user['profile_rate'] ?>">
                <div class="invalid-feedback">
                    <?php echo $errors['profile_rate'] ?>
                </div>
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


        </div>    
    </div>        
</div>