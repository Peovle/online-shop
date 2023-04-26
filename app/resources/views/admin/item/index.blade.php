@extends('layouts.admin')

@section('title', __('-items-panel'))

@section('content')
    <div>
        <div class="row m-0 my-3 gap-x-10 gap-y-10">
            @forelse($items as $item)
                <div class="col-lg-4 col-md-12 col-sm-12 m-auto shadow">
                    <div class="card bg-dark text-white">
                        <div class="card-body">
                            <h5 class="h4 card-title">
                                <a href="{{ route('item.show', $item->id) }}">
                                    {{ $item->name }}
                                </a>
                            </h5>
                            <div class="card-text">
                                By: {{ $item->brand->name }}<br />
                                Left: {{ $item->number }}
                            </div>
                        </div>
                        <div class="flex flex-wrap justify-evenly p-3">
                            @if(!$item->isSpecial())
                                <form action="{{ route('special.store') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="item_id" value="{{ $item->id }}" />
                                    <button type="submit" class="btn btn-success">
                                        Make Special
                                    </button>
                                </form>
                            @endif
                            <a href="{{ route('item.edit', $item->id) }}" class="btn btn-primary">
                                Edit
                            </a>
                                <form action="{{ route('item.destroy', $item->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">
                                        Delete
                                    </button>
                                </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <span class="bg-danger text-white">
                        Empty
                    </span>
                </div>
            @endforelse
        </div>
        <div class="text-center">
            <a href="{{ route('item.create') }}" class="btn btn-dark m-auto">
                Create a new <strong>item</strong> +
            </a>
        </div>
        <div class="mt-5">
            {{ $items->links() }}
        </div>
    </div>
@stop

