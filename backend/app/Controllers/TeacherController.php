<?php

namespace App\Controllers;

use App\Models\TeacherModel;
use CodeIgniter\RESTful\ResourceController;

class TeacherController extends ResourceController
{
    public function create()
    {
        $teacherModel = new TeacherModel();

        $data = $this->request->getJSON(true);

        $teacherModel->insert([
            'user_id' => $data['user_id'],  // AuthUser table se linked
            'university_name' => $data['university_name'],
            'gender' => $data['gender'],
            'year_joined' => $data['year_joined'],
        ]);

        return $this->respond(['message' => 'Teacher added successfully']);
    }

    public function list()
    {
        $teacherModel = new TeacherModel();
        $teachers = $teacherModel->findAll();

        return $this->respond($teachers);
    }
}
