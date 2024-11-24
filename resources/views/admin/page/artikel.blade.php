@extends('admin.base.layout', ['title' => 'Kelola Artikel'])

@section('page-content')
    <div class="row chat-wrapper">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul Artikel</th>
                                    <th>Created At</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Jantung Koroner</td>
                                    <td>13 JUni 2023</td>
                                    <td>Foto</td>
                                    <td>
                                        <a href="" class="btn btn-primary me-3"><i class="link-icon"
                                                data-feather="edit"></i></a>
                                        <a href="" class="btn btn-danger"><i class="link-icon"
                                                data-feather="trash-2"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
