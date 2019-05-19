<!-- PAGE CONTENT -->
<div class="content-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-block">
                        <legend class="text-bold">Add Route</legend>
                        <fieldset class="content-group">

                            <?php echo validation_errors(); ?>
                            <?php echo form_open('Routes/create'); ?>
                            <div class="form-group row margin-top-10">
                                <div class="col-md-2">
                                    <label class="control-label col-form-label">Route Number</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="routeNo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label class="control-label col-form-label">Distance</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="number" class="form-control" name="distance">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label class="control-label col-form-label">Start Location</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="start">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label class="control-label col-form-label">End Location</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="end">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label class="control-label col-form-label">destinations</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="destinations" placeholder="Seperate using commas">
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