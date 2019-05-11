<!-- PAGE CONTENT -->
<div class="content-wrapper">
    <div class="content">


        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-block">
                        <h6 class="card-title text-bold">Routes</h6>
                        <p class="content-group">
                            This is the most basic example of the datatables with zero configuration. Use the <code>.datatable</code> class to initialize datatables.
                        </p>
                        <table class="display datatable table table-stripped" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Route Number</th>
                                    <th>Distance</th>
                                    <th>Start Location</th>
                                    <th>End Location</th>
                                    <th>Destinations</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Route Number</th>
                                    <th>Distance</th>
                                    <th>Start Location</th>
                                    <th>End Location</th>
                                    <th>Destinations</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach ($routes as $route) : ?>
                                    <tr>
                                        <td><?php echo $route['route_number']; ?></td>
                                        <td><?php echo $route['distance']; ?></td>
                                        <td><?php echo $route['start_location']; ?></td>
                                        <td><?php echo $route['end_location']; ?></td>
                                        <td><?php echo $route['middle_locations']; ?></td>
                                        <td>
                                            <a href="<?php echo base_url('Routes/edit/' . $route['id']); ?>" class="btn btn-sm btn-warning">Edit</a>
                                            <a href="<?php echo base_url('Routes/delete/' . $route['id']); ?>" class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /PAGE CONTENT -->