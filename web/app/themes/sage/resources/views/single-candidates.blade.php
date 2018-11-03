@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <h1>{{ $candidate->get('name') . ' ' . $candidate->get('surname') }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <span>Data urodzenia: {{ $candidate->get('birth_date') }}</span>
                <span>&nbsp;|&nbsp;</span>
                <span>PESEL: {{ $candidate->get('PESEL') }}</span>
                <span>&nbsp;|&nbsp;</span>
                <span>NIP: {{ $candidate->get('NIP') }}</span>
                <span>&nbsp;|&nbsp;</span>
                <span>Adres: {{ $candidate->get('address') }}</span>
                <span>&nbsp;|&nbsp;</span>
                <span>Ocena: <strong>{{ $candidate->get('assessment') }}</strong></span>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <h3>Doświadczenie</h3>
                <p>
                    {{ $candidate->get('experience') }}
                </p>
            </div>
            <div class="col">
                <h3>Umiejętności</h3>
                <p>
                    {{ $candidate->get('skills') }}
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h3>O kandydacie</h3>
                <p>
                    {{ $candidate->get('bio') }}
                </p>
            </div>
            <div class="col">
                <h3>Zainteresowania</h3>
                <p>
                    {{ $candidate->get('interests') }}
                </p>
            </div>
        </div>
    </div>
@stop