<?php

namespace App\Interfaces\Repositories;

interface TransactionsRepositoryInterface
{
    public function getTransactions(int $offset,string $search,string $role,string $order);
    public function getTransactionsMinified();
    public function searchTransactions(string $search);
    public function getTransactionById(int $id);
    public function deleteTransactionById(int $id);
    public function postTransaction(string $name, string $phone, string $role, float $money, string $address);
    public function updateTransaction(string $name,string $phone,string $address,float $money,int $id);
}