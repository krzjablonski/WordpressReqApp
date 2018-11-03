@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h1>Wszyscy kandydaci</h1>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <div class="card p-2">
                    <table class="table">
                        <thead>
                        <th scope="row">ID</th>
                        <th>Imię i Nazwisko</th>
                        <th>Akcje</th>
                        </thead>
                        <tbody>
                        @foreach($candidates_index as $candidate)
                            <tr>
                                <th>{{ $candidate->get('candidate_id') }}</th>
                                <td><a href="{{ $candidate->get('candidate_link') }}">{{ $candidate->get('candidate_name') }}</a></td>
                                <td><a href="{{$candidate->get('candidate_link')}}" class="btn btn-outline-primary btn-sm">Zobacz</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop