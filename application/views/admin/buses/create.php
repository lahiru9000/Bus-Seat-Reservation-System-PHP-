<!-- PAGE CONTENT -->
<div class="content-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-block">
                        <legend class="text-bold">Add Bus</legend>
                        <fieldset class="content-group">

                            <?php echo validation_errors(); ?>
                            <?php echo form_open('Buses/create'); ?>
                            <div class="form-group row margin-top-10">
                                <div class="col-md-2">
                                    <label class="control-label col-form-label">Bus Number</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="busNo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label class="control-label col-form-label">Name</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label class="control-label col-form-label">No of Seats</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="number" class="form-control" name="noOfSeats">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label class="control-label col-form-label">Type</label>
                                </div>
                                <div class="col-md-10">
                                    <select name="type" class="form-control">
                                        <option value="Normal">Normal</option>
                                        <option value="Semi Luxury">Semi Luxury</option>
                                        <option value="Luxury">Luxury</option>
                                        <option value="Super Luxury">Super Luxury</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label class="control-label col-form-label">Facilities</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="facilities" placeholder="Use comma seperators">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-10">
                                    <input type="hidden" class="form-control" name="availability" value="available">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label class="control-label col-form-label">Route Number</label>
                                </div>
                                <div class="col-md-10">
                                    <select name="routeId" class="form-control">
                                        <?php foreach ($routes as $route) : ?>
                                            <option value="<?php echo $route['id']; ?>"><?php echo $route['route_number'] . "&nbsp&nbsp&nbsp&nbsp&nbsp" . $route['start_location'] . "=>" . $route['end_location']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Save</button>
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