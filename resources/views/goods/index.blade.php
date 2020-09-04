@extends('layouts.app')

@section('title', 'Товары:')

@section('content')
    <a href="{{ route('goods.create') }}" class="btn btn-success">Создать товар</a>


	 @if(session()->get('success'))
	    <div class="alert alert-success mt-3">
	      {{ session()->get('success') }}  
	    </div>
	@endif



	<table class="table table-striped mt-3">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Название</th>
	      <th scope="col">Компания</th>
	      <th scope="col">Цена</th>
	      <th></th>
	    </tr>
	  </thead>
	  <tbody>
	   @foreach($goods as $good)
	    <tr>
	      <th scope="row">{{ $good->id }}</th>
	      <td>{{ $good->name }}</td>
	      <td>{{ $good->company }}</td>
	      <td>{{ $good->price }}$</td>
	      <td class="table-buttons">
	        <form method="POST" action="{{ route('goods.destroy', $good) }}">
	         @csrf
	         @method('DELETE')
	            <button type="submit" class="btn btn-danger">
	              <i class="fa fa-trash"></i>
	            </button>
	        </form>
	      </td>
	    </tr>
	  @endforeach
	  </tbody>
	</table>
@endsection

