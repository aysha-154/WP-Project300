
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">

                        <div class="col-md-6 offset-3">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h2 class="text-center font-weight-light my-4">Add Complete Blood Count</h2></div>
                                    <div class="card-body">
                                        <?=$this->session->flashdata('success')?>
                                                <form action="" method="post">

                                                    <div class="form-group"> 
                                                        <label class="small mb-1" for="inputEmailAddress">hb</label>
                                                        <input type="text" class="form-control py-4" placeholder="Enter hb" value="<?php if(set_value('hb')){ echo set_value('hb'); }else{ echo $blood[0]['hb']; } ?>" name="hb">
                                                        <div class="error"><?=form_error('hb')?></div>
                                                    </div>

                                                    <div class="form-group"> 
                                                        <label class="small mb-1" for="inputEmailAddress">mcv</label>
                                                        <input type="text" class="form-control py-4" placeholder="Enter mcv" value="<?php if(set_value('mcv')){ echo set_value('mcv'); }else{ echo $blood[0]['mcv']; } ?>" name="mcv">
                                                        <div class="error"><?=form_error('mcv')?></div>
                                                    </div>

                                                    <div class="form-group"> 
                                                        <label class="small mb-1" for="inputEmailAddress">rbc</label>
                                                        <input type="text" class="form-control py-4" placeholder="Enter rbc" value="<?php if(set_value('rbc')){ echo set_value('rbc'); }else{ echo $blood[0]['rbc']; } ?>" name="rbc">
                                                        <div class="error"><?=form_error('rbc')?></div>
                                                    </div>

                                                    <div class="form-group"> 
                                                        <label class="small mb-1" for="inputEmailAddress">wbc</label>
                                                        <input type="text" class="form-control py-4" placeholder="Enter wbc" value="<?php if(set_value('wbc')){ echo set_value('wbc'); }else{ echo $blood[0]['wbc']; } ?>" name="wbc">
                                                        <div class="error"><?=form_error('wbc')?></div>
                                                    </div>

                                                    <div class="form-group"> 
                                                        <label class="small mb-1" for="inputEmailAddress">neutro</label>
                                                        <input type="text" class="form-control py-4" placeholder="Enter neutro" value="<?php if(set_value('neutro')){ echo set_value('neutro'); }else{ echo $blood[0]['neutro']; } ?>" name="neutro">
                                                        <div class="error"><?=form_error('neutro')?></div>
                                                    </div>

                                                    <div class="form-group"> 
                                                        <label class="small mb-1" for="inputEmailAddress">lympho</label>
                                                        <input type="text" class="form-control py-4" placeholder="Enter lympho" value="<?php if(set_value('lympho')){ echo set_value('lympho'); }else{ echo $blood[0]['lympho']; } ?>" name="lympho">
                                                        <div class="error"><?=form_error('lympho')?></div>
                                                    </div>

                                                    <div class="form-group"> 
                                                        <label class="small mb-1" for="inputEmailAddress">mono</label>
                                                        <input type="text" class="form-control py-4" placeholder="Enter mono" value="<?php if(set_value('mono')){ echo set_value('mono'); }else{ echo $blood[0]['mono']; } ?>" name="mono">
                                                        <div class="error"><?=form_error('mono')?></div>
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
                
    
            