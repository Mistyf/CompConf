# CompConf (v1.0)
#<b>Online computer component configurator</b>

![Comp Conf](http://s28.postimg.org/hjblyri99/compconf.png)
# #Informations [CZ/EN]
Tento program umožňuje konfiguraci vlastních, předem vybraných, kompatibilních PC komponentů do jedné sestavy.
Uživatel pouze nahraje hlavní script a poté si ,dle svých potřeb, upraví vstupní parametry.

This PHP script allows you to configurate, in advance selected, self compatible PC components together.
User just upload main script to his website, then he can freely modify input parameters.

- Author: Martin Halva ([Mistyf](https://github.com/Mistyf))
- Language: [PHP](http://www.php.net)
- Written in: [NetBeans IDE](https://netbeans.org/)
- Online version: [Here](http://73s7.xf.cz/CompConf2.php)
- Documentation: [Here](http://73s7.xf.cz/Documentation/)
- License: [MIT](https://github.com/Mistyf/CompConf/blob/master/LICENSE)

# #Instalation [CZ/EN]
1) Soubor `CompConf.php` nahrajte do vámi zvoleného adresáře (poté je potřeba upravit cestu u require)

   File `CompConf.php` upload to your website directory (edit path to file then)


2) Tento kód vložte na svojí stránku, kde chcete nagenerovat tabulku:

   This source code paste into your website, where you want to generate parameter table:

``` bash
require 'CompConf.php';
$t=new PC();
$t->setpowersupply("atx", 400);
$t->setmotherboard("amd", 4, "i7", "PCI");
$t->setgraphics("Nvidia gt 540m", "SCUDA", "4", "PCI");
$t->setcpu("I7", "i7", 2 , 4);
$t->setRam(1, 2);
echo $t;
```

3) hodnoty v závorkách udávají parametry komponentů. Zachovejte datové typy.

   values in brackets defines input parameters of components. Keep string and integer values.

# #Verze [CZ]
- Verze 1.0   (31.3.2015) => [CompConf v1.0](https://github.com/Mistyf/CompConf/blob/master/CompConf.php)
- Verze 2.0 (v přípravách) => Lepší grafické zpracování, vkládání parametrů přímo z webu a další rozšíření

# #Version [EN]
- Version 1.0   (31.3.2015) => [CompConf v1.0](https://github.com/Mistyf/CompConf/blob/master/CompConf.php)
- Version 2.0 (in future) => Better css stylization, inputing parameters directly from website and more

# #Podpora [CZ]
- Našli jste chybu? máte problém? dotazy zde => [GitHub Issues](https://github.com/Mistyf/CompConf/issues)
- Nebo na pracovní email => [halviscze@gmail.com](halviscze@gmail.com)

# #Bugreport/help [EN]
- Any bugs or issues? ask me here => [GitHub Issues](https://github.com/Mistyf/CompConf/issues)
- or try my work email => [halviscze@gmail.com](halviscze@gmail.com)

