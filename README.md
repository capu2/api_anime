<p align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300" alt="Laravel Logo">
</p>

<h1 align="center">🎌 API Anime</h1>

<p align="center">
  Uma API para cadastro, listagem e gerenciamento de animes — feita com Laravel 11.31 e PHP 8.2.
</p>

---

## 🚀 Funcionalidades

- ✅ Cadastrar animes via formulário
- ✅ Listar todos os animes cadastrados
- ✅ Visualizar detalhes de um anime
- ✅ Atualizar informações de um anime
- ✅ Excluir animes
- ✅ Endpoints para consumo via API externa

## 📦 Instalação

```bash
git clone https://github.com/capu2/api_anime.git
cd api_anime
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
```

> Lembre-se de configurar o banco de dados MySQL no seu `.env`.

## ▶️ Executando o projeto

```bash
php artisan serve
```

Abra no navegador: [http://localhost:8000](http://localhost:8000)

---

## 📚 Rotas disponíveis

### 🏠 Web

| Método | Rota              | Descrição                      |
|--------|-------------------|--------------------------------|
| GET    | `/`               | Página inicial                 |
| GET    | `/anydata`        | Dados em formato JSON          |
| GET    | `/create-anime`   | Formulário de novo anime       |
| POST   | `/anime-store`    | Armazena anime no banco        |
| GET    | `/anime-show/{id}`| Exibe anime específico         |
| POST   | `/anime-update/{id}`| Atualiza anime                |

### 🔗 API

| Método | Endpoint            | Descrição                        |
|--------|---------------------|----------------------------------|
| GET    | `/get-animes`       | Retorna todos os animes          |
| POST   | `/store-animes`     | Cadastra um novo anime           |
| PUT    | `/update-animes`    | Atualiza um anime existente      |
| POST   | `/delete-animes`    | Remove um anime                  |

---

## 🧰 Tecnologias utilizadas

- PHP 8.2
- Laravel 11.31
- MySQL
- Laravel Blade
- API RESTful

---

## 🤝 Contribuindo

Contribuições são bem-vindas!  
Abra uma issue ou envie um pull request com melhorias, correções ou novas ideias.

---

## 📄 Licença

Este projeto está licenciado sob a licença MIT. Veja mais em [LICENSE](LICENSE).

---

### 🌐 Projeto

[🔗 Repositório no GitHub](https://github.com/capu2/api_anime)