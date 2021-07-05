<x-app-layout>
    <x-slot name="title">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Item</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                            <li class="breadcrumb-item active">Item</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
    </x-slot>
    <x-slot name="content">
        <div class="row">
            <div class="col-8">
                <form>
                    <div class="form-group">
                        <label for="inp_name">Item Name</label>
                        <input type="text" class="form-control" id="inp_name" name="name" placeholder="Enter item name">
                    </div>
                    <div class="form-group">
                        <label for="inp_price">Item Price</label>
                        <input type="number" class="form-control" id="inp_price" name="price"
                            placeholder="Enter item price">
                    </div>
                    <div class="form-group">
                        <label for="inp_description">Item Description</label>
                        <textarea class="form-control" id="inp_description" rows="3" name="description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </x-slot>
</x-app-layout>
