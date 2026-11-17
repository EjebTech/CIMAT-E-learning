@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="admin-pagination-nav">

        {{-- Affichage du texte "Affichage de X à Y sur Z résultats" --}}
        <div class="pagination-info">
            <p>
                Affichage de
                <span class="font-medium">{{ $paginator->firstItem() }}</span>
                à
                <span class="font-medium">{{ $paginator->lastItem() }}</span>
                sur
                <span class="font-medium">{{ $paginator->total() }}</span>
                résultats
            </p>
        </div>

        <div class="pagination-wrapper">

            {{-- Bouton Précédent --}}
            @if ($paginator->onFirstPage())
                <span class="page-item disabled" aria-disabled="true">
                    &laquo; Précédent
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="page-item">
                    &laquo; Précédent
                </a>
            @endif

            {{-- Éléments de pagination (Numéros de page) --}}
            <div class="page-numbers">
                @foreach ($elements as $element)
                    {{-- Points de suspension (...) --}}
                    @if (is_string($element))
                        <span class="page-item dots" aria-disabled="true">{{ $element }}</span>
                    @endif

                    {{-- Liens numériques --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <span class="page-item active" aria-current="page">{{ $page }}</span>
                            @else
                                <a href="{{ $url }}" class="page-item">{{ $page }}</a>
                            @endif
                        @endforeach
                    @endif
                @endforeach
            </div>

            {{-- Bouton Suivant --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="page-item">
                    Suivant &raquo;
                </a>
            @else
                <span class="page-item disabled" aria-disabled="true">
                    Suivant &raquo;
                </span>
            @endif

        </div>
    </nav>
@endif
