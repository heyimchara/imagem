<style type="text/css">
#backtopo {
    display: scroll;
    position: fixed;
    top: 30px;
    right: 10px;
}
</style>


<script>
$(document).ready(function(){
    
    // hide #back-top first
    $('#backtopo').hide();
       
    // fade in #back-top
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 150) {
                $('#backtopo').fadeIn();
            } else {
                $('#backtopo').fadeOut();
            }
        });

        // scroll body to 0px on click
        $('#backtopo').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });

});
</script>
  
<div id="tudo" style="background-color: #A97FBD">


    	<nav id="menu">
				<ul>
					<li><a href="#">Home</a></li>
					<li><span>Administrador</span>
						<ul>
							<li><span>Produto</span>
								<ul>
									<li><a href="#">Listar</a></li>
								</ul>
							</li>
							
							<li><span>Categoria</span>
								<ul>
									<li><a href="#">Listar</a></li>
								</ul>
							</li>
							
							<li><span>Forma de Pagamento</span>
								<ul>
									<li><a href="#">Listar</a></li>
								</ul>
							</li>
							
							<li><span>Cupom</span>
								<ul>
									<li><a href="#">Listar</a></li>
								</ul>
							</li>
							
						</ul>
						
					</li>
					
					<li><a href="#">Cadastre-se</a></li>
					<li><a href="#">Minha Conta</a></li>

				</ul>
			</nav>

<div class="" style="padding:3%;width:28%;">
  <form action="./produto/buscar" method="POST">
  <input id="barra_pesquisa" name="nome" type="text" placeholder = " Pesquisa..." style="margin:0px;" >
  </form>
</div>
<div class="e">
    <p style="text-align:center;"><a href="produto/listarProdutos"><img src="publico/img/logo.png"></a></p>
</div>
<div class="e">
    <a href="cliente/ver/<?=acessoPegarUsuarioLogado();?>"><p id= "icon_Minha_conta" style="color:black;font-size:25px;text-align:center;padding:1%;"><i class="fi-torso" style="margin-right:10px;"></i>Minha Conta</p></a>
</div>
    
<div class="m">
  <a href="sacola/mostrar"><p id= "icon_carrinho" style="color: black" ><i style="font-size:40px" class="fi-shopping-cart"></i></p></a>
</div>
</div> 

          <div id="subtopo_inicial">
            
          </div>
      
      
<br>

		<!-- mmenu scripts -->
		<script src="../dist/mmenu.polyfills.js"></script>
		<script src="../dist/mmenu.js"></script>
		<script>
			new Mmenu( document.querySelector( '#menu' ));

			document.addEventListener( 'click', function( evnt ) {
				var anchor = evnt.target.closest( 'a[href^="#/"]' );
				if ( anchor ) {
					alert('Thank you for clicking, but that\'s a demo link.');
					evnt.preventDefault();
				}
			});
		</script>