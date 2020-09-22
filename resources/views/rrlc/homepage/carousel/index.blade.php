@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            RRLCHomePage/Carousel<a href="#" class="btn btn-primary float-right">ADD</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">IMAGE</th>
                    <th scope="col">TITLE</th>
                    <th scope="col">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($carousels as $carousel)
                    <tr>
                    <td><center><img src="{{ $carousel->image }}" style="width:250px; height:150px;"></center></td>
                    <td>{{ $carousel->title }}</td>
                    <td>
                        <a href="/blainegroup/public/dashboard/rrlchomecarousel/{{ $carousel->id }}/edit" class="btn btn-primary float-left">Edit</a>
                        {!!Form::open(['action' => ['RrlcCarouselController@destroy', $carousel->id], 'method' => 'POST'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete', ['class' => 'btn btn-danger float-left'])}}
                        {!!Form::close()!!}
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection