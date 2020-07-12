@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Pertanyaan</div>

                <div class="card-body">
                    <form action="{{url('/pertanyaan')}}/{{$pertanyaan->id}}" method="post">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <input type="text" class="form-control" name="judulPertanyaan" value="{{$pertanyaan->judulPertanyaan}}">
                        </div>
                        <div class="form-group">
                            <textarea name="isiPertanyaan" id="isiPertanyaan" cols="30" rows="10" class="form-control">{{$pertanyaan->isiPertanyaan}}</textarea>
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
