
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">

                        <div class="col-md-6 offset-3">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h2 class="text-center font-weight-light my-4">View Coagulation</h2></div>
                                    <div class="card-body">

                                        <table  class="table table-responsive">
            
                                            <tr>
                                                
                                                <th>hg</th>
                                                <th>esr</th>
                                                <th>rbc</th>
                                                <th>wbc</th>
                                                <th>platlat</th>
                                                <th>neutro</th>
                                                <th>lympho</th>
                                                <th>mono</th>
                                                <th>Edit</th>
                                            </tr>

                                            <?php  foreach ($coagulation as $coagulation) {  ?>
                                                 
                                            

                                            <tr>
                                                
                                                <td><?=$coagulation['hg']?></td>
                                                <td><?=$coagulation['esr']?></td>
                                                <td><?=$coagulation['rbc']?></td>
                                                <td><?=$coagulation['wbc']?></td>
                                                <td><?=$coagulation['platlat']?></td>
                                                <td><?=$coagulation['neutro']?></td>
                                                <td><?=$coagulation['lympho']?></td>
                                                <td><?=$coagulation['mono']?></td>
                                                
                                                <td><a href="<?=base_url()?>Admin/edit-coagulation/<?=$coagulation['id']?>"><button class="btn btn-success">Edit</button></a></td>
                                            </tr>

                                            <?php } ?>
                                                
                                        </table>
                                        
                                    </div>
                                </div>


                                
                                </div>
                         
                    </div>
                </main>
                
    
            