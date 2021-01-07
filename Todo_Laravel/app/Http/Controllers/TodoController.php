<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    //

    function index(){

      $categories =  DB::table('Category')->select('*')->where('deleted', 0)->get();
      $todos =  DB::table('Todo')->select('*')->where('deleted', 0)->get();

      return view('todo.index',['categories'=>$categories, 'todos'=>$todos]);
    }

    function createCategory(){

      $categories =  DB::table('Category')->select('*')->where('deleted', 0)->get();

      return view('todo.createCategory',['categories'=>$categories]);
    }

    function addCategory(Request $request){

      $request->validate([
        'CategoryName'=>'Required'
      ]);

      $query = DB::table('Category')->Insert([
        'CategoryName'=>$request->input('CategoryName'),
        'CreatedBy'=>'SajaIB'
      ]);

      return redirect('/todo');
    }

    function updateCategory(Request $request){

      $affected = DB::table('Category')
              ->where('id', $request->input('id'))
              ->update(['CategoryName'=>$request->input('CategoryName'),
              'UpdatedBy'=>'SajaIB'
            ]);

      return redirect('/todo');
    }

    function deleteCategory(Request $request){

      $affected = DB::table('Category')
              ->where('id', $request->input('id'))
              ->update(['deleted'=>1
            ]);

      return redirect('/todo');
    }

    function createTodo(){

      $categories =  DB::table('Category')->select('*')->where('deleted', 0)->get();
      $todos =  DB::table('Todo')->select('*')->where('deleted', 0)->get();

      return view('todo.createTodo',['categories'=>$categories, 'todos'=>$todos]);
    }

    function addTodo(Request $request){

      $query = DB::table('Todo')->Insert([
        'Title'=>$request->input('Title'),
        'CreatedBy'=>'SajaIB',
        'description'=>$request->input('description'),
        'category_id'=>$request->input('category_id'),
        'duDate'=>$request->input('DueTime'),
      ]);

      // return $request->input();
      return redirect('/todo');
    }

    function updateTodo(Request $request){

      $affected = DB::table('Todo')
              ->where('id', $request->input('id'))
              ->update([
                'Title'=>$request->input('Title'),
                'UpdatedBy'=>'SajaIB',
                'description'=>$request->input('description'),
                'duDate'=>$request->input('DueTime'),
            ]);

      return redirect('/todo');
    }

    function deleteTodo(Request $request){

      $affected = DB::table('Todo')
              ->where('id', $request->input('id'))
              ->update(['deleted'=>1
            ]);

      return redirect('/todo');
    }
}
