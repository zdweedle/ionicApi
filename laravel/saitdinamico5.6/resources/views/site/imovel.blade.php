@extends('layouts.site')

@section('content')
<div class="container">
    <div class="row section">
    	<h3 align="center">Imovel</h3>
    	<div class="divider"></div>
    </div>
    <div class="row section">
    	<div class="col s12 m8">
    		<div class="row">
          <div class="slider">
              <ul class="slides">
                  <li>
                      <img src="{{asset('img/modelo_detalhe_1.jpg')}}">
                           <div class="caption left-align">
                          <h3>Titulo da img</h3>
                          <h5>descricao da img</h5>
            </div>
                  </li>
                       <li>
                      <img src="{{asset('img/modelo_detalhe_2.jpg')}}">
                           <div class="caption left-align">
                          <h3>Titulo da img</h3>
                          <h5>descricao da img</h5>
            </div>
                  </li>
                       <li>
                      <img src="{{asset('img/modelo_detalhe_3.jpg')}}">
                           <div class="caption left-align">
                          <h3>Titulo da img</h3>
                          <h5>descricao da img</h5>
            </div>
                  </li>
                       <li>
                      <img src="{{asset('img/modelo_detalhe_4.jpg')}}">
                           <div class="caption left-align">
                          <h3>Titulo da img</h3>
                          <h5>descricao da img</h5>
            </div>
                  </li>
              </ul>

          </div>      
            </div>
            <div align="center" class="row">
                 <button  onclick="sliderPrev()" class="btn blue">anterior</button>
                 <button onclick="sliderNext()" class="btn blue">proxima</button>

            </div>
    	</div>
    	<div class="col s12 m4">
    		<h4>Titulo do imovel</h4>
    		<blockquote>
    			Descricao breve sobre a imovel.
    		</blockquote>
            <p><b>Codigo:</b> 245</p>
            <p><b>Status:</b> Vende</p>
            <p><b>Tipo:</b> Avenaria</p>
            <p><b>Ederenco:</b> centro</p>
            <p><b>cep:</b> 8888888</p>
            <p><b>Cidade:</b> Curtiba</p>
    		<p><b>Valor:</b> R$ 250.00,00</p>
            <a class="btn deep-orange darken-1" href="{{ route('site.contato')}}">Entrar em contato</a>

    	</div>
    </div>
</div>
@endsection