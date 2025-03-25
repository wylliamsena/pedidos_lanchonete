<div class="mt-5">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>


    <body class="text-bg-secondary p-3">



        <div class="container d-flex justify-content-center" style="width: 39%">
            <div class="row">

                <div class="row">


                    <div class="row align-items-center">

                        <div class="col">
                            <div class="card  bor" style="width: 30rem;" class="mb-10">
                                <div class="card-body">
                                    @if (session()->has('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ session('success') }}
                                            <button type="button" class="btn-close" data-bs-dimiss="alert"
                                                aria-label="close"></button>
                                        </div>
                                    @endif
                                    <div class="card text-bg-secondary p-3">
                                        <h5 class="card-header  text-center">Cadastrar Clientes</h5>
                                        <div class="card-body">
                                            <form wire:submit.prevent="store">
                                                <div class="mb-3">

                                                    <label for="nome" class="form-label">Nome</label>

                                                    <input type="text" class="form-control" id="Nome"
                                                        nome="Nome" placeholder="Ex.:  João da Silva"
                                                        wire:model.defer="Nome">

                                                </div>
                                                <div class="mb-3">
                                                    <label for="data_hora">Endereço</label>
                                                    <input type="text" class="form-control" id="Endereço"
                                                        nome="Endereço" placeholder="Ex.: Rua das Flores, 123 - Centro, São Paulo, SP" wire:model.defer="Endereço">


                                                </div>
                                                <div class="mb-3">
                                                    <label for="descricao">Telefone</label>
                                                    <input type="text" class="form-control" id="Telefone"
                                                        nome="Telefone" placeholder="Ex:(11) 98765-4321" wire:model.defer="Telefone">


                                                </div>
                                                <div class="mb-3">
                                                    <label for="descricao">CPF</label>
                                                    <input type="text" class="form-control" id="CPF"
                                                        nome="CPF" placeholder="Ex.: 123.456.789-00"
                                                        wire:model.defer="CPF">


                                                </div>
                                                <div class="mb-3">
                                                    <label for="descricao">E-mail</label>
                                                    <input type="text" class="form-control" id="E-mail"
                                                        nome="E-mail" placeholder="Ex.: joao.silva@email.com"
                                                        wire:model.defer="E-mail">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="descricao">Senha</label>
                                                    <input type="text" class="form-control" id="Senha"
                                                        nome="Senha" placeholder="Ex.: Segura@123"
                                                        wire:model.defer="Senha">



                                                </div>
                                                <div class="mb-3">

                                                    <div style="text-align: center; margin-top: 10px;">
                                                        <button type="submit" class="btn btn-success">Cadastrar</button>
                                                    </div>


                                                </div>
                                            </form>

                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>

                    </div>



                </div>




                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
                </script>
    </body>

</div>
</div>
</div>
