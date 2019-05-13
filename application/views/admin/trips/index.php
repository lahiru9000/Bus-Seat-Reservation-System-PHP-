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
                                    <th>Departure Date</th>
                                    <th>Arrival Date</th>
                                    <th>Departure Time</th>
                                    <th>Arrival Time</th>
                                    <th>Duration</th>
                                    <th>Bus Id</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Departure Date</th>
                                    <th>Arrival Date</th>
                                    <th>Departure Time</th>
                                    <th>Arrival Time</th>
                                    <th>Duration</th>
                                    <th>Bus Id</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach ($trips as $trip) : ?>
                                    <tr>
                                        <td><?php echo $trip['departure_date']; ?></td>
                                        <td><?php echo $trip['arrival_date']; ?></td>
                                        <td><?php echo $trip['departure_time']; ?></td>
                                        <td><?php echo $trip['arrival_time']; ?></td>
                                        <td><?php echo $trip['duration']; ?></td>
                                        <td><?php echo $trip['bus_id']; ?></td>
                                        <td>
                                            <a href="<?php echo base_url('Trips/delete/' . $trip['id'] . '/' . $trip['bus_id']); ?>" class="btn btn-sm btn-danger">Delete</a>
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