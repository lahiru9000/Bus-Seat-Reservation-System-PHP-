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
                                    <input type="date" class="form-control" name="dDate">
                                </div>
                            </div>
                            <div class="form-group row margin-top-10">
                                <div class="col-md-2">
                                    <label class="control-label col-form-label">Arrival Date</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="date" class="form-control" name="aDate">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label class="control-label col-form-label">Departure Time</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="dTime">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label class="control-label col-form-label">Arrival Time</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="aTime">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label class="control-label col-form-label">Duration</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="duration">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label class="control-label col-form-label">Bus Number</label>
                                </div>
                                <div class="col-md-10">
                                    <select name="busId" id="busId" class="form-control">
                                        <?php foreach ($buses as $bus) : ?>
                                            <option value="<?php echo $bus['id']; ?>"><?php echo $bus['bus_number']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row" id="routeId"></div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <button id="submitBtn" type="submit" class="btn btn-primary">Save</button>
                                    <button type="reset" class="btn btn-warning">Clear</button>
                                </div>
                            </div>
                            </form>
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

<script type="text/javascript">
    $(document).ready(function() {

        getRouteId();

        function getRouteId() {
            var busId = $('#busId').val();
            $.ajax({
                method: "POST",
                data: {
                    busId: busId
                },
                url: "<?php echo site_url('Trips/getRouteId') ?>",
                success: function(data) {
                    $('#routeId').html(data);
                }
            });
        }

        $('#busId').change(function(){
            getRouteId();
        });
    });
</script>

</body>

</html>