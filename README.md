# PayZen VADS payment exemple - PHP

[![Build Status](https://travis-ci.org/lyra/php-payment-form-examples.svg?branch=master)](https://travis-ci.org/lyra/php-payment-form-examples)

## Introduction
The code presented here is a demonstration of the implementation of the VADS PayZen payment system, aimed to ease its use and learning.


## Contents
*  `lib/locale`, contains the different translation files in French; english, German and Spanish each file per folder.
*  `lib/lyra-payment-form-sdk`, Lyra SDK files.
*  `lib/tools`, the core file, defining an utility class encapsulating all the PayZen logics of the examples.

## Example
* `config/Config.php`, a centralized configuration and initialisation file.
* `example/`, this folder contains payment methods implimentation example files.
* `example/return-payment.php`, the file for the return URL after payment.

## The first use
1. Place the files on the same directory, under the root of your web-server
2. In `config/Config.php`, replace the occurences of `[***CHANGE-ME***]` by the actual values of your PayZen account
3. Access `index.html` from your browser.
4. Follow the PayZen indications to perform the payment


## The next steps

You will also find here the instructions on how to plug the toolbox logging process to your own logging mechanism, how to override the IPN and RETURN URL defined for your PayZen account, and finally, you can change the `TEST` parameter to `PRODUCTION` to switch to _real_ payment mode, with *all* the caution this decision expects.



## Note
* The documentation used to write this code was [Guide d'implementation formulaire de paiement, v3.4](https://payzen.io)


