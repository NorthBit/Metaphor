# Metaphor
Metaphor - Stagefright with ASLR bypass
By Hanan Be'er from NorthBit Ltd.

Link to whitepaper:
https://raw.githubusercontent.com/NorthBit/Public/master/NorthBit-Metaphor.pdf

Metaphor's source code is now released!
The source include a PoC code that generates MP4 exploits in real-time and bypassing ASLR.

Server-side includes simple PHP scripts that run the exploit generator - I'm using XAMPP to serve gzipped MP4 files.
The exploit generator is written in Python.

usage: metaphor.py [-h] [-c CONFIG] -o OUTPUT {leak,rce,suicide} ...

positional arguments:
  {leak,rce,suicide}    Type of exploit to generate

optional arguments:
  -h, --help            show this help message and exit
  -c CONFIG, --config CONFIG
                        Override exploit configuration
  -o OUTPUT, --output OUTPUT
