<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="mt-2">
    <a class="btn btn-secondary" role="button" href="<?php echo URLROOT; ?>/workouts/index">
        <i class="fa fa-backward"></i> Back
    </a>
</div>
<div class="card mt-2">
    <div class="card-header">
        <span class="pull-none">Update Workout</span>
    </div>
    <div class="card-body bg-light">
        <form action="<?php echo URLROOT; ?>/workouts/update/<?php echo $data['workout_id'];?>" method="post">
            <input type="hidden" id="mode" name="mode" value="<?php echo $data['workout_id'] ?>">
            <div class="form-group mt-2 col-4">
                <label for="workout_id">ID:</label>
                <input type="text" name="workout_id" id="workout_id" class="form-control"
                       value="<?php echo $data['workout_id'] ?>" disabled>
            </div>
            <div class="form-group mt-2 col-8">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control"
                       value="<?php echo $data['name'] ?>">
            </div>
            <div class="form-group mt-2 col-8">
                <label for="datum">Datum:</label>
                <input type="date" name="datum" id="datum" class="form-control"
                       value="<?php echo $data['datum'] ?>">
            </div>
            <div class="form-group mt-4 col-8">
                <div class="text-end">
                    <input class="btn btn-primary btn-md" type="submit" name="submit" value="Update Workout" />
                </div>
            </div>
        </form>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>