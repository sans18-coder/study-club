<x-layout>
  <div class="container">
    <form action="/tambah-buku" method="post">
        @csrf
        <div class="mb-3">
          <label class="form-label">Judul Buku</label>
          <input type="text" class="form-control" name="judul">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Pengarang</label>
          <input type="text" class="form-control" name="pengarang">
        </div>
        <div class="mb-3">
            <label class="form-label">Penerbit</label>
            <input type="text" class="form-control" name="penerbit">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <a href="/tampil-buku">daftar buku</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</x-layout>
    