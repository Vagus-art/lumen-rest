<?php

namespace App\Interfaces\Services;

interface ExpensesServiceInterface
{
    public function getExpenses(string $search, string $order, int $category_id, int $offset);
    public function getExpenseCategories();
    public function deleteExpenseById(int $expense_id);
    public function postExpense(string $description, float $sum, int $category_id);
    public function updateExpense(string $description, float $sum, int $expense_id, int $category_id);
    public function postExpenseCategory(string $name);
    public function updateExpenseCategory(string $name, int $category_id);
    public function deleteExpenseCategoryById(int $category_id);
}
