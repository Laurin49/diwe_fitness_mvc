<?php
class Workouts extends Controller {
    public function __construct()
    {
        $this->workoutModel = $this->model('Workout');
    }

    public function index() {
        $workouts = $this->workoutModel->readAll();
        $data = [
            'workouts' => $workouts
        ];
        $this->view('workouts/index', $data);
    }

    public function add() {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'name' => trim($_POST['name']),
                'datum' => trim($_POST['datum']),
                'name_err' => '',
                'datum_err' => ''
            ];

            // Validate data
            if(empty($data['name'])){
                $data['name_err'] = 'Please enter name';
            }
            if(empty($data['datum'])){
                $data['datum_err'] = 'Please enter valid date';
            }
            if(empty($data['name_err']) && empty($data['datum_err'])) {
                // Validated
                if ($this->workoutModel->create($data)) {
                    redirect('workouts');
                } else {
                    die('Something went wrong adding new Workout');
                }
            } else {
                $this->view('workouts/add', $data);
            }
        } else {
            $data = [
                'name' => '',
                'datum' => date('Y-m-d', strtotime("now"))
            ];
            $this->view('workouts/add', $data);
        }
    }

    public function update($id) {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'workout_id' => $id,
                'name' => trim($_POST['name']),
                'datum' => trim($_POST['datum']),
                'name_err' => '',
                'datum_err' => ''
            ];
            // Validate data
            if(empty($data['name'])){
                $data['name_err'] = 'Please enter name';
            }
            if(empty($data['datum'])){
                $data['datum_err'] = 'Please enter valid date';
            }
            if(empty($data['name_err']) && empty($data['datum_err'])) {
                // Validated
                if ($this->workoutModel->update($data)) {
                     redirect('workouts');
                } else {
                    die('Something went wrong updating Workout');
                }
            } else {
                $this->view('workouts/update', $data);
            }
        } else {
            $workout = $this->workoutModel->readWorkoutById($id);
            $data = [
                'workout_id' => $id,
                'name' => $workout->name,
                'datum' => $workout->datum
            ];
            $this->view("workouts/update", $data);
        }
    }

    public function delete($id)
    {
        $workout = $this->workoutModel->readWorkoutById($id);
        if ($this->workoutModel->delete($id)) {
            redirect('workouts');
        } else {
            die('Something went wrong deleting Workout');
        }
    }
}