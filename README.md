# 🎮 GameKey Admin System

> Administrative panel built with PHP, MySQL and MVC architecture with secure authentication.
> 
> *Sistema administrativo para gerenciamento de produtos digitais (keys de jogos), desenvolvido em PHP com MySQL utilizando padrão MVC e autenticação segura.*
>
> **🔗 **Acesse o projeto online:** [Clique aqui para ver funcionando](http://gamekeys-admin.great-site.net)**

<img width="1438" height="750" alt="image" src="https://github.com/user-attachments/assets/456c2e40-0a54-483f-ad07-3c957c8fad5d" />
<img width="1434" height="753" alt="image" src="https://github.com/user-attachments/assets/bd8e81d1-bc9e-4386-b760-3ba3a198996f" />


## 🚀 Funcionalidades

- 🔐 **Sistema de login** com autenticação segura (`password_hash` / `password_verify`).
- 📦 **CRUD completo de Produtos:** Adição, leitura, edição e exclusão de keys.
- 🎮 **CRUD completo de Plataformas:** Gerenciamento das plataformas dos jogos.
- 💬 **Feedback:** Mensagens de feedback para o usuário utilizando variáveis de sessão.
- 🗄️ **Segurança:** Conexão segura com banco de dados MySQL utilizando **PDO**.
- 🏗️ **Arquitetura:** Código limpo e estruturado no padrão **MVC** (Model-View-Controller).
- 🛡️ **Proteção de Rotas:** Acesso restrito via verificação de autenticação de sessão.

## 🛠️ Tecnologias Utilizadas

- **PHP 8+**
- **MySQL**
- **PDO** (PHP Data Objects)
- **HTML5 & CSS3**
- **XAMPP** (Ambiente local)

## 📁 Estrutura do Projeto

Abaixo está a organização de diretórios baseada no padrão MVC adotado no projeto:

```text
gamekey-admin-system/
├── config/
│   └── database.php               # Arquivo de configuração e conexão com o BD
├── controllers/                   # Controladores (Regras de negócio)
│   ├── AuthController.php
│   ├── PlataformaController.php
│   └── ProdutoController.php
├── models/                        # Modelos (Interação com o banco de dados)
│   ├── Plataforma.php
│   ├── Produto.php
│   └── Usuario.php
├── public/                        # Arquivos estáticos
│   ├── css/
│   │   └── style.css
│   └── images/                    # Imagens e capas dos jogos
├── views/                         # Telas da aplicação
│   ├── auth/
│   │   └── login.php
│   ├── plataformas/               # CRUD de plataformas
│   │   ├── criar.php
│   │   ├── editar.php
│   │   └── index.php
│   ├── produtos/                  # CRUD de produtos
│   │   ├── criar.php
│   │   ├── editar.php
│   │   └── index.php
│   └── templates/                 # Componentes globais
│       ├── footer.php
│       └── header.php
├── database.sql                   # Script de criação das tabelas do banco
├── index.php                      # Ponto de entrada e gerenciador de rotas
└── README.md                      # Documentação do projeto
⚙️ Como Executar o Projeto (Localmente)
Siga os passos abaixo para rodar o projeto na sua máquina:
1. Clonar o repositório
Abra o terminal na pasta htdocs do seu XAMPP e execute:
code
Bash
git clone https://github.com/JoaoLucasVeiga/gamekey-admin-system.git
2. Configurar o Banco de Dados
Inicie o Apache e o MySQL no XAMPP.
Acesse o phpMyAdmin: http://localhost/phpmyadmin
Vá na aba Importar e selecione o arquivo database.sql que está na raiz do projeto.
O script criará automaticamente o banco db_steamkeys_globais e as tabelas necessárias.
3. Acessar o Sistema
Abra o navegador e acesse:
code
Text
http://localhost/gamekey-admin-system
👤 Usuário de Teste
Para acessar o painel administrativo, utilize as credenciais padrão:
Email: admin@email.com
Senha: 123456
Desenvolvido por João Lucas Veiga.
