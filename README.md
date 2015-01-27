Bolt List Fieldtype
======================

Arbitrarily repeating content extension for Bolt.

## Protip: This doesn't work yet

## Usage

Just add a `list` field to your contenttype. Set `limit` if you want a limit on repetitions. Set item to contain 1 repeating item:

````yaml
mylist:
    type: list
    item:
        type: textarea
````

Or if you want a selection of different kinds of items to add, use `items`:

````yaml
mylist:
    type: list
    items:
        blockquote:
            type: textarea
        image:
            type: image
    default_item: blockquote #optionally set which item to add by default. Default will default to the first item    
````

## License

The MIT License (MIT)

Copyright (c) 2015 Christian Silver

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.