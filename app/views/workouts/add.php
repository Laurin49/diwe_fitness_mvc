<?php require APPROOT . '/views/inc/header.php'; ?>
    <div class="mt-2">
        <a class="btn btn-secondary" role="button" href="<?php echo URLROOT; ?>/workouts/index">
            <i class="fa fa-backward"></i> Back
        </a>
    </div>
    <div class="card mt-2">
        <div class="card-header">
            <span class="pull-none">Add Workout</span>
        </div>
        <div class="card-body bg-light">
            <form action="<?php echo URLROOT; ?>/workouts/add" method="post">
                <input type="hidden" id="mode" name="mode" value="null">
                <div class="form-group mt-2 col-4">
                    <label for="workout_id">ID:</label>
                    <input type="text" name="workout_id" id="workout_id" class="form-control" value="AUTO" disabled>
                </div>
                <div class="form-group mt-2 col-8">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $data['name']; ?>">
                </div>
                <div class="form-group mt-2 col-8">
                    <label for="datum">Datum:</label>
                    <input type="date" name="datum" id="datum" class="form-control" pattern="dd.mm.YYYY"
                           value="<?php echo $data['datum']; ?>">
                </div>
                <div class="row">
                    <div class="col">
                        <div class="text-end">
                            <input class="btn btn-primary pull-right" type="submit" name="submit" value="Add Workout" />
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>