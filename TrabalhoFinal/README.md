# README - Sistema de Avaliação de Serviços

## 1. Descrição do Projeto

Este projeto é um **sistema de avaliação de serviços**, que permite que clientes avaliem diferentes setores de um estabelecimento de forma **anônima**, atribuindo notas de 0 a 10 e fornecendo feedback opcional.

**Tecnologias utilizadas:**

* PHP (backend)
* HTML / CSS / JavaScript (frontend)
* PostgreSQL (banco de dados)

**Funcionalidades principais:**

* Formulário de avaliação dinâmico, carregando perguntas do banco.
* Escala de notas de 0 a 10, com feedback opcional.
* Avaliações totalmente anônimas.
* Mensagem de agradecimento após envio.
* Integração com PostgreSQL para salvar respostas.

---

## 2. Estrutura de Pastas

```
TrabalhoFinal/
│
├─ public/                  
│   ├─ index.php             # Página principal de avaliação
│   ├─ css/
│   │   └─ style.css         # Estilos do formulário
│   └─ js/
│       └─ cores.js          # Script para cores dinâmicas das notas
│
├─ src/                     
│   ├─ perguntas.php        # Função para buscar perguntas
│   └─ respostas.php        # Função para salvar respostas
│
├─ config.php               # Configuração de conexão com PostgreSQL
└─ README.md
```

---

## 3. Requisitos do Sistema

* **XAMPP**
* **PostgreSQL** (ex: via pgAdmin 4)
* Navegador moderno (Chrome, Firefox, Edge)

---

## 4. Configurando o Banco de Dados

1. Abra o **pgAdmin 4** ou terminal PostgreSQL.
2. Crie o banco de dados `avaliacao`:

```sql
CREATE DATABASE avaliacao;
```

3. Crie a tabela `perguntas`:

```sql
CREATE TABLE perguntas (
    id SERIAL PRIMARY KEY,
    texto VARCHAR(255) NOT NULL,
    ordem INT NOT NULL
);
```

4. Crie a tabela `respostas`:

```sql
CREATE TABLE respostas (
    id SERIAL PRIMARY KEY,
    pergunta_id INT NOT NULL REFERENCES perguntas(id),
    nota INT NOT NULL,
    feedback TEXT
);
```

5. Insira perguntas de exemplo:

```sql
INSERT INTO perguntas (texto, ordem) VALUES
('Como você avalia nosso atendimento?', 1),
('Como você avalia a limpeza do ambiente?', 2),
('Como você avalia a qualidade dos produtos?', 3);
```

---

## 5. Configurando a Conexão com PostgreSQL

No arquivo `config.php`:

```php
<?php
$host = 'localhost';
$db   = 'avaliacao';
$user = 'postgres';
$pass = 'sua_senha';
$port = '5432';

try {
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Erro ao conectar ao banco: ' . $e->getMessage());
}
?>
```

> ⚠️ Certifique-se de habilitar `PDO_PGSQL` no `php.ini` se aparecer erro de driver.

---

## 6. Executando o Sistema Localmente

1. Coloque a pasta `TrabalhoFinal` dentro do diretório `htdocs` do XAMPP (ex: `C:\xampp\htdocs\TrabalhoFinal`).
2. Inicie o **Apache** no XAMPP.
3. Acesse pelo navegador:

```
http://localhost/TrabalhoFinal/public/
```

4. O formulário de avaliação será exibido.
5. Selecione notas, preencha o feedback opcional e clique em **Enviar**.
6. A mensagem de agradecimento será exibida.

---

## 7. Formulário de Avaliação

O formulário exibe todas as perguntas cadastradas no banco. Cada pergunta possui uma **escala de 0 a 10**.

### 7.1 Cores Dinâmicas para Notas

Cada nota selecionada muda de cor automaticamente:

| Nota | Cor      | Significado        |
| ---- | -------- | ------------------ |
| 0-3  | Vermelho | Muito insatisfeito |
| 4-6  | Amarelo  | Neutro             |
| 7-10 | Verde    | Satisfeito         |

---

## 8. Feedback Opcional

O usuário pode adicionar um comentário no final do formulário:

---

## 9. Mensagem de Agradecimento

Após o envio exibe a mensagem:

```
O Estabelecimento agradece sua resposta

Sua opinião é muito importante e nos ajuda a melhorar continuamente nossos serviços.

```
