<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use ZKLibrary\ZKLibrary;



class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.attendance.index');
    }

    public function fetchAttendance()
    {
        $zk = new ZKLibrary('192.168.1.100', 4370);
        
        if (!$zk->connect()) {
            return response()->json(['error' => 'Connection failed']);
        }
        
        if (!$zk->disableDevice()) {
            return response()->json(['error' => 'Failed to disable device']);
        }
        
        // Fetch attendance data
        $attendanceData = $zk->getAttendance();
        
        // Enable device after fetching data
        $zk->enableDevice();
        
        // Disconnect from device
        $zk->disconnect();
        
        // Process attendance data (store in database, etc.)
        
        return response()->json(['success' => 'Attendance fetched successfully', 'data' => $attendanceData]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
