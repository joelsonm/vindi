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
    Vindi::paymentMethods()
    Vindi::discounts()
    Vindi::subscriptions()
    Vindi::productItems()
    Vindi::periods()
    Vindi::bills()
    Vindi::billItems()
    Vindi::charges()
    Vindi::transactions()
    Vindi::paymentProfiles()
    Vindi::usages()
    Vindi::invoices()
    Vindi::movements()
    Vindi::messages()

```
