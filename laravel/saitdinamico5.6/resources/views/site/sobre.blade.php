@extends('layouts.site')

@section('content')
<div class="container">
    <div class="row section">
    	<h3 align="center">Sobre</h3>
    	<div class="divider"></div>
    </div>
    <div class="row section">
    	<div class="col s12 m6">
    		<img class="responsive-img" src="{{asset('img/modelo_img_home.jpg')}}">
    	</div>
    	<div class="col s12 m6">
    		<h4>A empresa</h4>
    		<blockquote>
    			Descricao breve sobre a empresa.
    		</blockquote>
    		<p>texto sobre a Empresa locao</p>
    	</div>
    </div>
</div>
@endsection