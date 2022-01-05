<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class StockController extends Controller
{
    public function index()
    {
        return view('stocks');
    }

    function getData()
    {
        $stocks = Stock::select('id', 'code', 'stock','created_at','updated_at');
        return Datatables::of($stocks)
            ->addColumn('action', function($stock){
                return '<a href="#" class="btn btn-xs btn-primary edit" id="'.$stock->id.'"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })
            ->make(true);
    }
    function fetchData(Request $request)
    {
        $id = $request->input('id');
        $student = Stock::find($id);
        $output = array(
            'code'    =>  $student->code,
            'stock'     =>  $student->stock
        );
        echo json_encode($output);
    }
    function postData(Request $request)
    {
        $validation = Validator::make($request->all(), [
          //  'code'   => 'required',
          //  'stock'  => 'required',
        ]);

        $error_array = array();
        $success_output = '';
        if ($validation->fails())
        {
            foreach ($validation->messages()->getMessages() as $field_name => $messages)
            {
                $error_array[] = $messages;
            }
        }
        else
        {
            if($request->get('button_action') == 'insert')
            {
                $student = new Stock([
                    'code'    =>  $request->get('code'),
                    'stock'     =>  $request->get('stock')
                ]);
                $student->save();
                $success_output = '<div class="alert alert-success">Data Inserted</div>';
            }

            if($request->get('button_action') == 'update')
            {
                $student = Stock::find($request->get('id'));
                $student->code = $request->get('code') ?? $student->code;
                $student->stock = $request->get('stock') ?? $student->stock;
                $student->save();
                $success_output = '<div class="alert alert-success">Data Updated</div>';
            }
        }

        $output = array(
            'error'     =>  $error_array,
            'success'   =>  $success_output
        );
        echo json_encode($output);
    }
}
