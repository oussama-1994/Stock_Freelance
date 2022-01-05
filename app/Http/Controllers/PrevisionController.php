<?php

namespace App\Http\Controllers;

use App\Models\Prevision;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class PrevisionController extends Controller
{
    public function index()
    {
        return view('prevision');
    }

    function getData()
    {
        $previsions = Prevision::select('id', 'code');

        return Datatables::of($previsions)
            ->addColumn('action', function($prevision){
                return '<a href="#" class="btn btn-xs btn-primary edit" id="'.$prevision->id.'"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })
            ->make(true);
    }
    function fetchData(Request $request)
    {

        $id = $request->input('id');
        $prevision = Prevision::find($id);
        $output = array(
            'id'    =>  $prevision->id,
            'code'     =>  $prevision->code
        );
        echo json_encode($output);
    }
    function postData(Request $request)
    {
        $validation = Validator::make($request->all(), [
            //  'code' => 'required',
            // 'stock'  => 'required',
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
                $prevision = new Prevision([
                    'code'    =>  $request->get('code'),
                    'stock'     =>  $request->get('stock')
                ]);
                $prevision->save();
                $success_output = '<div class="alert alert-success">Data Inserted</div>';
            }
            if($request->get('button_action') == 'update')
            {
                $prevision = Prevision::find($request->get('id'));
                $stocks = Stock::where('Qte '.$prevision->code,'!=','')->get();

                foreach ($stocks as $stock){

                    if($stock->stock < ((int)$request->stock * doubleval(str_replace(",",".",$stock['Qte '.$prevision->code]))/1000)){
                        $success_output = '<div class="alert alert-danger">Stock Insuffisant</div>';
                    }else{
                        $stock->update([
                            'stock' => $stock->stock - ((int)$request->stock * doubleval(str_replace(",",".",$stock['Qte '.$prevision->code]))/1000)
                        ]);
                        $success_output = '<div class="alert alert-success">Data Updated</div>';
                    }
}

            }

        }

        $output = array(
            'error'     =>  $error_array,
            'success'   =>  $success_output
        );
        echo json_encode($output);

    }
}
