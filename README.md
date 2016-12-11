# _Word Frequency with PHP_

#### By _**Stephen Burden**_

## Description
_A basic web application which returns the frequency of a certain word in a paragraph. September 16, 2016_

[Click here to view live](http://word-count-php.herokuapp.com/)

## Specifications
| Behavior | Input Example | Output Example |
| --- | --- | --- |
| Take a search word and a word and returns frequency of search word | Hello, Hello | 1 |
| Take a search word and a word then returns frequency of search word regardless of case | hello, Hello | 1 |
| Take a search word and a word then returns frequency of search word regardless of punctuation that follows the word | hello, Hello!! | 1 |
| Take a search word and multiple words then returns frequency of search word in multiple words | Hello, Hello world, hello. | 2 |
| It does not matter if words are connected by a '/' | Night, Day/night | 1 |
| If search word is not found, return no match found | Hello, Bye, dude! | "No Matches Found!" |

## Setup/Installation Requirements
* _Clone the repository from the link below to your desktop_
* _In Terminal or Command Prompt go to the project directory and run: "composer install" to include all dependencies_
* _In Terminal or Command Prompt go to the "/web" directory inside the project directory and enter the command: "php -S localhost:8000"_
* _To browse go to http://localhost:8000/ in the browser of your choosing_

## Link
https://github.com/spburden/word-frequency-php

## Known Bugs
_There are no known bugs with this application._

## Support and contact details
_spburden@hotmail.com_

## Technologies Used
_PHP, Silex, Twig, PHP Unit, HTML, and Bootstrap_

### License
The MIT License (MIT)

Copyright (c) 2016 **_Stephen Burden_**
