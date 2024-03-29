@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<body>
    <div class="row">
        <div class="col-12">
            <a href="{{route('products.create')}}" class="btn btn-primary">
                Novo Produto
            </a>
        </div>
        <div class="col-12">
            <table class="table table-bordered yajra-datatable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Produto</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>


</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

<script type="text/javascript">
    $(function() {

        var table = $('.yajra-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('products.index') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: true,
                    searchable: true
                },
            ]
        });

    });



    $(document).on('click', '.show_confirm', function() {

        swal({
                title: `Tem certeza que deseja excluir este registro?`,
                text: "Se você excluir isso, ele desaparecerá para sempre.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {

                if (willDelete) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: 'DELETE',
                        url: "/products/" + $(this).val(),
                    });
                    $.ajax({
                        success: function(data) {
                            setTimeout(function() {
                                $('.yajra-datatable').DataTable().ajax.reload();
                            }, 1);

                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Registro deletado.',
                                showConfirmButton: false,
                                timer: 1500
                            })
                        }
                    });
                }
            });


    });
</script>

<style>
    div {
        padding: 5px;
    }
</style>
@endsection('content')