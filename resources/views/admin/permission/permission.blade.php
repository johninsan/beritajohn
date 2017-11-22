@extends('admin/layout/app')

@section('main-content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Text Editors
            <small>Advanced form element</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Editors</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Permissions</h3>
                    </div>
                @include('includes.messages')
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('permission.store')}}" method="post">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="col-lg-offset-3 col-lg-6">
                                <div class="form-group">
                                    <label for="Permission">Permissions Name</label>
                                    <input type="Text" class="form-control" id="name" name="name" placeholder="Enter Permission Name">
                                </div>
                                <div class="form-group">
                                    <label for="Permission for">Permissions For</label>
                                    <select name="for" id="for" class="form-control">
                                        <option selected disabled>Select Permission For</option>
                                        <option value="user">User</option>
                                        <option value="post">Post</option>
                                        <option value="other">Others</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a type="button" href="{{route('permission.index')}}" class="btn btn-warning">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
            <!-- /.col-->
        <!-- ./row -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @endsection