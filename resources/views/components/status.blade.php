@switch($status)
    @case('aguardando_atribuicao')
        <span class="badge badge-pill badge-info text-white">Aguardando atribuição</span>
    @break

    @case('revisado')
        <span class="badge badge-pill badge-success">Revisado</span>
    @break

    @case('aguardando_revisao')
        <span class="badge badge-pill badge-danger">Aguardando revisão</span>
    @break

    @default
    -
@endswitch



