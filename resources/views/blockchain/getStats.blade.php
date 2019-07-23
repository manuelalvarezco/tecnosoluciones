@extends('app')
@section('content')

<div class="jumbotron jumbotron-fluid text-center">
  <div class="container">
    <h1 class="display-4">Estadísticas Monetarias</h1>
    <p class="lead">Summary of bitcoin statistics for the previous 24 hour period.</p>
  </div>
</div>

<div class="container">


<div class="row">
<div class="col-md-6">
<h2>BLOCK SUMMARY</h2>
<table class="table table-striped mt-4">
  <thead>
    
  </thead>
  <tbody>
    <tr>
      <th scope="row">Bloques Minados</th>
      <td>{{$stats->n_blocks_mined}}</td>
    </tr>
    <tr>
      <th scope="row">Tiempo entre Bloques</th>
      <td>{{$stats->minutes_between_blocks}}</td>
    </tr>
    <tr>
      <th scope="row">Bitcoins Minados</th>
      <td>{{$stats->n_btc_mined}}</td>
    </tr>
  </tbody>
</table>
</div>
<div class="col-md-6">
<h2>RESUMEN DEL MERCADO</h2>
<table class="table table-striped">
  <thead>
    
  </thead>
  <tbody>
    <tr>
      <th scope="row">Precio de Mercado</th>
      <td>{{$stats->market_price_usd}}</td>
    </tr>
    <tr>
      <th scope="row">Volumen de Intercambio</th>
      <td>{{$stats->trade_volume_usd}}</td>
    </tr>
    <tr>
      <th scope="row">Volumen de Intercambio</th>
      <td>{{$stats->trade_volume_btc}}</td>
    </tr>
  </tbody>
</table>
</div>

<!--  -->

<div class="col-md-12 mt-4">
<h2>TRANSACTION SUMMARY</h2>
<table class="table table-striped mt-4">
  <thead>
    
  </thead>
  <tbody>
    <tr>
      <th scope="row">Comisiones Totales de Transacción (BTC)</th>
      <td>{{$stats->total_fees_btc}}</td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">Número de Transacciones</th>
      <td>{{$stats->n_tx}}</td>
      <td><a href="graph">Ver gráfico</a></td>
    </tr>
    <tr>
      <th scope="row">Volumen de Salida Total (BTC)</th>
      <td>{{$stats->total_btc_sent}}</td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">Volumen de Transacciones Estimado (BTC)</th>
      <td>{{$stats->estimated_btc_sent}}</td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">Volumen de Transacciones Estimado (USD)</th>
      <td>{{$stats->estimated_transaction_volume_usd}}</td>
      <td></td>
    </tr>
  </tbody>
</table>

</div>
</div>
@endsection