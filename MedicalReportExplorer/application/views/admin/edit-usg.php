
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">

                        <div class="col-md-6 offset-3">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h2 class="text-center font-weight-light my-4">Add USG</h2></div>
                                    <div class="card-body">
                                        <?=$this->session->flashdata('success')?>
                                                <form action="" method="post">

                                                    <div class="form-group"> 
                                                        <label class="small mb-1" for="inputEmailAddress">bladder</label>
                                                        <input type="text" class="form-control py-4" placeholder="Enter bladder" value="<?php if(set_value('bladder')){ echo set_value('bladder'); }else{ echo $usg[0]['bladder']; } ?>" name="bladder">
                                                        <div class="error"><?=form_error('bladder')?></div>
                                                    </div>

                                                    <div class="form-group"> 
                                                        <label class="small mb-1" for="inputEmailAddress">uterus</label>
                                                        <input type="text" class="form-control py-4" placeholder="Enter uterus" value="<?php if(set_value('uterus')){ echo set_value('uterus'); }else{ echo $usg[0]['uterus']; } ?>" name="uterus">
                                                        <div class="error"><?=form_error('uterus')?></div>
                                                    </div>

                                                    <div class="form-group"> 
                                                        <label class="small mb-1" for="inputEmailAddress">ar</label>
                                                        <input type="text" class="form-control py-4" placeholder="Enter ar" value="<?php if(set_value('ar')){ echo set_value('ar'); }else{ echo $usg[0]['ar']; } ?>" name="ar">
                                                        <div class="error"><?=form_error('ar')?></div>
                                                    </div>

                                                    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"> 
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                            
                                                    </div>


                                                </form>
                                            </div>
                                </div>


                                
                                </div>
                         
                    </div>
                </main>
                
    
            