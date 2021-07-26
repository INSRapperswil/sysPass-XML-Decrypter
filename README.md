SysPass XML decrypter
=====================

XML decrypter for [sysPass](https://github.com/nuxsmin/sysPass/).

## Supported export formats

 - LastPass
 
 The resulting file is comma-delimited and is also suitable for CSV generic import in KeePass.

## Requirements

 - PHP >= 7.0
 - php-xml
 - php-mbstring
 - php-mcrypt
 - composer
 
## Installation

 - Clone the repository:

 ```
 git clone https://github.com/julenpardo/sysPass-XML-Decrypter
 ```

 - Install Composer dependencies:

 ```
 cd sysPass-XML-Decrypter
 composer install
 ```

## Usage

 - Execute the script:
 ```
 ./decrypt.php <path-to-encrypted-xml> <xml-export-key> <master-syspass-key> <dest-file> [format]
 ```

Tested with PHP 7.4.21 and XML exported with sysPass 3.0.
