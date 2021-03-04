@extends('layouts.main-layout')

@section('contenuto-pagina')

  <form class="" action="{{ route('dish-update', $dish -> id)}}" method="post">
    @csrf
    @method('post')

    <label for="name">Name</label>
    <input type="text" name="name" value="{{ $dish -> name}}" class="@error('name') is-invalid @enderror">
      @error('name')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
      @enderror
    <label for="ingredients">Ingredients</label>
    <input type="text" name="ingredients" value="{{ $dish -> ingredients}}" class="@error('ingredients') is-invalid @enderror">
      @error('ingredients')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
      @enderror
    <label for="price">Price</label>
    <input type="text" name="price" value="{{ $dish -> price}}" class="@error('price') is-invalid @enderror">
      @error('price')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
      @enderror
    <label for="visible">Visible</label>

    <input  checked  type="radio" name="visible"
      @if ($dish -> visible == 1)
       checked
     @endif value="1">
    <input type="radio" name="visible"
     @if ($dish -> visible == 0)
         checked
     @endif value="0">

    <input type="submit" name="" value="salva">

  </form>

@endsection
