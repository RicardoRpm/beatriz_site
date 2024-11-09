@extends('layouts.admin')

@section('content')

<div class="col-12 ">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Lista de Contactos</h6>
                    <table class="table">
                        <thead>
                            <tr>
                                {{-- <th scope="col">#</th> --}}
                                <th scope="col">Nome do Cliente</th>
                                <th scope="col">Email do Cliente</th>
                                <th scope="col">Serviço/Produto Solicitado</th>
                                <th scope="col">Data</th>
                                {{-- <th scope="col">Opções</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $contact)
                                <tr>
                                    {{-- <th scope="row">{{ $contact->id }}</th> --}}
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $conta ct->email }}</td>
                                    <td>{{ $contact->service }}</td>
                                    <td>{{ $contact->created_at->format('Y-m-d H:i:s') }}</td>
                                    {{-- <td>
                                        <button class="btn btn-primary">Detalhar</button>
                                    </td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection