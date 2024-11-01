@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-md-nowrap align-items-center border-bottom mb-3 flex-wrap pb-2 pt-3">
        <h1 class="h2">My Posts</h1>
    </div>

    <div class="table-responsive col-lg-8">
        <table class="table-striped table-sm table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Jandi Oke</td>
                    <td>blog</td>
                    <td>
                        <a href="/dashboard/posts/" class="badge bg-info"><span data-feather="eye"></span></a>
                        <a href="" class="badge bg-warning"><span data-feather="edit"></span></a>
                        <a href="" class="badge bg-danger"><span data-feather="x-circle"></span></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
