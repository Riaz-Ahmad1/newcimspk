<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Student;
use App\Models\ChallanReason;
use DB;

class SearchController extends Controller
{
    //
        // search bar
        public function showsearchBar(){

          $challandata = ChallanReason::all();
            return view('admin.student.search')->with('challanData',$challandata);
         }
        
         public function edit($id)
         {
             $data = Student::findOrFail($id);
             return response()->json([
                'status'=>200,
                'data'=>$data,
             ]);
         }

         public function search(Request $request)
         {
         if($request->ajax())
         {
         $output="";
        //  $products=DB::table('posts')->where('id','LIKE','%'.$request->search."%")->get();
        $products = Student::where('rollno', 'like', '%'.$request->search."%")
            ->orWhere('name', 'like', '%'.$request->search."%")
            ->get();
         if($products)
         {
             return response()->json(['details' => $products]);
            }
            }
         }

         public function store(Request $request)
         {
             
            //  $validatedData = $request->validate([
            //          'sid'=> 'required',
            //          'rollno'=>'required',
            //          'name'=>'required',
            //          'class'=>'required',
            //          'reason'=>'required',
            //          'fine'=>'required',
            //          'today_date'=>'required',        
            //      ]);
    
          //  $existingUser = Student::where('sid', $request->sid)->first();
          //  if ($existingStudent) {
          //    # code...
          //    return response()->json(['message' => 'Student with the same roll number already exists'], 400);
     
          //  } else {
             # code...
             $newData = new Student();
            //  $newData->sid = $validatedData['sid'];
            //  $newData->rollno = $validatedData['rollno'];
            //  $newData->name = $validatedData['name'];
            //  $newData->class = $validatedData['class'];
            //  $newData->reason = $validatedData['reason'];
            //  $newData->fine = $validatedData['fine'];
            //  $newData->today_date = $validatedData['today_date'];

            $newData->sid = $request->input('sid');
            $newData->rollno = $request->input('rollno');
            $newData->name = $request->input('name');
            $newData->class = $request->input('class');
            $newData->reason = $request->input('reason');
            $newData->fine = $request->input('fine');
            $newData->today_date = $request->input('today_date');

             $newData->save();
             
            //  return response()->json(['message' => 'Data inserted successfully']);
             return redirect()->back()->with('status','Data inserted successfully');
           }
           
     
        //  }

         

     
         


}
