<!-- Obyekt Id Field -->
<div class="col-sm-12">
    {!! Form::label('obyekt_id', 'Obyekt:') !!}
    <p>{{ $mahsulot->obyekt->nom }}</p>
</div>

<!-- Nom Field -->
<div class="col-sm-12">
    {!! Form::label('Nom', 'Nom:') !!}
    <p>{{ $mahsulot->Nom }}</p>
</div>

<!-- Yaratilgan Sana Field -->
<div class="col-sm-12">
    {!! Form::label('yaratilgan_sana', 'Yaratilgan Sana:') !!}
    <p>{{ $mahsulot->yaratilgan_sana }}</p>
</div>

<!-- Risk Field -->
<div class="col-sm-12">
    {!! Form::label('risk', 'Risk:') !!}
    <p>{{ $mahsulot->risks->implode('nom',', ') }}</p>
</div>

<!-- Oqibat Field -->
<div class="col-sm-12">
    {!! Form::label('oqibat', 'Oqibat:') !!}
    <p>{{ $mahsulot->oqibats->implode('nom',', ') }}</p>
</div>

