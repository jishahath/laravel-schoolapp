@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Students List</div>

                <div class="panel-body">
                	@if (count($students) > 0)
	                    <table class="table table-striped">
												
												<tbody>
                                                $students = DB::select('SHOW STUDENTS');
                                                foreach($students as $student)
                                                {
                                                      echo $student-students_in_school-app;
                                                }
													@endforeach
												</tbody>
											</table>
									@else
										No students found !
									@endif 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection