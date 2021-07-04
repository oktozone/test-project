<?php


namespace domain\Services\Customer;

use App\Models\Items\Item;
use Illuminate\Database\Eloquent\Collection;

/**
 * Item Service
 * 
 * php version 8
 *
 * @category Service
 * @author   Okto Zone <janithsandaruwan29@gmail.com>
 * 
 * */
class ItemService
{
    protected $item;

    public function __construct()
    {
        $this->item = new Item();
    }

    /**
     * Get item using ID
     *
     * @param  int $id
     * @return Item
     */
    function get(int $id): ?Item
    {
        return $this->item->find($id);
    }

    /**
     * Get all item 
     *
     * @return Collection
     */
    public function all(): ?Collection
    {
        return $this->item->all();
    }
    /**
     * Create item 
     *
     * @param  array $data
     * @return Item
     */
    public function create(array $data): Item
    {
        return $this->make($data);
    }
    /**
     * Make item 
     *
     * @param  array $data
     * @return Item
     */
    public function make(array $data): Item
    {
        return $this->item->create($data);
    }
    /**
     * Update item 
     *
     * @param  Item  $item
     * @param  array $data
     * @return void
     */
    public function update(Item $item, array $data): void
    {
        $item->update($this->edit($item, $data));
    }

    /**
     * Edit item 
     *
     * @param  Item  $item
     * @param  array $data
     * @return array
     */
    public function edit(Item $item, array $data): array
    {
        return array_merge($item->toArray(), $data);
    }

    /**
     * Delete item
     * 
     * @param  Item $item
     * @return void
     */
    public function delete(Item $item): void
    {
        $item->delete();
    }
    public function getByName(string $name)
    {
        return $this->item->getByName($name);
    }
}
