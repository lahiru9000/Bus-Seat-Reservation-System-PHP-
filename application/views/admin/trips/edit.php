<!-- PAGE CONTENT -->
<div class="content-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-block">
                        <legend class="text-bold">Add Trips</legend>
                        <fieldset class="content-group">

                            <?php echo validation_errors(); ?>
                            <?php echo form_open('Trips/create'); ?>
                            <div class="form-group row margin-top-10">
                                <div class="col-md-2">
                                    <label class="control-label col-form-label">Departure Date</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="date" class="form-control" name="dDate" value="<?php echo $trip['departure_date']; ?>">
                                </div>
                            </div>
                            <div class="form-group row margin-top-10">
                                <div class="col-md-2">
                                    <label class="control-label col-form-label">Arrival Date</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="date" class="form-control" name="aDate" value="<?php echo $trip['arrival_date']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label class="control-label col-form-label">Departure Time</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="dTime" value="<?php echo $trip['departure_time']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label class="control-label col-form-label">Arrival Time</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="aTime" value="<?php echo $trip['arrival_time']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label class="control-label col-form-label">Duration</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="duration" value="<?php echo $trip['duration']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label class="control-label col-form-label">Bus Number</label>
                                </div>
                                <div class="col-md-10">
                                    <select name="busId">
                                        <option value="<?php echo $bus['id']; ?>"><?php echo $bus['bus_number']; ?></option>
                                        <?php foreach ($buses as $bus) : ?>
                                            <option value="<?php echo $bus['id']; ?>"><?php echo $bus['bus_number']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <button type="reset" class="btn btn-warning">Clear</button>
                                </div>
                            </div>
                            </form>

                        </fieldset>

                        <legend class="text-bold">Validation States</legend>
                        <fieldset class="content-group">
                            <div class="form-group has-success">
                                <label class="form-control-label" for="inputSuccess1">Input with
                                    success</label>
                                <input type="text" class="form-control form-control-success" id="inputSuccess1">
                                <div class="form-control-feedback">Success! You've done it.</div>
                            </div>

                            <div class="form-group has-warning">
                                <label class="form-control-label" for="inputWarning1">Input with
                                    warning</label>
                                <input type="text" class="form-control form-control-warning" id="inputWarning1">
                                <div class="form-control-feedback">Shucks, check the formatting of that and
                                    try again.</div>
                            </div>

                            <div class="form-group has-danger">
                                <label class="form-control-label" for="inputDanger1">Input with
                                    danger</label>
                                <input type="text" class="form-control form-control-danger" id="inputDanger1">
                                <div class="form-control-feedback">Sorry, that username's taken. Try
                                    another?</div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /PAGE CONTENT -->
</div>
</div>

</body>

</html>