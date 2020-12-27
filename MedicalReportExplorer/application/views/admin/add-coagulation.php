
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">

                        <div class="col-md-6 offset-3">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h2 class="text-center font-weight-light my-4">Add Coagulation</h2></div>
                                    <div class="card-body">
                                        <?=$this->session->flashdata('success')?>
                                                <form action="" method="post">

                                                    <div class="form-group"> 
                                                        <label class="small mb-1" for="inputEmailAddress">hb</label>
                                                        <input type="text" class="form-control py-4" placeholder="Enter hb" value="<?=set_value('hb')?>" name="hb">
                                                        <div class="error"><?=form_error('hb')?></div>
                                                    </div>

                                                    <div class="form-group"> 
                                                        <label class="small mb-1" for="inputEmailAddress">esr</label>
                                                        <input type="text" class="form-control py-4" placeholder="Enter esr" value="<?=set_value('esr')?>" name="esr">
                                                        <div class="error"><?=form_error('esr')?></div>
                                                    </div>

                                                    <div class="form-group"> 
                                                        <label class="small mb-1" for="inputEmailAddress">rbc</label>
                                                        <input type="text" class="form-control py-4" placeholder="Enter rbc" value="<?=set_value('rbc')?>" name="rbc">
                                                        <div class="error"><?=form_error('rbc')?></div>
                                                    </div>

                                                    <div class="form-group"> 
                                                        <label class="small mb-1" for="inputEmailAddress">wbc</label>
                                                        <input type="text" class="form-control py-4" placeholder="Enter wbc" value="<?=set_value('wbc')?>" name="wbc">
                                                        <div class="error"><?=form_error('wbc')?></div>
                                                    </div>

                                                    <div class="form-group"> 
                                                        <label class="small mb-1" for="inputEmailAddress">platlat</label>
                                                        <input type="text" class="form-control py-4" placeholder="Enter platlat" value="<?=set_value('platlat')?>" name="platlat">
                                                        <div class="error"><?=form_error('platlat')?></div>
                                                    </div>

                                                    <div class="form-group"> 
                                                        <label class="small mb-1" for="inputEmailAddress">neutro</label>
                                                        <input type="text" class="form-control py-4" placeholder="Enter neutro" value="<?=set_value('neutro')?>" name="neutro">
                                                        <div class="error"><?=form_error('neutro')?></div>
                                                    </div>

                                                    <div class="form-group"> 
                                                        <label class="small mb-1" for="inputEmailAddress">lympho</label>
                                                        <input type="text" class="form-control py-4" placeholder="Enter lympho" value="<?=set_value('lympho')?>" name="lympho">
                                                        <div class="error"><?=form_error('lympho')?></div>
                                                    </div>

                                                    <div class="form-group"> 
                                                        <label class="small mb-1" for="inputEmailAddress">mono</label>
                                                        <input type="text" class="form-control py-4" placeholder="Enter mono" value="<?=set_value('mono')?>" name="mono">
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
                
    
            