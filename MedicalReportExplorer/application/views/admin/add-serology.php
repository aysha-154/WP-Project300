
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">

                        <div class="col-md-6 offset-3">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h2 class="text-center font-weight-light my-4">Add Serology</h2></div>
                                    <div class="card-body">
                                        <?=$this->session->flashdata('success')?>
                                                <form action="" method="post">

                                                    <div class="form-group"> 
                                                        <label class="small mb-1" for="inputEmailAddress">prolactin</label>
                                                        <input type="text" class="form-control py-4" placeholder="Enter prolactin" value="<?=set_value('prolactin')?>" name="prolactin">
                                                        <div class="error"><?=form_error('prolactin')?></div>
                                                    </div>

                                                    <div class="form-group"> 
                                                        <label class="small mb-1" for="inputEmailAddress">tsh</label>
                                                        <input type="text" class="form-control py-4" placeholder="Enter tsh" value="<?=set_value('tsh')?>" name="tsh">
                                                        <div class="error"><?=form_error('tsh')?></div>
                                                    </div>

                                                    <div class="form-group"> 
                                                        <label class="small mb-1" for="inputEmailAddress">hbsag</label>
                                                        <input type="text" class="form-control py-4" placeholder="Enter hbsag" value="<?=set_value('hbsag')?>" name="hbsag">
                                                        <div class="error"><?=form_error('hbsag')?></div>
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
                
    
            