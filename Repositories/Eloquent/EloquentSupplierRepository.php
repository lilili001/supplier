<?php

namespace Modules\Supplier\Repositories\Eloquent;

use Modules\Supplier\Repositories\SupplierRepository;
use Modules\Core\Repositories\Eloquent\EloquentBaseRepository;

class EloquentSupplierRepository extends EloquentBaseRepository implements SupplierRepository
{
    public function create($data)
    {
        $this->model->create($data);
    }

    public function bulkdelete($data)
    {
        $this->model->destroy($data);
    }
}
