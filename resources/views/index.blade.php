@extends('layouts.app')

@section('body')
    
<div class="logo"></div>
<div class="row">

    



    <div class="cadastrar">
    <a  href="{{ route ('registrar') }}"><button class="cadastrar-botao">Cadastrar</button></a>
    </div>

    <div class="login">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        
            <label for="email" >{{ __('E-Mail:') }}</label>

            
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            
        

       
            <label for="password" >{{ __('Senha') }}</label>

            
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            
        

                <div class="entrar"> 
                    <a  ><button type="submit"   class="entrar-botao">{{ __('Login') }}</button></a>
                 </div>

       
            
        </div>
    </form>
</div>
@endsection