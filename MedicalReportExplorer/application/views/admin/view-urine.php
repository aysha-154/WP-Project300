
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">

                        <div class="col-md-6 offset-3">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h2 class="text-center font-weight-light my-4">View Urine R/ME</h2></div>
                                    <div class="card-body">

                                        <table  class="table table-responsive">
            
                                            <tr>
                                                
                                                <th>color</th>
                                                <th>apprnc</th>
                                                <th>gravity</th>
                                                <th>ph</th>
                                                <th>bilirbn</th>
                                                <th>nitrt</th>
                                                <th>Edit</th>
                                            </tr>

                                            <?php  foreach ($urine as $urine) {  ?>
                                                 
                                            

                                            <tr>
                                                
                                                <td><?=$urine['color']?></td>
                                                <td><?=$urine['apprnc']?></td>
                                                <td><?=$urine['gravity']?></td>
                                                <td><?=$urine['ph']?></td>
                                                <td><?=$urine['bilirbn']?></td>
                                                <td><?=$urine['nitrt']?></td>
                                                
                                                <td><a href="<?=base_url()?>Admin/edit-urine/<?=$urine['id']?>"><button class="btn btn-success">Edit</button></a></td>
                                            </tr>

                                            <?php } ?>
                                                
                                        </table>
                                        
                                    </div>
                                </div>


                                
                                </div>
                         
                    </div>
                </main>
                
    
            