
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">

                        <div class="col-md-6 offset-3">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h2 class="text-center font-weight-light my-4">View Serology</h2></div>
                                    <div class="card-body">

                                        <table  class="table table-responsive">
            
                                            <tr>
                                                
                                                <th>prolactin</th>
                                                <th>tsh</th>
                                                <th>hbsag</th>
                                                <th>Edit</th>
                                            </tr>

                                            <?php  foreach ($serology as $serology) {  ?>
                                                 
                                            

                                            <tr>
                                                
                                                <td><?=$serology['prolactin']?></td>
                                                <td><?=$serology['tsh']?></td>
                                                <td><?=$serology['hbsag']?></td>
                                                
                                                <td><a href="<?=base_url()?>Admin/edit-serology/<?=$serology['id']?>"><button class="btn btn-success">Edit</button></a></td>
                                            </tr>

                                            <?php } ?>
                                                
                                        </table>
                                        
                                    </div>
                                </div>


                                
                                </div>
                         
                    </div>
                </main>
                
    
            