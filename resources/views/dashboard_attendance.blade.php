@extends('auth.dashboard')
@section('title')
Dashboard | Post
@endsection

@section('header')
@parent

@endsection

@section('content')
@parent

    @section('crud-content-title')
        ATTENDANCE
    @endsection
    @section('crud-content')
        <div class="row">
            <div class="col table-responsive">
                <table class="table table-striped-columns table-hover">
                    <thead>
                        <tr>
                            <th>Name</td>
                            @for($x = 1; $x<32; $x++)
                                    <th>{{$x}}</th>
                            @endfor
                        </tr>
                    </thead>
                    <tbody>
                        @for($x = 0; $x<50; $x++)
                            <tr>
                                @for($y = 1; $y<33; $y++)
                                    @if ($y == 1)
                                        <td>
                                            Student {{$x+1}}
                                        </td>
                                    @else
                                        <td><input class="form-check-input" type="checkbox" value="0" id="attend"></td>
                                    @endif
                                @endfor
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    @endsection

@endsection