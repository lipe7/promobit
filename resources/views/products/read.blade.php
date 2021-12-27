@extends('layouts.app')
@section('content')

<body>
    <div class="row">
        <form id="tagForm">
            @csrf
            <div class="col-12">
                <div class="mb-3">
                    <label for="tag" class="form-label">Nome da Tag</label>
                    <input disabled value="{{$products->name}}" type="text" class="form-control" name="name" id="tag" placeholder="Nome da Tag" required disabled>
                </div>
                <div class="mb-3">
                    <label for="tag" class="form-label">Tag do Produto</label>
                    <select class="form-control selectpicker" multiple data-show-subtext="true" data-live-search="true" name="tag[]" required disabled>
                        @foreach ($products->tag as $p)
                        <option value="{{$p->id}}">{{$p->name}}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">
                        Tag Inválida.
                    </div>
                </div>

                <div class="col-12 buttons">
                    <a href="{{route('products.index')}}" class="btn btn-secondary">
                        Voltar
                    </a>
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

<script type="text/javascript" src="{{ asset('js/jquery-3.6.0.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>

@endsection('content')