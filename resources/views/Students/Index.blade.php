@extends('layouts.app')
@section('name', 'Students')
    @section('content')

   Tave Pano 
   <br/>  
   @if (count($students)>0)
   @foreach ($students as $student)
   {{$student->id}}
  
  {{$student->surname}}

   {{$student->name}}
   <br/>
   @endforeach
   @else
   No Students in the DB
       
   @endif
       
  
@endsection
        
