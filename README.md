![Logo](logo.png)

### Instalação

```composer 
composer require gsferro/fa-stack-ping && php artisan vendor:publish --provider="Gsferro\FaStackPing\Providers\FaStackPingServiceProvider" --force
```

- No header da aplicação, adicione:
```php
 @FaStackPingCss()
```

### Dependencias:

- Minimo [font awesome 4](https://fontawesome.com/v4/)
- Laravel 8 (mas pode ser alterado para ser usado em versões interiores alterando o componente publidados)


### Uso

- `Online` / `Success` / `True`
    ```html
    <x-fa-stack-on />
    ```

- `Offline` / `Error` / `False`
    ```html
    <x-fa-stack-on />
    ```
  
- `Genérico`
    ```html
    <x-fa-stack-ping 
        fa="info-circle" #não precisa colocar a class fa
        text="<class_css>" #exemple text-red 
        title="<opcional>" 
    />
    ```
    - Exemplo: `info-circle`
        ```html
        <x-fa-stack-ping fa="info-circle" text="blue" title="information" />
        ```
    - Exemplo: `plus` com 45º
        ```html
        <x-fa-stack-ping fa="plus fa-rotate-45" text="gray" title="rotate" />
        ```
    
### Informações Gerais

Css para aplicar efeito ping em icon font awesome como forma de status, como online ou offline por ex, e até outros icones e cores, colocando no fundo o efeito de ping.

Utiliza o conceito de `Stacked Icons`

- Exemplos Cores:

    ```text
    "success",
    "red",     
    "yellow",  
    "gray",
    ```

- Exemplos Icons:

    ```text
    "info-circle",
    "square",
    "asterisk",
    ```

- Fazer Rotação 45º

    ```text
    fa-rotate-45
    ```

### HTML:

- Esta preparado para usar o `tooltip`
- Adicione o css ao head do seu html e utilize o codigo abaixo
    ```html
    <link href="vendor/fa-stack-ping/fa-stack-ping.css" rel="stylesheet" type="text/css"> 
    ```
  
- Agnostico:
    ```html
    <-- status online -->
    <span class="fa-stack-ping" title="online">
      <i class="fa fa-circle fa-stack-1x text-success"></i>
      <i class="fa fa-circle fa-stack-1x text-success fa-animate-ping"></i>
    </span>
    ```
    
    ```html
    <-- status offline -->
    <span class="fa-stack-ping" title="offline">
      <i class="fa fa-circle fa-stack-1x text-red"></i>
      <i class="fa fa-circle fa-stack-1x text-red fa-animate-ping"></i>
    </span>
    ```

### Demo Online Jsfiddle

  > https://jsfiddle.net/gsferroti/tdxL8vaf/11/

### License

- MIT License