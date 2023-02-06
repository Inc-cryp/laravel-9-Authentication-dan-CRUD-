
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="/warga/create">TAMBAH +</a>
            <div class="card">
                <div class="card-header">{{ __('warga') }}</div>
                <table border="1">
                    <tr>
                        <th>nama</th>
                        <th>nik</th>
                        <th>no kk</th>
                        <th>jenis kelamin</th>
                        <th>alamat</th>
                    </tr>
                    @foreach ($warga as $w)
                        <tr>
                            <td>{{$w->nama}}</td>
                            <td>{{$w->nik}}</td>
                            <td>{{$w->no_kk}}</td>   
                            <td>{{$w->jenis_kelamin}}</td>
                            <td>{{$w->alamat}}</td>
                            <td>
                                <a href="/warga/{{$w->id}}/edit">edit</a>
                                <form action="/warga/{{$w->id}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="delete">
                                </form>
                            </td>
                        </tr>   
                    @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

