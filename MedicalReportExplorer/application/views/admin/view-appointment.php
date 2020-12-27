
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">

                        
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h2 class="text-center font-weight-light my-4">View Contacts</h2></div>
                                    <div class="card-body">

                                        <table  class="table table-responsive">
            
                                            <tr>
                                                
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Mobile</th>
                                                <th>Date</th>
                                                <th>Doctor</th>
                                                <th>Message</th>
                                                <th>Delete</th>
                                            </tr>

                                            <?php  foreach ($appoint as $appoint) {  ?>
                                                 
                                            

                                            <tr>
                                                
                                                <td><?=$appoint['name']?></td>
                                                <td><?=$appoint['email']?></td>
                                                <td><?=$appoint['mobile']?></td>
                                                <td><?=$appoint['date']?></td>
                                                <td><?=$appoint['doctor']?></td>
                                                <td><?=$appoint['message']?></td>
                                                
                                                <td><a href="<?=base_url()?>Admin/delete-appointment/<?=$appoint['id']?>"><button class="btn btn-danger">Delete</button></a></td>
                                            </tr>

                                            <?php } ?>
                                                
                                        </table>
                                        
                                    </div>
                                </div>

                            
                                
                                
                         
                    </div>
                </main>
                
    
            