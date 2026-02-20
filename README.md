# gamekey-admin-system
Administrative panel built with PHP, MySQL and MVC architecture with secure authentication.


Sistema administrativo para gerenciamento de produtos digitais (keys de jogos), desenvolvido em PHP com MySQL utilizando padrão MVC e autenticação segura.

---

## 🚀 Funcionalidades

- 🔐 Sistema de login com autenticação segura (password_hash / password_verify)
- 📦 CRUD completo de Produtos
- 🎮 CRUD completo de Plataformas
- 💬 Mensagens de feedback via sessão
- 🗄️ Conexão com banco MySQL usando PDO
- 🏗️ Estrutura organizada em MVC

---

## 🛠️ Tecnologias Utilizadas

- PHP 8+
- MySQL
- PDO
- HTML5
- CSS3
- XAMPP (ambiente local)

---

## 📁 Estrutura do Projeto

config/
controllers/
models/
views/
├── auth/
├── produto/
├── plataforma/
└── templates/
public/
index.php
database.sql

## 🔐 Autenticação

O sistema utiliza:

- password_hash() para gerar hash da senha
- password_verify() para validar login
- Controle de sessão com $_SESSION
- Proteção de rotas via verificação de autenticação

---

## ⚙️ Como Executar

1. Clone o repositório:

git clone https://github.com/seuusuario/gamekey-admin-system.git


2. Coloque a pasta dentro do `htdocs/`

3. Crie o banco:

db_steamkeys_globais


4. Importe o arquivo:

database.sql


5. Inicie Apache e MySQL no XAMPP

6. Acesse:

http://localhost/trabalho_crud_jogos


---

## 👤 Usuário de Teste

Email:

admin@email.com


Senha:

123456
