<!doctype html>
<html lang="en">
<head>
    {{-- Include the SEO partial so we can inspect the output in a browser --}}
    @include('partials.seo')
    <style>body{background:#0b1220;color:#cbd5e1;font-family:ui-sans-serif,system-ui,-apple-system,"Segoe UI",Roboto,"Helvetica Neue",Arial}</style>
</head>
<body>
    <main style="padding:2rem;">
        <h1>SEO debug</h1>
        <p>This page renders <code>partials.seo</code>. Use this in local environment only.</p>
        <section>
            <h2>JSON-LD</h2>
            @php
                // Re-generate the JSON-LD block (same as partial) for display
                $site = config('seo', []);
                $author = data_get($site, 'author', '');
                $site_name = data_get($site, 'site_name', data_get($site, 'default_title', ''));
                $ld = [
                    '@context' => 'https://schema.org',
                    '@graph' => [
                        [
                            '@type' => 'WebSite',
                            'url' => data_get($site, 'site_url', url('/')),
                            'name' => $site_name,
                            'publisher' => [
                                '@type' => 'Person',
                                'name' => $author,
                            ],
                        ],
                        [
                            '@type' => 'Person',
                            'name' => $author,
                            'url' => data_get($site, 'site_url', url('/')),
                            'sameAs' => data_get($site, 'same_as', []),
                        ],
                    ],
                ];
            @endphp
            <pre style="white-space:pre-wrap;background:#071029;padding:1rem;border-radius:6px;color:#e6edf3">{{ json_encode($ld, JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) }}</pre>
        </section>
    </main>
</body>
</html>
