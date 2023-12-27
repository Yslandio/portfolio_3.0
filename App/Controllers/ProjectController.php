<?php

use App\Models\Project;

class ProjectController
{
    public function index()
    {
        $projects = Project::get();

        return json_encode(['projects' => $projects]);
    }

    public function getProjects()
    {
        $projects = Project::get();

        return json_encode(['projects' => $projects]);
    }
}
