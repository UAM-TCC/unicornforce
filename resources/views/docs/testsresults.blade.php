@extends('layouts.docslayout')
@section('content')
<br>
<br>
<br>
<br>
<br>
<h4>Teste Smartphone - {{ $smartphone->model }} {{ $smartphone->producer }}</h4>

<br>
<table class="table table-bordered text-white">
    <h4 class="mt-4">Selo de qualidade</h4>
    <br>
    <thead>
        <tr class="text-center">
            <th scope="col">Classificação</th>
            <th scope="col">Nota</th>
        </tr>
    </thead>

    <tbody>
        <tr class="text-center">
            <td>{{ $quality }}</td>
            <td>{{ $smartphone->final_test_result }}</td>
        </tr>
    </tbody>
</table>
<br>
<br>

<table class="table table-bordered text-white">
    <h4 class="mt-4">Teste de performance</h4>
    <br>
    <thead>
        <tr>
        <th scope="col">Teste efetuado</th>
        <th scope="col">Nota</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <th scope="row">RP (Single)</th>
            <td>{{ $smartphone->rptest->rp_single }}</td>
        </tr>
        <tr>
            <th scope="row">RP (Multiple)</th>
            <td>{{ $smartphone->rptest->rp_multiple }}</td>
        </tr>

        <tr>
        <th scope="row">Média performance</th>
            <td>{{ $smartphone->rptest->rp_average }}</td>
        </tr>
    </tbody>
</table>

<br>
<br>

<table class="table table-bordered text-white">
    <h4 class="mt-4">Teste de compatibilidade</h4>
    <br>
    <thead>
        <tr>
        <th scope="col">Linguagem testada</th>
        <th scope="col">Nota</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <th scope="row">RC (NodeJS)</th>
            <td>{{ $smartphone->rctest->rc_node }}</td>
        </tr>
        <tr>
            <th scope="row">RC (Python)</th>
            <td>{{ $smartphone->rctest->rc_python }}</td>
        </tr>

        <tr>
            <th scope="row">RC (C# .NET Core)</th>
            <td>{{ $smartphone->rctest->rc_c }}</td>
        </tr>

        <tr>
            <th scope="row">RC RC (Java)</th>
            <td>{{ $smartphone->rctest->rc_java }}</td>
        </tr>

        <tr>
            <th scope="row">RC (PHP)</th>
            <td>{{ $smartphone->rctest->rc_php }}</td>
        </tr>

        <tr>
            <th scope="row">RC (MySQL)</th>
            <td>{{ $smartphone->rctest->rc_mysql }}</td>
        </tr>

        <tr>
            <th scope="row">RC (Arduino)</th>
            <td>{{ $smartphone->rctest->arduino }}</td>
        </tr>

        <tr>
            <th scope="row">Média compatibilidade</th>
            <td>{{ $smartphone->rctest->rc_average }}</td>
        </tr>
    </tbody>
</table>
<br>
<br>

<table class="table table-bordered text-white">
    <h4 class="mt-4">Teste de danos</h4>
    <br>

    <thead>
        <tr>
        <th scope="col">Componente</th>
        <th scope="col">Nota</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">RCF (Touchscreen)</th>
            <td>{{ $smartphone->rftest->screen }}</td>
        </tr>
        <tr>
            <th scope="row">RCF (Display/Tela)</th>
            <td>{{ $smartphone->rftest->touchscreen }}</td>
        </tr>

        <tr>
            <th scope="row">RCF (Botão de ligar)</th>
            <td>{{ $smartphone->rftest->power_button }}</td>
        </tr>

        <tr>
            <th scope="row">RCF (Botão de ligar)</th>
            <td>{{ $smartphone->rftest->other_buttons }}</td>
        </tr>

        <tr>
            <th scope="row">RCF (Botão de ligar)</th>
            <td>{{ $smartphone->rftest->usb }}</td>
        </tr>

        <tr>
            <th scope="row">RCF (Botão de ligar)</th>
            <td>{{ $smartphone->rftest->battery }}</td>
        </tr>

        <tr>
            <th scope="row">RCF (Botão de ligar)</th>
            <td>{{ $smartphone->rftest->audio_output }}</td>
        </tr>

        <tr>
            <th scope="row">RCF (Botão de ligar)</th>
            <td>{{ $smartphone->rftest->camera }}</td>
        </tr>

        <tr>
            <th scope="row">Média danos</th>
            <td>{{ $smartphone->rftest->rf_average }}</td>
        </tr>
    </tbody>
</table>
<br>
<br>
@endsection('content')