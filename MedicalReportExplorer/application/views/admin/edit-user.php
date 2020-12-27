<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">

            <div class="col-md-6 offset-3">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h2 class="text-center font-weight-light my-4">Edit User</h2></div>
                        <div class="card-body">
                            <?=$this->session->flashdata('success')?>
                            <form action="" method="post">

                                <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" name="name" class="form-control" value="<?php if(set_value('name')){ echo set_value('name'); }else{ echo $user[0]['name']; } ?>" placeholder="Enter Name"  id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="error"><?=form_error('name')?></div>

                                <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="text" name="email" class="form-control" value="<?php if(set_value('email')){ echo set_value('email'); }else{ echo $user[0]['email']; } ?>" placeholder="Enter Email"  id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="error"><?=form_error('email')?></div>

                                <div class="form-group">
                                        <label for="exampleInputEmail1">Mobile</label>
                                        <input type="text" name="mobile" class="form-control" value="<?php if(set_value('mobile')){ echo set_value('mobile'); }else{ echo $user[0]['mobile']; } ?>" placeholder="Enter Mobile"  id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="error"><?=form_error('mobile')?></div>

                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" name="password" class="form-control" value="<?php if(set_value('password')){ echo set_value('password'); }else{ echo $user[0]['password']; } ?>" placeholder="Enter Password"  id="exampleInputPassword1">
                                </div>
                                <div class="error"><?=form_error('password')?></div>
                                  
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Verify Password</label>
                                    <input type="password" name="verify_password"  class="form-control" value="<?php if(set_value('verify_password')){ echo set_value('verify_password'); }else{ echo $user[0]['password']; } ?>" placeholder="Enter Verify password"  id="exampleInputPassword1">
                                </div>
                                <div class="error"><?=form_error('verify_password')?></div>



                                <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"> 
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                            
                                </div>
                        </form>
                    </div>
                </div>
                     
            </div>
                         
        </div>
    </main>
        