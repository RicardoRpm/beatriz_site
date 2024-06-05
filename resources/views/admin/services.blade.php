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
        <h2 class="mb-4">Serviço</h2>
        <div class="mb-3">
            <label for="title">Serviço</label>
            <input name="title" type="text" id="title" class="form-control" placeholder="Nome do Serviço">
        </div>

        <div class="mb-3">
            <label for="title">Icon do Serviço</label>
            <select>
                <option value="fa-align-left">&#xf036; fa-align-left</option>
                <option value="fa-align-right">&#xf038; fa-align-right</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="description">Descrição do Serviço</label>
            <textarea name="description" id="description" class="form-control" placeholder="Descrição do serviço a ser prestado" ></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar Serviço</button>
    </form>
</div>

@endsection