@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>{{ __('Manage Users') }}</h4>
                </div>

                <div class="card-body">
                    <div class="mb-3 text-end">
                        {{-- style="" --}}
                        <button onclick="addForm('{{route('user.store')}}')" class="btn btn-success btn-border-0"  style="background: linear-gradient(135deg, #007bff, #28a745);"><i class="fa fa-plus-circle"></i> Tambah</button>
                    </div>

                    <div class="box-body table-responsive">
                        <table class="table table-bordered table-hover display responsive nowrap" id="users-table">
                            <thead>
                                <th width="5%">No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Level</th>
                                <th width="5%"><i class="fa fa-cog"></i> Aksi</th>
                            </thead>
                            <tbody>
        
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@includeIf('users.form')
@endsection

{{-- @push('styles')
<style>
    /* Menambahkan margin pada Show entries */
    .dataTables_length {
        margin-bottom: 20px; /* Jarak bawah */
    }

    /* Menambahkan jarak ke dalam dropdown Show entries */
    .dataTables_length select {
        margin-right: 10px;
    }

    /* Menambahkan padding pada elemen tabel dan tombol */
    .box-body.table-responsive {
        padding-bottom: 30px; /* Menambah jarak bawah pada tabel */
    }

     /* Menambahkan margin bawah pada Show entries */
    .dataTables_length {
        margin-bottom: 20px; /* Jarak bawah */
    }

    /* Menambahkan margin kanan pada dropdown Show entries */
    .dataTables_length select {
        margin-right: 10px;
    }

    /* Menambahkan jarak pada tombol sorting (panah atas/bawah) */
    .dataTables_wrapper .dataTables_paginate .paginate_button {
        margin-left: 10px;  /* Jarak kiri untuk tombol next/prev */
    }

    /* Menambahkan jarak antara angka dan panah sorting */
    th.sorting, th.sorting_asc, th.sorting_desc {
        padding-right: 10px;  /* Memberikan jarak kanan */
    }

    /* Menambahkan jarak pada panah naik dan turun */
    th.sorting::after {
        margin-left: 10px;  /* Jarak kiri pada panah sorting */
    }
</style>
@endpush --}}


@push('scripts')

<script>
    let table;

    $(document).ready(function() {
    var table = $('#users-table').DataTable({
        responsive: true,
        processing: true,
        serverSide: true,
        ajax: {
            url: '{{ route('user.data') }}',
            type: 'GET'
        },
        columns: [
            { data: 'DT_RowIndex', searchable: false, orderable: false },
            { data: 'name' },
            { data: 'email' },
            { data: 'level' },
            // { 
            //     data: 'level', 
            //     render: function(data, type, row) {
            //         // Menentukan warna berdasarkan level
            //         var badgeClass = data === 'super_admin' ? 'badge-success' : 'badge-primary';  // Hijau untuk super_admin, Biru untuk admin
            //         var badgeText = data === 'super_admin' ? 'Super Admin' : 'Admin';
            //         return `<span class="badge ${badgeClass}">${badgeText}</span>`;
            //     }
            // },
            { data: 'aksi', searchable: false, orderable: false }
        ]
        });

        
            // Menambahkan event listener untuk merender ulang DataTables saat ukuran layar berubah
        $(window).on('resize', function() {
            table.columns.adjust().draw();
        });
    // });

        // $('#modal-form').validator().on('submit', function (e) {
        //     if (! e.preventDefault()) {
        //         $.post($('#modal-form form').attr('action'), $('#modal-form form').serialize())
        //             .done((response) => {
        //                 $('#modal-form').modal('hide');
        //                 table.ajax.reload();
        //             })
        //             // .fail((errors) => {
        //             //     alert('Tidak dapat menyimpan data');
        //             //     return;
        //             // });
        //             .fail((xhr) => {
        //                 if (xhr.status === 422 && xhr.responseJSON && xhr.responseJSON.errors && xhr.responseJSON.errors.email) {
        //                     // alert('Email harus menggunakan domain seperti @gmail.com atau @yahoo.com');
        //                     alert(xhr.responseJSON.errors.email[0]);
        //                 } else {
        //                     alert('Tidak dapat menyimpan data');
        //                 }
        //             });
        //     }
        // });
        $('#modal-form').validator().on('submit', function (e) {
            if (!e.preventDefault()) {
                $.ajax({
                    url: $('#modal-form form').attr('action'),
                    type: $('#modal-form form').attr('method'),
                    data: $('#modal-form form').serialize(),
                    success: function (response) {
                        // Menampilkan pesan sukses dengan SweetAlert
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil!',
                            text: response.message || 'Data berhasil disimpan!',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                $('#modal-form').modal('hide');
                                table.ajax.reload();  // Reload tabel DataTables
                            }
                        });
                    },
                    error: function (xhr) {
                        // Menangani error validasi dan menampilkan pesan kesalahan
                        if (xhr.status === 422 && xhr.responseJSON.errors) {
                            // Menampilkan pesan error untuk email duplikat
                            if (xhr.responseJSON.errors.email) {
                                Swal.fire({
                                icon: 'error',
                                title: 'Gagal!',
                                text: 'Email ini sudah terdaftar.',
                            });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Gagal!',
                                    text: 'Terjadi kesalahan, tidak dapat menyimpan data.',
                                });
                            }
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Gagal!',
                                text: 'Terjadi kesalahan, tidak dapat menyimpan data.',
                            });
                        }
                    }
                });
            }
        });
    });

    function addForm(url) {
        $('#modal-form').modal('show');
        $('#modal-form .modal-title').text('Tambah User');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('post');
        $('#modal-form [name=name]').focus();

        $('#password, #password_confirmation').attr('required', true);
    }

    function editForm(url) {
        $('#modal-form').modal('show');
        $('#modal-form .modal-title').text('Edit User');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('put');
        $('#modal-form [name=name]').focus();

        $('#password, #password_confirmation').attr('required', false);

        $.get(url)
            .done((response) => {
                $('#modal-form [name=name]').val(response.name);
                $('#modal-form [name=email]').val(response.email);
                $('#modal-form [name=level]').val(response.level);
            })
            .fail((errors) => {
                alert('Tidak dapat menampilkan data');
                return;
            });
    }

    function deleteData(url) {
    Swal.fire({
        title: 'Yakin ingin menghapus data terpilih?',
        text: "Data yang dihapus tidak dapat dikembalikan.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            $.post(url, {
                '_token': $('[name=csrf-token]').attr('content'),
                '_method': 'delete'
            })
            .done((response) => {
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: 'Data berhasil dihapus!',
                });
                table.ajax.reload();
            })
            .fail((errors) => {
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal!',
                    text: 'Tidak dapat menghapus data.',
                });
            });
        }
    });
}
</script>

@endpush