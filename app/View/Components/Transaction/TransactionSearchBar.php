<?php

namespace App\View\Components\Transaction;

use Illuminate\View\Component;

class TransactionSearchBar extends Component
{
    /**
     * The name of component's data
     *
     * @var mixed
     */
    public $route;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route)
    {
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.transaction.transaction-search-bar');
    }
}
