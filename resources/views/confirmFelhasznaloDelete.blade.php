<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Törlés megerősítés</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body" id="modalBody">
        @if ($felhasznalo)
            Biztos törölni szeretnéd a(z) <b class="text-danger">{{$felhasznalo->name}}</b> felhasználót?
            <form method="POST" id="destroyFelhasznaloFrm">
                @csrf
                <input type="hidden" name="id" value="{{$felhasznalo->id}}">
            </form>
        @else
        <i><b>Nincs ilyen felhasznalo!</b></i>
        @endif
    </div>
    <div class="modal-footer">
        @if ($felhasznalo)
            <button type="button" class="btn btn-dark"  data-bs-dismiss="modal">Nem</button>
            <button type="button" class="btn btn-danger" onclick="felhasznaloDestory('{{route('felhasznaloDestory')}}');">Igen</button>
        @else
            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">OK</button>
        @endif
    </div>
</div>