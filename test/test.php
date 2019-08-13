<?php

@define( 'MARKDOWN_PARSER_CLASS',  'MarkdownExtraOverride' );

require "../markdown.php";
require "../MarkdownExtraParser.php";


$parser = new stdClass();
$str = "
# Hello

```
This is a code block.
```

```php
This is a code block.
```


";

MarkdownExtraParser::parseAsMarkdown($parser, $str);


echo $str;
