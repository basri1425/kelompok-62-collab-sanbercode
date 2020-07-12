@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pertanyaan</div>

                <div class="card-body">
                    <form action="{{url('/pertanyaan')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="judulPertanyaan" placeholder="Judul Pertanyaan">
                        </div>
                        <div class="form-group">
                            <textarea name="isiPertanyaan" id="isiPertanyaan" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <select name="tags" class="form-control">
                                @foreach($tags as $tag)
                                    <option value="{{$tag->id}}">{{$tag->namaTag}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-blok">Tambahkan</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
