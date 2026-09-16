# Laravel Domain Generator

Pacote Laravel que gera as classes base de uma camada de domínio via Artisan, cortando o boilerplate inicial de projetos organizados em DDD ou Clean Architecture.

[![Packagist](https://img.shields.io/packagist/v/marcusslv/laravel-domain-generator?style=flat-square)](https://packagist.org/packages/marcusslv/laravel-domain-generator)
[![Downloads](https://img.shields.io/packagist/dt/marcusslv/laravel-domain-generator?style=flat-square)](https://packagist.org/packages/marcusslv/laravel-domain-generator)
[![CI](https://img.shields.io/github/actions/workflow/status/marcusslv/laravel-domain-generator/ci.yml?branch=main&style=flat-square&label=CI)](https://github.com/marcusslv/laravel-domain-generator/actions)
[![Licença](https://img.shields.io/packagist/l/marcusslv/laravel-domain-generator?style=flat-square)](LICENSE)

## O problema que resolve

Todo projeto Laravel estruturado em domínio começa com as mesmas dezenas de arquivos: entidade, repositório, contrato, serviço, controller, migration, factory e seeder, sempre com a mesma forma e sempre escritos à mão. O pacote gera esse conjunto em um comando, com nomenclatura e estrutura consistentes entre módulos.

## Requisitos

- PHP 8.2 ou superior
- Laravel 12

## Instalação

```bash
composer require marcusslv/laravel-domain-generator --dev
```

O service provider é registrado automaticamente pelo package discovery do Laravel.

## Uso

### Classes abstratas do projeto

```bash
php artisan make:abstracts
```

Gera as classes abstratas que servem de base para todo o domínio: Entity, Repository, Service, Controller e Interface. Rode uma vez por projeto.

### Um novo domínio

```bash
php artisan make:domain
```

Gera o conjunto completo de um domínio: Entity, Repository, Service, Controller, Interface, Migration, Factory e Seeder.

## Desenvolvimento

```bash
composer test          # executa a suíte de testes
composer pint          # verifica a formatação
composer pint:fix      # aplica a formatação
composer rector:check  # analisa refatorações sugeridas
```

## Contribuindo

Issues e pull requests são bem-vindos. Para mudanças maiores, abra uma issue antes para discutir a proposta.

## Licença

MIT. Veja [LICENSE](LICENSE).