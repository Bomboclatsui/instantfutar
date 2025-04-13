<div class="text-center">
    <p>Biztosan törölni szeretnéd a következő futárt?</p>
    <h5>{{ $futar->name }} ({{ $futar->email }})</h5>
    <form method="POST" action="{{ route('futarDestroy') }}">
        @csrf
        <input type="hidden" name="id" value="{{ $futar->id }}">
        <button type="submit" class="btn btn-danger">Törlés</button>
    </form>
</div>
