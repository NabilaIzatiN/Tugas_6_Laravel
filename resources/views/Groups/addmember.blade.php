@extends('layouts.app')

@section('title','Groups')

@section('content')
<form action="/groups/addmember/{{$group->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nama Teman</label>
      <select class="form-select" Nabi-label="Default select example" name="friend_id">
        <option selected>Pilih Teman Untuk Dimasukkan ke Groups</option>
        @foreach ($friend as $f)
        @php
        $cek = Member_groups::where('friends_id', $f->id)
        ->where('groups_id', $group->id)
        ->where('status', 1)
        ->first();
    @endphp
    @if ($cek == NULL)
    <tr>
        <td>

            {{$cek}}
        </td>
        <td>{{$f->nama}}</td>
        <td><div class="form-check">
            <input class="form-check-input" type="checkbox" name="member{{$f->id}}" value="{{$f->id}}" id="{{$f->nama}}">
            <label class="form-check-label" for="{{$f->nama}}">
                Pilih
            </label>
        </div></td>
    </tr>
    @endif
    @endforeach
        <option value="{{$f->id}}">{{$f->nama}}</option>
        @endforeach

      </select>
      </div>

    <button type="submit" class="btn btn-primary">Tambah ke Group</button>
  </form>
@endsection
