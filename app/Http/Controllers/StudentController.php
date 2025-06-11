<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use PHPUnit\Framework\MockObject\Builder\Stub;

class StudentController extends Controller
{
    //
    function add(Request $req)
    {
        $stu = new Student();
        $stu->name = $req->name;
        $stu->email = $req->email;
        $stu->phone = $req->phone;
        $stu->save();

        if ($stu) {
            return redirect('list');
        } else {
            echo "operation failed";
        }
    }

    function list()
    {
        //$studentData = Student::get();
        $studentData = Student::paginate(4);
        return view('list-student', ['data' => $studentData]);
    }

    function delete($id)
    {
        //echo $id;
        $isDeleted = Student::destroy($id);
        if ($isDeleted) {
            return redirect('list');
        }
    }

    function edit($id)
    {
        $student = Student::find($id);
        return view('edit-student', ['data' => $student]);
    }

    function editStudent(Request $req, $id)
    {
        $student = Student::find($id);
        $student->name = $req->name;
        $student->email = $req->email;
        $student->phone = $req->phone;

        if ($student->save()) {
            return redirect('list');
        } else {
            return "Update Opration Failed";
        }
    }

    function search(Request $req){
        $studentData=Student::where('name','like',"%$req->search%")->get();
        //dd( $studentData);
        return view('list-student',['data'=>$studentData,'searchName'=>$req->search]);
        //return $studentData;
        //return $req;
    }

    function deleteMultiple(Request $req){
        $result=Student::destroy($req->ids);
        if ($result) {
            return redirect('list');
        } else {
            echo "Students Data Not deleted";
        }
        
        //return $req->ids;
    }
}
