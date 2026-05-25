# DevConnect

Um projeto Laravel presente neste workspace — uma base para aplicações web construída com Laravel.

## Descrição

Aplicação Laravel preparada para desenvolvimento local. Contém estrutura padrão (rotas, controllers, views) e scripts para compilação de frontend com Vite.

## Tecnologias

- PHP (Laravel)
- Composer
- Node.js / npm
- Vite
- MySQL (ou outro banco compatível)

## Requisitos

- PHP 8.0+ (verifique a versão no `composer.json`)
- Composer
- Node.js 16+ e npm
- Banco de dados (MySQL, MariaDB, PostgreSQL)
- Extensões PHP comuns: `pdo`, `mbstring`, `openssl`, `tokenizer`, `xml`

## Instalação (desenvolvimento)

1. Clone o repositório e acesse a pasta do projeto:

```bash
git clone <repo-url> devconnect
cd devconnect
```

2. Instale dependências PHP:

```bash
composer install
```

3. Instale dependências JS e compile assets em modo de desenvolvimento:

```bash
npm install
npm run dev
```

4. Copie o arquivo de ambiente e gere a chave da aplicação:

```bash
cp .env.example .env
php artisan key:generate
```

5. Configure as variáveis do `.env` (conexão com banco, credenciais, etc.) e rode as migrations:

```bash
php artisan migrate --seed
```

6. Execute o servidor local (ou utilize Laragon/Valet):

```bash
php artisan serve
```

O projeto ficará disponível em `http://localhost:8000` por padrão.

## Configurações úteis

- Para usar filas, cache ou broadcast, configure os drivers no arquivo `.env` e os serviços correspondentes.
- Arquivos relevantes: [routes/web.php](routes/web.php), [app/Models](app/Models), [resources/views](resources/views).

## Testes

Execute os testes com PHPUnit/Laravel:

```bash
./vendor/bin/phpunit
```

ou

```bash
php artisan test
```

## Estrutura do projeto

- `app/` — Lógica da aplicação (Models, Controllers, Providers)
- `routes/` — Definição de rotas (`routes/web.php`, `routes/console.php`)
- `resources/` — Views, assets não compilados (JS/CSS)
- `public/` — Entrada pública e arquivos compilados
- `database/` — Migrations, seeders e factories

## Contribuição

1. Abra uma issue para discutir mudanças maiores.
2. Crie uma branch com o padrão `feature/descricao` ou `fix/descricao`.
3. Envie um pull request descrevendo as mudanças.

## Licença

Este projeto segue a licença padrão do framework (MIT) salvo indicação em contrário.

---

Se quiser, eu posso também:

- adicionar badges (build, coverage)
- criar um `README` mais focado no fluxo do projeto (endpoints principais, diagramas)
- gerar scripts Docker/Compose para desenvolvimento local


## Sobre o DevConnect

DevConnect é uma rede social focada em desenvolvedores, construída como atividade didática em Laravel. O objetivo é fornecer uma aplicação mínima com estrutura MVC para que alunos aprendam a organizar views, rotas, controllers e models enquanto adaptam um layout front-end.

A aplicação simula funcionalidades típicas de uma rede social: feed de publicações, perfis de usuário, mensagens privadas e exploração de conteúdo.

## Controllers e Models — explicação para a atividade

**Controllers**:

- **Propósito:** recebem requisições HTTP, executam lógica necessária (consulta a models, validação, persistência) e retornam uma resposta (view, redirect ou JSON).
- **Controllers principais nesta atividade:** `FeedController`, `PerfilController`, `MensagemController`, `ExplorarController`.
- **Métodos comuns:**
  - `index()` — lista recursos (ex.: feed de posts).
  - `show($id)` — mostra um recurso específico (ex.: perfil de usuário).
  - `create()` / `store(Request $request)` — exibe formulário e persiste novo recurso.
  - `edit()` / `update()` — atualiza recursos existentes.
  - `destroy()` — remove recursos.

Exemplo simples de controller (sintaxe Laravel):

```php
namespace App\Http\Controllers;

use App\Models\Post;

class FeedController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('feed.index', compact('posts'));
    }
}
```

- **Rotas:** defina rotas em `routes/web.php` apontando para os controllers, por exemplo:

```php
use App\Http\Controllers\FeedController;

Route::get('/', [FeedController::class, 'index']);
Route::get('/perfil/{user}', [PerfilController::class, 'show']);
```

**Models (Eloquent)**:

- **Propósito:** representam tabelas do banco de dados e permitem consultas e relacionamentos com sintaxe orientada a objetos.
- **Exemplos comuns:** `User`, `Post`, `Message`, `Comment`.
- **Recursos importantes:**
  - **Relacionamentos:** `hasMany`, `belongsTo`, `belongsToMany`, `hasOne`.
  - **Mass assignment:** defina `$fillable` ou `$guarded` para proteger atributos.
  - **Factories & Seeders:** facilitam popular dados de teste.
  - **Accessors / Mutators e Casts:** para formatar atributos automaticamente.

Exemplo de model simples:

```php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['user_id', 'title', 'body'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
```

**Fluxo típico em uma ação de publicar (store):**

1. Usuário envia formulário de criação de post para `POST /posts`.
2. Rota direciona para `PostController@store`.
3. O controller valida os dados e chama `Post::create($validated)`.
4. O model persiste no banco e o controller redireciona para o feed.

**Dicas para a atividade:**

- Mantenha controllers enxutos: coloque regras de negócio complexas em serviços ou models quando fizer sentido.
- Use requests personalizados (`php artisan make:request`) para validação.
- Aproveite factories em `database/factories` para gerar conteúdo de amostra.

---

Se quiser, eu posso incluir no `README` exemplos de rotas completas, trechos de migrations para `posts` e `messages`, ou adicionar diagramas simples das relações entre `User`, `Post` e `Message`.

Diga qual desses itens prefere que eu adicione.
