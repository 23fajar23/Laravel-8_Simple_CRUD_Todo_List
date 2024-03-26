@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <form method="POST" action="{{ route('todo.store') }}" id="myForm" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-12">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <center>
                                <h3><b>|--- Add Todo ---|</b></h3>
                            </center><br>

                            <label for="title">Title : </label>
                            <input id="title" type="text" class="form-control" name="title" value="" required
                                autofocus>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <br>
                    <div class="row mb-12">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <label for="content">Description : </label>
                            <input id="content" type="text" class="form-control" name="content" value="" required
                                autofocus>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <br>
                    <div class="row mb-12">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <button class="btn btn-success">Submit</button>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </form>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
@endsection
