# Web Rute Bandara

Web Rute Bandara adalah sebuah website yang dapat digunakan untuk melakukan pendaftaran rute penerbangan yang tersedia pada web tersebut. dan ada juga table rute penerbangan domestik yang menunjukan jam keberangkatan dan kedatangan pesawat.

## Features
- navigasi
- pada bagian dropdown user di minta untuk memilih bandara asal dan bandara tujuan
- setiap bandara mempunyai pajaknya

## Tech
Web Rute Bandara dibangun dengan berikut:
* [PHP](https://www.php.net) - A popular general-purpose scripting language that is especially suited to web development.
* [CSS](https://developer.mozilla.org/en-US/docs/Web/CSS) - stylesheet language used to describe the presentation of a document written in HTML or XML (including XML dialects such as SVG, MathML or XHTML).
* [JAVASCRIPT](https://developer.mozilla.org/en-US/docs/Web/javascript) - JavaScript (JS) is a lightweight interpreted (or just-in-time compiled) programming language with first-class functions.
* [BOOTSTRAP](https://getbootstrap.com) - the world’s most popular framework for building responsive, mobile-first sites, with jsDelivr and a template starter page.
* [VISUALSTUDIOCODE](https://code.visualstudio.com) - Free. Built on open source. Runs everywhere.text editor for code, markup and prose.
* [XAMPP](https://www.apachefriends.org/download.html) - XAMPP is an easy to install Apache distribution containing MariaDB, PHP, and Perl. Just download and start the installer. It's that easy.
* [MICROSOFT EDGE](https://www.microsoft.com/en-us/edge/download?form=MA13FJ) - Browse with Microsoft Edge across all of your devices.

## Requirement

* XAMPP 8.2.4 or later
* PHP 8.2.4 or later

## Structure

````
└────data
|    |   data_bandara.json
|    |   data.json
|    |   rute_domestik.json
|    
└────img
|    |   icon.png
|    |   pesawat.png
|
└────library
|    |    css
|    |    js
|
|    get_data.php
|    get_data_input.php
|    get_data_domestik.php
|    Rute_domestik.php
|    Form_input.php
|    index.php
|    README.md
````

## Installation

Pindahkan semua file ke dalam folder

     C:\xampp\htdocts\[your folder]
     
Start Apache pada XAMPP Control Panel

Akses pada browser

     localhost/[your folder]
    