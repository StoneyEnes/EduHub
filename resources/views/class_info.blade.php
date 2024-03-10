@extends('layouts.app')

@php
    use App\Enums\PermissionEnum;
@endphp

@section('content')
    <div class="mx-4">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">{{$class['class'] . ' - ' . $class['Branch']}} Student
                    List</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <tbody>
                        @if($students)
                            @foreach($students as $value)
                                <tr>
                                    <td>{{$value['name']}}</td>
                                    <td>{{PermissionEnum::getPermissionType($value['permission'])}}</td>
{{--                                    TODO: Student View Page--}}
{{--                                    <td>--}}
{{--                                        <a href="" class="link-info"> View </a>--}}
{{--                                    </td>--}}
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td>Student not found</td>
                            </tr>
                        @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
