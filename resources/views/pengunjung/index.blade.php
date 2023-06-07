@extends('templates.default')


@section('content')

<div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                  <tr>
                      <td>
                        <a href="{{ route('pengunjungs.create')}}">Create</a>
                      </td>
                  </tr>
                    <tr>
                      <th>Name</th>
                      <th>Address</th>
                      <th>Phone</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($pengunjungs as $pengunjung)
                        <tr>
                            <td>{{ $pengunjung->name }}</td>
                            <td>{{ $pengunjung->address }}</td>
                            <td>{{ $pengunjung->phone_number }}</td>
                            <td>
                                <a href="{{ route('pengunjungs.edit', $pengunjung->id) }}" >Edit</a>
                                <form action="{{ route('pengunjungs.destroy', $pengunjung->id) }}" method="post">
                                  @csrf
                                  @method('DELETE')
                                  <input type="submit" value="Hapus" class="btn btn-danger btn-sm">
                                </form>
                            </td>
                        </tr>
                        
                    @endforeach
                  </tbody>
                </table>
                {{ $pengunjungs->links() }}
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

@endsection