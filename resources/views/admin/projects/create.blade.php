@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Create Post</h3>
                    <div class="card-tools">
                        <a href="{{ url('/admin/projects') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>

                    </div>

                </div>

                <div class="card-body">
                    @if ($errors->any())
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                        <form method="POST" action="{{ url('/admin/projects') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('admin.projects.form', ['formMode' => 'create'])

                        </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

{{--    <div class="container">--}}
{{--        <div class="row">--}}

{{--            <div class="col-md-9">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header">Create New Project</div>--}}
{{--                    <div class="card-body">--}}
{{--                        <a href="{{ url('/admin/projects') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>--}}
{{--                        <br />--}}
{{--                        <br />--}}

{{--                        @if ($errors->any())--}}
{{--                            <ul class="alert alert-danger">--}}
{{--                                @foreach ($errors->all() as $error)--}}
{{--                                    <li>{{ $error }}</li>--}}
{{--                                @endforeach--}}
{{--                            </ul>--}}
{{--                        @endif--}}

{{--                        <form method="POST" action="{{ url('/admin/projects') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">--}}
{{--                            {{ csrf_field() }}--}}

{{--                            @include ('admin.projects.form', ['formMode' => 'create'])--}}

{{--                        </form>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection
