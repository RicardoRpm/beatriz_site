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

        <div class="row">
            <div class="col-4">
                <div class="mb-3">
                    <label for="title">Serviço - FR</label>
                    <input name="title_fr" id="title_fr" type="text" class="form-control" placeholder="Nome do Serviço">
                </div>
            </div>

            <div class="col-4">
                <div class="mb-3">
                    <label for="title">Serviço - PT</label>
                    <input name="title_pt" id="title_pt" type="text" class="form-control" placeholder="Nome do Serviço">
                </div>
            </div>

            <div class="col-4">
                <div class="mb-3">
                    <label for="title">Serviço - EN</label>
                    <input name="title_en" id="title_en" type="text" class="form-control" placeholder="Nome do Serviço">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <div class="mb-3">
                    <label for="description">Descrição do Serviço - FR</label>
                    <textarea rows="5" name="description_fr" id="description_fr" class="form-control" placeholder="Descrição do serviço a ser prestado" ></textarea>
                </div>
            </div>

            <div class="col-4">
                <div class="mb-3">
                    <label for="description">Descrição do Serviço - PT</label>
                    <textarea rows="5" name="description_pt" id="description_pt" class="form-control" placeholder="Descrição do serviço a ser prestado" ></textarea>
                </div>
            </div>

            <div class="col-4">
                <div class="mb-3">
                    <label for="description">Descrição do Serviço - EN</label>
                    <textarea rows="5" name="description_en" id="description_en" class="form-control" placeholder="Descrição do serviço a ser prestado" ></textarea>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar Serviço</button>
    </form>
</div>

@endsection