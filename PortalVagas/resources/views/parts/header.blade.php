<div class="container-flex">
    <br>
    <br>
    @if(Auth::check())
        @if (Auth::user()->is_empresa())
            <div>
                Olá empresa
            </div>
        @else
            <div>
                Olá {{Auth::user()->nome}}
            </div>
        @endif
    @else
    <h4>esse é o Header </h4>
    @endif

    <br>
    <hr>
    <br>
</div>
