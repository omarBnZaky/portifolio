@extends('layouts.master')

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">projects</h3>

            <div class="card-tools">
                <a href="{{ url('/admin/projects/create') }}" class="btn btn-success btn-sm" title="Add New Post">
                    <i class="fa fa-plus" aria-hidden="true"></i> Add New
                </a>

                <form method="GET" action="{{ url('/admin/projects') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                        <span class="input-group-append">
                                <button class="btn btn-secondary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                    </div>
                </form>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 1%">
                        #
                    </th>
                    <th style="width: 20%">
                        Title
                    </th>
                    <th>
                        Actions
                    </th>

                    <th style="width: 20%">
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($projects as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->title }}</td>
                        <td>
                            <a href="{{ url('/admin/projects/' . $item->id) }}" title="View Post"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                            <a href="{{ url('/admin/projects/' . $item->id . '/edit') }}" title="Edit Post"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                            <form method="POST" action="{{ url('/admin/projects' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Post" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>

@endsection
