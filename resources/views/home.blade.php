@extends('layouts.app')
@section('content')

{{-- Welcome Start --}}


<section class="welcome" style="display: flex">
    <div style="padding:  100px 8%  ;">
        <h4><b>WELCOME TO SOFTWARE ENGINEERING</b> </h4>
        <br>
        <p style="width: 65%">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi at illo itaque voluptates, alias obcaecati rerum, eveniet quidem, harum repudiandae amet et distinctio quas. Ipsam impedit voluptatum provident odit praesentium.</p>
        <p style="width: 65%">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi at illo itaque voluptates, alias obcaecati rerum, eveniet quidem, harum repudiandae amet et distinctio quas. Ipsam impedit voluptatum provident odit praesentium.</p>
        <p style="width: 65%">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi at illo itaque voluptates, alias obcaecati rerum, eveniet quidem, harum repudiandae amet et distinctio quas. Ipsam impedit voluptatum provident odit praesentium.</p>
    </div>
</section>


{{-- welcome end --}}



{{-- Fasilitas Start --}}

<section class="fasility" id="fasility">
    <div style="padding:  100px 8% ;">
        <h4><b>WELCOME TO SOFTWARE ENGINEERING</b> </h4>
        <br>
        <p style="width: 65%">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi at illo itaque voluptates, alias obcaecati rerum, eveniet quidem, harum repudiandae amet et distinctio quas. Ipsam impedit voluptatum provident odit praesentium.</p>
        <p style="width: 65%">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi at illo itaque voluptates, alias obcaecati rerum, eveniet quidem, harum repudiandae amet et distinctio quas. Ipsam impedit voluptatum provident odit praesentium.</p>
        <p style="width: 65%">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi at illo itaque voluptates, alias obcaecati rerum, eveniet quidem, harum repudiandae amet et distinctio quas. Ipsam impedit voluptatum provident odit praesentium.</p>
    </div>
</section>

{{-- fasilitas END --}}




{{-- Teacher start --}}

<section class="teachers" id="teachers">
    <div style="padding:  100px 8% ;">
        <h4><b>WELCOME TO SOFTWARE ENGINEERING</b> </h4>
        <br>
        <div class="card border-0 shadow-sm rounded">
            <div class="card-body">
                {{-- <a href="{{ route('posts.create') }}" class="btn btn-md btn-success mb-3">TAMBAH POST</a> --}}

                <div>

                    @forelse ($posts as $post)
                    <img src="{{ asset('/storage/posts/'.$post->image) }}" class="" style="width: 150px; height: 150px; background-size: cover; border-radius: 50%">         
                    <p>{{ $post->title }}</p>
                    <p>{!! $post->content !!}</p>
                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                        {{-- <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a> --}}
                        @csrf
                        @method('DELETE')
                        {{-- <button type="submit" class="btn btn-sm btn-danger">HAPUS</button> --}}
                    </form>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Post belum Tersedia.
                                  </div>
                              @endforelse
                </div>
                {{-- <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">GAMBAR</th>
                        <th scope="col">JUDUL</th>
                        <th scope="col">CONTENT</th>
                        <th scope="col">AKSI</th>
                      </tr>
                    </thead>
                    <tbody> --}}
                      {{-- @forelse ($posts as $post)
                        <tr>
                            <td class="text-center">
                                <img src="{{ asset('/storage/posts/'.$post->image) }}" class="rounded" style="width: 150px">
                            </td>
                            <td>{{ $post->title }}</td>
                            <td>{!! $post->content !!}</td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                </form>
                            </td>
                        </tr>
                      @empty
                          <div class="alert alert-danger">
                              Data Post belum Tersedia.
                          </div>
                      @endforelse --}}
                    </tbody>
                  </table>  
                  {{ $posts->links() }}
            </div>
        </div>
    </div>
</section>

{{--Teacher END  --}}



{{-- Documentation start --}}

<section class="documentation" id="documentation">
    <div style="padding:  100px 8% ;">
        <h4><b>WELCOME TO SOFTWARE ENGINEERING</b> </h4>
        <br>
        <p style="width: 65%">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi at illo itaque voluptates, alias obcaecati rerum, eveniet quidem, harum repudiandae amet et distinctio quas. Ipsam impedit voluptatum provident odit praesentium.</p>
        <p style="width: 65%">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi at illo itaque voluptates, alias obcaecati rerum, eveniet quidem, harum repudiandae amet et distinctio quas. Ipsam impedit voluptatum provident odit praesentium.</p>
        <p style="width: 65%">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi at illo itaque voluptates, alias obcaecati rerum, eveniet quidem, harum repudiandae amet et distinctio quas. Ipsam impedit voluptatum provident odit praesentium.</p>
    </div>
</section>

{{-- Documentation END --}}




{{-- Project start --}}

<section class="project" id="project">
    <div style="padding:  100px 8% ;">
        <h4><b>WELCOME TO SOFTWARE ENGINEERING</b> </h4>
        <br>
        <p style="width: 65%">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi at illo itaque voluptates, alias obcaecati rerum, eveniet quidem, harum repudiandae amet et distinctio quas. Ipsam impedit voluptatum provident odit praesentium.</p>
        <p style="width: 65%">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi at illo itaque voluptates, alias obcaecati rerum, eveniet quidem, harum repudiandae amet et distinctio quas. Ipsam impedit voluptatum provident odit praesentium.</p>
        <p style="width: 65%">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi at illo itaque voluptates, alias obcaecati rerum, eveniet quidem, harum repudiandae amet et distinctio quas. Ipsam impedit voluptatum provident odit praesentium.</p>
    </div>
</section>

{{-- Project END --}}




{{-- Contact start --}}

<section class="contact" id="contact">
    <div style="padding:  100px 8% ;">
        <h4><b>WELCOME TO SOFTWARE ENGINEERING</b> </h4>
        <br>
        <p style="width: 65%">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi at illo itaque voluptates, alias obcaecati rerum, eveniet quidem, harum repudiandae amet et distinctio quas. Ipsam impedit voluptatum provident odit praesentium.</p>
        <p style="width: 65%">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi at illo itaque voluptates, alias obcaecati rerum, eveniet quidem, harum repudiandae amet et distinctio quas. Ipsam impedit voluptatum provident odit praesentium.</p>
        <p style="width: 65%">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi at illo itaque voluptates, alias obcaecati rerum, eveniet quidem, harum repudiandae amet et distinctio quas. Ipsam impedit voluptatum provident odit praesentium.</p>
    </div>
</section>

<footer>
    
</footer>


{{-- Contact End --}}

@endsection