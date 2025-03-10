<style>
    .BV{
        display: flex;
        justify-content: center;
    }

    .cartoes{
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;
        justify-content: center;
        text-align: center;
        grid-gap: 50px;
    }


</style>

<h1 class="BV">Bem vindo, <?php print $_SESSION["nome"];?></h1>

<div class="mb-3">
    <div>
        
    </div>
</div>


<div class="cartoes">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Medicos</h5>

            <p class="card-text">Faça cadastros e liste seus médicos de forma prática e fácil.</p>
            <a href="?page=cadastrar-medico" class="card-link">Cadastrar</a>
            <a href="?page=listar-medico" class="card-link">Listar</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Pacientes</h5>

            <p class="card-text">Tenha de forma prática o cadastro de seus pacientes por aqui.</p>
            <a href="?page=cadastrar-paciente" class="card-link">Cadastrar</a>
            <a href="?page=listar-paciente" class="card-link">Listar</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Consultas</h5>

            <p class="card-text">A melhor forma de controlar e visualizar suas consultas!</p>
            <a href="?page=cadastrar-consulta" class="card-link">Cadastrar</a>
            <a href="?page=listar-consulta" class="card-link">Listar</a>
        </div>
    </div>
</div>