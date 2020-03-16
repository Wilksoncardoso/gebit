@extends('layouts.tela_home')

@section('body')


<div class="text_cad"><h5>Cadastro de Viagem</h5></div>

    <div class="card_cad">
        <form action="" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
            
            <label class="lab_1" for="inicio" >Início da Viagem </label> 
            <input type='text' class='datepicker-here inp_1' name="ida" />
            
            
            <label class="lab_2" for="fim">Fim da Viagem</label> 
            <input type='text' class='datepicker-here inp_2' name="volta" />

            
            
            <label class="lab_3" for="fim">Local</label> 
            <input class="inp_3" type="text" name="local">
            
            
            <label class="lab_4" for="fim">Pranchas a Levar</label> 

            <div class="botao_prancha">
            <button  class="botao" type="button" id="botModal"></button>
            </div>
              <div class="prancha_add">
                <p> teste</p>
                <hr>
                <p> teste</p>
                <hr>
                <p> teste</p>

                

              </div>
            
              <button class="inp_5" type="submit">Cadastrar</button>
            </div>
        </div>
        </form>
 
<!--  aqui começa card viagem-->
        <div class="card_viagem">
            
       
               

          <div class="card_viagem_uni"> 
            <div class="text_local"> <h6> Mosqueiro, Belém, PA, Brasil</h6></div>
            <div class="text_prancha"> <p> Pranchas: Prancha 6'3, Prancha 5'8,</p></div> 
             <div class="data_icon"></div>
             <div class="data_viagem"><h6>  13/01/2020 - 20/04/2020 </h6></div>
             <a href=""><button class="delete_icon"></button></a>  
             </div>
           

           
           <br>
            <div class="card_viagem_uni"> 
            <div class="text_local"> <h6> Mosqueiro, Belém, PA, Brasil</h6></div>
            <div class="text_prancha"> <p> Pranchas: Prancha 6'3, Prancha 5'8,</p></div> 
             <div class="data_icon"></div>
             <div class="data_viagem"><h6>  13/01/2020 - 20/04/2020 </h6></div>
             <a href=""><button class="delete_icon"></button></a>  
             </div>

             <br>
             <div class="card_viagem_uni"> 
             <div class="text_local"> <h6> Mosqueiro, Belém, PA, Brasil</h6></div>
             <div class="text_prancha"> <p> Pranchas: Prancha 6'3, Prancha 5'8,</p></div> 
              <div class="data_icon"></div>
              <div class="data_viagem"><h6>  13/01/2020 - 20/04/2020 </h6></div>
              <a href=""><button class="delete_icon"></button></a>  
              </div>

              <br>
              <div class="card_viagem_uni"> 
              <div class="text_local"> <h6> Mosqueiro, Belém, PA, Brasil</h6></div>
              <div class="text_prancha"> <p> Pranchas: Prancha 6'3, Prancha 5'8,</p></div> 
               <div class="data_icon"></div>
               <div class="data_viagem"><h6>  13/01/2020 - 20/04/2020 </h6></div>
               <a href=""><button class="delete_icon"></button></a>  
               </div>
           
            

          <!--  aqui fim obejeto viagem-->


          


            
            
          





          </div>

          
          



<!--  aqui termina card viagem-->





        </div>

   

  




<!-- Modal -->
<div class="modal fade" id="modal-surf" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
        
       
        
      
      <div class="modal-body">
        <form action="" method="POST">
          @csrf
          <label for="">Cadastre uma nova prancha ou selecione uma existente</label>
        
          <input class="input_modal" type="text" name="tamanho" >
          <input type="hidden" name="user" value="{{ Auth::user () ->id }}">
          
       <div class="modal_botao_position">
         <button class="botao_modal" type="submit"></button>
       </div>
      </form>
       <div class="text_modal"><p><b>Pranchas existente</b></p></div>

       <div class="prancha_add_modal">

        @foreach ($data as $row)
        
         <form method="POST" action="{{route('modal.store.viagem', ['store' => $data->id])}}">
          @csrf
          <input type="text" value="{{$row->tamanho}}">
          <a href="" class="local_botao_cad_prancha"> <button class="botao_cad_prancha" type="submit"></button></a>     
              
            </form>
              <hr>
        @endforeach
        
        

      </div>

        <div class="close_modal"><a data-dismiss="modal">Fechar</a></div>
      </div>

    </div>
  </div>
</div>

@endsection
