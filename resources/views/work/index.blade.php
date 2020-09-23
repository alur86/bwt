@extends('layouts.app')



@section('content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Users from Canada</div>

                    <div class="panel-body">
                <div class="panel-body">
                



       @foreach($users as $user)   
               <br>

               Country: 

               

               {{ $user->title }}  

                <br>

               User Name:

               {{ $user->name }}  

                <br>
            
                User email:

                {{ $user->email }}  

                <br>
        
            
                Company:

                {{ $user->company_name }}  

                <br>
        
        
            
                User registration:

                {{ $user->created_at }}  

                <br>



                @endforeach

        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection












