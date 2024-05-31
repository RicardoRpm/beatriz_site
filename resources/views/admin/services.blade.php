@extends('layouts.admin')

@section('content')

<div class="col-12 ">
    <form class="bg-secondary rounded h-100 p-4">
        <h2 class="mb-4">Serviço</h2>
        <div class="mb-3">
            <label for="floatingInput">Serviço</label>
            <input type="email" class="form-control" placeholder="Nome do Serviço">
        </div>
        <div class="mb-3">
            <label for="floatingTextarea">Descrição do Serviço</label>
            <textarea class="form-control" placeholder="Descrição do serviço a ser prestado"
                id="floatingTextarea" style="height: 150px;"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar Serviço</button>
    </form>
</div>

@endsection