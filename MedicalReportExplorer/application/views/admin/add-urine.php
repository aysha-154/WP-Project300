
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">

                        <div class="col-md-6 offset-3">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h2 class="text-center font-weight-light my-4">Add Urine R/ME</h2></div>
                                    <div class="card-body">
                                        <?=$this->session->flashdata('success')?>
                                                <form action="" method="post">

                                                    <div class="form-group"> 
                                                        <label class="small mb-1" for="inputEmailAddress">color</label>
                                                        <input type="text" class="form-control py-4" placeholder="Enter color" value="<?=set_value('color')?>" name="color">
                                                        <div class="error"><?=form_error('color')?></div>
                                                    </div>

                                                    <div class="form-group"> 
                                                        <label class="small mb-1" for="inputEmailAddress">apprnc</label>
                                                        <input type="text" class="form-control py-4" placeholder="Enter apprnc" value="<?=set_value('apprnc')?>" name="apprnc">
                                                        <div class="error"><?=form_error('apprnc')?></div>
                                                    </div>

                                                    <div class="form-group"> 
                                                        <label class="small mb-1" for="inputEmailAddress">gravity</label>
                                                        <input type="text" class="form-control py-4" placeholder="Enter gravity" value="<?=set_value('gravity')?>" name="gravity">
                                                        <div class="error"><?=form_error('gravity')?></div>
                                                    </div>

                                                    <div class="form-group"> 
                                                        <label class="small mb-1" for="inputEmailAddress">ph</label>
                                                        <input type="text" class="form-control py-4" placeholder="Enter ph" value="<?=set_value('ph')?>" name="ph">
                                                        <div class="error"><?=form_error('ph')?></div>
                                                    </div>

                                                    <div class="form-group"> 
                                                        <label class="small mb-1" for="inputEmailAddress">bilirbn</label>
                                                        <input type="text" class="form-control py-4" placeholder="Enter bilirbn" value="<?=set_value('bilirbn')?>" name="bilirbn">
                                                        <div class="error"><?=form_error('bilirbn')?></div>
                                                    </div>

                                                    <div class="form-group"> 
                                                        <label class="small mb-1" for="inputEmailAddress">nitrt</label>
                                                        <input type="text" class="form-control py-4" placeholder="Enter nitrt" value="<?=set_value('nitrt')?>" name="nitrt">
                                                        <div class="error"><?=form_error('nitrt')?></div>
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
                
    
            