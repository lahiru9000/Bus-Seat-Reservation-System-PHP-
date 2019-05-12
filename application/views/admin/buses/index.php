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
                                    <th>Bus Number</th>
                                    <th>Bus Name</th>
                                    <th>Number of Seats</th>
                                    <th>Type</th>
                                    <th>Facilities</th>
                                    <th>Availability</th>
                                    <th>Route Id</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Bus Number</th>
                                    <th>Bus Name</th>
                                    <th>Number of Seats</th>
                                    <th>Type</th>
                                    <th>Facilities</th>
                                    <th>Availability</th>
                                    <th>Route Id</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach ($buses as $bus) : ?>
                                    <tr>
                                        <td><?php echo $bus['bus_number']; ?></td>
                                        <td><?php echo $bus['name']; ?></td>
                                        <td><?php echo $bus['no_of_seats']; ?></td>
                                        <td><?php echo $bus['type']; ?></td>
                                        <td><?php echo $bus['facilities']; ?></td>
                                        <td><?php echo $bus['availability']; ?></td>
                                        <td><?php echo $bus['route_id']; ?></td>
                                        <td>
                                            <a href="<?php echo base_url('Buses/edit/' . $bus['id']); ?>" class="btn btn-sm btn-warning">Edit</a>
                                            <a href="<?php echo base_url('Buses/delete/' . $bus['id']); ?>" class="btn btn-sm btn-danger">Delete</a>
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