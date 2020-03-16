@extends('layouts.tela_cad')

@section('body')




<div class="row">
    <div class="cad_cadastrotext"><h4>Cadastro de novo Usuário</h4></div>


    <div class="cad_cardcadastro">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            
                <label for="name" >{{ __('Name') }}</label>

                
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            

           
                <label for="email" >{{ __('E-Mail') }}</label>

                
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
             

            
                <label for="password" >{{ __('Senha') }}</label>

                
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                

           
                <label for="password-confirm" >{{ __('Confirmar Senha') }}</label>

               
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
           

           
                <div class="cad_cadastrar_position">
                    <button type="submit" class="cad_cadastrar" >
                        {{ __('Registrar') }}
                    </button>
                </div>
        </form>
    
    </div>

</div>
<div class="cad_voltar_position">
<a  href="{{ route ('index') }}"><button class="cad_voltar">{{ __('<Voltar para login') }}</button></a>
</div>



@endsection