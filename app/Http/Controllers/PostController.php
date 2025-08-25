<?php
namespace app\Http\Controllers;
use App\Http\Controllers\Controller;
class PostController extends Controller {
    public function index(){
        //display list of resources 
    }
    public function create (){
        //form create to insert data 
    }
    public function store (Request $request){
        //form handling
    }
    public function show ($id){
        //to display specific resource
    }
    public function edit($id){
        //edit form
    }
    public function update($id){
        //form handling for edit form
    }
    public function destroy($id){
        //delete the record
    }
}