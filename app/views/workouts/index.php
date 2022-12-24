<?php require APPROOT . '/views/inc/header.php'; ?>
    <?php flash('workout_message'); ?>
    <div class="mt-2">
        <a class="btn btn-secondary" role="button" href="<?php echo URLROOT; ?>/workouts/add">
            <i class="fa fa-plus"></i> Add Workout
        </a>
    </div>
    <div class="card mt-2">
        <div class="card-header">
            Workout Liste
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                <tr>
                    <th class="text-center" style="width: 50px;">ID</th>
                    <th class="text-left">Name</th>
                    <th class="text-left">Datum</th>
                    <th class="text-center" style="width: 50px;">Edit</th>
                    <th class="text-center" style="width: 50px;">Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($data['workouts'] as $work) : ?>
                    <tr>
                        <td class="text-center"><?php echo htmlspecialchars($work->workout_id); ?></td>
                        <td><?php echo htmlspecialchars($work->name); ?></td>
                        <td><?php echo date('d.m.Y', strtotime(htmlspecialchars($work->datum))); ?></td>
                        <td class="text-center">
                            <a class="btn-sm btn-secondary" role="button"
                               href="<?php echo URLROOT; ?>/workouts/update/<?php echo htmlspecialchars($work->workout_id); ?>">
                                <i class="fa fa-pencil"></i>
                            </a>
                        </td>
                        <td class="text-center">
                            <a class="btn-sm btn-secondary" role="button"
                               href="<?php echo URLROOT; ?>/workouts/delete/<?php echo htmlspecialchars($work->workout_id); ?>">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

<?php require APPROOT . '/views/inc/footer.php'; ?>