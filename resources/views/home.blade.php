
@extends('layouts.app')



@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Users</div>

                    <div class="panel-body">
                <div class="panel-body">
                



       @foreach($companies as $company)   
           

           
            {{ $company->title }}   
            
         

                @endforeach

        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection












