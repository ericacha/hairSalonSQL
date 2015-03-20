Create Hair Salon App

by Erica Cha

The owner should be able to add a list of their stylists, and for each stylist, add clients who see that stylist. The stylists work independently, so each client only belongs to a single stylist.


Technology

PHP<br>
Silex<br>
Twig<br>
PostgreSQL<br>
PHPUnit<br>
Test Driven Development<br>
Composer<br>
License<br>

The MIT License (MIT)

Copyright (c) 2015 Erica Cha

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.




-------------------------------------

DATABASE

CREATE DATABASE hair_salon;
CREATE DATABASE

 \c hair_salon;

You are now connected to database "hair_salon" as user "laujmimna".

CREATE TABLE stylists (id serial PRIMARY KEY, name varchar);

CREATE TABLE
