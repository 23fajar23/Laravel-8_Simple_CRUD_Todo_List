@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <h2>
                    <center>
                        ~ To do List ~
                    </center>
                </h2>
                <a href="{{ route('add') }}"><button class="btn btn-success">New Todo</button></a>
                <table border="2" class="table table-bordered">
                    <thead align="center">
                        <td><b>Id</b></td>
                        <td><b>Title</b></td>
                        <td><b>Description</b></td>
                        <td colspan="2"><b>Action</b></td>
                    </thead>

                    @foreach ($todo as $data)
                        <tbody class="align-middle" align="center">
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->title }}</td>
                            <td>{{ $data->content }}</td>
                            <td>
                                <form action="/update" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{ $data->id }}" id="id" name="id">
                                    <button type="submit" class="btn btn-primary"><span>Update</span></button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('todo.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><span>Delete</span></button>
                                </form>
                            </td>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
