
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">

                        <div class="col-md-6 offset-3">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h2 class="text-center font-weight-light my-4">View Complete Blood Count</h2></div>
                                    <div class="card-body">

                                        <table  class="table table-responsive">
            
                                            <tr>
                                                
                                                <th>hb</th>
                                                <th>mcv</th>
                                                <th>rbc</th>
                                                <th>wbc</th>
                                                <th>neutro</th>
                                                <th>lympho</th>
                                                <th>mono</th>
                                                <th>Edit</th>
                                            </tr>

                                            <?php  foreach ($blood as $blood) {  ?>
                                                 
                                            

                                            <tr>
                                                
                                                <td><?=$blood['hb']?></td>
                                                <td><?=$blood['mcv']?></td>
                                                <td><?=$blood['rbc']?></td>
                                                <td><?=$blood['wbc']?></td>
                                                <td><?=$blood['neutro']?></td>
                                                <td><?=$blood['lympho']?></td>
                                                <td><?=$blood['mono']?></td>
                                                
                                                <td><a href="<?=base_url()?>Admin/edit-blood/<?=$blood['id']?>"><button class="btn btn-success">Edit</button></a></td>
                                            </tr>

                                            <?php } ?>
                                                
                                        </table>
                                        
                                    </div>
                                </div>


                                
                                </div>
                         
                    </div>
                </main>
                
    
            