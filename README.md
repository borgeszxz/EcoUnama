## 📘 Documentação do Projeto: **ecoUnama**

### 📌 Visão Geral

O projeto **ecoUnama** é uma aplicação web voltada à conscientização ambiental, com funcionalidades que permitem o registro e visualização de resíduos recicláveis entregues por alunos, além de suporte para visualização de histórico e relatórios.

---

### 🏗 Estrutura do Projeto

```
ecoUnama/
│
├── assets/              # Recursos visuais como imagens e ícones
├── css/                 # Estilos CSS personalizados
├── data/                # Conexão com banco de dados (ex: database.php)
├── forms/               # Formulários de entrada de dados
├── img/                 # Imagens utilizadas no front-end
├── js/                  # Scripts JavaScript
├── pages/               # Páginas do sistema (ex: histórico, dashboard)
├── php/                 # Scripts PHP com lógica de negócio e acesso ao banco
├── index.php            # Página inicial
└── README.md            # Documentação do projeto (este arquivo)
```

---

### 🚀 Como Rodar o Projeto

1. **Requisitos:**
   - PHP 7.4+
   - Servidor local (XAMPP, Laragon, WAMP, etc)
   - MySQL ou MariaDB

2. **Passos:**
   - Clone ou baixe o repositório
   - Extraia o conteúdo em sua pasta `htdocs/`
   - Configure o banco de dados no arquivo `data/database.php`
   - Acesse via navegador: [http://localhost/ecoUnama](http://localhost/ecoUnama)

---

### 🗃 Banco de Dados

A estrutura do banco de dados inclui as tabelas:

- `registro_residuos`: Armazena os registros de resíduos entregues.

O arquivo `data/database.php` cuida da conexão com o banco.

---

### 🔍 Funcionalidades

- 📥 **Registro de Resíduos**: Alunos podem registrar tipo, quantidade e curso.
- 📊 **Histórico de Entregas**: Visualização do histórico por aluno ou turma.
- 🔄 **Feedback Visual**: Alertas e mensagens após envio dos dados com loading.

---

### 💻 Tecnologias Utilizadas

- **HTML5**, **CSS3**, **JavaScript**
- **PHP** (backend)
- **MySQL** (banco de dados)
- **Bootstrap** (alguns estilos e responsividade)

---
