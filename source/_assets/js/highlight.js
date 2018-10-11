import hljs from 'highlight.js/lib/highlight';

hljs.registerLanguage('xml', require('highlight.js/lib/languages/xml'));
hljs.registerLanguage('css', require('highlight.js/lib/languages/css'));
hljs.registerLanguage('scss', require('highlight.js/lib/languages/scss'));
hljs.registerLanguage('javascript', require('highlight.js/lib/languages/javascript'));
hljs.registerLanguage('json', require('highlight.js/lib/languages/json'));
hljs.registerLanguage('php', require('highlight.js/lib/languages/php'));
hljs.registerLanguage('apache', require('highlight.js/lib/languages/apache'));
hljs.registerLanguage('yaml', require('highlight.js/lib/languages/yaml'));
hljs.registerLanguage('markdown', require('highlight.js/lib/languages/markdown'));
hljs.registerLanguage('handlebars', require('highlight.js/lib/languages/handlebars'));
hljs.registerLanguage('bash', require('highlight.js/lib/languages/bash'));
hljs.registerLanguage('shell', require('highlight.js/lib/languages/shell'));

hljs.initHighlightingOnLoad();
