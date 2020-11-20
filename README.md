# php-auto-loading-examples
**PHP auto loading examples**
<br/>

Contents:
- Custom autoloader example
- Composer PSR-4 autoloader example
- Composer PSR-0 autoloader example
- Composer Class autoloader example
- Composer File autoloader example
<br/>

**How to test**
<br/>

Clone the project :

``$ git clone https://github.com/ihamzehald/php-auto-loading-examples.git``

CD into the project root:

``$ cd php-auto-loading-examples.git ``

**Custom autoloader using (spl_autoload_register)**

``$ cd spl-example``

``$ php index.php``

**Composer Autoloaders**

``$ cd composer-example``

**Composer PSR-4 autoloader**

``$ cd psr4-autoloader``

``$ composer dump-autoload``

``$ php index.php``

**Composer PSR-0 autoloader**
> ⚠️ **ATTENTION**: PSR-0 is deprecated and modern PHP frameworks use PSR-4
>
``$ cd psr0-autoloader``

``$ composer dump-autoload``

``$ php index.php``

**Composer Class autoloader**

``$ cd class-autoloader``

``$ composer dump-autoload``

``$ php index.php``

**Composer File autoloader**

``$ cd file-autoloader``

``$ composer dump-autoload``

``$ php index.php``