<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentManagement extends Controller
{
    public function allStudentData(){
    	$data= Student::all();
    	return view('home', compact('data'));
    }
    public function addNewStudent(){
    	return view('add-student');
    }
    public function studentProfile($id){
		$data = Student::find($id);
		return view('profile', compact('data'));
    }
    public function deleteStudent($id){		
		$delete_student_data = Student::find($id);
		$delete_student_data -> delete();
		return redirect() -> back();
    }
    public function editStudent($id){
    	$data=Student::find($id);
    	return view('edit-student', compact('data'));
    }
    public function saveToDatabase(Request $value){
    	//Validation of Data received from FORM
    	$this -> validate($value,[
            'sname' => 'required | min:5',
            'semail' => 'required | email',
            'sins' => 'required',
            'sbatch' => 'required | max:3',
            'sphone' => 'required | integer',
            'sphoto' => 'required | image',
        ]);
    	
    	//PhotoManagemenet
    	$tmp_photo_name=$value ->file('sphoto');
    	$photo_name= md5(rand().time()) . "." . $tmp_photo_name -> getClientOriginalExtension();
    	$tmp_photo_name -> move(public_path('student_photos'),$photo_name);

    	//Send to Database
    	$sendData= new Student([
    		'name' => $value ->get('sname'),
    		'email' => $value ->get('semail'),
    		'institution' => $value ->get('sins'),
    		'batch' => $value ->get('sbatch'),
    		'phone' => $value ->get('sphone'),
    		'photo' =>$photo_name,
    	]);

    	$sendData -> save();
    	return redirect() -> back();




    }
    public function updateDatabase(Request $value, $id){
    	$data=Student::find($id);
    	$data -> name = $value -> get('sname');
    	$data -> email = $value -> get('semail');
    	$data -> institution = $value -> get('sins');
    	$data -> batch = $value -> get('sbatch');
    	$data -> phone = $value -> get('sphone');
    	$data -> save();
    	return redirect() -> back();
    	
    }
}
