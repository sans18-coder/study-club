<x-layout>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Judul Buku</th>
        <th scope="col">Pengarang</th>
        <th scope="col">Penerbit</th>
        <th scope="col">Update</th>
        <th > Hapus</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($buku as $buku)
        <tr>
            <th scope="row">{{ $buku->id }}</th>
            <td>{{ $buku->judul_buku }}</td>
            <td>{{ $buku->pengarang }}</td>
            <td>{{ $buku->penerbit }}</td>
            <td><a href="/tampilan-update-buku/{{ $buku->id }}">update</a></td>
            <td>
              <form action="/hapus-buku" method="POST">
                @csrf
                @method('DELETE')
                <input type="hidden" name="id" value="{{ $buku->id }}">
                <button type="submit">Hapus</button>
              </form>
            </td>
          </tr>
        @endforeach
    </tbody>
  </table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</x-layout>