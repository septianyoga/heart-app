@extends('admin.base.layout', ['title' => 'Kelola Jadwal Dokter'])

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
                                    <th>Nama Dokter</th>
                                    <th>Jadwal Tanggal</th>
                                    <th>Jadwal Jam</th>
                                    <th>Sibuk?</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Dr Iqbal</td>
                                    <td>Senin - Jumat</td>
                                    <td>08.00 - 09.00</td>
                                    <td>Sibuk</td>
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
