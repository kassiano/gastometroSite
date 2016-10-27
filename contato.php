<?php require_once("include/layout/header.php"); ?>            
<section id="contato-page" class="main">                
    <section class="info-box">
        <h1 class="title">Fale conosco</h1>                    
        <div class="content-wrapper">
            <form method="post" action="contato.php">
                <div class="input-box vertical_layout">
                    <label class="input_label" for="input_nome">Nome</label>
                    <input class="input_field" id="input_nome" type="text" required/>
                </div>
                <div class="input-box vertical_layout">
                    <label class="input_label" for="input_nome">Email</label>
                    <input class="input_field" id="input_nome" type="email" required/>
                </div>
                <div class="input-box vertical_layout">
                    <label class="input_label" for="input_nome">Assunto</label>
                    <select class="input_select">
                        <option selected disabled>Selecione uma opção</option>
                        <option>Reportar Erro</option>
                        <option>Sugestão</option>
                        <option>Outro</option>
                    </select>
                </div>
                <div class="input-box vertical_layout">
                    <label class="input_label" for="input_nome">Email</label>
                    <textarea class="input_text" required></textarea>
                </div>
                <div class="input-box vertical_layout">
                    <input class="input_submit" type="submit" value="Enviar" />
                </div>                            
            </form>
        </div>                    
    </section>
</section>
<?php require_once("include/layout/footer.php"); ?> 