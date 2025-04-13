



<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Törlés megerősítés</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body text-dark" id="modalBody">
        @if ($futar)
            Biztos törölni szeretnéd a(z) <b class="text-danger">{{$futar->name}}</b> felhasználót?
            <form method="POST" id="destroyFutarFrm">
                @csrf
                <input type="hidden" name="id" value="{{$futar->id}}">
            </form>
        @else
        <i><b>Nincs ilyen futár!</b></i>
        @endif
    </div>
    <div class="modal-footer">
        @if ($futar)
            <button type="button" class="btn btn-dark"  data-bs-dismiss="modal">Nem</button>
            <button type="button" class="btn btn-danger" onclick="futarokDestory('{{route('futarokDestory')}}');">Igen</button>
        @else
            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">OK</button>
        @endif
    </div>
</div>