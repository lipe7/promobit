@extends('layouts.app')
@section('content')

<body>
    <div class="row">
        <form action="{{ route('tags.update', $tag->id) }}" method="POST" id="tagForm">
            @csrf
            @method('PUT')
            <div class="col-12">
                <div class="mb-3">
                    <label for="tag" class="form-label">Nome da Tag</label>
                    <input value="{{$tag->name}}" type="text" class="form-control" name="name" id="tag" placeholder="Nome da Tag" required>
                </div>
            </div>

            <div class="col-12 buttons">
                <a href="{{route('tags.index')}}" class="btn btn-secondary">
                    Voltar
                </a>
                <button type="submit" class="btn btn-primary show_confirm">Salvar Alterações</button>
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