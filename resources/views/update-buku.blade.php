<x-layout>
    <div class="container">
        <form action="/update-buku" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <input type="hidden" class="form-control" name="id" value="{{ $buku->id }}">
              <label class="form-label">Judul Buku</label>
              <input type="text" class="form-control" name="judul" value="{{ $buku->judul_buku }}">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Pengarang</label>
              <input type="text" class="form-control" name="pengarang" value="{{ $buku->pengarang }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Penerbit</label>
                <input type="text" class="form-control" name="penerbit" value="{{ $buku->penerbit }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</x-layout>
