@extends('layouts.admin')

@section('content')

<div class="col-12 ">
    <form class="bg-secondary rounded h-100 p-4" action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
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
        <div class="row">
            <div class="col-4">
                <div class="mb-3">
                    <label for="title">Projecto - PT</label>
                    <input name="title_pt" type="text" id="title_pt" class="form-control" placeholder="Nome do Serviço">
                </div>                
            </div>

            <div class="col-4">
                <div class="mb-3">
                    <label for="title">Projecto - EN</label>
                    <input name="title_en" type="text" id="title_en" class="form-control" placeholder="Nome do Serviço">
                </div>                
            </div>

            <div class="col-4">
                <div class="mb-3">
                    <label for="title">Projecto - FR</label>
                    <input name="title_fr" type="text" id="title_fr" class="form-control" placeholder="Nome do Serviço">
                </div>                
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <div class="mb-3">
                    <label for="description">Descrição do Projecto</label>
                    <textarea name="description_pt" id="description_pt" class="form-control" placeholder="Descrição do sstado" ></textarea>
                </div>
            </div>

            <div class="col-4">
                <div class="mb-3">
                    <label for="description">Descrição do Projecto</label>
                    <textarea name="description_fr" id="description_fr" class="form-control" placeholder="Descrição do sstado" ></textarea>
                </div>
            </div>

            <div class="col-4">
                <div class="mb-3">
                    <label for="description">Descrição do Projecto</label>
                    <textarea name="description_en" id="description_en" class="form-control" placeholder="Descrição do sstado" ></textarea>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="description">Imagem do projecto</label>
            <input name="img" type="file" id="img" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar Projecto</button>
    </form>
</div>

@endsection