<?php
class Workout {
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function readAll() {
        $sql = "SELECT * FROM workouts ORDER BY datum";
        $this->db->query($sql);
        $results = $this->db->resultSet();
        return $results;
    }

    public function create($data) {
        $sql = "INSERT INTO workouts (name, datum) VALUES (:name, :datum)";
        $this->db->query($sql);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':datum', $data['datum']);
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

    public function update($data) {
        $sql = "UPDATE workouts SET name = :name, datum = :datum WHERE workout_id = :workout_id";
        $this->db->query($sql);
        $this->db->bind(':workout_id', $data['workout_id']);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':datum', $data['datum']);
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

    public function readWorkoutById($id) {
        $sql = "SELECT * FROM workouts WHERE workout_id = :workout_id";
        $this->db->query($sql);
        $this->db->bind(':workout_id', $id);
        $row = $this->db->single();
        return $row;
    }

    public function delete($id) {
        $sql = "DELETE FROM workouts WHERE workout_id = :workout_id";
        $this->db->query($sql);
        $this->db->bind(':workout_id', $id);
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
}