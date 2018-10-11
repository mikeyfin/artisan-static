{{-- I know inline CSS isn't good, but this is just a template so you should change everything anyway --}}
<button data-sharer="facebook" data-url="{{ $page->getUrl() }}" style="background: #3b5998;">
    Facebook
</button>

<button data-sharer="twitter" data-url="{{ $page->getUrl() }}" data-title="{{ $page->title }}" style="background: #00aced;">
    Twitter
</button>

<button data-sharer="reddit" data-url="{{ $page->getUrl() }}" style="background: #ff4500;">
    Reddit
</button>

<button data-sharer="linkedin" data-url="{{ $page->getUrl() }}" style="background: #0077b5;">
    LinkedIn
</button>
