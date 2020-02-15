<?php
    include_once('includes/header.php');
?>
<div class="container">
    <div class="row mt-5">

        <div class="col-4 text-center">
            <a href="#sobre">O que é</a>
        </div>

        <div class="col-4 text-center">
            <a href="#"><img src="img/logo.png" class="w-50" alt=""></a>
        </div>

        <div class="col-4 text-center">
            <a href="#participe">Participe</a>
        </div>

    </div>

    <div class="row mt-5" id="sobre">
    
        <div class="col-xs-12 col-md-6">

            <img src="img/webdesign.png" class="w-100" alt="">

        </div>

        <div class="col-xs-12 col-md-6">
            
            <h2>Concurso cultural</h2>

            <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.</p>

            <button class="btn btn-primary btn-lg mt-4"> Participe </button>

        </div>

    </div>

    <div class="row mt-5 mb-5" id="participe">

        <div class="col-xs-12 col-md-6">

            <h2>Participe agora mesmo</h2>

            <p>Preencha os dados abaixo e particpe da promoçlão especial!</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacusLorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacusLorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacusLorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacusLorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus</p>

        </div>

        <div class="col-xs-12 col-md-6 mt-5">

            <div class="row">
                <div class="col">
                    <div id="alert-email" style="display: none" class="alert alert-success">
                        E-mail foi enviado com sucesso!
                    </div>
                </div>
            </div>

            <form action="javascript:void(0);" id="form-participe">
                <div class="form-group row">

                    <label class="col-sm-2">Nome</label>

                    <div class="col-sm-10">
                        <input class="form-control" id="nome" type="text" required>
                    </div>

                </div>

                <div class="form-group row">

                    <label class="col-sm-2">Email</label>
                    
                    <div class="col-sm-10">
                        <input class="form-control" id="email" type="email" required>
                    </div>

                </div>

                <div class="form-group row">

                    <label class="col-sm-2">Telefone</label>
                    
                    <div class="col-sm-10">
                        <input class="form-control" id="telefone" type="text" required>
                    </div>

                </div>

                <div class="form-group row">
                    <div class="col-12">
                        <button type="submit" id="btn-enviar" class="btn btn-primary btn-lg float-right mt-3" >
                            Enviar
                        </button>
                    </div>
                </div>
            </form>
        </div>

    </div>

</div>

<?php
    include_once('includes/footer.php');
?>