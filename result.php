
<section id="order-tracking" class="section-padding-80">
        <div class="container">
            <!-- Row -->
            <div class="row">
                <div class="col-sm-12 col-xs-12 col-md-12">
                        <div class="block-content">
        <div class="table-responsive">
            <table class="table table-clean-paddings margin-bottom-0">
                <thead>
                    <tr>
                        <th>Customer</th>
                        <th>Shipped From</th>
                        <th>Tracking ID</th>
                        <th>Recipient</th>
                         <th>Destination</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                           <div class="contact-container"><a href="#"><?php echo $row['customer'];?></a> <span>on <?php  
    $str = $row['date_time'];
     echo date('F Y', strtotime($str));
 ?></span></div>
                        </td>
                        <td><?php echo $row['from_location'];?></td>
                          <td><?php echo $row['tracking'];?></td>
                            <td><?php echo $row['receiver'];?></td>
                            <td><?php echo $row['to_location'];?></td>
                            <td><?php echo $row['status'];?></td>
                    </tr>
                   
                </tbody>
            </table>
        </div>
    </div>
                    <!-- Tracking History End -->
                </div>
            </div>
            <!-- Row End -->
        </div>
        <!-- end container -->
    </section> 