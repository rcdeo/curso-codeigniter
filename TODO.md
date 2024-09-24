# TODO

### Composer

> [!NOTE]  
> CodeIgniter4 requer Composer 2.0.14 ou posterior.

Utilizando o `Composer` para instalar o CodeIgniter4 no seu sistema:

```shell
composer create-project codeigniter4/appstarter project-root
```

Por exemplo, você pode querer instalar a versão 4.3.3 após o lançamento da versão 4.5.5. Nesse caso, especifique a versão no comando:

```shell
composer create-project codeigniter4/appstarter:4.3.3 project-root
```

### Spark

Inicia o servidor de desenvolvimento PHP do CodeIgniter:

```shell
php spark serve
```

Gerar um novo arquivo de `controller` ou `model`:

```shell
php spark make:controller <name> [options]
```

```shell
php spark make:model <name> [options]
```

Exibe todas as rotas:

```shell
php spark routes
```
