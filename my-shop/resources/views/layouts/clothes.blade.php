@extends('layouts.app')

@section('page-title', 'Clothes index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Size</th>
                            <th scope="col">Color</th>
                            <th scope="col">Jeans</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lista_clothes as $cloth)
                            <tr>
                                <td>{{ $cloth->id }}</td>
                                <td>{{ $cloth->size }}</td>
                                <td>{{ $cloth->color }}</td>
                                <td>{{ $cloth->jeans }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
