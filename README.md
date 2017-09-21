# API REST VINDI PARA LARAVEL 5.*

### Baixar pacote necessário

```
  composer require joelsonm/vindi
```
ou adiciona no composer.json
```
  "joelsonm/vindi" : "dev-master"
```

### Registrar providers e facades no config/app.php

Provider

```
  Joelsonm\Vindi\Providers\VindiServiceProvider::class
```
Facades
```
  'Vindi' => \Joelsonm\Vindi\Facades\Vindi::class
```

### Publicando arquivo de configuração

```
  php artisan vendor:publish
```

### Configurando
Configure os dados no arquivo config/vindi.php

## ENDPOINT DISPONÍVEIS

```
    Vindi::customers()
    Vindi::plans()
    Vindi::products()
    Vindi::payment_methods métodos()
    Vindi::discounts()
    Vindi::subscriptions()
    Vindi::product_items métodos()
    Vindi::periods()
    Vindi::bills()
    Vindi::bill_items()
    Vindi::charges()
    Vindi::transactions()
    Vindi::payment_profiles métodos()
    Vindi::usages métodos()
    Vindi::invoices()
    Vindi::movements métodos()
    Vindi::messages()

```
