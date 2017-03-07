<?php

namespace app\Http\Controllers;

use app\JobApplication;
use Illuminate\Http\Request;

class ApplyController extends Controller
{
	public function __construct()
	{

	}

	public function index()
	{
		return view('/');
	}

	public function create()
	{
		$jobapplication = new JobApplication();
		if(count( $jobapplication->all()) < 4)
			return view('apply');
		else
			return view('/welcome')->with('message', 'closed');
	}

	public function preview()
	{
		$jobapplication = new JobApplication();
		if(count( $jobapplication->all()) < 4)
			return view('apply');
		else
			return view('/welcome')->with('message', 'closed');
	}

	public function applicants()
	{
		$jobapplication = new JobApplication();
		$jobapplications=  $jobapplication->all();
		return view('list')->with('jobapplications',$jobapplications);
	}

	public function store(Request $request) {

		$this->validate($request, [
			'firstname' => 'required',
			'surname' => 'required',
			'phonenum' => 'required',
			'email' => 'required|email',
			'image' => 'required|image|mimes:jpeg,jpg|max:2048'
		]);

		$extension = $request['image']->getClientOriginalExtension(); // get the image extension
		$fileName = rand(11111,99999).'.'.$extension; // rename the image
		$request['image']->move(public_path('uploads'), $fileName); // upload file to uploads directory in public

		$jobapplication = new JobApplication();
		$jobapplication->firstname = $request->get('firstname');
		$jobapplication->surname = $request->get('surname');
		$jobapplication->phonenum = $request->get('phonenum');
		$jobapplication->email = $request->get('email');
		$jobapplication->image = $fileName;

		$jobapplication->save();

		return view('/welcome')->with('message', 'applied');

	}
}
