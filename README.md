# Laravel Domain Generator

Gera a estrutura completa de um domínio Laravel com um único comando Artisan: entity, repository, service, controller, interface, migration, factory e seeder. Feito para projetos em DDD ou Clean Architecture.

[![Packagist](https://img.shields.io/packagist/v/marcusslv/abstractor?style=flat-square)](https://packagist.org/packages/marcusslv/abstractor)
[![Downloads](https://img.shields.io/packagist/dt/marcusslv/abstractor?style=flat-square)](https://packagist.org/packages/marcusslv/abstractor)
[![CI](https://img.shields.io/github/actions/workflow/status/marcusslv/laravel-domain-generator/ci.yml?branch=main&style=flat-square&label=CI)](https://github.com/marcusslv/laravel-domain-generator/actions)
[![Licença](https://img.shields.io/packagist/l/marcusslv/abstractor?style=flat-square)](LICENSE)

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

## Changelog

As mudanças de cada versão estão em [CHANGELOG.md](CHANGELOG.md).

## Contribuindo

Issues e pull requests são bem-vindos. Para mudanças maiores, abra uma issue antes para discutir a proposta.

## Licença

MIT. Veja [LICENSE](LICENSE).