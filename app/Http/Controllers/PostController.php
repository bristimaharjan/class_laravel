<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
class PostController extends Controller {
    public function index(){
        return"testing post";
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
    public function update(Request $request){
        //form handling for edit form
    }
    public function destroy($id){
        //delete the record
    }
}