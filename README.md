# 🎮 GameKey Admin System

[![Acesse o Projeto Online](https://img.shields.io/badge/Acessar_Deploy-Online-success?style=for-the-badge&logo=vercel)](http://gamekeys-admin.great-site.net)
[![PHP Version](https://img.shields.io/badge/PHP-8+-blue?style=for-the-badge&logo=php)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-Database-orange?style=for-the-badge&logo=mysql)](https://www.mysql.com/)

> **Sistema administrativo completo para gerenciamento de ativos digitais (keys de jogos), desenvolvido do zero aplicando padrões de arquitetura e segurança de mercado.**

<div align="center">
  <img width="800" alt="Tela de Login GameKey Admin" src="https://github.com/user-attachments/assets/456c2e40-0a54-483f-ad07-3c957c8fad5d" />
  <br><br>
  <img width="800" alt="Dashboard GameKey Admin" src="https://github.com/user-attachments/assets/bd8e81d1-bc9e-4386-b760-3ba3a198996f" />
</div>


## 🎯 O Desafio e Propósito do Projeto
Desenvolver um painel administrativo robusto não se trata apenas de criar telas, mas de garantir que regras de negócio sejam respeitadas e que os dados estejam seguros. 

O objetivo deste projeto foi **simular um cenário real de e-commerce e gestão de estoque digital**, construindo uma aplicação sólida do zero (sem uso de frameworks) para consolidar os fundamentos da web: persistência de dados, autenticação segura, separação de responsabilidades (MVC) e controle de sessão.

## 🧠 Decisões Técnicas e Arquitetura

Para provar domínio sobre os fundamentos da engenharia de software, optei por não utilizar frameworks (como Laravel ou Symfony) nesta etapa. As principais decisões foram:

- **Padrão MVC (Model-View-Controller):** Separação clara entre a lógica de banco de dados (`Models`), regras de negócio (`Controllers`) e a interface do usuário (`Views`). Isso torna o código escalável e de fácil manutenção.
- **PDO (PHP Data Objects):** Utilizado para a comunicação com o banco de dados MySQL, garantindo flexibilidade e, principalmente, **prevenção contra ataques de SQL Injection** através do uso de *Prepared Statements*.
- **Controle de Estado e Sessões:** Implementação de feedbacks visuais dinâmicos (mensagens de sucesso/erro) utilizando variáveis de sessão (`$_SESSION`), melhorando a experiência do usuário (UX).

## 🛡️ Foco em Segurança (Security First)
Visando as melhores práticas de mercado e meu interesse no ecossistema de cibersegurança, o sistema conta com:
- **Autenticação Segura:** Senhas nunca são salvas em texto limpo. Utilização das funções nativas `password_hash()` (com algoritmo BCRYPT) e `password_verify()`.
- **Proteção de Rotas:** Nenhuma página interna (CRUDs) pode ser acessada sem um token de sessão válido. Tentativas de acesso direto pela URL redirecionam o invasor para o Login.

## 🚀 Funcionalidades (O que o sistema faz)

- **Sistema de Autenticação:** Login e Logout seguros.
- **Gestão de Produtos (Keys):** CRUD completo (Create, Read, Update, Delete) com upload de imagens/capas.
- **Gestão de Plataformas:** Mapeamento e cadastro de plataformas (Steam, Epic Games, Xbox, etc).
- **Relacionamento de Dados:** Vínculo estruturado entre os jogos e as plataformas no banco de dados.

## 🗺️ Roadmap (Próximos Passos)
A evolução da aplicação é constante. As próximas features mapeadas são:
- [ ] **Dashboard Estatístico:** Tela inicial com métricas (Total de keys, plataformas ativas, etc).
- [ ] **Sistema de Logs:** Registro de auditoria no banco de dados (Quem deletou/editou qual key e quando).
- [ ] **Filtros e Paginação:** Melhoria na listagem de produtos para lidar com grandes volumes de dados.

---

<br>
<h2>⚙️ Como Executar o Projeto (Localmente)</h2>
<p>Siga os passos abaixo para rodar o projeto na sua máquina:</p>
<b>1. Clonar o repositório</b><br>
Abra o terminal na pasta htdocs do seu XAMPP (ou servidor equivalente) e execute:<br>
<pre><code>git clone https://github.com/JoaoLucasVeiga/gamekey-admin-system.git gamekeys-local </code></pre>
<b>2. Configurar o Banco de Dados</b><br>
Inicie o Apache e o MySQL no seu ambiente local.<br>
Acesse o phpMyAdmin (ex: http://localhost/phpmyadmin).<br>
Vá na aba "Importar" e selecione o arquivo database.sql na raiz do projeto.<br>
O script criará automaticamente o banco de dados e as tabelas necessárias.<br><br>
<b>3. Acessar o Sistema</b><br>
Abra o navegador e acesse a pasta do projeto:<br>
<pre><code>http://localhost/gamekeys-local</code></pre>
<hr>
<h2>👤 Credenciais de Teste (Live Demo)</h2>
Para testar o painel administrativo, utilize:<br><br>
<b>Email:</b> admin@email.com<br>
<b>Senha:</b> 123456<br>
<br>
