# Metaphor
Metaphor - Stagefright with ASLR bypass
By Hanan Be'er from NorthBit Ltd.

Link to whitepaper:
https://raw.githubusercontent.com/NorthBit/Public/master/NorthBit-Metaphor.pdf

Metaphor's source code is now released!
The source include a PoC code that generates MP4 exploits in real-time and bypassing ASLR.

usage: metaphor.py [-h] [-c CONFIG] -o OUTPUT {leak,rce,suicide} ...

positional arguments:
  {leak,rce,suicide}    Type of exploit to generate

optional arguments:
  -h, --help            show this help message and exit
  -c CONFIG, --config CONFIG
                        Override exploit configuration
  -o OUTPUT, --output OUTPUT
  
