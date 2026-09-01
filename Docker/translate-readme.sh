#!/bin/bash
# This script will find all 'readme.md' files and translate them into 'readme.nl.md'
# Run this script from the root of the project. This translation uses the DeepL.com platform and needs an API key.
# See https://developers.deepl.com/docs/getting-started/deepl-cli for instructions on installing the DeepL CLI (command
# line interface). To get a free API key create an account on DeepL. https://www.deepl.com/en/signup?cta=checkout&is_api=true
#
# Explanation of the command line
# find -iname 'readme.md' will find files named 'readme.md' , case insensitive (-iname)
# -execdir will execute a command for each item found. Before the command is executed the current directory is changed
#          to the directory where the file is found. The command being executed is between '-execdir' and '\;'
# deepl translate           tells the DeepL CLI to start translating
#  {}                       is the current found filename injected by the 'find' command
#  --output readme.nl.md    will create a file on the same directory as where the file was found
#  --to nl                  translate to nl language (dutch)
# --preserve-code           ignore text contained in code-block markers. ( `....` or ```php ... ```)
#

find -iname 'readme.md' -execdir deepl translate {} --to nl --output readme.nl.md --preserve-code \;
