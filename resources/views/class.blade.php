@extends('layouts.app')


@section('content')
    <div class="mx-4">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Classes</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    @foreach($groupedClasses as $classKey => $classItems)
                        <h2>{{ $classKey }}th Classes</h2>
                        <div class="d-flex flex-wrap">
                            @foreach($classItems as $value)
                                <div class="col-xl-3 flex-fill p-2 col-md-6 mb-4">
                                    <a href="{{route('class', $value['id'])}}"
                                       class="card border-bottom-primary shadow h-100 py-2 cursor-pointer text-decoration-none">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="h5 mb-0 font-weight-bold text-gray-800">{{ $value['class'] . '-' . $value['Branch'] }}</div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fa-solid fa-users fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    @endforeach

                </div>
            </div>
        </div>

    </div>
@endsection
