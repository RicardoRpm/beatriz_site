@extends('layouts.admin')

@section('content')

<div class="col-12 ">
    <form class="bg-secondary rounded h-100 p-4" action="{{ route('service.store') }}" method="POST">
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @else
            <div class="alert alert-danger">
                {{ session('status') }}
            </div>
        @endif     
       
        @csrf
        <h2 class="mb-4">Projectos</h2>
        <div class="mb-3">
            <label for="title">Projecto</label>
            <input name="title" type="text" id="title" class="form-control" placeholder="Nome do Serviço">
        </div>

        <div class="mb-3">
            <label for="description">Descrição do Projecto</label>
            <textarea name="description" id="description" class="form-control" placeholder="Descrição do sstado" ></textarea>
        </div>

        <div class="mb-3">
            <label for="description">Imagem do projecto</label>
            <input name="title" type="file" id="title" class="form-control" placeholder="Nome do Serviço">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar Projecto</button>
    </form>
</div>

@endsection