# Changelog

Todas as mudanças relevantes deste projeto são documentadas neste arquivo.

O formato segue [Keep a Changelog](https://keepachangelog.com/pt-BR/1.1.0/)
e o versionamento segue [Semantic Versioning](https://semver.org/lang/pt-BR/).

## [Não publicado]

## [2.0.0] - 2026-09-16

Esta versão renomeia o pacote e restringe o suporte ao Laravel 12. Leia as
mudanças incompatíveis antes de atualizar.

### Mudanças incompatíveis

- O pacote foi renomeado de `marcusslv/abstractor` para
  `marcusslv/laravel-domain-generator`. O nome anterior não indicava o
  framework nem o propósito, o que dificultava encontrá-lo no Packagist.
  O namespace PHP permanece `Codehubmvs\Abstracts\`, então o código das
  aplicações que consomem o pacote não precisa mudar.
- O suporte passou a exigir Laravel 12 e PHP 8.2 ou superior. Versões
  anteriores não declaravam requisito algum e podiam ser instaladas em
  projetos incompatíveis. Projetos em Laravel 11 devem permanecer na v1.0.11.

### Corrigido

- A documentação indicava `php artisan make:abstract`, comando que não existe.
  A assinatura correta é `php artisan make:abstracts`. Quem seguia o README
  recebia erro de comando não encontrado logo após instalar.
- O `setUp` da classe base de testes carregava um diretório de migrações
  inexistente e executava `migrate` sem necessidade, quebrando a suíte.
- O `phpunit.xml` declarava a suíte `Feature` apontando para um diretório
  que não existe no repositório.

### Adicionado

- Arquivo `LICENSE` com o texto da licença MIT. A licença já constava no
  `composer.json`, mas sem o arquivo o GitHub não a reconhecia e o link do
  README apontava para uma página inexistente.
- Seção `require` no `composer.json`, declarando `php`, `illuminate/console`
  e `illuminate/support`.
- Integração contínua via GitHub Actions, executando a suíte de testes em
  PHP 8.2 e 8.3 e verificando a formatação com o Pint.
- Campos `homepage` e `support` no `composer.json`, com os links de issues
  e código-fonte.

### Alterado

- `orchestra/testbench` passou de `^9.0` para `^10.0`. A série 9 depende do
  Laravel 11, cujas versões estão bloqueadas por advisories de segurança,
  o que impedia a resolução de dependências.
- `laravel/pint` foi fixado em `^1.13`, permitindo remover
  `minimum-stability: dev` do `composer.json`.
- `rector/rector` passou a ser declarado em `require-dev`. Os scripts já
  invocavam o binário sem que o pacote estivesse listado.
- O README foi reescrito, com seção de requisitos e explicação do problema
  que o pacote resolve.

### Movido

- `TraitTest` saiu de `src/` para `tests/`. Era código de teste distribuído
  junto com o pacote para todas as instalações.

[Não publicado]: https://github.com/marcusslv/laravel-domain-generator/compare/v2.0.0...HEAD
[2.0.0]: https://github.com/marcusslv/laravel-domain-generator/compare/v1.0.11...v2.0.0