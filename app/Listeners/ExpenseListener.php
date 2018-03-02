<?php

namespace App\Listeners;

use App\Events\Expenses;
use App\Models\Enums\ExpenseType;
use App\Models\Expense;

class ExpenseListener
{
    /**
     * Return a list of additional expenses
     * @param Expenses $event
     * @return mixed
     */
    public function handle(Expenses $event)
    {
        $expenses = [];

        # This is an example of an expense to return
        # You have the pirep on $event->pirep, and any associated data
        /*$expenses[] = new Expense([
            'type' => ExpenseType::FLIGHT,
            'amount' => 15000  # $150
        ]);*/

        return $expenses;
    }
}
