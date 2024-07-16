<section class="w-100 h-100 d-flex align-items-center justify-content-center  login  ">

    <div class="wrapper w-50  my-4 my-md-0 h-100">
            <div class="card-switch h-100 pb-4 ">
                
                  
                       
                       
                      
                       <div class="flip-card__inner ">
                          <div class="flip-card__front ">
                             <div class="title">Cadastro</div>
                             <form method="post" action="./Sistema-de-Login/registro.php" class="flip-card__form" autocomplete="off">
                             <input type="text" placeholder="username" name="username" class="flip-card__input" autocomplete="off" placeholder="Digite aqui">
                                
                                <input type="email" placeholder="Email" name="email" class="flip-card__input" autocomplete="off">
                                <input type="password" placeholder="senha" name="senha" class="flip-card__input" autocomplete="off">
                                <button class="flip-card__btn">Let`s go!</button>
                                <?php if(isset($_COOKIE["Registro"])){?>
                                <p class="text-center text-light">Usuario Existente</p>
                                <?php }?>
                             </form>
                          </div>
                        
                       </div>
                    
                
            </div>
       </div>
    
    
    
        </div>


</div>
<div class="imagem w-75 d-none d-md-block">
<img src="./imagens/gojologin.jpg" alt="" class="w-100">
</div>







</section>