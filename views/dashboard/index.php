<?php include 'views/templates/header.php'; ?>

<div class="container-fluid" style="padding: 20px;">
    
    <div style="margin-bottom: 20px;">
        <h2>📊 Painel de Controle</h2>
        <p class="text-muted">Bem-vindo ao GameKey Admin System.</p>
    </div>

    <!-- Grid de Cards -->
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px;">
        
        <!-- Card Produtos -->
        <div style="background: white; padding: 25px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); border-left: 5px solid #007bff; display: flex; flex-direction: column; justify-content: space-between;">
            <div>
                <h3 style="margin: 0; color: #555; font-size: 1.2rem;">Total de Jogos</h3>
                <p style="font-size: 3.5rem; font-weight: bold; margin: 10px 0; color: #333;">
                    <?php echo isset($totalProdutos) ? $totalProdutos : 0; ?>
                </p>
            </div>
            <a href="index.php?action=listar_produtos" style="display: inline-block; text-decoration: none; color: white; background-color: #007bff; padding: 10px; text-align: center; border-radius: 5px; font-weight: bold;">
                Ver Lista de Jogos &rarr;
            </a>
        </div>

        <!-- Card Plataformas -->
        <div style="background: white; padding: 25px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); border-left: 5px solid #28a745; display: flex; flex-direction: column; justify-content: space-between;">
            <div>
                <h3 style="margin: 0; color: #555; font-size: 1.2rem;">Plataformas Ativas</h3>
                <p style="font-size: 3.5rem; font-weight: bold; margin: 10px 0; color: #333;">
                    <?php echo isset($totalPlataformas) ? $totalPlataformas : 0; ?>
                </p>
            </div>
            <a href="index.php?action=listar_plataformas" style="display: inline-block; text-decoration: none; color: white; background-color: #28a745; padding: 10px; text-align: center; border-radius: 5px; font-weight: bold;">
                Gerenciar Plataformas &rarr;
            </a>
        </div>

    </div>
</div>

<?php include 'views/templates/footer.php'; ?>