@extends('layouts.admin')

@section('content')
<div class="row g-4">
    <div class="col-sm-4">
        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
            <i class="fa fa-chart-line fa-3x text-primary"></i>
            <div class="ms-3">
                <p class="mb-2">Total de Serviços</p>
                <h6 class="mb-0">{{ $totalServicos }}</h6>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
            <i class="fa fa-chart-bar fa-3x text-primary"></i>
            <div class="ms-3">
                <p class="mb-2">Total de Produtos</p>
                <h6 class="mb-0">{{ $totalProdutos }}</h6>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
            <i class="fa fa-chart-area fa-3x text-primary"></i>
            <div class="ms-3">
                <p class="mb-2">Total de Solicitações</p>
                <h6 class="mb-0">{{ $totalContatos }}</h6>
            </div>
        </div>
    </div>
</div>
@endsection
