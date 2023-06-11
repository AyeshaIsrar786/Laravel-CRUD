<?php

namespace App\Http\Controllers;
use App\Models\ToDoListModel;
use Illuminate\Http\Request;

class ToDoListController extends Controller
{
    public function index(){
        return view('ToDoList');
    }

    public function store(Request $request){

        $request->validate( 
            [ 
                'name'=>'required', 
                'workinghours'=>'required',
                'description'=>'required' 
            ]);

        // //Insert Query
        $list = new ToDoListModel;
        $list->name=$request['name'];
        $list->workinghours=$request['workinghours'];
        $list->description=$request['description'];
        $list->save();
        return redirect('/lists/view');
    }

    public function view(){
        //fetch data from select query
        $list = ToDoListModel::all();
        $data=compact('list');
        return view('ToDoList')->with($data);
    }

    //Update Query
    public function edit($id){
        $list=ToDoListModel::find($id);
        return view('update',['list'=>$list]);
    }

    public function update(Request $req){
        $list=ToDoListModel::find($req->id);
        $list->name=$req->name;
        $list->workinghours=$req->workinghours;
        $list->description=$req->description;
        $list->save();
        return redirect('/lists/view');
    }

    //Delete Query
    public function delete($id){
        ToDoListModel::find($id)->delete();
        return redirect()->back();
    }
}
