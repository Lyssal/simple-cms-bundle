# LyssalSimpleCmsBundle

`LyssalSimpleCmsBundle` est une surcharge du `SimpleCmsBundle` de `Symfony CMF`.

## SonataAdmin

`LyssalSimpleCmsBundle` intègre automatiquement un éditeur `CKEditor` dans la gestion administrative de `SymfonyCMF` si le FormType `ckeditor` existe (en installant `IvoryCKEditorBundle` par exemple).

## Twig

### Fonction Twig

Ajout de la fonction `filAriane` permettant de générer un fil d'Ariane à partir d'une `\Symfony\Cmf\Bundle\SimpleCmsBundle\Doctrine\Phpcr\Page`.
```twig
{{ filAriane(cmfMainContent) }}
```


## Installation

Dans votre `AppKernel.php` :
```php
new Symfony\Cmf\Bundle\SimpleCmsBundle\CmfSimpleCmsBundle(),
new Lyssal\SymfonyCmf\SimpleCmsBundle\LyssalSymfonyCmfSimpleCmsBundle(),
```

Dans votre `config.yml` :
```yml
cmf_simple_cms:
    persistence:
        phpcr:
            # Pour l'affichage dans la liste des pages par défaut
            basepath: /cms/simple
            document_class: Symfony\Cmf\Bundle\SimpleCmsBundle\Doctrine\Phpcr\Page
            use_sonata_admin: true
```
