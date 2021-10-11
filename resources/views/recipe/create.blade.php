@extends('layouts.admin.master')
@section('title', 'Create Recipe')
    
@section('content')
    
<h1>Recipe creation form:</h1>
    <form action="" class="form">
    
    <div class="form-group">
    
        <input type="text" name="titre" class="form-control" placeholder="Title">
        
    </div>
    
    <div class="form-group">
        
        <textarea name="body" id="" class="form-control" placeholder="Description"></textarea>
            
    </div>
        
        <input type="hidden" name="user_id" value=1>
        <button class="btn btn-success btn-lg">Save</button>
        
    </form>
@endsection