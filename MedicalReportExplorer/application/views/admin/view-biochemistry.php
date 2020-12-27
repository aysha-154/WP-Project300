
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">

                        <div class="col-md-6 offset-3">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h2 class="text-center font-weight-light my-4">View Biochemistry</h2></div>
                                    <div class="card-body">

                                        <table  class="table table-responsive">
            
                                            <tr>
                                                
                                                <th>rbs</th>
                                                <th>Edit</th>
                                            </tr>

                                            <?php  foreach ($biochemistry as $biochemistry) {  ?>
                                                 
                                            

                                            <tr>
                                                
                                                <td><?=$biochemistry['rbs']?></td>
                                                
                                                <td><a href="<?=base_url()?>Admin/edit-biochemistry/<?=$biochemistry['id']?>"><button class="btn btn-success">Edit</button></a></td>
                                            </tr>

                                            <?php } ?>
                                                
                                        </table>
                                        
                                    </div>
                                </div>


                                
                                </div>
                         
                    </div>
                </main>
                
    
            