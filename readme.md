# Validate C.I.

This library validates Cedulas de Identidad (english: ID Cards) from Uruguay.

## Getting Started

Just install this library and call the class over a variable. It will return if true or false depending on the validation.

### Installing

Using Composer, run:

```
$ composer require elratauru/validate-ci
```

Manually:
```
Copy the folder validate-ci to your project folder (I recommend using a subfolder for libraries) and require the Validator.php file.
```

### Basic Usage

```
use ValidateCI\Validator;

//Create a new Validator.
$validator = new Validator();
$validation = $validator->validate('1.234.567-8');
```
You can check the tests/index.php for more information.

## Built With

* [PHP7](http://www.php.net/) - The Language Used.
* [Composer](https://getcomposer.org/) - Package Manager

## Authors

* **Alfonso Carvallo** - *Everything you see* - [PurpleBooth](https://github.com/PurpleBooth)

See also the list of [contributors](https://github.com/elratauru/validate-ci/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [license.md](license.md) file for details

## Acknowledgments

* Wikipedia, has a decent explanation of how the ID Card is validated.
* [Picandocodigo](https://picandocodigo.github.io/ci_js/) for inspiration.
