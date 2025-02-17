@if ($paginador->hasPages())
    {{-- <div class="contenido--navegar"> --}}
    <div>
        <div class="pagination-buttons">
            {{-- Botón "Anterior" --}}
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

            {{-- Botón "Siguiente" --}}
            @if ($paginador->hasMorePages())
                <button class="pag-btn-txt" onclick="location.href='{{ $paginador->nextPageUrl() }}'">Siguiente</button>
            @else
                <button class="disabled pag-btn-txt" disabled>Siguiente</button>
            @endif
        </div>
    </div>
@endif

<!-- DESPUES ESTA WEA SE VA A COLOCAR EN EL CSS DE ESTA VISTA, solo Dios sabe cuando :emojiManosRezando:. -->
<style>
    .pagination-buttons {
        display: flex;
        justify-content: center;
        padding-top: 10px;
    }

    .pagination-buttons button {
        height: 24px;
        padding: 5px 15px;
        border: none;
        background-color: #555;
        color: white;
        cursor: pointer;
        font-size: 12px;
    }

    .pag-btn-txt {
        width: 12%;
    }

    .pag-btn-num {
        width: 6%;
    }

    .pagination-buttons button:hover {
        background-color:rgb(127, 127, 127);
    }

    .pagination-buttons .active {
        background-color: #6d000e;
    }

    .pagination-buttons .disabled {
        background-color: #ccc;
        cursor: not-allowed;
    }
</style>