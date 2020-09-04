@extends('layouts.app')

@section('title', 'Добавить товар:')

@section('content')
<div class="row">
<div class="col-lg-6 mx-auto">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif

    <form method="POST" action="{{ route('goods.store') }}">
     @csrf
        <div class="form-group">
            <label for="good-name">Название</label>
            <input type="text" name="name" 
                   value="{{ old('name') }}" class="form-control" id="good-name">
        </div>
        <div class="form-group">
            <label for="good-company">Компания</label>
            <textarea name="company" class="form-control" id="good-company" rows="3">{{ old('description') }}</textarea>
        </div>
        <div class="form-group">
            <label for="good-price">Цена</label>
            <input type="text" name="price" 
                   value="{{ old('price') }}" class="form-control" id="good-price">
        </div>
        <button type="submit" class="btn btn-success">Добавить Товар</button>
    </form>
</div> 
</div>
@endsection