
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">

                        <div class="col-md-6 offset-3">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h2 class="text-center font-weight-light my-4">Edit Coagulation</h2></div>
                                    <div class="card-body">
                                        <?=$this->session->flashdata('success')?>
                                                <form action="" method="post">

                                                    <div class="form-group"> 
                                                        <label class="small mb-1" for="inputEmailAddress">hg</label>
                                                        <input type="text" class="form-control py-4" placeholder="Enter hg" value="<?php if(set_value('hg')){ echo set_value('hg'); }else{ echo $coagulation[0]['hg']; } ?>" name="hg">
                                                        <div class="error"><?=form_error('hg')?></div>
                                                    </div>

                                                    <div class="form-group"> 
                                                        <label class="small mb-1" for="inputEmailAddress">esr</label>
                                                        <input type="text" class="form-control py-4" placeholder="Enter esr" value="<?php if(set_value('esr')){ echo set_value('esr'); }else{ echo $coagulation[0]['esr']; } ?>" name="esr">
                                                        <div class="error"><?=form_error('esr')?></div>
                                                    </div>

                                                    <div class="form-group"> 
                                                        <label class="small mb-1" for="inputEmailAddress">rbc</label>
                                                        <input type="text" class="form-control py-4" placeholder="Enter rbc" value="<?php if(set_value('rbc')){ echo set_value('rbc'); }else{ echo $coagulation[0]['rbc']; } ?>" name="rbc">
                                                        <div class="error"><?=form_error('rbc')?></div>
                                                    </div>

                                                    <div class="form-group"> 
                                                        <label class="small mb-1" for="inputEmailAddress">wbc</label>
                                                        <input type="text" class="form-control py-4" placeholder="Enter wbc" value="<?php if(set_value('wbc')){ echo set_value('wbc'); }else{ echo $coagulation[0]['wbc']; } ?>" name="wbc">
                                                        <div class="error"><?=form_error('wbc')?></div>
                                                    </div>

                                                    <div class="form-group"> 
                                                        <label class="small mb-1" for="inputEmailAddress">platlat</label>
                                                        <input type="text" class="form-control py-4" placeholder="Enter platlat" value="<?php if(set_value('platlat')){ echo set_value('platlat'); }else{ echo $coagulation[0]['platlat']; } ?>" name="platlat">
                                                        <div class="error"><?=form_error('platlat')?></div>
                                                    </div>

                                                    <div class="form-group"> 
                                                        <label class="small mb-1" for="inputEmailAddress">neutro</label>
                                                        <input type="text" class="form-control py-4" placeholder="Enter neutro" value="<?php if(set_value('neutro')){ echo set_value('neutro'); }else{ echo $coagulation[0]['neutro']; } ?>" name="neutro">
                                                        <div class="error"><?=form_error('neutro')?></div>
                                                    </div>

                                                    <div class="form-group"> 
                                                        <label class="small mb-1" for="inputEmailAddress">lympho</label>
                                                        <input type="text" class="form-control py-4" placeholder="Enter lympho" value="<?php if(set_value('lympho')){ echo set_value('lympho'); }else{ echo $coagulation[0]['lympho']; } ?>" name="lympho">
                                                        <div class="error"><?=form_error('lympho')?></div>
                                                    </div>

                                                    <div class="form-group"> 
                                                        <label class="small mb-1" for="inputEmailAddress">mono</label>
                                                        <input type="text" class="form-control py-4" placeholder="Enter mono" value="<?php if(set_value('mono')){ echo set_value('mono'); }else{ echo $coagulation[0]['mono']; } ?>" name="mono">
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
                
    
            