<link rel="stylesheet" href="{{asset('css/Egresados/paginador.css')}}">

@if ($paginador->hasPages())
    <div>
        <div class="pagination-buttons">
            @if ($paginador->onFirstPage())
                <button class="disabled pag-btn-txt" disabled>Anterior</button>
            @else
                <button class="pag-btn-txt" onclick="location.href='{{ $paginador->previousPageUrl() }}'">Anterior</button>
            @endif

            {{-- Números de página (solo son 3) --}}
            @php
                $start = max($paginador->currentPage() - 1, 1);
                $end = min($start + 2, $paginador->lastPage());
            @endphp

            @for ($i = $start; $i <= $end; $i++)
                @if ($i == $paginador->currentPage())
                    <button class="pag-btn-num active">{{ $i }}</button>
                @else
                    <button class="pag-btn-num" onclick="location.href='{{ $paginador->url($i) }}'">{{ $i }}</button>
                @endif
            @endfor

            @if ($paginador->hasMorePages())
                <button class="pag-btn-txt" onclick="location.href='{{ $paginador->nextPageUrl() }}'">Siguiente</button>
            @else
                <button class="disabled pag-btn-txt" disabled>Siguiente</button>
            @endif
        </div>
    </div>
@endif
