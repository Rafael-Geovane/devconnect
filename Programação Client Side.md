# Programação Client Side

**CURSO:** 2025-Técnico em Desenvolvimento de Sistemas

**UNIDADE CURRICULAR:** Programação Client Side

**CARGA HORÁRIA DA UNIDADE CURRICULAR:** 0h

**NOME DO INSTRUTOR:** Marcel

**UNIDADE:** SENAI MG BH – Centro de Treinamento da Tecnologia da Informação - CTTI

## Situação de Aprendizagem

### Capacidades

* Compreender o funcionamento da arquitetura MVC
* Configurar um projeto utilizando o framework Laravel
* Criar e configurar rotas no Laravel
* Desenvolver controllers para gerenciamento das páginas
* Trabalhar com Blade Templates e layouts reutilizáveis
* Organizar uma aplicação web moderna seguindo boas práticas de desenvolvimento

### Contexto

As redes sociais fazem parte do cotidiano de milhões de pessoas e cada plataforma possui um objetivo específico: compartilhar fotos, vídeos, opiniões, jogos, música, estudos, tecnologia, esportes, filmes e diversos outros interesses.

Agora imagine que você teve uma ideia inovadora para criar uma nova rede social voltada para um público específico ou para um tema que você considera interessante. Seu objetivo será desenvolver a estrutura inicial dessa plataforma utilizando o framework Laravel seguindo o padrão arquitetural MVC (Model-View-Controller).

Para iniciar o projeto, foi disponibilizado um layout front-end desenvolvido em HTML, CSS, Bootstrap e JavaScript. Sua missão será adaptar este layout para transformá-lo em uma aplicação organizada utilizando:

* Views
* Rotas
* Controllers

Nesta etapa, o foco será exclusivamente na estruturação da aplicação. Ainda não será necessário utilizar banco de dados ou models.


## Desafio

### Proposta da Atividade

Cada aluno deverá criar sua própria rede social temática.

Você deverá:

* Escolher um tema do seu interesse
* Criar o nome da sua rede social
* Definir a identidade visual
* Organizar a aplicação utilizando Laravel e o padrão MVC

O nome do projeto deverá ser original e o domínio local deverá seguir o padrão:

`nomedarede.localhost`

**Exemplos:**

* `instasenai.localhost`
* `musicwave.localhost`
* `cinebook.localhost`
* `gamenation.localhost`
* `tecconnect.localhost`
* `fitlife.localhost`

### Regras Importantes

O tema escolhido:

* Deve ser apropriado ao ambiente escolar
* Deve possuir criatividade e coerência visual
* Não poderá conter:
    * Nomes ofensivos
    * Conteúdos pejorativos
    * Apologia
    * Discriminação
    * Violência
    * Conteúdo inadequado

Projetos que não seguirem essas regras não serão aceitos.


## Objetivos da Atividade

Ao final desta atividade você deverá ser capaz de:

* Configurar um projeto Laravel
* Aplicar a arquitetura MVC
* Criar controllers
* Configurar rotas
* Trabalhar com Blade Templates
* Organizar layouts reutilizáveis
* Estruturar corretamente um projeto web

## Estrutura Esperada

```
app/
├── http/
│   └── Controllers/
resources/
├── views/
│   ├── layouts/
│   ├── components/
│   ├── feed/
│   ├── perfil/
│   ├── mensagens/
│   └── explorar/
routes/
└── web.php
```

## Funcionalidades Desta Etapa

### Views

Transformar as páginas HTML em arquivos Blade:

* `feed.blade.php`
* `perfil.blade.php`
* `mensagens.blade.php`
* `explorar.blade.php`


## Layout Principal

Criar um layout reutilizável contendo:

* navbar
* sidebar/menu
* footer
* importações de CSS e JavaScript

Utilizar corretamente:

`@extends`
`@section`
`@include`
`@yield`

## Controllers

Criar:

`FeedController`
`PerfilController`
`MensagemController`
`ExplorarController`

Cada controller deverá retornar sua respectiva view.

## Rotas

Configurar as rotas da aplicação no arquivo:

`routes/web.php`

**Exemplo:**

`Route::get('/', [FeedController::class, 'index']);`
`Route::get('/perfil', [PerfilController::class, 'index']);`
`Route::get('/mensagens', [MensagemController::class, 'index']);`
`Route::get('/explorar', [ExplorarController::class, 'index']);`

## Critérios de Avaliação

* Organização MVC
* Estrutura das Views
* Controllers
* Configuração das Rotas
* Organização do Projeto
* Criatividade do Tema
