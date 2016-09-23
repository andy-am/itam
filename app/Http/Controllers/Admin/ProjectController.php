<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Project;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function doShowProject($id)
    {
        $project = Project::findOrFail($id);
        $project->active = 1;
        if($project->save()){
            return response()->json(['error' => false, 'message' => 'Project active has been changed on show. ' ]);
        }else{
            return response()->json(['id' => $id, 'message' => 'Project active has not been changed']);
        }

    }

    public function doHideProject($id)
    {
        $project = Project::findOrFail($id);
        $project->active = 0;
        if($project->save()){
            return response()->json(['error' => false, 'message'=>'Project active has been changed on hide.' ]);
        }else{
            return response()->json(['id' => $id, 'message' => 'Project active has not been changed']);
        }
    }


    public function addNewProject()
    {
        return view('administration.project.addNewProject');
    }

    public function storeNewProject(Request $request)
    {
        $project = new Project();
        $id = $project->create($request->all())->id;
        if($request->hasFile('img')){

            $extension = $request->file('img')->getClientOriginalExtension();
            $days = date("Ymd");
            $secs = date("His", strtotime('+1 hour'));
            $imgName = "project_id_".$id."_".$days."_".$secs.".".$extension;
            $path = public_path() . '/upload/projects';
            $image = $request->file('img');
            $request->file('img')->move( $path, $imgName);
            $image = Project::find($id);
            $image->image = $imgName;
            $image->save();
        }

        return redirect('/administration/project/showAllProjects');

    }

    public function updateProject(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        $project->update( $request->all() );
        return redirect('/administration/project/showAllProjects');
    }

    public function showAllProjects()
    {
        return view('administration.project.showAllProjects');
    }

    public function showProject($id)
    {
        $project = Project::findOrFail($id);
        return view('administration.project.showProject')->with('project', $project);
    }

    public function deleteProject($id)
    {
        $project = Project::findOrFail($id);
        return $id;
        //return view('administration.project.showProject')->with('project', $project);
    }
}
