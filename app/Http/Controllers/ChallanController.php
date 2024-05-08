<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChallanReason;
use App\Models\Student;
use Carbon\Carbon; // Import Carbon for date manipulation


class ChallanController extends Controller
{
    // 
    public function index()  {
        return view('admin.challan.index');
    }

    public function countRecords()
{
    // Count the number of records in the users table
    $count = User::count();
    // Return the count
    return $count;
}

    public function view(){
        $today = Carbon::today()->toDateString();

        // $data = Student::all()->where('today_date', $today); // today data 
        $data = Student::all();
        $total_count = Student::count(); // all data
        $today_count = Student::where('today_date', $today)->count();
        $today_amount = Student::whereDate('today_date', $today)->sum('fine');
        $total_amount = Student::sum('fine');
        $pending = Student::where('status','1')->sum('fine');
        $completed = Student::where('status','0')->sum('fine');
      
        return view('admin.challan.viewchallan',['pending'=>$pending,'completed'=>$completed,'total_amount'=>$total_amount,'today_amount'=>$today_amount,'today'=>$today,'data' => $data,'today_count'=>$today_count,'total_count'=>$total_count]);
    }
    public function updateStatus($id)
    {
        $record = Student::find($id);
        $record->status = '0';
        $record->save();
        return redirect('viewchallan');

    }

    public function show(){
        $data = ChallanReason::all();
        return view('admin.challan.index',['data' => $data]);
    }

    public function getPrice($id)
    {
        $data = ChallanReason::findOrFail($id);
        return response()->json([
           'status'=>200,
           'data'=>$data,
        ]);
        
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
              'reason'=>'required',       
                'price'=> 'required',
            ]);
     $existingStudent = ChallanReason::where('reason', $request->reason)->first();
      if ($existingStudent) {
        return response()->json(['message' => 'Reason Already Saved'], 400);
      } else {
        $newData = new ChallanReason();
        $newData->reason = $validatedData['reason'];
        $newData->price = $validatedData['price'];
        $newData->save();
        return response()->json(['message' => 'Data inserted successfully']);
      }
    }


    public function countAjax(Request $request)
    {
        $selectedMonth = $request->input('selected_month');
        $count = Student::where('month', $selectedMonth)->count();
        $details = Student::where('month', $selectedMonth)->get();
        return response()->json(['details' => $details,'count'=>$count]);
    }
}
