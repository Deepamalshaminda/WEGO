<?php
class Attendencechild
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getChildById($id)
    {
        $this->db->query('SELECT * FROM child WHERE ch_id = :id');
        $this->db->bind(':id', $id);
        $child = $this->db->single();
        return $child;
    }

    public function getChildren()
    {

        $user_id = $_SESSION['user_id'];
        
        $this->db->query('SELECT * FROM parent WHERE us_id = :user_id');
        $this->db->bind(':user_id', $user_id);
        $result = $this->db->single();
        if (empty($result)) {
            return false;
        } else {
            $pr_id = $result->pr_id;
            $this->db->query('SELECT *  FROM child WHERE pr_id = :pr_id');
            $this->db->bind(':pr_id', $pr_id);
            $results = $this->db->resultSet();

            if (empty($results)) {
                return false;
            } else {
                return $results;
            }
        }
    }

    public function getAttendance($id)
    {
        $today_date = date("Y-m-d");
        $this->db->query('SELECT * FROM student_attendance WHERE studentid = :studentid AND attendancedate = :today_date');
        $this->db->bind(':studentid', $id);
        $this->db->bind(':today_date', $today_date);
        $result = $this->db->single();
        if (empty($result)) {
            $result = 0;
        } else {
            if ($result->mark == 1) {
                $result = 1;
            } else {
                $result = 0;
            }
        }

        return $result;
    }

    public function markAttendance($id)
    {
        $today_date = date("Y-m-d");
        $this->db->query('SELECT * FROM student_attendance WHERE studentid = :studentid AND attendancedate = :today_date');
        $this->db->bind(':studentid', $id);
        $this->db->bind(':today_date', $today_date);
        $result = $this->db->single();
        if (!empty($result)) {
            if ($result->mark == 1) {
                return false;
            } else {
                $this->db->query('UPDATE student_attendance SET mark = :mark WHERE studentid = :studentid AND attendancedate = :today_date');
                $this->db->bind(':studentid', $id);
                $this->db->bind(':today_date', $today_date);
                $this->db->bind(':mark', 1);
                $this->db->execute();
                return true;
            }
        } else {
            $this->db->query('INSERT INTO student_attendance (studentid, attendancedate, mark) VALUES (:studentid, :today_date, :mark)');
            $this->db->bind(':studentid', $id);
            $this->db->bind(':today_date', $today_date);
            $this->db->bind(':mark', 1);
            $this->db->execute();
            return true;
        }
    }

    public function getMonthlyAttendance($yearMonth, $id)
    {
        $this->db->query('SELECT COUNT(*) FROM student_attendance WHERE studentid = :studentid AND attendancedate LIKE :yearMonth');
        $this->db->bind(':studentid', $id);
        $this->db->bind(':yearMonth', $yearMonth . '%');
        $results = $this->db->resultSet();
        $countObject = $results[0];  // Assuming $results is an array containing the query result
        $count = (int) $countObject->{"COUNT(*)"};
        return $count;
    }
}
