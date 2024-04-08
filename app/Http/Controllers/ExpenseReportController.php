<?php

namespace App\Http\Controllers;

use App\Mail\SummaryReport;
use App\Models\ExpenseReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ExpenseReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expReports = ExpenseReport::all();
        return view('expenseReport.index', compact('expReports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(view:'expenseReport.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validaData = $request->validate([
            'title' => 'required|min:3'
        ]);

        $report = new ExpenseReport();
        $report->title = $request->get(key:'title');
        $report->save();

        return redirect(to: '/expense_reports');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ExpenseReport $expenseReport)
    {
        return view('expenseReport.show', ['report' => $expenseReport]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $report = ExpenseReport::findOrFail($id);
        return view('expenseReport.edit', ['report' => $report]);
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
        $report = ExpenseReport::findOrFail($id);
        $report->title = $request->get(key: 'title');
        $report->save();

        return redirect(to: '/expense_reports');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report = ExpenseReport::findOrFail($id);
        $report->delete();

        return redirect(to: '/expense_reports');
    }

    public function confirmDelete($id)
    {
        $report = ExpenseReport::findOrFail($id);
        return view('expenseReport.confirmDelete', 
        ['report' => $report]);
    }

    public function confirmSendEmail($id)
    {
        $report = ExpenseReport::findOrFail($id);
        return view('expenseReport.confirmSendEmail', 
        ['report' => $report]);
    }

    public function sendMail(Request $request, $id){
        $report = ExpenseReport::find($id);
        Mail::to($request->get( key: 'email'))->send(new SummaryReport($report));

        return redirect(to: '/expense_reports/' . $id);
    }
}
