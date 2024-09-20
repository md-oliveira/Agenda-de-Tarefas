# Gerenciador de Tarefas - PHP Orientado a Objetos

Este é um projeto simples de **Gerenciador de Tarefas** desenvolvido em **PHP**, com foco na utilização de **Programação Orientada a Objetos (POO)** e **Composer** para o autoloading de classes.

## Objetivo do Projeto

O objetivo principal deste projeto é **aprender** e **praticar** o uso de **PHP Orientado a Objetos** junto com o **Composer**, uma ferramenta popular para gerenciamento de dependências e autoload de classes no PHP. A aplicação permite adicionar, listar e atualizar tarefas em um banco de dados.

## Funcionalidades

- **Adicionar Tarefa:** O usuário pode adicionar uma tarefa com um título e descrição.
- **Listar Tarefas:** Exibição das tarefas cadastradas em uma tabela.
- **Atualizar Tarefas:** Possibilidade de atualizar o título e a descrição de uma tarefa já cadastrada.

## Estrutura do Projeto

O código segue os princípios da Programação Orientada a Objetos (POO). Abaixo estão os principais componentes do projeto:

### Classes

1. **Tarefa**:
    - Representa o modelo de uma tarefa.
    - Propriedades: `id`, `titulo`, `descricao`.
    - Métodos: `getId()`, `getTitulo()`, `getDescricao()`, `setId()`, `setTitulo()`, `setDescricao()`.

2. **TarefaDao**:
    - Responsável por interagir com o banco de dados e realizar operações de inserção, listagem e atualização de tarefas.
    - Métodos: `insert()`, `update()`, etc.

### Banco de Dados

O projeto utiliza um banco de dados simples com uma tabela `task` para armazenar as tarefas. A estrutura da tabela é a seguinte:

```sql
CREATE TABLE task (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    descricao TEXT NOT NULL,
    status TINYINT(1) DEFAULT 0
);
