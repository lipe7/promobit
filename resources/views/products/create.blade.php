@extends('layouts.app')
@section('content')

<body>
    <div class="row">
        <form action="{{ route('products.store') }}" method="POST" id="productForm">
            @csrf
            <div class="col-12">
                <div class="mb-3">
                    <label for="product" class="form-label">Nome do Produto</label>
                    <input type="text" class="form-control" name="name" id="product" placeholder="Nome do Produto" required>
                </div>
                <div class="mb-3">
                    <label for="tag" class="form-label">Tag do Produto</label>
                    <select class="form-control selectpicker" multiple data-show-subtext="true" data-live-search="true" name="tag[]" required>
                        @foreach ($tags as $t)
                        <option value="{{$t->id}}">{{$t->name}}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">
                        Tag Inválida.
                    </div>
                </div>
            </div>

            <div class="col-12 buttons">
                <a href="{{route('products.index')}}" class="btn btn-secondary">
                    Voltar
                </a>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>

        </form>
    </div>


</body>

<style>
    div {
        padding: 5px;
    }

    .buttons {
        text-align-last: right;
    }
</style>


@endsection('content')