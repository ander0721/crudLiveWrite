
<div>

    @if ( count($errors) > 0 )
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
    @endif

    @if ($updateMode)
        @include('livewire.products.update')
    @else
        @include('livewire.products.create')
    @endif

    <hr class="primary">


    <table class="table table-hover mt-3">

    
        <thead class="table">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">name</th>
                <th scope="col">description</th>
                <th scope="col"> acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <th>{{ $product->id }}</th>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>
                        <button wire:click="edit({{ $product->id }})"
                                class="btn btn-primary btn-sm"><i class='fas fa-edit'></i></button>
                        <button wire:click="destroy({{ $product->id }})"
                                class="btn btn-primary btn-sm"><i class='fas fa-trash'></i></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $products->links() }}

</div>

