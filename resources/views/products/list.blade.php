@extends('layouts.app')
@section('content')

<body>
    <div class="row">
        <div class="col-12">
            <a href="{{route('products.create')}}" class="btn btn-primary">
                Novo Produto
            </a>
        </div>
        <div class="col-12">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>


</body>

<style>
    div {
        padding: 5px;
    }
</style>
@endsection('content')